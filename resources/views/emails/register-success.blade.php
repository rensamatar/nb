<p>Hello, {!! $user->getFullName() !!},</p>
<p>Welcome to Nabun Upgrade International.Co.,Ltd. Please check the information below to login your account:</p>
<p>Username : {!!$user->email !!}</p>
<p>Password : pasword that you registered.</p>
<p>URL: {!! url() . '/auth/signin' !!}</p>
<p>Best regards,</p>
