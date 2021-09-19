$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['Message'];

if(empty($name) || empty($email) || empty($message))
{
    echo "PLEASE FILL ALL THE FIELDS"
}
else
{
    mail("shyampatel.55555@gmail.com", UNIVERSITY MESSAGE,$message ,"From :$name <$email>");
    echo"<script type='text/javascript'>alert('your message sent successfully')
    window.history.log(-1);
</script>
}