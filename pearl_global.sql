CREATE DATABASE pearl_global;

USE pearl_global;

CREATE TABLE destinations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    about TEXT NOT NULL,
    activities TEXT NOT NULL
);

INSERT INTO parks (name, image_path, description, activities) VALUES
('Kidepo Valley National Park', 'assets/images/kidepo.jpg', 
 'Kidepo Valley National Park is a breathtaking wilderness nestled in the rugged valleys of northeastern Uganda. It boasts expansive savannahs framed by distant mountain ranges, creating an extraordinary landscape where giraffes, elephants, lions, and cheetahs roam freely. The park is renowned for its rich cultural heritage, with the Karamojong and the Ik people offering visitors an authentic cultural experience. Kidepo is a haven for adventure seekers, providing an off-the-beaten-path experience filled with thrilling wildlife encounters and serene nature walks.', 
 'Game viewing, Nature walks, Cultural tours'),

('Bwindi Impenetrable National Park', 'assets/images/bwindi.jpg', 
 'Bwindi Impenetrable National Park, a UNESCO World Heritage Site, lies in southwestern Uganda along the Albertine Rift. It features mist-shrouded hills and a dense rainforest that dates back over 25,000 years, home to almost 400 plant species and a vast array of wildlife. The park is most famous for its mountain gorillas, which make up nearly half of the world’s population. Visitors come from across the globe for the unforgettable experience of gorilla trekking. Bwindi also harbors more than 350 bird species, including 23 Albertine Rift endemics, making it a birding paradise.', 
 'Gorilla trekking, Bird watching, Forest walks'),

('Kibale National Park', 'assets/images/kibale.jpg', 
 'Known as the primate capital of the world, Kibale National Park is a lush tropical rainforest that teems with life. The park boasts one of the highest primate densities globally, featuring 13 primate species, including the famous chimpanzees, red colobus monkeys, and L’Hoest’s monkeys. Nature enthusiasts are captivated by Kibale’s rich biodiversity, which includes over 375 bird species, colorful butterflies, and unique flora. Visitors can enjoy chimpanzee tracking, guided nature walks, and bird-watching adventures that reveal the park\'s vibrant ecosystem.', 
 'Chimpanzee tracking, Nature walks, Bird watching'),

('Lake Mburo National Park', 'assets/images/mburo.jpg', 
 'Lake Mburo National Park is a compact gem located in western Uganda. The park features rolling hills, grassy valleys, and tranquil lakes that host a variety of wildlife, including zebras, impalas, and elands. Its mosaic of habitats attracts over 315 bird species, making it a birder\'s haven. Lake Mburo is one of the few places in Uganda where visitors can embark on guided game drives, boat cruises on the lake, or explore the wilderness on horseback, offering a unique and adventurous experience.', 
 'Game drives, Boat cruises, Horseback riding, Bird watching'),

('Semuliki National Park', 'assets/images/semuliki.jpg', 
 'Semuliki National Park, situated in the Albertine Rift Valley, is a true birder\'s paradise with over 400 bird species. It is famous for the Sempaya Hot Springs, which are a major geological feature of the park, attracting visitors who marvel at the boiling geysers and cultural legends associated with them. The park is characterized by lowland tropical rainforest, home to several unique species, including the forest elephants and pygmy antelopes. Visitors can explore its diversity through guided nature walks and experience the remarkable tropical wilderness.', 
 'Bird watching, Nature walks, Visiting the Sempaya hot springs'),

('Queen Elizabeth National Park', 'assets/images/queen.jpg', 
 'Queen Elizabeth National Park is Uganda’s most popular and biodiverse conservation area, encompassing savannah, wetlands, lakes, and forests. It offers exceptional wildlife viewing, including elephants, lions, leopards, and a large variety of antelopes. The Kazinga Channel, connecting Lake George to Lake Edward, hosts one of Africa\'s largest hippo concentrations. The park also features tree-climbing lions in the Ishasha sector and over 600 bird species, making it a prime destination for birders.', 
 'Game drives, Boat cruises on Kazinga Channel, Chimpanzee tracking'),

