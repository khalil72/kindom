@include('emails.user.layout.email_header', array('title'=>'Forgot your password ?'))
<p class="text-capitalize"><b>Dear User,</b></p>
<p>That's okay, it happens! Your Auto-generated Password is here. You may change it after login to your account.</p>
<b>Login Details:</b>
<br/>
Email: {{ $data['email'] ?? 'N/A' }}
<br/>
Password: {{ $data['password'] ?? 'N/A' }}
<br/>
@include('emails.user.layout.email_footer')
