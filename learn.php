<?php
 // INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");
$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="style/style.css" type="text/css">


  <title>BOXY BIKES | Learn</title>
</head>

<body>
<?php
    include("includes/header.php");
  ?>

<main class="margin_bottom">
  <div class="head learn_head">
   <h1 class="heading">Let's learn!</h1>
      <!-- IMAGE SOURCE: https://www.gtbicycles.com/media/catalog/category/G18-ebikes-cat.jpg -->
      <a href="https://www.gtbicycles.com/media/catalog/category/G18-ebikes-cat.jpg" class="cite_h">image source</a>
  </div>

  <!-- 2 pictures -->
  <div class="row">
  <div class="column">
    <h2>e-bike</h2>
    <div class="line">
    <p>An eBike or an electric bike is a bike that provides assistance as you pedal rather than powered by a throttle. You still need to work your legs as you ride, but pedal-assistance helps you along the way. They’re making cycling more accessible and more fun for people of all ages and fitness levels. They’re ideal for commuting, leisure or active mountain bike riding.</p>

    <!-- source: https://www.bodyandsoul.com.au/feature/special-features/what-is-an-ebike-and-how-does-it-work/news-story/06a4bcad62494df0bd2b200bd4ece66d -->
    <a href="https://www.bodyandsoul.com.au/feature/special-features/what-is-an-ebike-and-how-does-it-work/news-story/06a4bcad62494df0bd2b200bd4ece66d" class="cite">information source</a>

    </div>
  </div>
  <div class="column">
    <h2>cargo bike</h2>
      <!-- text source: provided by our client, Boxy Bikes -->
    <div class="line">
    <p>A cargo bike is an extra larger and sturdy bike designed to carry passengers and hundreds of pounds of cargo. The boundaries between different categories of cargo bikes are somewhat blurry. Bakfiets and longjohn cargo bikes have the load in front of the driver. The bakfiets tends to have a box, often equipped with amenities for carrying kids. The longjohn usually has a flatbed platform. Work bikes also have the load in front, usually in a box over a small front wheel. Longtail bikes (most famously the Xtracycle brand) have the load in the rear, on an extended bike frame. Longtails are the most stable, so they are the safest cargo bike for hilly Ithaca. And electric motors are pretty much a requirement for cargo bikes in Ithaca.</p>
    </div>
  </div>

</div>
  <div class="faq">
      <!-- text source: provided by our client, Boxy Bikes -->
  <h2>FAQ</h2>

  <h3>Do you recharge the battery by pedaling?</h3>
  <p>No. I recharge my ebike by plugging it in at night. On an electric bike the pedals directly drive the rear wheel and the electric motor also drives a wheel; at no point do the pedals drive a generator for recharging the battery. The ebike can be moved forward by either the motor, the rider pedaling, or both at the same time. The batteries can only be charged by plugging them into a charger or by regenerative braking (see below).
  </p>

  <h3>How long does it take to recharge the battery?</h3>
  <p>A typical ebike takes four or five hours to recharge, but custom batteries and chargers can take much less time.</p>

  <h3>How fast and how far can it go?</h3>
  <p>Ebikes are legally limited to 20mph. But even if they didn’t have this limit, they are typically only powerful enough to go 15mph to 25mph. The range of an ebike varies depending on how much you are willing to pedal versus how much you use the motor. A typical ebike pedaled by a typical person has a range of 15 to 30 miles. Of course, you can always increase your range by carrying more batteries.</p>

  <h3>Are they convenient?</h3>
  <p>Yes. Simply plug in your battery while you’re asleep, and ride while you’re awake. You can perform most maintenance tasks yourself with a few simple tools. And perhaps the biggest convenience is parking: with a bike you can travel literally door-to-door. In fact when you factor in parking, a short bicycle trip in a city can outperform the same automobile trip in terms of total trip speed, cost and convenience.</p>

  <h3>Are they safe?</h3>
  <p>Yes. Injuries and fatalities per trip are much lower for biking than driving. Some biking enthusiasts go so far as to say that not biking is not safe. If you look at the health benefits of biking, they argue, not biking puts you at a higher risk of various life-threatening diseases. A powerful electric bike is (perhaps counter-intuitively) safer than a human-powered bike because you can keep up with traffic so that cars do not need to pass.</p>

  <h3>What kinds of batteries are available?</h3>
  <p>Electric bikes no longer use lead-acid (car) batteries. They use various kinds of lithium batteries instead. See our ebike battery FAQ below for details.</p>

  <h3>Can you power them with solar power?</h3>
  <p>Yes! An electric bike uses so little electricity that it can easily be charged for a day of use from a 250 watt solar panel. A typical 250 watt solar panel is about the size of a door and costs $300. For comparison an electric cars uses about 1,200 Wh/mile of energy while an ebike uses about 20 Wh/mile. If we charged both the electric car and the bike each from 250 Wh/day solar panels on the roof of our house, we could power the car for 0.2 miles and we could power the bike for 12 miles. See my solar-powered bike experiment which provided about one fourth of the power I used on a 250-mile bike trip.</p>

  <h3>How much can they carry?</h3>
  <p>A cargo bike is a bike designed to carry passengers and heavy loads. An electric cargo bike is, not surprisingly, a cargo bike with an electric motor. A typical electric cargo bike can carry on the order of 500 pounds. That’s half the load of a typical “half-ton” small pickup truck. That could be one adult rider, two small kids, and a week’s worth of groceries. It could also be many other surprising loads. Cargo bikers love to push the limits of what they can carry and then photograph and brag about their accomplishments.</p>

  <h3>Are ebike batteries safe?</h3>
  <p>Yes. Batteries intended to be used as ebike batteries have a protective circuit board in them that  prevents them from over-discharging and overheating.</p>

  <h3>How do I care for my battery?</h3>
  <p>Ebike batteries don’t require much more care than mobile phone or laptop batteries. Basic rules apply: don’t charge them with a charger they were not designed to use. Don’t drop or puncture them. Keep them indoors when temperatures fall below freezing.</p>

  <h3>What kind of batteries do ebikes use?</h3>
  <p>In the past ebikes used lead acid batteries, also known as sealed lead acid (SLA) batteries. This is the same kind of batteries that cars use. However, in western countries SLA batteries have largely been replaced by various kinds of lithium batteries. Lithium are better in every regard except price. Lithium batteries cost three or four times as much as SLA but they are lighter, more powerful, and last longer. Also, lithium batteries usually have a “battery management system” microprocessor built into the battery that protects the battery.</p>

  <h3>What kinds of lithium batteries are there?</h3>
  <p>Lithium batteries come in several different chemistries and form factors, and newer and better types are constantly being developed. LiFePo4 batteries refer to batteries with a lithium iron phosphate chemistry. These batteries are optimized for longevity and safety and have been the standard ebike battery chemistry for many years. More recent batteries that are similar to but somewhat better than LiFePo4 batteries include LiMn (lithium manganese) and LiNiMnCo (lithium nickel manganese). The word “lipo” refers to lithium polymer batteries wrapped in a foil pouch. These batteries are optimized for light weight, and don’t have protective circuitry. Small lipos are used in mobile phones and laptops; larger ones are used by model airplane hobbyists. Ebike hobbyists have figured out how to use them to power extreme custom ebikes. Early lipo batteries had a lithium cobalt chemistry, but now many other chemistries are used.</p>

</div>

</main>
  <?php include("includes/footer.php");?>
</body>
</html>
