<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Http\Request;

class HomeController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
    	$cat = $this->getCategories();
    	return view('welcome')->with(['cat' => $cat]);
    }

    public function postAdForm(Request $request)
    {
        $cat = $this->getCategories();
        \Log::Info(str_replace('|and|', '&', $request->query('cat1')));
    	return view('adpostform')->with([
            'cat' => $cat, 
            'cat1' => str_replace('|and|', '&', $request->query('cat1')),
            'cat2' => str_replace('|and|', '&', $request->query('cat2')),
            'cat3' => str_replace('|and|', '&', $request->query('cat3')),
            'title' => str_replace('|and|', '&', $request->query('title')),
        ]);
    }

    private function getCategories()
    {
        return [
            'categories' => [
                'All categories',
                'Bikes',
                'Books, Sports & Hobbies',
                'Electronics & Appliances',
                'Mobiles',
                'Fashion',
                'Furniture',
                'Jobs',
                'Properties',
                'Pets',
                'Services',
                'Used Cars',
            ],
            'Bikes' => [
                'All in Bikes',
                'Motorcycles',
                'Scooters',
                'Bicycles',
                'Spare Parts',
            ],
            'Motorcycles' => [
                'Bajaj',
                'Hero Honda',
                'Yamaha',
                'Royal Enfield',
                'Honda',
                'Hero',
                'TVS',
                'Suzuki',
                'KTM',
                'Other Brands',
            ],
            'Scooters' => [
                'Honda',
                'TVS',
                'Hero',
                'Suzuki',
                'Bajaj',
                'Mahindra',
                'Other Brands',
            ],
            'Bicycles' => [
                'Hero',
                'Hercules',
                'Other Brands',
            ],
            'Books, Sports & Hobbies' => [
                'All in Books, Sports & Hobbies',
                'Books',
                'Musical Instruments',
                'Sports Equipment',
                'Gym & Fitness',
                'Other Hobbies',
            ],
            'Electronics & Appliances' => [
                'All in Electronics & Appliances',
                'Computers & Laptops',
                'TVs, Video - Audio data',
                'Hard Disks',
                'Printers & Monitors',
                'ACs',
                'Washing Machines',
                'Fridges',
                'Computer Accessories',
                'Cameras & Lenses',
                'Kitchen & Other Appliances data',
                'Games & Entertainment',
            ],
            'Mobiles' => [
                'All in Mobiles',
                'Mobile Phones',
                'Tablets',
                'Accessories',
            ],
            'Mobile Phones' => [
                'Samsung',
                'iPhone',
                'Micromax',
                'Nokia',
                'Sony',
                'Mi',
                'HTC',
                'Lenovo',
                'Gionee',
                'Motorola',
                'Oppo',
                'Vivo',
                'Intex',
                'Lava',
                'LG',
                'Asus',
                'BlackBerry',
                'Karbonn',
                'Other Mobiles',
            ],
            'Tablets' => [
                'Samsung',
                'iPads',
                'Other Tablets',
            ],
            'Accessories' => [
                'Mobile',
                'Tablets',
            ],
            'Fashion' => [
                'All in Fashion',
                'Men',
                'Women',
                'Kids',
            ],
            'Furniture' => [
                'All in Furniture',
                'Sofa & Dining',
                'Beds & Wardrobes',
                'Home Decor & Garden data',
                'Other Household Items',
                'Kids Furniture',
            ],
            'Jobs' => [
                'All in Jobs',
                'Data entry & Back office',
                'BPO & Telecaller',
                'Operator & Technician',
                'Sales & Marketing',
                'Cook',
                'Driver',
                'Hotel & Travel Executive data',
                'IT Engineer & Developer data',
                'Designer',
                'Office Assistant',
                'Receptionist & Front office data',
                'Delivery & Collection',
                'Accountant',
                'Teacher',
                'Others',
            ],
            'Properties' => [
                'All in Properties',
                'For Sale',
                'For Rent',
                'New Projects',
            ],
            'For Sale' => [
                'Apartments',
                'Houses & Villas',
                'Builder Floors',
                'Land & Plots',
                'Shops & Offices',
                'Farm Houses',
            ],
            'For Rent' => [
                'Apartments',
                'Houses & Villas',
                'Builder Floors',
                'PG & Roommates',
                'Land & Plots',
                'Shops & Offices',
                'Guest Houses',
            ],
            'New Projects' => [
                'Apartments',
                'Houses & Villas',
                'Builder Floors',
                'Land & Plots',
                'Shops & Offices',
                'Farm Houses',
            ],
            'Pets' => [
                'All in Pets',
                'Fishes & Aquarium',
                'Dogs',
                'Other Pets',
                'Pet Food & Accessories data',
            ],
            'Services' => [
                'All in Services',
                'Drivers & Taxi',
                'Education & Classes',
                'Electronics & Computer',
                'Health & Beauty',
                'Other Services',
            ],
            'Used Cars' => [
                'Cars',
                'Commercial Vehicles',
                'Other Vehicles',
                'Spare Parts',
            ],
            'Cars' => [
                'Maruti Suzuki',
                'Hyundai',
                'Tata',
                'Mahindra',
                'Toyota',
                'Honda',
                'Chevrolet',
                'Ford',
                'Skoda',
                'Volkswagen',
                'Fiat',
                'Nissan',
                'Renault',
                'Mitsubishi',
                'Mercedes-Benz',
                'Audi',
                'Mahindra Renault',
                'BMW',
                'Hindustan Motors',
                'Other Brands',
            ],
            'Hyundai' => [
                'Accent',
                'Elite I20',
                'Elantra',
                'Eon',
                'Getz Prime',
                'Getz',
                'Grand I 10',
                'Grand I10',
                'I10',
                'I20',
                'New Elantra',
                'Others',
                'Santa Fe',
                'Santro Xing',
                'Santro',
                'Sonata Embera',
                'Sonata Transform',
                'Sonata',
                'Terracan',
                'Tucson',
                'Verna',
                'Xcent',
            ],
        ];
    }
}























