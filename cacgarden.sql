-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 06, 2022 lúc 12:19 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cacgarden`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Cactus'),
(2, 'Succulent'),
(3, 'Supplies');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(10) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_gender` varchar(10) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_login` varchar(255) NOT NULL,
  `cus_password` varchar(255) NOT NULL,
  `cus_phone` varchar(10) NOT NULL,
  `cus_address` varchar(255) NOT NULL,
  `cus_postal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_gender`, `cus_email`, `cus_login`, `cus_password`, `cus_phone`, `cus_address`, `cus_postal`) VALUES
(1, 'Nguyen Hoang Chung', 'Male', 'chunghn2001@gmail.com', 'chunghn', 'chunghn', '0969483628', 'HoChiMinh City', '0'),
(2, 'Truong Thi Phuong Anh', 'Female', 'truongphuonganh15@gmail.com', 'anhptt', 'anhptt', '0909568471', 'HoChiMinh City', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_post` varchar(255) NOT NULL,
  `news_day` date NOT NULL,
  `news_image` tinytext NOT NULL,
  `news_content` text NOT NULL,
  `news_pre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_post`, `news_day`, `news_image`, `news_content`, `news_pre`) VALUES
(1, 'Greening the hill in Lam Dong ', 'Admin', '2022-03-15', 'assets/img/news/news1.jpg', 'In recent years, deforestation, illegal forest exploitation, encroachment on forest land for cultivation have taken place in many places. There are many old forests that have turned into bare hills. In order to green the bare land and bare hills, to thin out the lost forests, the youth union members of Da Rsal commune did not mind the difficulties of planting, taking care of and protecting forests. Typical in the youth afforestation movement in Da Rsal commune are members of the Youth Union of Village 4. In June 2010, the youth union members of the Youth Union together with their families stood out to receive more than 5ha of land area. bare hills for afforestation under Program 30a in the locality. According to Mr. Ro Ong Y Tuyen, Secretary of the Branch, 4-5 young people in the branch stood out to plant forests in the locality and then mobilized other brothers to join. This is also a youth project of Da Rsal Commune Youth Union registered with Dam Rong District Union.\n\nThe Youth Union of Village 4, Da Rsal Commune currently has nearly 20 youth union members, all of whom are children of local ethnic minorities. Their forefathers have lived closely with the forest for many generations, benefiting from the forest, but recently, due to immediate needs, many people have cut down forests and encroached on forest land for farming, so they have turned old forests into forests. bare patches of land, barren hills. Aware of the meaning of green forests, these young people stood out to plant, take care of and protect the forest. Not only planting forests, but these young people also propagate so that local people understand the meaning of forests. If there is no forest, the soil will be eroded, the fertility will be washed away, affecting the arable land and human habitat. Thanks to that, the afforestation movement was also developed among local people. Currently, nearly 50 households in Da Rsal commune have registered to plant more than 63 hectares of forest. They not only plant forests on forestry land, but also low-efficient maize and cassava fields have also been converted to afforestation. Mr. Phung Van The - Vice Chairman of Da Rsal Commune People Committee said: \"Currently, many of the plantation forests of local people have grown green. We continue to propagate and mobilize people to actively receive afforestation to green the bare land and bare hills in the locality. In addition, we also encourage people not to cut down forests, encroach on forest land, take care of and protect natural forests. We also propose to all levels and branches to create all conditions for people to have a stable life, participate in forest protection and development.\" Commenting on the youth afforestation movement in Da Rsal commune, Mr. Nguyen Sy Phu - Deputy Secretary of the Dam Rong District Union said: \"The afforestation movement of young people in Da Rsal commune is a very meaningful job. in youth activities, contributing to the implementation of the movement \"Youth volunteers for social security and environmental protection\". Joining hands, planting, caring and protecting forests is a good model for young people and needs to be replicated in local affiliated Youth Union establishments.\n\nWith the afforestation movement of youth unionists as well as local people, it is hoped that one day soon the planted forests will be green and bring a fresh environment to people.\n', 'With the afforestation movement of youth unionists as well as local people, it is hoped that one day soon the planted forests will be green and bring a fresh environment to people.'),
(2, 'New Arrival 03/2022', 'Admin', '2022-03-27', 'assets/img/news/news2.jpg', 'Echinopsis oxygona\n\nFlowers: white, pink, pale red to lavender\nBlooming season: late spring to all summer long.\nCultivation and Propagation: The Easter Lily cactus Echinopsis oxygona is extremely resistant to cultivation and easily reproduced by offshoots. The only thing that can kill this plant is cold. Nevertheless, it is appropriate to provide adequate growing conditions in order to obtain abundant blooms. It has very large fragrant nocturnal flowers and many plant lovers are willing to take care of it all year for one or a few magical nights with exotic charm.\nGrowth rate: It is a relatively rapidly growing species that will make large clumps given the best conditions.\nWatering: Needs moderate to copious waterings in summer (it is more demanding than other cactus), but do not overwater, keep dry in winter at a minimum temperature of 0°C.\nHardiness: Reputedly resistant to light frost if kept on the dry side prior to, and during, cold weather (hardy to -2 C ° C, or less for short periods). However, warmth throughout the year will increase the grower\'s success (5°-8° C during the rest season).\nExposition: The plant tolerates bright situations which encourages flowering and heavy spine production, but is likely to suffer from sun scorch or stunted growth if overexposed to direct sunlight during the hottest part of the day in summer. It grows well with filtered sunlight or afternoon shade.\n', 'Echinopsis oxygona Flowers: white, pink, pale red to lavender Blooming season: late spring to all summer long Cultivation and Propagation: The Easter Lily cactus Echinopsis oxygona is...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `pro_id` int(10) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` int(10) NOT NULL,
  `pro_image` tinytext NOT NULL,
  `pro_detail` text NOT NULL,
  `pro_discount` float NOT NULL,
  `cat_id` int(10) NOT NULL,
  `pro_count` varchar(5) NOT NULL,
  `pro_feature` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_image`, `pro_detail`, `pro_discount`, `cat_id`, `pro_count`, `pro_feature`) VALUES
(1, 'Rebutia donaldiana fiebrigii', 85000, 'assets/img/products/pro1.1.jpg', 'Rebutia fiebrigii is a small solitary or mound-forming cactus spreading out to 15 cm with white, silky, short spines and light green tubercles thickly covering the body. It is a free-flowering species with bright vermilion blooms, but quite variable.\r\nFlowers: Flowers produced halfway up the stems, curving upward, yellow, bright orange or vermilion red, funnel-shaped, 25-45 mm long, 4 cm diameter. Tube narrow 10-18 mm long, outside pale greenish to reddish, inside pale. Ovary spherical, about 4 mm wide, with small triangular scales with few white types of wool and few white bristly hairs. Tepals vermilion red, rather rounded, often slightly serrated, 14-16 mm long, 4-6 mm wide. Filaments white, others golden yellow. Pistil white, with 5-6 white stigma lobes 2-3 mm long, slightly protruding the anthers.\r\nBlooming season: Flowers all tend to come in one late Spring rush, rather than spread over the Summer, and remain open for up to six days.\r\n', 0, 1, 'Item', 1),
(2, 'Euphorbia Acrurensis Abyssinia', 80000, 'assets/img/products/pro1.2.jpg', 'Euphorbia ammak is a striking Euphorbia of massive stature. It is a typical representative of large, tree-like Euphorbias that can grow up to 10 m tall with a short trunk.\r\nFlowers: Yellow-green, approx. 1 cm in diameter, fleshy.\r\nIt is an easy species to grow that is suited for any well-drained soil in full sun. But young plants are happy growing indoors, where they can easily reach the ceiling. Water regularly during the active growing season from March to September. No water should ever be allowed to stand around the roots. Keep almost completely dry in winter.\r\n', 0.3, 1, 'Item', 0),
(3, 'Echinopsis oxygona', 65000, 'assets/img/products/pro1.3.jpg', 'Flowers: white, pink, pale red lavender\r\nBlooming season: late spring to all summer long.\r\nCultivation and Propagation: The Easter Lily cactus Echinopsis oxygen is extremely resistant to cultivation and easily reproduced by offshoots. The only thing that can kill this plant is cold. Nevertheless, it is appropriate to provide adequate growing conditions in order to obtain abundant blooms. It has very large fragrant nocturnal flowers and many plant lovers are willing to take care of it all year for one or a few magical nights with exotic charm.\r\nGrowth rate: It is a relatively rapidly growing species that will make large clumps given the best conditions.\r\nWatering: Needs moderate to copious waterings in summer (it is more demanding than other cacti), but do not overwater, keep dry in winter at a minimum temperature of 0°C.\r\nHardiness: Reputedly resistant to light frost if kept on the dry side prior to, and during, cold weather (hardy to -2 C ° C, or less for short periods). However, warmth throughout the year will increase the grower\'s success (5°-8° C during the rest season).\r\nExposition: The plant tolerates bright situations which encourage flowering and heavy spine production, but is likely to suffer from sun scorch or stunted growth if overexposed to direct sunlight during the hottest part of the day in summer. It grows well with filtered sunlight or afternoon shade.\r\n', 0, 1, 'Item', 0),
(4, 'Crassula Cephalophora', 70000, 'assets/img/products/pro2.1.jpg', 'Crassula cephalophora is a shrubby plant that has fuzzy white hairs with green to gray-blue foliage and red tips in full sun, and the shape of the leaves resembles small propellers. White flowers will bloom in the summer months. \r\nOrigin: South Africa\r\nCommon Name: Mini Propeller Plant\r\nTemperature: Hardy to 20F degrees\r\nLight: Full Sun to Part Shade.\r\n', 0, 2, 'Item', 1),
(5, 'Euphorbia makallensis', 80000, 'assets/img/products/pro2.2.jpg', 'Some of the easiest and carefree Euphorbias to grow, both in pots and in the ground in areas with a mild climate, but they can even be grown indoors. They grow well in a very draining mineral potting substrate, but they aren\'t picky about soil. During the summer they enjoy average feeding and watering.  When dormant, plants are relatively cold tolerant. They will rapidly mound, branch and spread. These are widely adaptable and able to take full sun helping the plants to keep their compact growth form.', 0, 2, 'Item', 0),
(6, 'Graptopetalum paraguayense', 60000, 'assets/img/products/pro2.3.jpg', 'Graptopetalum paraguayense also known as the Mother of pearl or Ghost-plant is a succulent from the family of the Jade plant. This plant displays flat fleshy and pointed grayish-white leaves with shades of purple and sometimes pink. Coloring can change with the amount of sun exposure.\nOrigin: Tamaulipas, Mexico\nSun Exposure: Light shade to full sun\nWatering needs: Occasional irrigation/outside grown water weekly in summer\nGrowth patterns: Stems can be up to 12in length and 0.5 in diameter.\n', 0, 2, 'Item', 0),
(7, 'Soil mix', 35000, 'assets/img/products/pro3.1.jpg', 'Ingredients: High-grade imported soils: Perlite, Vermiculite, Pumice, Peatmoss, Cinnamon manure, microelements, minerals\r\n- Perlite: porous structure, hydrated, creating each field for young roots to stick.\r\n- Vermiculite: moisturizes, and stimulates root growth.\r\n- Pumice: create an aerated environment, and provide minerals for plants.\r\n- Peatmoss: retain nutrients, avoid being washed away by rain or flushing.\r\n- Worm manure: provides necessary nutrients such as nitrogen, phosphorus, potassium, and calcium.\r\n', 0, 3, 'Kg', 1),
(8, 'Mini garden tools', 50000, 'assets/img/products/pro3.2.jpg', 'The 3-piece mini garden toolset is a small, lovely product that is very suitable for children to help parents with gardening. Help children love working, understand and love nature more.\r\nBesides, the 3-piece mini garden toolset can help us take care of small potted plants in narrow spaces easily.\r\nThe 3-piece mini garden tool set includes 1 rake, 1 round-headed shovel, and 1 pointed shovel.\r\nLength: 20cm.\r\n', 0, 3, 'Item', 0),
(9, 'Wood box', 45000, 'assets/img/products/pro3.3.jpg', 'These cactus wooden boxes are sturdy to hold your cactus or succulent soil.\r\nSize: 20x15x10cm.', 0, 3, 'Item', 0),
(10, 'Harrisia jusbertii', 60000, 'assets/img/products/pro1.4.jpg', 'Harrisia jusbertii is a columnar cactus, without aerial roots or segments, branching later, that forms small scrubs with few branches, mostly erect to sub-erect, often requiring a stake or support from the surrounding.\r\nCommon Name: Queen of the Night\r\nStem: Dark green, up to 6 cm in diameter.\r\nSpines: About 7, very short, more or less equal.\r\nAreoles: 2 cm apart\r\nFlowers: Large up to18 cm long (or more) white, funnel-shaped, strongly scented, with brownish green outer petals,.\r\nBlooming season: This species produces abundant blossoms that open nocturnally from spring to autumn. Scales felty and hairy in the axil.\r\nFruits: Fleshy tannish-green to yellowish-red at maturation with areoles, scales and short spines, pulp white . The fruits are rarely seen in cultivation, since the species is self-sterile, and most plants – even from different sources - might be coming from the same clone.\r\n', 0, 1, 'Item', 0),
(11, 'Arizona Sunset ', 50000, 'assets/img/products/pro2.4.jpg', 'If you are looking for an affordable way to start your own succulent collection, or if you are planning to start a small terrarium or any other gardening project around your home, this is a perfect choice. If you are looking for a natural and original party favor for your next event or wedding, these succulent plants will make your celebration unforgettable. Grown at our Southern California nursery, every succulent plant is specially selected, handpicked, and carefully packed to guarantee that you will receive the best quality plants for your special event.\r\nOrigin: Mexico\r\nSun Exposure:  Light shade, not need full sun\r\nWatering needs: weekly or monthly\r\nGrowth patterns: Stems can be up to 9 in long and 0.6 in diameter\r\n', 0, 2, 'Item', 0),
(12, 'Vermiculite', 40000, 'assets/img/products/pro3.4.jpg', 'Description: 72-hour heat pack\r\nOur heat packs are sold exclusively to protect your order, we do not sell heat packs to be shipped alone. Uniheat Shipping Warmers are the first warmers designed especially for small pets, tropical plants, and other temperature-sensitive products.\r\nWeight: 5 Kg\r\nLength: 35 cm\r\n', 0, 3, 'Item', 0),
(13, 'Schlumbergera', 75000, 'assets/img/products/pro1.5.jpg', 'Christmas cactus is pretty toothless as far as the cactus family goes with its smooth segmented leaves and soft, rounded spines. Tubular flowers come in red, pink, orange, and white. This cactus species is a departure from normal cactus care. The plant hails from Brazilian rain forests, where they live as epiphytes growing on other tree branches. Give these plants filtered light and moderate irrigation. If you can expose them to cooler temperatures between 50 and 60 degrees F as winter approaches, you can get your plants to rebloom. \n\nLight: Diffused light\nWater: Regularly, allowing the soil to dry between waterings\nColor varieties: Pink', 0, 1, 'Item', 0),
(14, 'Aporocactus flagelliformis', 55000, 'assets/img/products/pro1.6.jpg', 'If your sunniest window does not have the space to accommodate a container, consider a hanging basket with the fantastic Aporocactus flagelliformis or rat tail cactus. This plant is indigenous to Mexico, where its vibrant magenta blooms have been used in traditional medicines for heart problems. Choose a generously sized hanging basket for this fast-growing cactus—the thick stems can trail for three feet. \r\n\r\nLight: Direct light\r\nWater: Water regularly\r\nColor varieties: Violet-red, pink, and orange', 0, 1, 'Item', 0),
(15, 'Sempervivum Sunset', 60000, 'assets/img/products/pro2.5.jpg', 'Sempervivum tectorum \'Sunset\' (Payne) is an easy to grow red and green rosette, with an apple green base with strong burgundy tips. It flushes fully red in winter and then produces lots of new offsets each spring. This is a particularly forgiving variety that produces lots of new offsets each spring. Hens & Chicks need plenty of outdoor sunlight to show their best colors and maintain a tight rosette form. They thrive in gritty, well-draining soils and pots with drainage holes. They produce new offsets or \"chicks\" on stolons. These chicks can be left to form tidy clusters or removed to share and transplant. Sempervivum do most of their growing in the spring and summer, and will thrive with weekly watering and afternoon shade if temperatures exceed 80F. They are incredibly frost hardy and will happily overwinter under an insulating blanket of snow. Protect from heavy rains and standing water to prevent rot.\n\nPerennial-Full Sun to Part Shade-Red-Green-Ground Cover', 0, 2, 'Item', 0),
(16, 'Aloe Juvenna', 65000, 'assets/img/products/pro2.6.jpg', 'Spider Aloe is a small Aloe that forms dense clusters of small 8 inch wide stemless rosettes with 4 inch long by 1/2 inch wide incurved triangular shaped leaves. The leaves have long soft white marginal spines and a gray-green waxy surface covered with irregularly spaced bumps (tubercules). A foot tall flower spikes appear in late winter to spring, bearing about 20 pendulous 1.5 inch long red-orange flowers. This Aloe is drought tolerant with little to no irrigation required and is best when sheltered from getting overly wet in winter. Native to South Africa, Spider Aloe has undergone many different names including Aloe subtuberculata, Aloe suberecta, Aloe tuberculata, Aloe incurva, Aloe acuminata, Catevala humilis, Aloe perfoliata var. humilis and Aloe echinata. The species name humilis means \'low growing\', refering to the plant\'s growth habit.', 0, 2, 'Item', 0),
(17, 'All Seasons Gardener Gloves', 55000, 'assets/img/products/pro3.5.jpg', 'These unisex Briers gloves have tapered cuffs to keep the gloves on securely. During our digging and pruning tests, they had a very good grip, were flexible and water resistant. They’re comfortable to wear but, as they have no inner seam, it does feel a little like wearing washing-up gloves. Nonetheless, they mould to the hands well. Unfortunately, like the ClipGlove offerings, this pair didn’t protect against prickly plants and the fabric cuff prevents them from being entirely waterproof. They’re also made of latex, so won’t be suitable if you’re allergic.', 0, 3, 'Item', 0),
(18, 'Hori Hori Garden Knife', 75000, 'assets/img/products/pro3.6.jpg', 'A high quality knife\r\n7” blade is made with 420 stainless steel and comes very sharp\r\nextra-strong, with the knife extending all the way through the knife handle (“full tang”) so the knife handle cannot snap off.\r\nThe FSC certified Beachwood handle is polished smooth and secured with 3 rivets for extra strength.\r\nThe blade is curved for easy digging, and it even includes measurements to help you plant your seedlings and bulbs at the correct depth.', 0, 3, 'Item', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videos`
--

CREATE TABLE `videos` (
  `vid_id` int(10) NOT NULL,
  `vid_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `videos`
--

INSERT INTO `videos` (`vid_id`, `vid_location`) VALUES
(1, 'assets/vid/video1.mp4');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Chỉ mục cho bảng `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `videos`
--
ALTER TABLE `videos`
  MODIFY `vid_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
