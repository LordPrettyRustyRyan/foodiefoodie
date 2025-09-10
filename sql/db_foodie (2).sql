-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 09:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `tag`, `article`, `image`, `time`) VALUES
(1, 'Creative Ways to Eat More Vegetables', 'vegetables;healthy eating;food hacks;kids friendly;hidden veggies', 'Eating enough vegetables can be tough, especially for kids or picky eaters. But with some creativity, you can sneak them into meals without sacrificing flavor. Try blending veggies into sauces or soups, or baking them into desserts!\r\nHere are creative way', 'blog(1).jpg', '2025-04-08 03:48:17.739631'),
(2, '5-Minute Healthy Breakfast Ideas', 'breakfast;quick meals;healthy;morning routine;easy recipes', 'Morning rush? No worries! A healthy breakfast doesn’t need to take hours. With just a few staple ingredients, you can make something delicious and energizing in minutes. Try these 5-minute breakfast ideas: Overnight oats with fruits; Peanut butter banana ', 'blog(2).jpg', '2025-04-08 03:49:11.909750'),
(3, 'Healthy Snack Swaps for Junk Food Lovers', 'snacks;junk food alternatives;healthy eating;food swap;low calorie', 'Craving chips and chocolate? You’re not alone. But with a few smart swaps, you can still enjoy snacking guilt-free. Swap these junk foods with healthier choices: Potato chips → Roasted chickpeas; Candy → Frozen grapes; Soda → Sparkling water with lemon; I', 'blog(3).jpg', '2025-04-08 03:49:14.999658'),
(4, 'Foods That Boost Immunity Naturally', 'immunity;nutrition;superfoods;healthy lifestyle;vitamins', 'A strong immune system starts in the kitchen. Certain foods are packed with nutrients that help your body fight off illness. Immunity-boosting foods include: Citrus fruits for vitamin C; Garlic for anti-inflammatory effects; Ginger for soothing the gut; S', 'blog(4).jpg', '2025-04-08 03:49:19.571955'),
(5, 'Smart Grocery Shopping on a Budget', 'grocery tips;budget meals;meal planning;smart shopping;affordable food', 'Healthy eating doesn’t have to break the bank. With a little planning, you can fill your cart with nutritious choices and still save money. Budget-friendly grocery hacks: Plan meals before shopping; Buy in bulk (grains, legumes); Choose seasonal fruits an', 'blog(5).jpg', '2025-04-08 03:49:22.001324'),
(6, 'One-Pot Meals for Lazy Nights', 'one-pot meals;easy dinner;lazy cooking;quick recipes;comfort food', 'Too tired to cook? One-pot meals are your best friend. They’re simple, quick, and leave behind just one dish to clean. Try these one-pot meal ideas: Lentil soup with veggies; Pasta primavera; Chickpea curry; Quinoa stir fry with tofu; Chicken and rice; Sh', 'blog(6).jpg', '2025-04-08 03:49:24.266845'),
(7, 'How to Meal Prep for the Week', 'meal prep;planning;healthy meals;batch cooking;weekly routine', 'Meal prepping is a time-saver and stress-reliever. Cooking in batches means you spend less time thinking about food during the week. Steps for successful meal prep: Plan your meals and portions; Cook large batches of grains and proteins; Chop and store fr', 'blog(7).jpg', '2025-04-08 03:49:26.764485'),
(8, 'Kitchen Hacks Every Home Cook Should Know', 'kitchen tips;cooking hacks;time saving;cooking tricks;food prep', 'Cooking can be fun—but sometimes it feels like a chore. These smart hacks make kitchen work easier and faster. Top kitchen hacks: Freeze leftover herbs in olive oil cubes; Use a spoon to peel ginger; Microwave lemons before juicing; Soak onions in cold wa', 'blog(8).jpg', '2025-04-08 03:49:28.810559'),
(9, 'High-Protein Vegetarian Meal Ideas', ' vegetarian;high protein;plant based;meatless;fitness food', 'Being vegetarian doesn’t mean skimping on protein. There are plenty of plant-based sources that can fuel your body just as well. Top high-protein vegetarian meals: Chickpea and quinoa salad; Tofu stir-fry with veggies; Lentil soup with garlic naan; Paneer', 'blog(9).jpg', '2025-04-08 03:49:33.004535'),
(10, 'Hydrating Foods to Beat the Summer Heat', 'hydration;summer food;cooling foods;fruits;healthy habits', 'Hydration isn’t just about drinking water—it’s also about eating the right foods. Some fruits and veggies are over 90% water and perfect for summer. Water-rich foods include: Watermelon; Cucumber; Strawberries; Lettuce; Zucchini; Oranges. These foods help', 'blog(10).jpg', '2025-04-08 03:49:35.804323');

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE `draft` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `yields` varchar(255) NOT NULL,
  `prep_time` varchar(255) NOT NULL,
  `cook_time` varchar(255) NOT NULL,
  `total_time` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `step_1` mediumblob NOT NULL,
  `step_2` mediumblob NOT NULL,
  `step_3` mediumblob NOT NULL,
  `step_4` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`id`, `title`, `tags`, `yields`, `prep_time`, `cook_time`, `total_time`, `ingredients`, `instructions`, `description`, `category`, `step_1`, `step_2`, `step_3`, `step_4`) VALUES
