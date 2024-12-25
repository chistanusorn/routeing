<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ['id' => 1,'img'=>'/storage/product/อาเรีย.jpg' ,'name' => 'LNคุณอาเรียโต๊ะข้างๆพูดรัสเชียหวานใส่ซะหัวใจจะวาย',
        'description' => 'นิยายเลิฟคอมมันดี้ที่.......', 'price' => 320],

        ['id' => 2, 'img'=>'/storage/product/นางฟ้า.jpg', 'name' => 'LNขาดคุณนางฟ้าข้างห้องไปชีวิตนี้ผมคงอยู่ต่อไปไม่ได้อีกแล้ว',
        'description' => 'นิยายโรแมนติกคอมมันดี้', 'price' => 360],

        ['id' => 3, 'img'=>'/storage/product/องค์หญิง.jpg', 'name' => 'LNการปฏิวัติเวทมนตร์ขององค์หญิงเกิดใหม่กับยัยคุณหนูยอดอัจฉริยะ',
        'description' => 'นิยายแนวรักร่วมเพศที่พูดถึงองค์หญิงผู้รักเวทย์มนตร์มากกว่าใครๆแต่กลับใช้เวทย์มนตร์ไม่ได้', 'price' => 99999999],

        ['id' => 4, 'img'=>'/storage/product/วิคตอเรีย.jpg', 'name' => 'MGตำนานดาบและคฑาแห่งวิคตอเรีย',
        'description' => 'เรื่องราวก่อนที่ดาบและคฑาจะรวมเป็นหนึ่ง', 'price' => 95],

        ['id' => 5, 'img'=>'/storage/product/คุณหนู.jpg', 'name' => 'LNผมกลายเป็นผู้ดูแลแบบลับ ๆ ของคุณหนู (ที่ไม่มีความสามารถในการดำรงชีพ) ที่แสนเพียบพร้อมของโรงเรียนมัธยมอันทรงเกียรติที่เต็มไปด้วยดอกฟ้า',
        'description' => 'นิยายเลิฟคอมมาดี้ของคุณหนูขี้อ้อนที่แสนจะเกียจคร้าน!!', 'price' => 430],

        ['id' => 6, 'img'=>'/storage/product/ไอดอล.jpg', 'name' => 'LNผมที่ไม่อยากทำงานไปชั่วชีวิต ได้สนิทสนมกับไอดอลชื่อดังที่เป็นเพื่อนร่วมชั้น ',
        'description' => 'นักเรียนมัธยมปลายผู้ตั้งเป้าหมายเป็นพ่อบ้าน ชิโด รินทาโร่ เรียนห้องเดียวกับโอโตซากิ เรย์ซึ่งเป็นเซ็นเตอร์ของไอดอลยอดนิยม ‘มิลย์เฟยสตาร์’ แม้ที่ผ่านมาทั้งสองคนจะไม่เคยเกี่ยวข้องกันมาก่อน แต่อยู่มาวันหนึ่งหลังจากรินทาโร่ทำอาหารให้กับเรย์ที่เป็นลมเพราะท้องว่าง...
                          จะจ่ายเงินให้เดือนละสามแสน เพราะงั้นขอมากินทุกวันเลยได้ไหม?', 'price' =>320],

        ['id' => 7, 'img'=>'/storage/product/ออนไลน์.jpg', 'name' => 'LNไอดอลสาวสุดปังกับผมแต่งงานกันในเกมออนไลน์ ',
        'description' => 'เลิฟคอเมดี้วัยรุ่นชวนหน้ามืดตามัว ที่ตีแผ่การใช้เวลากับ “ภรรยา” สุดคูลแต่คลั่งรัก!', 'price' => 250],

        ['id' => 8, 'img'=>'/storage/product/สตรีศักดิ์สิทธิ์.jpg', 'name' => 'MGเพราะสมบูรณ์แบบจนไม่น่ารัก สตรีศักดิ์สิทธิ์จึงถูกถอนหมั้นและขายไปอาณาจักรข้างเคียง',
        'description' => 'ฟีเลียเกิดในตระกูลที่ให้กำเนิด “สตรีศักดิ์สิทธิ์” มารุ่นต่อรุ่น ทั้งยังมีความสามารถขนาดถูกขนานนามว่าเป็น “สตรีศักดิ์สิทธิ์ผู้เก่งกาจที่สุดในประวัติศาสตร์”
                        ทว่าเธอกลับถูกปฏิบัติเหมือนส่วนเกินที่ “ทำตัวไม่น่ารักและสมบูรณ์แบบเกินไป',   'price' => 105],

        ['id' => 9, 'img'=>'/storage/product/ด้ายแดง.jpg', 'name' => 'MGด้ายแดงผูกรักบ้านอามากามิ',
        'description' => 'สานสัมพันธ์กับมิโกะ ภายใต้ชายคาเดียวกัน เรื่องราวความรักกับปาฏิหาริย์ได้เปิดม่านขึ้นแล้ว!!', 'price' => 95],

        ['id' => 10, 'img'=>'/storage/product/เอลฟ์.jpg', 'name' => 'MGขอต้อนรับสู่ญี่ปุ่นนะ คุณเอลฟ์',
        'description' => 'ขณะเขากำลังผจญภัยกับเอลฟ์สาวที่สนิทกันในความฝัน
                            โชคไม่ดีที่ทั้งคู่โดนลมหายใจของอาร์คดรากอนเผาไปพร้อมกัน
                            เมื่อเขาตื่นจากความฝันกลับมายังห้องตัวเองอีกครั้ง', 'price' => 105]
        ];        

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

            if (!$product) {
                abort(404, 'Product not found');
            }
        return Inertia::render('Products/Show', ['product' => $product]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

