require 'mail'
# Set up SMTP settings
Mail.defaults do
  delivery_method :smtp, {
    address: 'smtp.gmail.com',
    port: 587,
    user_name: 'bagadighanshyam@gmail.com',
    password: 'sfsw nnli sogv gdsf',
    authentication: :login,
    enable_starttls_auto: true
  }
end
# Define email message
message = Mail.new do
  from 'bagadighanshyam@gmail.com'
  to 'ghanshyam.bagadi21@pccoepune.org'
  subject 'Hello from Piyush!'
  body 'This is a test email sent from Ruby.'
end
# Send email
message.deliver!