(1, 'recipe drafted', '', '', '', '', '', '', '', 'only for show.', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `originals`
--

CREATE TABLE `originals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `yields` varchar(255) NOT NULL,
  `prep_time` varchar(255) NOT NULL,
  `cook_time` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `step_1` mediumblob NOT NULL,
  `step_2` mediumblob NOT NULL,
  `step_3` mediumblob NOT NULL,
  `step_4` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `yields` varchar(50) NOT NULL,
  `prep_time` varchar(255) NOT NULL,
  `cook_time` varchar(255) NOT NULL,
  `total_time` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `step_1` text NOT NULL,
  `step_2` text NOT NULL,
  `step_3` text NOT NULL,
  `step_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `tags`, `yields`, `prep_time`, `cook_time`, `total_time`, `ingredients`, `instructions`, `description`, `category`, `step_1`, `step_2`, `step_3`, `step_4`) VALUES
(1, 'Egg Mayonnaise', 'egg mayonnaise; egg spread; snack recipe; boiled egg dish; creamy egg blend; quick snack; protein-rich; mayonnaise alternative; easy egg recipe; olive oil recipe', ' 6 servings', '2 minutes', '15 minutes', '17 minutes', 'boiled eggs;2 tbsp olive oil (or any neutral oil);1 tsp vinegar;1/3 cup water;1/2 tsp black pepper;salt (to taste)', '1. Peel the boiled eggs and cut them into halves. Measure out olive oil, vinegar, water, pepper, and salt.\n\n2. Add boiled eggs, olive oil, vinegar, water, pepper, and salt into a grinder or blender. Grind until the mixture is smooth and creamy.', 'A creamy and protein-rich egg-based spread made with boiled eggs, olive oil, and simple seasonings—perfect for quick snacks.', 'Snacks', 'EggMayonnaise(1).png', 'EggMayonnaise(2).png', 'EggMayonnaise(3).png', 'EggMayonnaise(3).png'),
(2, 'Dahi Cutlets / Kebabs', 'dahi cutlets; curd kebabs; hung curd snack; vegetarian cutlet; paneer kebab; bread roll snack; Indian appetizer; party starter; air fryer cutlet; creamy curd filling', '3 servings', '15 minutes', '10 minutes', '25 minutes', '½ cup hung curd;¼ cup diced onions;½ cup paneer or mozzarella cheese (grated);2 tbsp chopped coriander;1 green chili (finely chopped);5-6 cashews (chopped, optional);Spices: ½ tsp salt (adjust to taste);¼ tsp black pepper;½ tsp jeera powder (cumin powder);¼ tsp garam masala;6-8 bread slices;Water (for moistening bread);Oil for frying (or use an air fryer for a healthier version)', 'In a mixing bowl, add hung curd, diced onions, grated paneer/mozzarella, coriander, and chopped chili. If using cashews, chop and add them. Season with salt, black pepper, jeera powder, and garam masala. Mix everything well until it forms a creamy, well-combined filling.;\nTake a slice of bread and slightly moisten it by dabbing it with water using your fingers. Place a spoonful of filling in the center of the bread. Carefully roll the bread tightly to seal the filling inside. Use plastic wrap (or the bread’s original plastic cover) to help shape it properly and hold it together. Repeat for all bread slices.;\nOption 1: Deep Frying: Heat oil in a pan over medium heat. Carefully add the bread rolls and fry until they turn golden brown and crispy. Remove and place on paper towels to absorb excess oil.;\nOption 2: Air Frying: Preheat the air fryer to 180°C (350°F). Lightly brush the rolls with oil and place them in the air fryer. Cook for 10-12 minutes, flipping halfway through, until golden and crispy.', 'Crispy and creamy vegetarian cutlets made with hung curd, paneer, and spices—perfect as a tea-time snack or party appetizer.', 'Snacks', 'DahiCutlets(1).png', 'DahiCutlets(2).png', 'DahiCutlets(3).png', 'DahiCutlets(3).png'),
(3, 'Boiled Salad Spring Rolls', 'boiled salad spring rolls; cabbage rolls; healthy snack; paneer rolls; vegetarian appetizer; low-calorie snack; fresh spring rolls; no-wrap spring rolls; gluten-free snack; peanut dip', ' 1-2 Servings (Makes about 8–10 rolls)', '15 minutes', '10 minutes', ' 25 minutes', '8–10 large cabbage leaves (preferably Napa or regular green cabbage); 1 medium carrot, julienned; 1 small cucumber, julienned; 150g paneer (cottage cheese), cut into thin strips; 1 tablespoon oil (for frying paneer); Salt & pepper, to taste;', 'Bring a large pot of water to a boil. Carefully separate the cabbage leaves and blanch them in the boiling water for 30–45 seconds until they become soft and pliable. Remove the leaves and immediately place them in cold water to stop the cooking process. Drain and pat them dry.;\nFry the Paneer: Heat 1 tablespoon oil in a pan over medium heat. Add the paneer strips and lightly fry them until golden brown. Season with a pinch of salt and pepper. Cut the Vegetables: While the paneer is cooking, julienne the carrot and cucumber into thin strips.;\nTake a softened cabbage leaf and place a small portion of carrots, cucumbers, and paneer in the center. Fold in the sides, then roll it up tightly like a spring roll. Repeat with the remaining leaves and filling.;\nIn a small bowl, mix peanut butter, soy sauce, lemon juice, honey, and warm water until smooth. Adjust the consistency by adding more water if needed.;\nArrange the cabbage rolls on a serving platter and serve them with the dipping sauce on the side. Enjoy fresh as a healthy appetizer or light meal', 'Healthy and refreshing cabbage-wrapped spring rolls filled with crispy veggies and paneer, served with a flavorful peanut dipping sauce.', 'Snacks', 'BoiledSaladSpringRolls(1).png', 'BoiledSaladSpringRolls(2).png', 'BoiledSaladSpringRolls(3).png', 'BoiledSaladSpringRolls(4).png'),
(4, 'Roti Pizza', 'Roti Pizza; half-cooked 2 Rotis (Chapati); 4 tbsp Pizza Sauce; ½ cup Mozzarella Cheese (grated); ½ small Onion (diced); ½ Capsicum (diced); ¼ cup Spinach (Palak, chopped); 2 tbsp Sweet Corn; 1 tbsp Coriander (chopped); ½ tsp Oregano; ½ tsp Chili Flakes; ½', '2 Servings', '5 minutes', '10 minutes', '15 minutes', 'half-cooked 2 Rotis (Chapati); 4 tbsp Pizza Sauce; ½ cup Mozzarella Cheese (grated); ½ small Onion (diced); ½ Capsicum (diced); ¼ cup Spinach (Palak, chopped); 2 tbsp Sweet Corn; 1 tbsp Coriander (chopped); ½ tsp Oregano; ½ tsp Chili Flakes; ½ tsp Butter (for tawa method); Leftover veggies (mushrooms, olives, jalapeños, etc.); Paneer or tofu (small cubes); ', 'Take a half-cooked Roti (or cook fresh chapati slightly underdone). Spread 2 tbsp of pizza sauce evenly over the roti.;\nSprinkle mozzarella cheese generously. Add diced onions, capsicum, spinach, sweet corn, and coriander. Sprinkle oregano and chili flakes for extra flavor.;\nAir Fry Method: Preheat the air fryer to 180°C (350°F). Place the prepared roti pizza inside and air fry for 4-5 minutes until cheese melts and turns golden.;\nOven Method: Preheat the oven to 200°C (400°F). Place the pizza on a baking tray lined with parchment paper. Bake for 6-8 minutes or until cheese melts and crust turns crispy.;\nTawa (Stovetop) Method: Heat a tawa (griddle) on low flame and add ½ tsp butter. Place the roti on the tawa and warm it slightly for 30 seconds. Turn off the flame, cover the pan with a lid, and let it sit for 3 minutes or until cheese melts completely. Tip: Place a piece of aluminum foil under the roti to prevent burning.', 'A quick and cheesy Indian fusion snack made with half-cooked rotis, loaded with veggies, and topped like a pizza—crispy, fun, and flavorful!', 'snacks', 'RotiPizza(1).png', 'RotiPizza(2).png', 'RotiPizza(3).png', 'RotiPizza(4).png'),
(5, 'Snickers-like Dessert', 'snickers-like dessert; tofu dessert; peanut butter treat; healthy sweet; no-bake dessert; creamy tofu sweet; Medjool dates dessert; plant-based dessert; protein-rich sweet; chocolate tofu dessert', '2-4 Servings', '5 minutes', '0 minutes', '5 minutes;', '400g firm tofu; 150g peanut butter; 360ml milk (any type); 160g Medjool dates (pitted); Optional: Dark chocolate (melted or crushed) for topping;', 'Add firm tofu, peanut butter, milk, and dates to a blender. Blend until smooth and creamy.;\nOptionally, drizzle with melted dark chocolate or sprinkle crushed chocolate on top.;\nEat it immediately as a soft, creamy dessert. Freeze it for a firmer texture, then enjoy it chilled.', 'A creamy, protein-packed dessert blending tofu, peanut butter, and dates, with optional dark chocolate for a Snickers-like twist.', 'Dessert', 'Snickers-likeDessert(1).png', 'Snickers-likeDessert(2).png', 'Snickers-likeDessert(2).png', 'Snickers-likeDessert(2).png'),
(6, 'Cocoa-Banana Bites', 'cocoa banana bites; frozen banana snack; chocolate yogurt treat; healthy dessert; banana yogurt bites; no-bake sweet; easy frozen snack; cacao banana dessert; kid-friendly treat; chilled chocolate fruit', '2-4 Servings', '5 minutes', ' 0 minutes', '2 hours 5 minutes (includes freezing)', '2 bananas (sliced into even pieces); 1/2 cup Greek yogurt (or any preferred yogurt); 2 tbsp cacao powder (or cocoa powder)', 'Slice the bananas into even-sized rounds.;\nIn a bowl, mix Greek yogurt with cacao powder until smooth.;\nDip each banana slice into the chocolate yogurt and coat evenly.;\nPlace the coated banana pieces on wax paper or a lined tray. Freeze for 2 hours until firm.;\nEat straight from the freezer for a refreshing, chocolatey snack.', 'Frozen banana slices dipped in chocolatey yogurt for a refreshing, healthy dessert that’s perfect for summer cravings.', 'Dessert', 'CocoaBananaBites(1).png', 'CocoaBananaBites(2).png', 'CocoaBananaBites(3).png', 'CocoaBananaBites(4).png'),
(7, 'Egg-Rice Omelet', 'egg rice omelet; leftover rice recipe; breakfast omelet; protein-rich breakfast; rice egg dish; easy omelet idea; quick breakfast; savory omelet; fluffy rice eggs; Indian-style omelet', '2 Servings', '10 minutes', '10 minutes', '20 minutes', '2 eggs; 1 cup cooked rice; 1/4 onion (chopped); 1/4 carrot (grated or finely chopped); 1/2 tsp pepper; 1/2 tsp salt; 1/4 tsp turmeric; 1/4 tsp paprika; 1 tbsp oil or butter (for cooking);', 'Chop onions and carrots finely.;\nIn a bowl, beat the eggs and add cooked rice, onions, carrots, and spices. Stir well until everything is combined.;\nHeat oil or butter in a pan over medium heat. Pour the mixture into the pan and spread evenly. Cook for 3-5 minutes until the bottom is golden. Flip and cook the other side for 2-3 minutes.;\nServe warm and enjoy your fluffy, flavorful omelet!', 'A fluffy and savory omelet made with eggs, cooked rice, veggies, and spices—perfect for a filling breakfast.', 'Breakfast', 'Egg-RiceOmelet(1).png', 'Egg-RiceOmelet(2).png', 'Egg-RiceOmelet(2).png', 'Egg-RiceOmelet(2).png'),
(8, 'Bread Lasagna', 'bread lasagna; tawa lasagna; Indian-style lasagna; vegetarian lasagna; paneer lasagna; bread layer snack; cheesy bread dish; quick lasagna recipe; fusion snack; no-oven lasagna', '2-3 Servings', '15 minutes', '15 minutes', '30 minutes', '1 tbsp garlic (minced); 1 tbsp onion (chopped); 1 medium-sized carrot (grated or chopped); 1 medium-sized spinach bunch (chopped); 1 cup paneer (crumbled or grated); Salt to taste; 150 grams milk; 1-1.5 cups pizza seasoning; 1 tbsp black pepper powder; 6-8 bread slices; Any sauce or spread of your choice (e.g., pizza sauce, white sauce, mayo, ketchup); Mozzarella cheese (grated);', 'Heat a pan and add garlic and onions, sauté for a minute. Add carrots, spinach, and paneer, stirring for 2-3 minutes. Pour in the milk, season with salt, black pepper, and pizza seasoning, and cook for another 2 minutes. Remove from heat and set aside.;\nTake a bread slice and spread a layer of your favorite sauce or spread. Add a portion of the sautéed veggie-paneer mixture and spread evenly. Place another bread slice on top and repeat the process 4-5 times to create layers.;\nOn the top layer, spread another layer of sauce and sprinkle grated mozzarella cheese.;\nTawa Method: Place the layered bread on a tawa (flat pan). Cover with aluminum foil to prevent burning. Cook on low heat for 5-7 minutes, or until the cheese melts.', 'A fusion-style layered bread lasagna loaded with spiced veggies, paneer, and cheese—quick to make and full of flavor.', 'Snacks', 'BreadLasagna(1).png', 'BreadLasagna(2).png', 'BreadLasagna(3).png', 'BreadLasagna(4).png'),
(9, 'Banana Cake', 'banana cake; healthy dessert; oat flour cake; peanut butter banana cake; refined sugar-free cake; eggless cake option; vegan banana treat; quick banana dessert; maple syrup sweet; chocolate chip banana cake', '1 small cake', '5 minutes', '15-20 minutes', '20-25 minutes', '1 large ripe banana (mashed); 1 egg (or 1 flax egg for vegan option); 2 tbsp peanut butter; 1/4 cup maple syrup; 1 cup oat flour (or blitz up some oats); 1/2 tsp baking powder; Chocolate chips/pieces (optional);', 'In a large bowl, mash the ripe banana until smooth.;\nMix in egg (or flax egg), peanut butter, and maple syrup. Stir well until fully combined.;\nAdd oat flour, baking powder, and optional chocolate chips. Mix until you get a smooth batter.;\nPreheat oven to 350°F (175°C). Pour batter into a greased or lined baking dish. Bake for 15-20 minutes, or until a toothpick comes out clean.;\nLet it cool for a few minutes before slicing. Enjoy warm or at room temperature!', 'A soft and wholesome banana cake made with oat flour, maple syrup, and peanut butter—naturally sweet and optionally vegan.', 'Dessert', 'BananaCake(1).png', 'BananaCake(2).png', 'BananaCake(3).png', 'BananaCake(4).png'),
(10, 'Sprout Sandwich', 'sprout sandwich; healthy sandwich; mung bean sprouts; chickpea sprouts; protein-rich snack; vegetarian sandwich; sprouts and paneer; spiced sandwich filling; chickpea flour mixture; grilled veggie sandwich', '2 sandwiches', '10 minutes', '15 minutes', '25 minutes', '½ cup capsicum; ½ cup carrot; ½ cup onion; Sprouts: 1 cup (any variety such as mung bean, chickpea, or mixed sprouts); 1 green chili (finely chopped); ½ inch ginger (grated); 2 garlic cloves (minced); 5-6 curry leaves (finely chopped); ½ teaspoon salt (adjust to taste); ¼ teaspoon turmeric powder; ½ teaspoon coriander powder; ½ teaspoon cumin powder; ¼ cup chickpea flour (besan); 2 tablespoons ghee or butter (for grilling); 4 slices of bread (white, whole wheat, or multigrain); 2 slices of mozzarella cheese or paneer;', 'In a blender or food processor, add the finely chopped vegetables (capsicum, carrot, onion) along with the sprouts. Add the green chili, ginger, garlic, and curry leaves. Blend until coarsely ground. The mixture should not become a paste but should be slightly chunky.;\nTransfer the blended mixture into a mixing bowl. Add salt, turmeric powder, coriander powder, and cumin powder. Add the chickpea flour (besan) and mix well to form a thick, spreadable mixture. If needed, add a few drops of water to adjust the consistency.;\nTake two slices of bread and spread an even layer of the sprout mixture on one slice. Place a slice of mozzarella cheese or paneer on top. Cover with the second slice of bread and gently press down.;\nHeat a sandwich griller or a tawa (flat pan) on medium heat. Apply a little ghee or butter on both sides of the sandwich. Place the sandwich on the griller or tawa and cook for about 5-7 minutes until golden brown and crisp. If using a tawa, flip the sandwich carefully and cook on the other side for another 5 minutes.', 'A crunchy, protein-packed sandwich filled with spiced sprouts, veggies, and paneer or cheese, grilled to golden perfection.', 'Snacks', 'SproutSandwich(1).png', 'SproutSandwich(2).png', 'SproutSandwich(3).png', 'SproutSandwich(4).png'),
(11, 'Sprout Salad', 'sprout salad; mung bean salad; chickpea salad; protein-rich salad; healthy sprouts; vegan salad; fiber-rich bowl; chaat-style salad; lemony salad; Indian sprouts mix', '2 Servings', '10 minutes', '0 minutes', '10 minutes', 'Sprouts: 1 cup soaked for 30 hours (mung bean, chickpea, or mixed sprouts); ½ cup cooked beans (kidney beans, chickpeas, or black chickpeas); ½ cup onion (finely chopped); ½ cup tomato (diced, optional); 1 green chili (finely chopped, optional); 2 tablespoons fresh coriander (chopped, optional); ½ teaspoon salt (adjust to taste); ¼ teaspoon black pepper; ½ teaspoon cumin powder; ½ teaspoon chaat masala (optional); ½ teaspoon lemon juice;', 'If you’re using store-bought sprouts, rinse them thoroughly under running water. If you’re making fresh sprouts at home, soak the beans (mung beans, chickpeas, or black chickpeas) overnight, drain the water, and let them sprout in a moist cloth for 1-2 days. Finely chop the onion, tomato, green chili, and coriander.;\nIn a large mixing bowl, combine the sprouts, cooked beans, chopped onions, tomatoes, and green chili. Add salt, black pepper, cumin powder, and chaat masala for flavor. Squeeze fresh lemon juice over the salad for a tangy kick. Toss everything well to ensure the spices and flavors blend evenly.;\nTransfer the salad into a serving bowl. Garnish with fresh coriander. Enjoy fresh as a light meal, snack, or side dish.', 'A refreshing, protein-rich salad made with sprouts, cooked beans, and a zingy mix of spices and lemon juice — perfect as a snack or light meal.', 'Snacks', 'SproutSalad(1).png', 'SproutSalad(2).png', 'SproutSalad(3).png', 'SproutSalad(3).png'),
(12, 'Bircher Muesli', 'bircher muesli; overnight oats; healthy breakfast; fiber-rich bowl; vegan oats; nutty muesli; seed mix; meal prep breakfast; creamy oats; protein-rich muesli', '2 Servings', '10 minutes (overnight soaking)', '0 minutes', '10 minutes (plus overnight soaking)', 'Rolled Oats – 1 cup (not instant oats); Shredded Coconut – ½ cup (adds a nutty, tropical flavor); Pumpkin Seeds – 1 tbsp (for crunch and nutrition); Flax Seeds – 1 tbsp (great for fiber and omega-3s); Chia Seeds – 1 tbsp (helps thicken the mixture and boosts protein); Sunflower Seeds – 1 tbsp (adds crunch and healthy fats); Cranberries – 3 tbsp (for natural sweetness and tartness); Chopped Almonds – ½ cup (adds richness and texture); Milk – 1½ cups (dairy or plant-based like almond, oat, or soy); Plain Yogurt – 1 cup (for creaminess and probiotics); Honey – 1 tbsp (or maple syrup for a vegan option); Vanilla Extract – 1 tsp (for a hint of sweetness and aroma); Sliced Apples (adds freshness and crunch); Additional Nuts (for extra texture); Peanut Butter (for richness and flavor);', 'In a large mixing bowl, combine rolled oats, shredded coconut, pumpkin seeds, flax seeds, chia seeds, sunflower seeds, cranberries, and chopped almonds. Mix well to distribute all the ingredients evenly.;\nPour in the milk and yogurt over the dry mixture. Add honey and vanilla extract for natural sweetness and flavor. Stir everything thoroughly to ensure the oats absorb the liquid evenly.;\nCover the bowl and place it in the refrigerator. Let it sit overnight (or at least 6 hours) so the oats soften and the flavors blend together.;\nThe next morning, give the muesli a good stir. Add your favorite toppings like sliced apples, extra nuts, or a drizzle of peanut butter.', 'A creamy, fiber- and protein-rich overnight oat bowl blended with seeds, nuts, fruits, and yogurt — the ultimate wholesome breakfast to kickstart your day.', 'Breakfast', 'BircherMuesli(1).png', 'BircherMuesli(2).png', 'BircherMuesli(3).png', 'BircherMuesli(4).png'),
(13, 'Rava Paneer Cheela', 'rava cheela; paneer pancake; Indian breakfast; protein-rich meal; suji cheela; savory pancake; mint chutney; quick breakfast; vegetarian cheela; crispy cheela', '2 Servings', '10 minutes', '10 minutes', '20 minutes', 'Suji (Rava/Semolina) – 4 tsp (gives a light, crispy texture); Chopped Vegetables – 50g (use a mix of onion, capsicum, carrot, or any of your choice); Crumbled Paneer – 50g (adds protein and richness); Salt and Pepper – as per taste; Red Chili Powder – 1 tsp (adjust as per spice preference); Roasted Cumin Powder – 1 tsp (for an earthy, smoky flavor);Homemade Mint Chutney – 1 tbsp (for a fresh and tangy kick); Water – as required (for batter consistency); Ghee – as required (for cooking, adds a rich flavor);', 'In a mixing bowl, add suji (rava), crumbled paneer, chopped veggies, salt, pepper, red chili powder, and roasted cumin powder. Mix everything well. Gradually add water while stirring to form a smooth, thick batter (not too runny). Let the batter rest for 5-7 minutes so the semolina absorbs moisture and softens.;\nHeat a non-stick tawa (griddle) on medium flame and grease it lightly with ghee. Pour a ladleful of batter onto the tawa and spread it gently in a circular motion to form a thin pancake (cheela). Drizzle some ghee around the edges for crispiness.;\nCook on medium flame until the edges turn golden brown. Flip the cheela carefully and cook the other side for another 2 minutes until evenly cooked.', 'A crispy and wholesome semolina pancake packed with paneer, veggies, and spices — served hot with mint chutney for a delicious, protein-rich start to the day.', 'Breakfast', 'RavaPaneerCheela(1).png', 'RavaPaneerCheela(2).png', 'RavaPaneerCheela(3).png', 'RavaPaneerCheela(3).png'),
(14, 'Hummus Toast', 'hummus toast; healthy snack; protein toast; veggie toast; paneer topping; quick breakfast; Mediterranean flavor; vegetarian toast; cucumber tomato toast; open toast', '2 Servings', '10 minutes', '5 minutes', '15 minutes', 'Toasted Bread Slices – 2 pcs (preferably sourdough, whole wheat, or multigrain for a crunchy base); Hummus – 2 tbsp (adds a creamy, protein-rich spread); Diced Tomato – ½ cup (for a juicy, fresh texture); Diced English Cucumber – ½ cup (adds a crisp and refreshing element); Cottage Cheese (Paneer) – 50g (crumbled, for added protein and richness); Chopped Parsley/Coriander Leaves – 1 tbsp (for a burst of freshness); Salt & Pepper – as per taste (to enhance flavors); Peri Peri Masala (optional) – 1 tsp (for a spicy, tangy kick); Lemon – 1 small piece (for a zesty, citrusy balance);', 'Dice the tomatoes and cucumber into small, uniform pieces. Crumble the paneer into small chunks. Chop the parsley or coriander leaves finely.;\nTake two slices of sourdough or your preferred bread. Toast them in a pan or toaster until golden brown and crisp.;\nSpread 1 tbsp of hummus evenly over each toasted slice. Sprinkle the diced tomatoes and cucumbers on top. Add crumbled paneer evenly over the toast. Sprinkle chopped parsley or coriander for freshness. Season with salt, pepper, and peri peri masala (if using). Squeeze a few drops of fresh lemon juice over the top for a tangy kick.', 'Crunchy toast slathered with creamy hummus and topped with juicy tomatoes, crisp cucumber, crumbled paneer, and a zing of lemon — a quick, protein-packed delight.', 'Snacks', 'HummusToast(1).png', 'HummusToast(2).png', 'HummusToast(3).png', 'HummusToast(3).png'),
(15, 'Spinach Omelette', 'spinach omelette; protein breakfast; healthy omelette; quick egg recipe; green omelette; low carb meal; iron-rich breakfast; fluffy omelette; spicy omelette; keto-friendly', '1 Servings', '', '5 minutes', '10 minutes', 'Eggs – 2 (rich in protein and makes the omelette fluffy); Spinach (chopped) – 1½ cup (30g) (adds nutrition and a fresh, earthy taste); Onion (chopped) – 2 tbsp (20g) (adds crunch and mild sweetness); Green Chili (chopped, optional) – 1 small (for a spicy kick); Salt & Pepper – to taste (enhances flavor); Turmeric Powder (optional) – a pinch (adds color and anti-inflammatory benefits); Butter or Oil – 1 tsp (5g) (for cooking and flavor)', 'Chop the spinach finely to ensure even cooking. Dice the onion and green chili into small pieces.;\nIn a bowl, crack the eggs and beat them well until the mixture is smooth and slightly frothy. Add salt, pepper, and turmeric powder (if using) for seasoning.;\nHeat a non-stick pan over medium heat and add 1 tsp butter or oil. Add the chopped onions and green chili to the pan, sautéing for 30 seconds until slightly soft. Add the chopped spinach and cook for another minute until wilted.;\nPour the beaten eggs over the sautéed spinach mixture, tilting the pan to spread it evenly. Cook on medium-low heat for 2–3 minutes until the bottom is set. Flip the omelette carefully and cook for another 1–2 minutes until fully done.', 'A fluffy, protein-packed omelette bursting with the freshness of spinach, the crunch of onions, and a subtle spicy kick — perfect for a nutritious start to your day.', 'Breakfast', 'spinachomellet(1).png', 'spinachomellet(2).png', 'spinachomellet(3).png', 'spinachomellet(4).png'),
(16, 'Paneer Bhurji Toast', 'paneer bhurji toast; protein breakfast; vegetarian toast; Indian sandwich; healthy snack; spicy paneer toast; quick paneer recipe; toast ideas; evening snack; paneer on toast', '1-2 Servings', '5 minutes', '10 minutes', '15 minutes', 'Paneer (crumbled) – ½ cup (50g) (adds protein and richness); Whole Wheat Bread – 2 slices (a healthier alternative to refined bread); Onion (chopped) – 2 tbsp (20g) (adds crunch and a mild sweetness); Tomato (chopped) – 2 tbsp (20g) (adds tanginess and moisture); Capsicum (chopped, optional) – 2 tbsp (20g) (adds a slight crunch and fresh flavor); Green Chili (chopped, optional) – 1 small (adds spice and heat); Coriander Leaves (chopped) – 1 tbsp (for freshness and aroma); Turmeric Powder – ¼ tsp (adds color and mild earthiness); Red Chili Powder – ¼ tsp (adds spice and depth); Salt & Black Pepper – to taste (for seasoning); Butter or Ghee – 1 tsp (for cooking and flavor);', 'Crumble the paneer and set it aside. Chop the onion, tomato, capsicum, green chili, and coriander leaves finely.;\nHeat a pan over medium heat and add 1 tsp butter or ghee. Add the chopped onions and sauté for 1 minute until translucent. Add the tomatoes, capsicum, and green chili, and cook for another 2 minutes until softened. Sprinkle turmeric powder, red chili powder, salt, and black pepper, and mix well. Add the crumbled paneer and stir everything together. Cook for 2 more minutes on low flame. Turn off the heat and mix in the chopped coriander leaves.;\nToast the whole wheat bread slices in a toaster or on a tawa until crispy. Spread a thin layer of butter or ghee on the toasted bread.;\nEvenly spread the prepared paneer bhurji mixture over the toasted bread slices. Serve warm with ketchup or green chutney.', 'A hearty and spicy paneer bhurji loaded onto crispy toast — this high-protein treat is perfect for breakfast, a light meal, or a filling evening snack.', 'Breakfast', '', '', '', ''),
(17, 'Yogurt Salad', 'yogurt salad; curd salad; probiotic side; Indian salad; summer dish; healthy Indian recipe; low-calorie salad; vegetarian salad; cucumber tomato salad; raita style salad', '1-2 Servings', '10 minutes', '0 minutes', '10 minutes', 'Curd (Thick & Fresh Yogurt) – ½ cup (125g) (creamy base, rich in probiotics); Cucumber (chopped) – ¼ cup (30g) (adds freshness and crunch); Tomato (chopped, deseeded) – ¼ cup (30g) (adds juiciness and mild tang); Onion (chopped, optional) – 2 tbsp (20g) (adds a slight sharpness and texture); Carrot (grated, optional) – 2 tbsp (20g) (adds a natural sweetness and crunch); Coriander Leaves (chopped) – 1 tbsp (adds a refreshing aroma); Green Chili (chopped, optional) – 1 small (adds spice and heat); Salt & Black Pepper – to taste (for seasoning); Cumin Powder (roasted) – ¼ tsp (adds a warm, earthy flavor); Lemon Juice – ½ tsp (optional, for extra tanginess)', 'Wash and finely chop the cucumber, tomato (remove seeds to prevent excess moisture), onion, and green chili. Grate the carrot if using. Chop the coriander leaves finely.;\nIn a mixing bowl, whisk the curd until smooth and creamy. Add the chopped cucumber, tomato, onion, carrot, green chili, and coriander leaves. Sprinkle salt, black pepper, and roasted cumin powder. Add lemon juice if you prefer a slight tang.;\nMix everything well until all the ingredients are evenly coated with yogurt. Serve immediately as a refreshing side dish or refrigerate for 10-15 minutes before serving for a chilled effect.', 'A chilled and creamy yogurt salad packed with crunchy veggies, spices, and probiotics — the perfect refreshing side for any Indian meal.', 'Snacks', '', '', '', ''),
(18, 'Moong Dal Misi Roti', 'misi roti; moong dal roti; protein rich flatbread; Indian bread; healthy roti; leftover dal recipe; besan roti; vegetarian Indian flatbread; high protein lunch; ajwain roti', '4-5 Servings', '15 minutes', '10 minutes', '25 minutes', 'Wheat Flour (Whole Wheat Atta) – 1 cup (provides structure); Besan (Gram Flour) – ½ cup (adds a nutty flavor and crisp texture); Salt – to taste (enhances flavor); Hing (Asafoetida) – a pinch (aids digestion and adds aroma); Ajwain (Carom Seeds) – ½ tsp (boosts flavor and digestion); Ginger (grated) – 1 tsp (adds warmth and slight pungency); Onion (finely chopped) – ¼ cup (adds crunch and sweetness); Green Chili (finely chopped, optional) – 1 small (adds heat); Moong Dal (cooked leftover or soaked & drained) – ½ cup (adds protein and softness); Ghee (for cooking) – as required;', 'In a mixing bowl, combine wheat flour, besan, salt, hing, and ajwain. Add grated ginger, finely chopped onion, and green chili. Add cooked or soaked moong dal (do not add water, as the dal will provide moisture). Knead everything together to form a firm dough. If needed, add a little flour if the dough is too sticky. Rest the dough for 10 minutes to enhance the flavors.;\nDivide the dough into equal-sized portions and roll into small balls. Dust with a little flour and roll each ball into a medium-thick roti (not too thin).;\nHeat a tawa (griddle) on medium flame. Place the rolled roti on the hot tawa and cook for 30-40 seconds until small bubbles appear. Flip and apply a little ghee on the surface. Flip again and press gently with a spatula, cooking until golden brown spots appear. Flip once more, apply ghee on the other side, and cook until crisp and fully done.', 'A flavorful, protein-rich Indian flatbread made with moong dal, besan, and spices — perfect for a wholesome breakfast or lunch.', 'Lunch', '', '', '', ''),
(19, 'Moonglet (Fluffy Moong Dal Omelette – No Eggs!)', 'moong dal chilla; protein pancake; Indian vegan breakfast; savory pancake; dal omelette; healthy tiffin; plant-based protein; gluten-free; lentil pancake; weight loss recipe', '2-3 Servings', '10 minutes (excluding soaking time)', '10 minutes', '20 minutes (excluding soaking time)', 'Moong Dal (Split Yellow Lentils) – 1 cup (soaked for 4-5 hours); Salt – to taste (enhances flavor); Turmeric Powder – ¼ tsp (adds color & health benefits); Onion (finely chopped) – ¼ cup (adds crunch & sweetness); Tomato (finely chopped, deseeded optional) – ¼ cup (adds freshness); Capsicum (finely chopped) – ¼ cup (adds crunch & flavor); Carrot (grated or finely chopped) – ¼ cup (adds slight sweetness); Coriander Leaves (chopped) – 2 tbsp (adds freshness); Green Chili (finely chopped, optional) – 1 small (adds heat); Hing (Asafoetida) – a pinch (helps digestion & enhances taste); Baking Soda or Eno Salt – ½ tsp (optional, for fluffiness); Water – as needed (for blending); Oil or Ghee – for cooking;', 'Wash the moong dal thoroughly and soak it in water for 4-5 hours until soft. Drain the excess water and blend the dal into a smooth paste using a small amount of water (just enough to get a batter consistency).;\nTransfer the moong dal paste into a mixing bowl. Add salt, turmeric, chopped onion, tomato, capsicum, carrot, coriander leaves, green chili, and hing. Mix everything well to form a thick and fluffy batter. If using baking soda or Eno salt, add it just before cooking and mix gently to retain air bubbles.;\nHeat 1 tbsp oil or ghee in a non-stick or cast-iron pan over medium heat. Pour a thick layer of the batter into the pan (do not spread too thin; keep it like an omelet). Let it cook for 2-3 minutes on low-medium heat until the bottom turns golden brown. Poke small holes into the batter using a fork or spoon—this helps cook evenly and allows steam to escape. Flip carefully and cook the other side for 2-3 minutes until golden and crispy.', 'A savory and fluffy Indian-style lentil pancake packed with veggies and protein — ideal for a nutritious breakfast or light dinner.', 'Breakfast', '', '', '', ''),
(20, 'Buddha Bowl', 'buddha bowl; protein bowl; quinoa recipe; vegetarian lunch; fusion meal; healthy bowl; balanced meal; plant-based protein; easy lunch idea; meal prep friendly', '1-2 Servings', '10 minutes', '15 minutes', '25 minutes', 'Quinoa – 30-40g (or substitute with brown rice, couscous, or millet); Water – as needed (for cooking quinoa); Salt – to taste; Boiled Chickpeas – 30g (or substitute with Bengal gram, kidney beans (rajma), or black-eyed peas (lobia)); Onion (chopped) – ¼ cup; Bell Pepper (chopped) – ¼ cup; Carrot (chopped) – ¼ cup; Capsicum (chopped) – ¼ cup; Salt & Black Pepper – to taste; Paneer (cubed or crumbled) – 40g (or substitute with soya chunks); Chaat Masala – ½ tsp (for flavor); Hing (Asafoetida) – a pinch (helps digestion); Garlic Paste – 1 tsp (adds depth of flavor); Salt & Black Pepper – to taste; Olive Oil – 1 tsp (for richness);', 'In a pressure cooker, add 30-40g quinoa, enough water, and salt to taste. Cook on medium flame for 2 whistles, then let the pressure release naturally. Fluff the quinoa with a fork and set aside.;\nHeat a pan on medium heat and add the boiled chickpeas. Dry roast them for 4-5 minutes until slightly crispy. Remove from heat and set aside.;\nIn the same pan, add chopped onion, bell pepper, carrot, and capsicum. Sprinkle salt and black pepper to taste. Sauté for 2-3 minutes until slightly softened but still crunchy.;\nIn a small bowl, mix 40g paneer with salt and chaat masala for extra flavor. You can lightly pan-fry it for a crispier texture (optional).;\nIn a large bowl, layer the cooked quinoa as the base. Add the roasted chickpeas, sautéed vegetables, and seasoned paneer on top. Drizzle with hing, garlic paste, salt, black pepper, and olive oil. Mix well or keep the ingredients separate for a colorful, aesthetic look.', 'A colorful and nutrient-rich Buddha Bowl loaded with quinoa, chickpeas, paneer, and vibrant veggies – perfect for a wholesome and satisfying meal', 'Lunch', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'rajbir', 'rjbir@gmail.com', 'Qwerty'),
(8, 'andersonburger', 'burger@anderson.com', 'burGIR'),
(9, 'krishna', 'krishna@gmail.com', 'qw12'),
(10, 'dC', 'DC@xz', 'zxcesw'),
(12, 'dCs', 'DCa@xz', 'scasd'),
(13, 'sdva', 'avd@dsvd', 'a w'),
(14, 'cvWQf', 'azer@sdf', 'vsyh'),
(15, 'areg', 'w@et', '3c4t'),
(16, 'arege', 'w@ete', 'wed'),
(18, 'regv', 'krishnea@gmail.com', 'vestrd'),
(20, 'krishna', 'krishnaaa@gmail.com', 'ZFDba'),
(21, 'sidharth', '123@321', '12345'),
(26, 'krisha', '123@333', 'saw'),
(30, 'as', 'as@as', 'cxv'),
(31, 'Admin', 'Admin@gmail.com', 'qwert'),
(32, '', '', ''),
(33, 'krishna', 'cdsc@dcs', 'scdfv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `originals`
--
ALTER TABLE `originals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `draft`
--
ALTER TABLE `draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `originals`
--
ALTER TABLE `originals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
