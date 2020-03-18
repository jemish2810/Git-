seed  data :: php artisan db:seed

$user = App\Customer::find(114);    
$user->delete();