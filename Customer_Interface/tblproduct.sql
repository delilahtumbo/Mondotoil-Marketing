
--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(121, 'PNG Bilum', 'WD090', './Assets/Products/Bilum2.png', 150.00),
(221, 'PNG Bilum', 'WD091', './Assets/Products/bilum11.png', 50.00),
(321, 'PNG Bilum', 'WD092', './Assets/Products/bilum6.jpg', 10.00),
('01', 'Tapa Art','WD094', './Assets/Products/tapa_art.jpg', 150),
('010', 'PNG Basket','WD095', './Assets/Products/basket3.jpg', 100),
('011', 'PNG Basket', 'WD096', './Assets/Products/basket7.jpg',70),
('012', 'PNG Basket','WD097', './Assets/Products/basket8.jpg', 45),
('013', 'PNG Tolia Basket','WD098', './Assets/Products/tolai_basket1.png', 30),
('014', 'PNG Tolia Basket','WD099', './Assets/Products/tolai_basket2.png', 30),
('015', 'PNG Tolia Baskett', 'WD0910', './Assets/Products/tolai_basket3.jpg',30),
('016', 'Woven Mats','WD0911', './Assets/Products/mat1.png', 20),
('017', 'PNG Woven Mats','WD0912', './Assets/Products/mat2.jpg', 20),
('018', 'Woven Mats','WD0913', './Assets/Products/Woven Mats.png', 20),
('019', 'PNG Coffee', 'WD0914', './Assets/Products/coffee10.jpg',20),
('02', 'Sepik Dance Mask','WD0915', './Assets/Products/Woven_fiber_male_spirit_dance_mask.jpg', 100),
('020', 'PNG Coffee Bean','WD0916', './Assets/Products/Coffee-Beans2.png', 15),
('021', 'PNG Coffee','WD0917', './Assets/Products/coffee4.png', 15),
('022', 'PNG Coffee', 'WD0918', './Assets/Products/coffee6.png',35),
('023', 'PNG Coffee Bean', 'WD0919', './Assets/Products/coffee8.png',25),
('024', 'PNG Coffee', 'WD0920', './Assets/Products/coffee9.png',25),
('025', 'PNG Coffee','WD0921', './Assets/Products/coffee.png', 25),
('026', 'PNG Coffee', 'WD0922', './Assets/Products/coffee2.jpg',25),
('027', 'PNG Coffee', 'WD0923', './Assets/Products/coffee8.png',25),
('028', 'Virgin Coconut Oil', 'WD0924', './Assets/Products/coconut_oil.png',25),
('029', 'Virgin Coconut Oil', 'WD0925', './Assets/Products/Niuginea_oil.png',25),
('03', 'Sepik Art', 'WD0926', './Assets/Products/Sepik-art.jpg',150),
('030', 'Virgin Coconut Oil', 'WD0927', './Assets/Products/coconut_oil.png',25),
('031', 'PNG Chocolates','WD0928', './Assets/Products/cho1.jpg', 25),
('032', 'PNG Chocolates', 'WD0929', './Assets/Products/cho2.jpg',25),
('033', 'PNG Chocolates', 'WD0930', './Assets/Products/cho3.png',25),
('034', 'PNG Chocolates', 'WD0931', './Assets/Products/cho4.jpg',25),
('035', 'PNG Chocolates', 'WD0932', './Assets/Products/cho5.png',25),
('036', 'PNG Chocolates', 'WD0933', './Assets/Products/cho6.jpg',25),
('037', 'PNG soap', 'WD0934', './Assets/Products/soap_1.png',5),
('038', 'PNG soap', 'WD0935', './Assets/Products/soap3.png',5),
('039', 'PNG soap', 'WD0936', './Assets/Products/soap_2.png',5),
('04', 'Angoram Mask-Sepik Carving', 'WD0937','./Assets/Products/angoram-mask-ancestors-figure-sepik-carving.jpg', 150),
('040', 'PNG Bilum', 'WD0938', './Assets/Products/Bilum1.png',150),
('041', 'PNG Bilum', 'WD0939', './Assets/Products/Bilum2.png',150),
('042', 'PNG Bilum', 'WD0940', './Assets/Products/Bilum3.png',150),
('043', 'PNG Bilum', 'WD0941', './Assets/Products/bilum4.png',150),
('044', 'PNG Bilum', 'WD0942', './Assets/Products/bilum6.jpg',100),
('045', 'PNG Bilum', 'WD0943', './Assets/Products/bilum7.jpg',100),
('046', 'PNG Bilum', 'WD0944', './Assets/Products/Bilum10.png',70),
('047', 'PNG Bilum', 'WD0945', './Assets/Products/bilum11.png',70),
('048', 'PNG Bilum', 'WD0946', './Assets/Products/bilum12.png',70),
('049', 'PNG Blouse', 'WD0947', './Assets/Products/blous1.png',100),
('05', 'Kahriman Mask-Carving', 'WD0949', './Assets/Products/KahrimanMask.jpg',100),
('050', 'PNG Blouse', 'WD0950', './Assets/Products/blous2.jpg',100),
('051', 'PNG Blouse', 'WD0951', './Assets/Products/blous3.jpg',150),
('052', 'PNG Blouse', 'WD0952', './Assets/Products/blous5.png',100),
('053', 'PNG Blouse', 'WD0953', './Assets/Products/blous8.png',100),
('054', 'PNG Blouse', 'WD0954', './Assets/Products/blous7.png',100),
('055', 'Tapa Cloth', 'WD0955', './Assets/Products/tapa1.jpg',100),
('056', 'Tapa Cloth', 'WD0956', './Assets/Products/tapa2.jpg',100),
('057', 'Tapa Cloth', 'WD0957', './Assets/Products/tapa3.jpeg',150),
('058', 'Tapa Cloth', 'WD0958', './Assets/Products/tapa4.JPG',100),
('059', 'Tapa Cloth', 'WD0959', './Assets/Products/tapa6.png',150),
('06', 'Mudman Mask', 'WD0960', './Assets/Products/Mudman_mask.png',150),
('060', 'Tapa Cloth', 'WD0961', './Assets/Products/tapa_mat.jpg',100),
('061', 'PNG Blouse', 'WD0962', './Assets/Products/blous01.png',70),
('062', 'PNG Blouse', 'WD0963', './Assets/Products/blous02.png',70),
('063', 'PNG Blouse', 'WD0964', './Assets/Products/blous03.png',70),
('064', 'Earings', 'WD0965', './Assets/Products/earing1.png"',20),
('065', 'Earings', 'WD0966', './Assets/Products/earing6.png',10),
('066', 'Earings', 'WD0967', './Assets/Products/earing3.png',20),
('067', 'Earings', 'WD0968', './Assets/Products/earong4.jpg',20),
('068', 'Earings', 'WD0969', './Assets/Products/earing7.png',10),
('069', 'Earings', 'WD0970', './Assets/Products/earing2.png',20),
('07', 'PNG Basket', 'WD071', './Assets/Products/basket2.jpg',35),
('070', 'Earings','WD0972', './Assets/Products/earing5.jpeg', 10),
('071', 'Earings', 'WD0973', './Assets/Products/earing7.png',10),
('072', 'Earings', 'WD0974', './Assets/Products/earing2.png',20),
('08', 'PNG Basket','WD0975', './Assets/Products/Basket1.jpg', 30),
('09', 'PNG Basket', 'WD0976', './Assets/Products/basket3.jpg',45);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
