Required a Media table you can generate it with 

php artisan make:model Media -m

go to database/migration/create_media_table

$table->id();
$table->string('url');
$table->boolean('active')->default(0);
$table->timestamps();

<x-mof.open />
<x-mof.index />