<?php
class Product
{
    private $title;
    private $image;
    private $price;

    public function __construct($title, $image, $price)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}

class Store
{
    private $name;
    private $image;
    private $description;
    private $products = [];

    public function __construct($name, $image, $description)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }
}

$store = new Store("Nisr Store", "https://cdn.vectorstock.com/i/1000v/81/26/letter-s-logo-sports-shoes-shop-laces-sneakers-vector-39478126.jpg", "Welcome to online Nisr Store. We here sell the best types of sports shoes with the best prices");

$store->addProduct(new Product("NIKE Air Force 1", "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/33533fe2-1157-4001-896e-1803b30659c8/AIR+FORCE+1+%2707.png", 150));
$store->addProduct(new Product("NIKE Air Max 97", "https://di2ponv0v5otw.cloudfront.net/posts/2023/09/06/64f8c0e88fa2079d39d07f6b/m_wp_64f8c0fadff94d13532bb6b0.webp", 230));
$store->addProduct(new Product("NIKE Air Jordan 1", "https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/31833ea1-eba0-4a38-8e10-cc9e8ab4ce15/AIR+JORDAN+1+LOW+SE.png", 300));
$store->addProduct(new Product("NIKE Air Jordan 4", "https://agavostore.com/wp-content/uploads/2023/06/Nike-Air-Jordan-4-Retro-Red-Thunder.jpg", 500));
$store->addProduct(new Product("NIKE AIR MAX 95 PREMIUM", "https://static.nike.com/a/images/t_prod_ss/w_480,c_limit,f_auto,q_auto/tqdtyihumkjh08fmb2bc/nike-air-max-95-premium-volt-volt-glow-black-release-date.jpg", 400));
$store->addProduct(new Product("adidas campus 00s", "https://assets.adidas.com/images/w_1880,f_auto,q_auto/4659ee058ba34bd2a5d0af500104c17d_9366/HQ8708_01_standard.jpg", 320));
$store->addProduct(new Product("adidas superstar", "https://assets.adidas.com/images/w_1880,f_auto,q_auto/7ed0855435194229a525aad6009a0497_9366/EG4958_01_standard.jpg", 470));
$store->addProduct(new Product("adidas Samba Og", "https://assets.adidas.com/images/w_1880,f_auto,q_auto/bdd9f8cd43664fffbd3da8bf01188fca_9366/B75807_07_standard.jpg", 560));
$store->addProduct(new Product("New balance 530", "https://www.tradeinn.com/f/13857/138574403/new-balance-530-trainers.webp", 480));
$store->addProduct(new Product("New balance 550", "https://cdn-images.farfetch-contents.com/17/08/95/92/17089592_34723812_600.jpg", 320));
$store->addProduct(new Product("PUMA Suede", "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_2000,h_2000/global/395205/02/sv01/fnd/DFA/fmt/png/%D8%AD%D8%B0%D8%A7%D8%A1-%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A-Suede-XL", 650));
$store->addProduct(new Product("PUMA Palermo", "https://i8.amplience.net/i/jpl/jd_396464-07_a?v=1", 330));