@include('emails.user.layout.email_header', array('title'=>'Sign up to the portal successfully!'))
<p class="text-capitalize"><b>Dear User,</b></p>
<p>
    Our cordial welcome goes to you! Thank you for trusting us and appreciating our Portal. <br>
    You have been signed up to our portal, and from now on you can surf our portal to explore a lot of interesting options with your account information as below:
</p>
<b>Login Details:</b>
<br/>
Email: {{ $data['email'] ?? 'N/A' }}
<br/>
Password: {{ $data['password'] ?? 'N/A' }}
<br/>
@include('emails.user.layout.email_footer')
