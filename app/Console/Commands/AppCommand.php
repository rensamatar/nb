<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

class AppCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'app:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Initialization our project.';

	 /**
     * Holds the user information.
     *
     * @var array
     */
	 protected $userData = array(
	 	'firstname' => null,
	 	'lastname'  => null,
	 	'email'     => null,
	 	'password'  => null
	 	);

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this->comment('=======================================================================');
		$this->info(' Step: 1');
		$this->comment('=======================================================================');
		$this->comment('');
		$this->info(' Please follow the following instructions to create your default admin.');
		$this->comment('');
		$this->comment('-----------------------------------------------------------------------');
		$this->comment('');

        // Let's ask the user some questions, shall we?
		$this->askUserFirstName();
		$this->askUserLastName();
		$this->askUserEmail();
		$this->askUserPassword();

		$this->comment('');
		$this->comment('');
		$this->comment('=======================================================================');
		$this->info(' Step: 2');
		$this->comment('=======================================================================');
		$this->comment('');
		$this->info(' Preparing your Application');
		$this->comment('');
		$this->comment('-----------------------------------------------------------------------');
		$this->comment('');

        // Generate the Application Encryption key
		$this->call('key:generate');

        // Create the migrations table
		$this->call('migrate:install');

        // Run the Migrations
		$this->call('migrate');

        // Create the default user and default groups.
		$this->entryRunner();

        // Seed the tables with dummy data
        //$this->call('db:seed');
	}

	 /**
     * Asks the user for the first name.
     * @return void
     * @todo   Use the Laravel Validator
     */
	 protected function askUserFirstName()
	 {
	 	do {
            // Ask the user to input the first name
	 		$firstname = $this->ask('Please enter your first name: ');

            // Check if the first name is valid
	 		if ($firstname == '') 
	 		{
                // Return an error message
	 			$this->error('Your first name is invalid. Please try again.');
	 		}

            // Store the user first name
	 		$this->userData['firstname'] = $firstname;
	 	} while ( ! $firstname);
	 }

    /**
     * Asks the user for the last name.
     * @return void
     * @todo   Use the Laravel Validator
     */
    protected function askUserLastName()
    {
    	do {
            // Ask the user to input the last name
    		$lastname = $this->ask('Please enter your last name: ');

            // Check if the last name is valid.
    		if ($lastname == '') 
    		{
                // Return an error message
    			$this->error('Your last name is invalid. Please try again.');
    		}

            // Store the user last name
    		$this->userData['lastname'] = $lastname;
    	} while ( ! $lastname);
    }

    /**
     * Asks the user for the user email address.
     *
     * @return void
     * @todo   Use the Laravel Validator
     */
    protected function askUserEmail()
    {
    	do {
            // Ask the user to input the email address
    		$email = $this->ask('Please enter your user email: ');

            // Check if email is valid
    		if ($email == '') 
    		{
                // Return an error message
    			$this->error('Email is invalid. Please try again.');
    		}

            // Store the email address
    		$this->userData['email']    = $email;
    		$this->userData['gravatar'] = $email;
    	} while ( ! $email);
    }

    /**
     * Asks the user for the user password.
     *
     * @return void
     * @todo   Use the Laravel Validator
     */
    protected function askUserPassword()
    {
    	do {
            // Ask the user to input the user password
    		$password = $this->ask('Please enter your user password: ');

            // Check if email is valid
    		if ($password == '') 
    		{
                // Return an error message
    			$this->error('Password is invalid. Please try again.');
    		}

            // Store the password
    		$this->userData['password'] = $password;
    	} while ( ! $password);
    }
    
    /**
     * Runs all the necessary commands.
     * @return void
     */
    protected function entryRunner()
    {
        // Create the default groups
    	$this->createDefaultRoleAndPermission();
    }

	 /**
     * Creates the default groups.
     * @return void
     */
	 protected function createDefaultRoleAndPermission()
	 {
	 	$admin = new Role();
	 	$admin->name         = 'admin';
		$admin->display_name = 'Admin';
		$admin->description  = 'User is the admin of a given project';
		$admin->save();

		// Show the success message.
		$this->comment('');
		$this->info('Admin group created successfully.');

		$staff = new Role();
		$staff->name         = 'staff';
		$staff->display_name = 'Staff';
		$staff->description  = 'User is the staff of a given project';
		$staff->save();

		// Show the success message.
		$this->info('Staff group created successfully.');

		$createPost = new Permission();
		$createPost->name         = 'create-post';
		$createPost->display_name = 'Create Posts';
		$createPost->description  = 'Create new posts';
		$createPost->save();

		// Show the success message.
		$this->info('Permission create-post created successfully.');

		$editUser = new Permission();
		$editUser->name         = 'edit-user';
		$editUser->display_name = 'Edit Users';
		$editUser->description  = 'edit existing users';
		$editUser->save();

		// Show the success message.
		$this->info('Permission edit-user created successfully.');

		// Create the user and associates the admin group to that user.
		$user = new User();
    	$user->firstname = $this->userData['firstname'];
    	$user->lastname  = $this->userData['lastname'];
    	$user->email     = $this->userData['email'];
    	$user->gravatar  = $this->userData['email'];
    	$user->password  = bcrypt($this->userData['password']);
    	$user->activated = 1;
    	$user->activation_code = str_random(20) . '+' .$this->userData['email'];
    	$user->save();

    	// Create Nabun admin user
		$nb = new User();
    	$nb->firstname = 'Saiphon';
    	$nb->lastname  = 'Jantasaeng';
    	$nb->email     = 'sjta.nabun@gmail.com';
    	$nb->gravatar  = 'sjta.nabun@gmail.com';
    	$nb->password  = bcrypt('nabunupgrade');
    	$nb->activated = 1;
    	$nb->activation_code = str_random(20) . '+' .'sjta.nabun@gmail.com';
    	$nb->save();

    	// Show the success message.
		$this->info('Create User successfully.');

		$user->roles()->attach($admin->id);
		$nb->roles()->attach($admin->id);
		$admin->perms()->sync(array($createPost->id, $editUser->id));
		$staff->perms()->sync(array($createPost->id));

		// Show the success message.
		$this->info('Attach permission successfully.');

	}

}
