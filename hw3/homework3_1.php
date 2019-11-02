<?php
$month_name = array("(Wrong Input)", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
$month = $_GET[month];
if($month < 1 or $month > 12) $month = 0;
$day = $_GET[day];
echo "<div style='margin-left: 5px;font-size: 20px'>Your name is $_GET[name].</div>";
echo "<div style='margin-left: 5px;font-size: 20px'>Your gender is $_GET[gender].</div>";
echo "<div style='margin-left: 5px;font-size: 20px'>Your date of birth is $month_name[$month] $day.</div>";
echo "<br><br>";

$error_occur = 0;
switch($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        if ($day < 1 or $day > 31)
            $error_occur = 1;
        break;
    case 2:
        if ($day < 1 or $day > 29)
            $error_occur = 1;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        if ($day < 1 or $day > 30)
            $error_occur = 1;
        break;
    default:
        $error_occur = 1;
        break;
}

$horoscopes = array("Capricorn", "Aquarius", "Pisces", "Aries", "Taurus", "Gemini", "Cancer", "Leo", "Virgo", "Libra", "Scorpio", "Sagittarius");

if ($error_occur == 1){
    echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>Error: Invalid Information</div><br>";
    echo "<div style='margin-left: 5px;font-size: 20px'>Please type your date of birth correctly</div><br>";
}
else {
    if(($month == 12 && $day >= 22) or ($month == 1 && $day <= 19)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[0] (Dec 22 - Jan 19)</div><br>";
        echo "<img src='capricorn.png' width='200' height='200' /><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>This is a massively important month for you, with what began with Saturn’s direct turn in Capricorn last month, completing with Pluto’s direct turn here on 3rd October. You begin the month with Saturn in his early weeks in direct and Pluto his final days in retrograde motion, so with one eye on the rear view mirror and another on the road ahead. Saturn’s direct turn was the most significant, for this marked the end of five months spent revisiting the past in a way that was focused on learning experiences and on taking responsibility. For Pluto, in Capricorn since 2008, this is more an annual chance to look back on how you can change things up.</div>";
    }
    else if(($month == 1 && $day >= 20) or ($month == 2 && $day <= 18)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[1] (Jan 20 - Feb 18)</div><br>";
        echo "<img src='aquarius.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>As is always the case at this time of year, there is a slide from the adventurous to the professional side of life and there is never a clear cut divide between the two. The Sun will always begin October in your sector of adventure, travel, learning and discovery but end the month in your career sector but while his shift from one to the other is abrupt nothing else is. That is because while Venus and Mercury travel close to the Sun they will often be just ahead or just behind, so a focus on career matters can begin before the solar spotlight shifts and an adventurous focus can continue afterwards. And that is exactly what is happening this month.</div>";
    }
    else if(($month == 2 && $day >= 19) or ($month == 3 && $day <= 20)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[2] (Feb 19 - Mar 20)</div><br>";
        echo "<img src='pisces.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>There is always some tension between income and money matters at this time of year, as a new focus on your financial situation and money matters has to muscle its way into what is an entrenched focus on income matters. Unlike the Sun’s focus on your financial situation and money matters at this time every year, where the focus is more on what you do with the money you have, your income sector is active all year and has become used to not having to share its toys. If you do find that financial tensions rise, especially around the time of a Full Moon in your income sector on 14th October, look at where income and money matters are fighting for your attention and how to better balance the two.</div>";
    }
    else if(($month == 3 && $day >= 21) or ($month == 4 && $day <= 19)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[3] (Mar 21 - Apr 19)</div><br>";
        echo "<img src='aries.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>There is a passing of the baton between the professional gods in the early days of the month, with Pluto turning direct in your career sector on 3rd October, just a day before Mars leaves your work sector. The timing couldn’t be more auspicious, for Mars ends a busy push to get work and job matters up to speed just as the brakes fully come off this professional year. Yet with Saturn in his early weeks in direct motion in your career sector and Pluto at a standstill, where Mars has come in hot and heavy, this shifts more to a slow burn. Just two months before Jupiter’s return to your career sector this is a chance to pull back and let things play out.</div>";
    }
    else if(($month == 4 && $day >= 20) or ($month == 5 && $day <= 20)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[4] (Apr 20 - May 20)</div><br>";
        echo "<img src='taurus.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>There is little danger of life becoming all work and no play when Mars leaves a playful part of your chart and returns to your busy work sector on 4th October, despite the fact that the solar spotlight is already on your work situation, job matters and options. Mars spent the final days of last month at a friendly aspect to Pluto in and adventurous part of your chart, with the planets of war and revolution having come together to declare war on a life that was all work and no play. That Pluto will turn direct during Mars’ first full day sends a clear message that he will carry the torch for both of them.</div>";
    }
    else if(($month == 5 && $day >= 21) or ($month == 6 && $day <= 20)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[5] (May 21 - Jun 20)</div><br>";
        echo "<img src='gemini.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>Saturn and Jupiter are two of the most important planets in the solar system and the planets that largely define the makeup of any given year. Saturn can be seen as the ‘brake’ and Jupiter as the ‘gas’. Saturn holds back and focuses on building firm foundations and on keeping things stable, while Jupiter reaches for the stars and promotes growth. On 3rd December Jupiter and Saturn are due to join forces and this makes Saturn’s direct turn last month and Pluto’s on 3rd October extremely important. For it is two months later that Jupiter will join them in their home, which is your financial sector. Saturn’s direct turn last month ended a five month retrograde phase that was a chance to take care of old financial housekeeping and also to learn from and take responsibility for the past.</div>";
    }
    else if(($month == 6 && $day >= 21) or ($month == 7 && $day <= 22)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[6] (Jun 21 - Jul 22)</div><br>";
        echo "<img src='cancer.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>Having Saturn in Capricorn, your opposing sign can be challenging and not just for you but for your relationships as well. That was especially so during the middle months of the year, when a parade of planets moving through Cancer all faced an opposition with not only Saturn in your relationship sector but Pluto as well. Added to this is the fact that you have the lunar nodes policing a balance between your personal and relationship needs all year. This was further compounded by a pair of eclipses during your birthday month. Until Saturn turned direct last month it was hard to move on from those months, with Saturn’s job being to make sure you first learnt from them.</div>";
    }
    else if(($month == 7 && $day >= 23) or ($month == 8 && $day <= 22)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[7] (Jul 23 - Aug 22)</div><br>";
        echo "<img src='leo.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>While there is no danger of life becoming all work and no play, in terms of the big picture this is where the trend is going. This is a big month for both Saturn and Pluto in your work sector but also for Jupiter, in a fun, playful, romantic and creatively charged part of your chart. The fact that Saturn and Pluto have come to a standstill and Jupiter is speeding up means that the gap between them is literally closing by the day. On 3rd December, two months after Pluto’s direct turn on 3rd October, Jupiter will join him and Saturn for the first time in your work sector in our lifetime.</div>";
    }
    else if(($month == 8 && $day >= 23) or ($month == 9 && $day <= 22)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[8] (Aug 23 - Sep 22)</div><br>";
        echo "<img src='virgo.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>While your birthday month ended eight days before moving into the new month, until Mars leaves Virgo on 4th October setting this new solar year onto the right path is still a work in progress. Knowing that he won’t be back until 2021, Mars wants to leave you with something to strive for, with your passions and fighting spirit fuelled and aware of what excites you. The Sun, Venus and Mercury may have left you with a game plan, wish list and resolutions for this new solar year, but Mars provides the motivation to walk the talk.</div>";
    }
    else if(($month == 9 && $day >= 23) or ($month == 10 && $day <= 22)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[9] (Sep 23 - Oct 22)</div><br>";
        echo "<img src='libra.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>Whether you are a September or an October born Libran, this is your birthday month and even by the time you reach 24th October and the Sun is gone, you are unlikely to notice the difference. That is despite the fact that with Venus and Mercury already gone from Libra by then, this should bring all planetary activity for the year to a close. You can thank Mars for that, with his return to Libra on 4th October not only firing up your birthday month but keeping the momentum going long after the Sun moves on. Regardless of when your birthday falls or even if you had your birthday last month, you will get an additional surge when Mars follows in his footsteps.</div>";
    }
    else if(($month == 10 && $day >= 23) or ($month == 11 && $day <= 21)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[10] (Oct 23 - Nov 21)</div><br>";
        echo "<img src='scorpio.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>October will always begin on a quiet note for you, with the wind down of your old solar year always beginning towards the end of September then continuing through the first three weeks of October. Wherever you are in the world and in whatever time zone, the Sun will have completed its move into Scorpio by 24th October. However, as is often the case, the lines between the past, present and future are blurred and will remain blurred for the majority of the month. That blurring of the lines begins with Mercury’s departure from a nostalgic and reflective part of your chart on 3rd October, leaving the Sun and Venus behind as he returns to Scorpio.</div>";
    }
    else if(($month == 11 && $day >= 22) or ($month == 12 && $day <= 21)){
        echo "<div style='margin-left: 5px;font-size: 40px;font-weight: bold'>$horoscopes[11] (Nov 22 - Dec 21)</div><br>";
        echo "<img src='sagittarius.png' width='200' height='200'/><br>";
        echo "<div style='margin-left: 5px;font-size: 20px;margin-top: 50px'>Moving into October is akin to moving into the home straight, with the final three months of 2019 now stretching out in front of us. However, for you this is personal and it is less that you are looking out over the final three months of 2019 and more that you are all of a sudden looking out over Jupiter’s final two months in Sagittarius. Jupiter returned last November to begin a new 12 year Jupiter cycle of expansion, with the first 13 months spent in Sagittarius, laying down foundations and creating the pathways for new beginnings, projects and journeys. Due to leave on 3rd December, as Jupiter moves into his final two months you are moving into the home straight of this foundation year.</div>";
    }
}
?>