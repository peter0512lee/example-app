<?php

namespace Database\Seeders;

use App\Models\Collection;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Collection();
        $row->title = '親子步道';
        $row->subTitle = '老少咸宜，生活好去處';
        $row->bgColor = 'yellow';
        $row->iconImage = 'https://example.com/uploads/images/collection/0/icon.png';
        $row->save();
    }
}
