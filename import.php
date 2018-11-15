<?php $str ="Mr. MENG Phalkong
Vice President
The University of Tokyo
Civil Engineering
menykony@gmail.com
Ms. Noeun Monyneath
Secretary
Musashino University
Global Business
s1617507@stu.musashino-u.ac.jp
Mr. VUTHEA VONG
Academic Officer
The University of Tokyo
Electric and Electronic
vutheavong.kh@gmail.com
Ms. PHOU SOTHEAROTH
Academic Officer
Toyo University
Regional Development Studies
sothearothphou@yahoo.com
Ms. SUN SREYCHOU
Academic Officer
Kyoto University
MBA
sreychou_sun@yahoo.com
Mr. OU CHOMRONG
Academic Officer
Tokyo Institute of Technology
Electrical Engineering
ou_chomrong@yahoo.com
Mr. SENG CHEYVUTH
Academic Officer
Tokyo Institute of Technology
Science Education
cheyvuth@yahoo.com
Mr. HAY CHANTHOL
Academic Officer
The University of Tokyo
Economics
hchanthol99@yahoo.com
Mr. CHOUP Ratha
Public Relation Officer
Teikyo University
Business Administration
ratha.choup@gmail.com
Ms. Soth Boramey
Public Relation Officer
Showa Women''s University
Japanese Literature
boramey.soth@yahoo.com
Ms. Un Somonea
Public Relation Officer
Showa Women''s University
Japanese Literature
somoneaun.neko@gmail.com
Ms. Soy Chhech Houng
Public Relation Officer
Teikyo University
Economics
soychhechhoung@gmail.com
Ms. Ly Seam
Public Relation Officer
University of Electro-Communications
Electrical Engineering
lyseam88@gmail.com
Ms. CHEM Solinda
Financial Officer
Teikyo university
Business Management
solinda18@yahoo.com
Mr. Vong Virak
IT Officer
University of Electro-Communications
Information Technology
vongvirak9@gmail.com
Mr. Borann Chanrathnak
IT Officer
Gunma University
Information Science
borannchanrathnak@gmail.com
Mr. Choeng Horleang
IT Officer
Tokai University
Media Information
horleangchoeng@gmail.com
Mr. Nann Kavdavid
IT Officer
University of Electro-Communications
Information Technology
kavdavidnann1993@gmail.com
Mr. Him Chanrith
Student Service Officer
Seigakuin University
Political Economy
himchanrith2017@gmail.com
Mr. NGUON Tola
Student Service Officer
Chiba University
Civil Engineering
nguon.tola@yahoo.com
Mr. PHANG PHENPISETH
Student Service Officer
Chiba University
Civil Engineering
piseth_phangphen@yahoo.com
Mr. NY VANNAT
Student Service Officer
Chiba university
Architecture
vannatny@gmail.com
Mr. HOEUR Nythanel
Student Service Officer
Chiba university
Electronic and Electrical
nythanelhoeur@gmail.com
Mr. PENG Eakkoung
Student Service Officer
Meiji University
Business Administration
yee.koung@gmail.com
Mr. CHAN PANHA
Cultural Officer
International Conversation Academy
Japanese Literature
panhafunnyboy@gmail.com
Mr. SEN SOSRY
Cultural Officer
International Conversation Academy
Japanese Literature
sosrysen@gmail.com
Ms. PAL SREYVAN
Cultural Officer
Nihon Wellness Sport University
Japanese Literature
palsreyvan@gmail.com
Ms. MON HUYLIN
Cultural Officer
Nihon Wellness Sport University
Japanese Literature
Huylin18@gmail.com
Mr. LIM SENGLAY
Cultural Officer
Shinwa Academy School
Japanese Literature
senglaylim999@gmail.com
Ms. SOEUNPISAL SEYHA
Cultural Officer
International Conversation Academy
Japanese Literature
Nitchocco@gmail.com
Ms. TRY SIVNEANG
Cultural Officer
Nihon Wellness Sport University
Japanese Literature
Kimhuang010@gmail.com
Ms. Reach sovanreaksa
Cultural Officer
Showa women’s university
Japanese Literature
reachsovanreaksa@gmail.com
Ms. Ouk cheata
Cultural Officer
Showa women’s university
Japanese Literature
N/A
Mr. MORK PISEY
Cultural Officer
Yokohama National University
Japanese Literature
pisey_mork@yahoo.com
Mr. CHENG Rathborith
General Assistant
Waseda University
Petrology and Geochemistry
cheng_rathborith@yahoo.com
Ms. CHENDA MALINA
General Assistant
Japanese Language School
Economics
malina120812@gmail.com
Ms. Mork Malay
General Assistant
N/A
N/A
malay_mork@yahoo.com
Ms. SOK SEREIRATHANA
General Assistant
Funabashi Joho-Bijinesu Collage of Technology
Information Technology
soksereirathana@gmail.com
Ms. SAM Channimol
General Assistant
N/A
N/A
s.channimol@gmail.com
Mr. NOP Visal
Senior Advisor
Universtiy of Tsukuba
Japan''s Diplomacy
visaalnop@gmail.com
Mr. UK Sovannara
Senior Advisor
Tokyo Institute of Technology
Civil and Environmental Engineering
sovannara_itcifl@yahoo.com
Mr. YEM Vibol
Senior Advisor
University of Tsukuba
Systems and Information Engineering
yemvibol@yahoo.com
Mr. PHANN Vannty
Senior Advisor
University of Tsukuba
Political and Economic Policy
pvannty@gmail.com
Mr. HORN Theara
Senior Advisor
N/A
Economics
horntheara@gmail.com
Mr. CHHOEUNG Taisour
Senior Advisor
N/A
Civil Engineering
sour_tai@yahoo.com
Mr. UNG Porsry
General Advisor
Tokyo Institute of Technology
Bio-Engineering
ungporsry@yahoo.com";
$a = explode(PHP_EOL, $str);
$b = '';
for ($i = 0; $i < (count($a)/5); $i++){
    $c = $i * 5;
    $b .= "INSERT INTO commitees (name, year, position, school, major, email) VALUES ('".$a[$c]."', '2018', '".$a[$c+1]."', '".$a[$c+2]."', '".$a[$c+3]."', '".$a[$c+4]."');";
}
echo $b;

?>