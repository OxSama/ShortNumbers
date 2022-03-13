<?php
include_once 'dbConnection.php';

function categorization(a,b,c,d,e)
{

if ( (a==b)&&(b==c)&&(c==d)&&(d==e))

{
	System.out.println ( " your number is platinum");
}

else if ( (b==(a+1))&&(c==(b+1))&&(d==(c+1))&&(e==(d+1))) {
	System.out.println( " your number is platinum");
}
else if ( ( (b==(a-1))&&(c==(b-1))&&(d==(c-1))&&(e==(d-1))) ) {
	System.out.println( " your number is platinum");
}
else if ( (b!=(a+1))&&(c==(b+1))&&(d==(c+1))&&(e==(d+1))) {
	System.out.println( " your number is golden");
}
else if ( (b==(a+1))&&(c==(b+1))&&(d==(c+1))&&(e!=(d+1))) {
	System.out.println( " your number is golden");
}
else if ( ( (b!=(a-1))&&(c==(b-1))&&(d==(c-1))&&(e==(d-1))) ) {
	System.out.println( " your number is golden");
}
else if ( ( (b ==(a-1))&&(c==(b-1))&&(d==(c-1))&&(e!=(d-1))) ) {
	System.out.println( " your number is golden");
}
else
counting(intArray );
}



?>