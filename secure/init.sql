-- TODO: Put ALL SQL in between `BEGIN TRANSACTION` and `COMMIT`
BEGIN TRANSACTION;

-- bikes table
CREATE TABLE `bikes` (
    `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    `category` NOT NULL,
    `type` NOT NULL,
    `name` NOT NULL UNIQUE,
    `price` INTEGER NOT NULL,
    `description` TEXT,
    `image_path` TEXT NOT NULL,
    `source` TEXT NOT NULL
);

-- reviews table
CREATE TABLE `reviews` (
    `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    `session` INTEGER,
    `bike_id` INTEGER NOT NULL,
    `customer_name` TEXT,
    `content` TEXT NOT NULL,
    `helpfulness` INTEGER NOT NULL
);

-- upvotes table
CREATE TABLE `upvotes` (
    `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    `review_id` INTEGER NOT NULL,
    `session` INTEGER NOT NULL
);

-- sessions table
CREATE TABLE `sessions`(
    `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    `session` INTEGER NOT NULL
);

-- wishlist table
CREATE TABLE `wishlist` (
    `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    `session_id` INTEGER NOT NULL,
    `bike_id` INTEGER NOT NULL
);

-- TODO: initial seed data

-- bikes table seed data

    -- `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    -- `category` NOT NULL,
    -- `type` NOT NULL,
    -- `name` NOT NULL UNIQUE,
    -- `price` INTEGER NOT NULL,
    -- `description` TEXT,
    -- `image_path` TEXT NOT NULL,
    -- `source` TEXT NOT NULL

INSERT INTO `bikes` VALUES (1, "Commuter", "Gravel Bike", "Motobecane Elite Trail", 2150,
"Faster than a Hybrid or Comfort bike, more durable than a Road Bike! What is it? It's an Adventure Hybrid Bike!! These are like road bikes with trail capable tires, flat bars and high-rise stems. More comfort and control than a regular road bike. Greater capability than a hybrid bike with wider tires and performance geometry. Lighter than comparably priced Mountain Bikes. Adventure Hybrids tackle virtually anything on a bike path, dirt road or groomed trail system. The Motobecane Elite Trail comforts you with the superior ride of a precision engineered 6061 Alloy Aluminum frame and Lock Out Front Suspension Fork and durable, quality Shimano, Suntour and SRAM shifting components. The Elite Trail improves on the Elite Sport with even smoother riding, shifting, Powerful Disc Brakes and advanced Lockout forks!",
"images/bikes/01.png",
"http://www.bikesdirect.com/products/motobecane/elite_trail.htm");

INSERT INTO `bikes` VALUES (2, "Commuter", "Step Thru Bike", "Gravity X-Rod 8", 2250,
"Introducing the Gravity X-Rod Series: Most bikes function great for one or two purposes; Gravity X-Rod models function for many more uses than typical bikes. X-Rod fusion of motorcycle looks and hybrid /comfort /cruiser /trail /commuter design makes each X-Rod a Super Sport Utility Vehicle. At home on streets and trails; take it to the beach or the woods; quick fitness rides; or commute in cities; add racks on front or rear; mount computer, lights, or phone on crossX handlebar. WTB 27.5x2.4 Riddler tires roll out fast but resist sinking in sand or snow or mud. Everyone who rides an X-Rod is amazed and happy!",
"images/bikes/02.png",
"http://www.bikesdirect.com/products/gravity/xrod-super-hybrid-bikes/xrod-8-speed-bikes.htm");

INSERT INTO `bikes` VALUES (3, "Commuter", "Mountain Bike", "Motobecane 400 HT", 2100,
"High end performance without breaking the bank.  The awesome parts spec includes a Longer travel Suntour 100mm fork with adjustable pre-load, competitive race quality 24 Speed Shimano parts and powerful Tektro disc brakes.",
"images/bikes/03.png",
"http://www.bikesdirect.com/products/motobecane/4ht_new_xii.htm");

INSERT INTO `bikes` VALUES (4, "Cargo", "Compact Bike", "Boda Boda", 3299,
"The Boda Boda is a hip, urban cargo bike capable of hauling heavy cargo while keeping that comfy cruiser feel with nimble steering. The small compact frame offers versatility to your daily transportation, easily fitting on bus racks, storage sheds and bike lockers. The Boda Boda is ideal for urban commuters, small business owners and parents alike.",
"images/bikes/04.png",
"https://yubabikes.com/cargobikestore/boda-boda");

INSERT INTO `bikes` VALUES (5, "Cargo", "Long Tail Bike", "Mundo LUX", 3800,
"The Mundo LUX is our super sturdy minivan on two wheels. Frame and fork are forged from chromoly steel, which keeps the bike solid as ever but shaves off five pounds from the finished weight. Reinforced 1.5 inch head tube adds confidence to the ride and hydraulic brakes to allow you to stop on a dime, no matter how much cargo you’re carrying.",
"images/bikes/05.png",
"https://yubabikes.com/cargobikestore/mundo-lux");

INSERT INTO `bikes` VALUES (6, "Cargo", "Long Tail Bike", "Big Dummy", 3950,
"Since its introduction in 2008, many a family have ditched one or both of their cars thanks to Big Dummy. We’ve also seen many entrepreneurs and small business owners minimize their carbon footprint and incorporate Big Dummy into their business model. Big Dummy is the ultimate grocery getter, the modern day mini-van, the company car, and a human-powered car replacement. It’s all those things and more in that there’s no limit to what it can haul — as long as it falls within the 400-pound weight limit.",
"images/bikes/06.png",
"https://surlybikes.com/bikes/big_dummy ");

INSERT INTO `bikes` VALUES (7, "Specialty", "Fat Bike", "Bullseye MonsterFIVE", 2500,
"FAT BIKES! Ingeniously simple concept. Giant tires = more control in loose conditions. Super wide tires “float” over snow and sand…the fastest bikes you’ll ever ride on mud, bogs, deep sand and snow. As a bonus, they’re great convo makers and super smile-generators. Check the large holes in the rim. Most fat bike rims today are single-wall, one layer of material in the rim. With the cutout single wall rims, the one cool side effect is that you can see the rim tape that bulges out due to the pressure in the tube. Awesome fun!",
"images/bikes/07.png",
"http://www.bikesdirect.com/products/gravity/fat-bikes/fat-bikes-bullseye-monster-five-inch.htm");

INSERT INTO `bikes` VALUES (8, "Specialty", "All Terrain Bike", "Salsa Blackborow", 4900,
"With huge carrying capacity via an abundant frame, fork braze-ons and space for 4 full-size panniers, the Salsa Blackborow fat bike makes those 'it sure would be awesome to' expeditions feasible.",
"images/bikes/08.png",
"https://www.rei.com/product/136724/salsa-blackborow-fat-bike?CAWELAID=120217890005218638&CAGPSPN=pla&CAAGID=15877514320&CATCI=pla-487831906303&cm_mmc=PLA_Google%7C404_1050505753%7C1367240002%7Cnone%7C3ad61969-bcc7-441b-89f8-7b24e6e1696c%7Cpla-487831906303&lsft=cm_mmc:PLA_Google_LIA%7C404_1050505753%7C1367240002%7Cnone%7C3ad61969-bcc7-441b-89f8-7b24e6e1696c&kclid=3ad61969-bcc7-441b-89f8-7b24e6e1696c&gclid=Cj0KCQjw2IrmBRCJARIsAJZDdxBrsPZ5rdqq2f7y0bpahimuRunLIlZEZ3JQLyBRl1QgmQRJZRGYOqkaAtEBEALw_wcB");

INSERT INTO `bikes` VALUES (9, "Specialty", "Touring Bike", "Disc Trucker", 3350,
"Disc Trucker enjoys the same reputation as Long Haul Trucker; it’s one of the best riding and most value-packed touring bikes out there. Sometimes, however, a combination of load, climate, and terrain demands a bit more braking performance than a standard rim-brake LHT can provide. That’s where the Disc Trucker comes in. Disc Trucker is a Long Haul Trucker specifically designed for the unique forces discs impose. We’ve made sure it can run discs, racks, and fenders with no jury rigging, a somewhat unique feature we’ve just now decided to call “simultaneous compatability.”",
"images/bikes/09.png",
"https://surlybikes.com/bikes/disc_trucker");

-- reviews table

-- reviews table seed data

    -- `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    -- `session` INTEGER,
    -- `bike_id` INTEGER NOT NULL,
    -- `customer_name` TEXT,
    -- `content` TEXT NOT NULL,
    -- `helpfulness` INTEGER NOT NULL

INSERT INTO `reviews` VALUES (1, 0, 1, "Abigail Zhong", "This is my favorite bike currently. It rides really smooth and the wheel have great traction!", 7);
INSERT INTO `reviews` VALUES (2, 0, 2, "Pippen Wu", "This comfort bike is the perfect bike for college students. Great for roads and commuting to classes.", 8);
INSERT INTO `reviews` VALUES (3, 0, 2, "S Valoy", "This is the best step through bike I have tried. Highly recommend.", 0);
INSERT INTO `reviews` VALUES (4, 0, 3, "Yejeong Choi", "This bike is on the lower end, but it is suitable for everyday use. I wouldn't count on it to tackle rough terrain, but it works just fine on the streets.", 6);
INSERT INTO `reviews` VALUES (5, 0, 4, "Samantha Chu", "I use this bike all the time when grocery shopping! It can carry 50 lbs worth of stuff easily.", 5);


COMMIT;
