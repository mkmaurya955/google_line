


-- databases: `google_chart`


CREATE TABLE `ski_jumpers` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `players` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `ski_jumpers` (`id`, `country`, `players`) VALUES
(1, 'Denmark', 8),
(2, 'Poland', 5),
(3, 'Germany', 6),
(4, 'Ukraina', 4);


ALTER TABLE `ski_jumpers`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `ski_jumpers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
