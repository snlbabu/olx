<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = [
['category' => 'All categories ' , 'subcategory' => 'All categories ',],
['category' => 'Bikes ' , 'subcategory' => 'All in Bikes ',],
['category' => 'Bikes ' , 'subcategory' => 'Motorcycles ',],
['category' => 'Bikes ' , 'subcategory' => 'Scooters ',],
['category' => 'Bikes ' , 'subcategory' => 'Bicycles ',],
['category' => 'Bikes ' , 'subcategory' => 'Spare Parts ',],
['category' => 'Books, Sports & Hobbies' , 'subcategory' => 'All in Books, Sports &amp;',],
['category' => 'Books, Sports & Hobbies' , 'subcategory' => 'Books ',],
['category' => 'Books, Sports & Hobbies' , 'subcategory' => 'Musical Instruments ',],
['category' => 'Books, Sports & Hobbies' , 'subcategory' => 'Sports Equipment ',],
['category' => 'Books, Sports & Hobbies' , 'subcategory' => 'Gym & Fitness ',],
['category' => 'Books, Sports & Hobbies' , 'subcategory' => 'Other Hobbies ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'All in Electronics & Appliances',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Computers & Laptops ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'TVs,  Video - Audio data',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Hard Disks, Printers & Monitors',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'ACs ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Washing Machines ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Fridges ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Computer Accessories ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Cameras & Lenses ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Kitchen & Other Appliances data',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Games & Entertainment ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Mobiles ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'All in Mobiles ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Mobile Phones ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Tablets ',],
['category' => 'Electronics & Appliances ' , 'subcategory' => 'Accessories ',],
['category' => 'Fashion ' , 'subcategory' => 'All in Fashion ',],
['category' => 'Fashion ' , 'subcategory' => 'Men ',],
['category' => 'Fashion ' , 'subcategory' => 'Women ',],
['category' => 'Fashion ' , 'subcategory' => 'Kids ',],
['category' => 'Furniture ' , 'subcategory' => 'All in Furniture ',],
['category' => 'Furniture ' , 'subcategory' => 'Sofa & Dining ',],
['category' => 'Furniture ' , 'subcategory' => 'Beds & Wardrobes ',],
['category' => 'Furniture ' , 'subcategory' => 'Home Decor & Garden data',],
['category' => 'Furniture ' , 'subcategory' => 'Other Household Items ',],
['category' => 'Furniture ' , 'subcategory' => 'Kids Furniture ',],
['category' => 'Jobs ' , 'subcategory' => 'All in Jobs ',],
['category' => 'Jobs ' , 'subcategory' => 'Data entry & Back office',],
['category' => 'Jobs ' , 'subcategory' => 'BPO & Telecaller ',],
['category' => 'Jobs ' , 'subcategory' => 'Operator & Technician ',],
['category' => 'Jobs ' , 'subcategory' => 'Sales & Marketing ',],
['category' => 'Jobs ' , 'subcategory' => 'Cook ',],
['category' => 'Jobs ' , 'subcategory' => 'Driver ',],
['category' => 'Jobs ' , 'subcategory' => 'Hotel & Travel Executive data',],
['category' => 'Jobs ' , 'subcategory' => 'IT Engineer & Developer data',],
['category' => 'Jobs ' , 'subcategory' => 'Designer ',],
['category' => 'Jobs ' , 'subcategory' => 'Office Assistant ',],
['category' => 'Jobs ' , 'subcategory' => 'Receptionist & Front office data',],
['category' => 'Jobs ' , 'subcategory' => 'Delivery & Collection ',],
['category' => 'Jobs ' , 'subcategory' => 'Accountant ',],
['category' => 'Jobs ' , 'subcategory' => 'Teacher ',],
['category' => 'Jobs ' , 'subcategory' => 'Others ',],
['category' => 'Pets ' , 'subcategory' => 'All in Pets ',],
['category' => 'Pets ' , 'subcategory' => 'Fishes & Aquarium ',],
['category' => 'Pets ' , 'subcategory' => 'Dogs ',],
['category' => 'Pets ' , 'subcategory' => 'Other Pets ',],
['category' => 'Pets ' , 'subcategory' => 'Pet Food & Accessories data',],
['category' => 'Properties ' , 'subcategory' => 'All in Properties ',],
['category' => 'Properties ' , 'subcategory' => 'For Sale ',],
['category' => 'Properties ' , 'subcategory' => 'For Rent ',],
['category' => 'Properties ' , 'subcategory' => 'New Projects ',],
['category' => 'Services ' , 'subcategory' => 'All in Services ',],
['category' => 'Services ' , 'subcategory' => 'Drivers & Taxi ',],
['category' => 'Services ' , 'subcategory' => 'Education & Classes ',],
['category' => 'Services ' , 'subcategory' => 'Electronics & Computer ',],
['category' => 'Services ' , 'subcategory' => 'Health & Beauty ',],
['category' => 'Services ' , 'subcategory' => 'Other Services ',],
['category' => 'Used Cars ' , 'subcategory' => 'All in Used Cars ',],
['category' => 'Used Cars ' , 'subcategory' => 'Cars ',],
['category' => 'Used Cars ' , 'subcategory' => 'Commercial Vehicles ',],
['category' => 'Used Cars ' , 'subcategory' => 'Other Vehicles ',],
['category' => 'Used Cars ' , 'subcategory' => 'Spare Parts ',],
    	];
        DB::table('categories')->truncate();
    	foreach ($categories as $value) {
    		DB::table('categories')->insert([
	            'category' => $value['category'],
	            'subcategory' => $value['subcategory'],
	        ]);
    	}
    }
}