('Murchison Falls National Park', 'assets/images/murchison.jpg', 
 'Murchison Falls National Park, Uganda’s largest and oldest conservation area, is known for the dramatic Murchison Falls where the Nile squeezes through a narrow gorge. The park offers breathtaking safaris with abundant wildlife, including elephants, buffaloes, giraffes, and crocodiles along the Nile River. The Budongo Forest Reserve is part of the park and provides excellent chimpanzee tracking experiences. Boat safaris to the base of the falls are a highlight, providing a unique way to view wildlife.', 
 'Game drives, Boat safaris, Nature walks, Chimpanzee tracking in Budongo Forest'),

('Rwenzori Mountains National Park', 'assets/images/rwenzori.jpg', 
 'Rwenzori Mountains National Park, also known as the "Mountains of the Moon," offers one of Africa’s most challenging and rewarding mountaineering experiences. The park’s stunning alpine scenery includes glaciers, waterfalls, and lush valleys filled with diverse vegetation. Trekkers can encounter unique flora and fauna, such as the giant lobelias and the Rwenzori turaco. It is a must-visit for adventure seekers looking to summit the Margherita Peak, Africa\'s third highest mountain.', 
 'Mountain climbing, Nature hikes, Bird watching'),

('Mount Elgon National Park', 'assets/images/elgon.jpg', 
 'Mount Elgon National Park is named after Mount Elgon, an extinct shield volcano with one of the largest calderas in the world. The park offers picturesque hiking trails that lead through lush forests, waterfalls, caves, and hot springs. The Sipi Falls area on the mountain’s lower slopes is perfect for those interested in scenic views and coffee tours. Mount Elgon is also known for its unique vegetation zones and abundant birdlife, attracting both hikers and nature lovers.', 
 'Hiking, Nature walks, Bird watching, Exploring caves'),

('Mgahinga Gorilla National Park', 'assets/images/mgahinga.jpg', 
 'Mgahinga Gorilla National Park is Uganda’s smallest national park but offers some of the most exhilarating gorilla trekking experiences. Nestled in the Virunga Volcanoes region, the park features three volcanic mountains: Mount Muhabura, Mount Gahinga, and Mount Sabyinyo. In addition to gorillas, Mgahinga is home to golden monkeys, which are unique to this region. Visitors can also hike the volcanoes, enjoy breathtaking views, and learn about the Batwa pygmies, the area\'s indigenous people.', 
 'Gorilla trekking, Golden monkey tracking, Volcano hiking'),

('Pian Upe Wildlife Reserve', 'assets/images/pian.jpg', 
 'Pian Upe Wildlife Reserve, one of Uganda’s most extensive conservation areas, is a hidden gem located in the northeastern part of the country. It features vast plains and rugged hills that are home to a variety of wildlife, including ostriches, cheetahs, zebras, and elands. The reserve offers a unique safari experience with less tourist traffic, making it ideal for those seeking an off-the-beaten-path adventure. Birdwatchers can spot a plethora of bird species, including the rare Karamoja apalis.', 
 'Game drives, Bird watching, Guided nature walks'),

('Toro Semuliki Wildlife Reserve', 'assets/images/tswr.jpg', 
 'Toro Semuliki Wildlife Reserve, the oldest protected area in Uganda, is located near the Rwenzori Mountains. It features a diverse landscape that includes savannah, wetlands, and tropical forests. The reserve is home to an impressive array of wildlife, such as elephants, buffaloes, and leopards, as well as over 440 bird species. Visitors can enjoy game drives, boat trips on Lake Albert, and guided walks that reveal the region’s natural beauty and biodiversity.', 
 'Game drives, Bird watching, Boat trips on Lake Albert');

