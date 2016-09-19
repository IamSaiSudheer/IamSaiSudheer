<?php
$result = mail('sai.sudheer9@gmail.com', 'Test Mail', 'Submitted Successfully');

if($result) {
	echo 'Mail Sent';
} else {
	echo 'Mail Not Sent';
}
?>