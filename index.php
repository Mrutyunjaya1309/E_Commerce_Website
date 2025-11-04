<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Digital Electronics Components</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>SMART COMPONENTS FOR DIGITAL DEVICE</h1>
        <nav class="menu">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="http://localhost/gallery/login.php">Login</a>
            <a href="about.php">About</a>
            <a href="http://localhost/gallery/index.php#contact">Contact</a>
            <a href="http://localhost/gallery/index.php#gallery">gallery</a>
            

            
        </nav>

    </header>

    <main>
        <section id="home">
            <h2>Welcome to Digital Electronics Components</h2>
            <p>Explore the beauty of digital electronics devices with our best selection of components.</p>
            <section id="search">
                <input 
                    type="text" 
                    id="searchBar" 
                    placeholder="Search by component name  ..." 
                    onkeyup="searchPhotos()" 
                />
            </section>
        </section>

        <div class="gallery" id="gallery">
            <?php
            $photos = [
                ["file" => "images/photo1.jpg", "price" => "₹300-₹2500", "name" => "Arduino Uno R3 IC Board", "description" => "Microcontroller: ATmega328P.
Operating Voltage: 5V,
Input Voltage (recommended): 7-12V,
Digital I/O Pins: 14 (6 support PWM output),
Analog Input Pins: 6,
Clock Speed: 16 MHz,
Memory:
Flash: 32 KB (0.5 KB used by bootloader),
SRAM: 2 KB,
EEPROM: 1 KB,
Connectivity: USB for programming and serial communication,
Reset Button: Allows easy resetting of the board,
LED Indicators: Built-in LED on pin 13 for quick testing.","uses" => "It is widely used in embedded systems projects, such as controlling LEDs, motors, or sensors for home automation or robotics applications."],
                ["file" => "images/photo2.jpg", "price" => "₹100-₹250", "name" => "Ultrasonic Distance Sensor HC-SR04 Module", "description" => "Measurement Range:2 cm to 400 cm (0.02 m to 4 m),Accuracy:±3 mm for precise distance measurements.Operating Voltage:5V DC.Operating Current:Less than 15 mA, making it energy-efficient.
Operating Frequency:40 kHz ultrasonic sound waves,
Trigger and Echo Pins:Trigger pin initiates an ultrasonic pulse, and the Echo pin receives the reflected pulse.
Compact Design:Small and lightweight, suitable for space-constrained projects.
","uses" => "It is commonly used in robotics for obstacle detection and avoidance, helping robots navigate safely in their environments."],
                ["file" => "images/photo3.jpg", "price" => "₹120-₹2000", "name" => "Arduino Nano V3.x SMD Board,", "description" => "Processor: ATmega328P or ATmega168 microcontroller.
Operating Voltage: 5V,
Input Voltage (recommended): 7-12V,
Digital I/O Pins: 14 (6 of which can be used as PWM outputs),
Analog Input Pins: 8,
Flash Memory: 32KB (ATmega328P) or 16KB (ATmega168),
Clock Speed: 16 MHz,
Compact Size: Ideal for small projects.","uses" =>"It is commonly used in IoT (Internet of Things) projects to collect and process data from various sensors and transmit it to online platforms for monitoring or automation purposes"],
                    ["file" => "images/photo4.jpg", "price" => "₹250-₹600", "name" => "Arduino Uno R3 SMD Board, ","description" =>"ATmega328 microcontroller soldered directly onto the board (SMD type).
14 digital I/O pins and 6 analog input pins for versatile connectivity.
USB interface for programming and power supply.
","uses" =>"Prototyping and building electronic projects.
Interfacing with sensors, actuators, and shields.
Robotics and automation projects."],
                    ["file" => "images/photo5.jpg", "price" => "₹150-₹500", "name" => "DF Player Mini MP3 Player, ","description" =>"Supports MP3, WAV, and WMA formats.
Built-in DAC for high-quality audio output.
Can be controlled via UART, GPIO, or with an Arduino.
","uses" =>"Audio playback in interactive projects like alarms and announcements.
Creating talking robots or audio-based art installations.
Background music in DIY home automation systems."],
                    ["file" => "images/photo6.jpg", "price" => "₹50-₹200", "name" => "Infrared Obstacle Avoidance IR Sensor Module,","description" =>"Detects objects using infrared light reflection.
Adjustable detection distance via a potentiometer.
Low power consumption and easy interfacing with microcontrollers.
 ","uses" =>"Obstacle detection in robots.
Proximity detection in home automation systems.
Line-following robots and safety systems.
"],
                    ["file" => "images/photo7.jpg", "price" => "₹50-₹400", "name" => "Infrared PIR Motion Sensor Module HC-SR501,","description" =>"Detects human motion using passive infrared technology.
Adjustable sensitivity and delay time.
Low power consumption with wide detection range.
","uses" =>"Automatic lighting and home security systems.
Intruder detection in surveillance systems.
Motion-triggered devices like cameras and alarms"],
                    ["file" => "images/photo8.jpg", "price" => "₹50-₹100", "name" => "Sound Sensor Module, ","description" =>"Detects sound waves and converts them into electrical signals.
Adjustable sensitivity with onboard potentiometer.
Compact design, suitable for various projects.","uses" =>"Voice-activated systems like lights and fans.
Noise monitoring in industrial or home environments.
Interactive sound-based projects."],
                    ["file" => "images/photo9.jpg", "price" => "₹50-₹100", "name" => "NTC Thermistor Temperature Sensor Module,","description" =>"NTC (Negative Temperature Coefficient) thermistor for temperature sensing.
Outputs analog signals proportional to temperature.
Compact and lightweight, ideal for portable systems.
","uses" =>"Temperature measurement in home appliances.
Overheat protection in electronics.
Environmental monitoring systems."],
                    ["file" => "images/photo10.jpg", "price" => "₹100-₹500", "name" => " MQ-2 LPG Butane Hydrogen Gas Sensor Detector Module,","description" =>"Sensitive to LPG, butane, propane, methane, and hydrogen gases.
Analog and digital output pins for easy interfacing.
Fast response and high sensitivity.","uses" =>"Gas leakage detection in homes or industries.
Safety systems in kitchens and laboratories.
Environmental monitoring of gas levels."],
                    ["file" => "images/photo11.jpg", "price" => "₹50-₹500", "name" => "Soil Moister Arduino Sensor,","description" =>"Measures soil moisture content accurately.
Outputs analog voltage and digital signal.
Low power consumption and easy interfacing with microcontrollers.","uses" =>"Smart irrigation systems.
Monitoring soil conditions in agriculture.
Plant care automation for gardens."],
                    ["file" => "images/photo12.jpg", "price" => "₹150-₹250", "name" => "Sg90 Servo motor module,","description" =>"Lightweight micro servo with a 180° rotation range.
Operates on 4.8-6V with low power requirements.
High precision with metal or nylon gears for durability.
","uses" =>"Controlling robotic arms and grippers.
Steering mechanisms in small robotic vehicles.
Adjustable mechanisms in model airplanes or boats."],
                    ["file" => "images/photo13.jpg", "price" => "₹170-₹300", "name" => "Mg 90 Metal gear Servo motor module,","description" =>"Durable metal gears for high torque and reliability.
180° rotation range for precise control.
Operates at 4.8-6V with high strength.
","uses" =>"Robotics projects requiring heavy-duty servos.
Pan-and-tilt camera mounts.
Actuating mechanisms in RC planes, cars, and boats.
"],
                    ["file" => "images/photo14.jpg", "price" => "₹250-₹500", "name" => "300 To 3000 Rpm Electric DC High Torque Motor,","description" =>"High torque output for driving heavy loads.
Adjustable RPM range from 300 to 3000.
Durable build with long lifespan.","uses" =>"Automation in conveyor belts and machinery.
Robotics applications requiring high torque.
Powering wheels in DIY electric vehicles."],
                    ["file" => "images/photo15.jpg", "price" => "200-₹400", "name" => "12v DC 200 RPM  Centre Shaft DC Geared Motor,","description" =>"High torque and stable operation at 12V.
200 RPM speed, suitable for precision tasks.
Metal gearbox for durability and efficiency.","uses" =>"Driving wheels in small robots.
Conveyor belt mechanisms.
Automation in mechanical projects."],
                    ["file" => "images/photo16.jpg", "price" => "₹50-₹100", "name" => "5V 200RPM Microbit TT DC, Motor 1:48,","description" =>"Gear ratio of 1:48 for optimized speed and torque.
Operates efficiently at 5V.
Lightweight and compact design.","uses" =>"Simple robotics projects.
Line-following and obstacle-avoiding robots.
Small conveyor systems."],
                    ["file" => "images/photo17.jpg", "price" => "₹120-₹300", "name" => "L293D Motor Driver Shield for Arduino,","description" =>"Controls up to 4 DC motors or 2 stepper motors.
Built-in current sensing and thermal shutdown protection.
Compatible with Arduino and other microcontrollers.","uses" =>"Robotics and automation projects.
Controlling motors in home appliances.
Driving actuators for mechanical systems."],
                    ["file" => "images/photo18.jpg", "price" => "₹200-₹500", "name" => "N20-3V-200 RPM Micro Metal Gear-box DC Motor,","description" =>"Compact motor with metal gearbox for durability.
Operates efficiently at 3V.
Provides high torque and precise control.
","uses" =>"Miniature robotics applications.
Precision mechanisms in locks and toys.
Lightweight automation projects."],
                    ["file" => "images/photo19.jpg", "price" => "₹5-₹100", "name" => "capacitor bank ac capacitor price,","description" =>"Designed for power factor correction in AC circuits.
Helps improve voltage regulation and reduce energy losses.
High capacitance value for large-scale applications.","uses" =>"Power factor correction in industrial electrical systems.
Energy savings in motors, transformers, and other AC-driven systems.
Stabilizing voltage in electrical grids to prevent power dips."],
                    ["file" => "images/photo20.jpg", "price" => "₹120-₹800", "name" => "DT830D - 1000V DC/750V AC Digital Multimeter,","description" =>"Measures DC/AC voltage, current, resistance, and continuity.
Supports up to 1000V DC and 750V AC with high accuracy.
Includes a large LCD display for easy reading of measurements.","uses" =>"Troubleshooting and diagnostics of electrical circuits.
Testing components in electronics like resistors, diodes, and capacitors.
Measuring the voltage and current of power supplies in various applications."],
                    ["file" => "images/photo21.jpg", "price" => "₹50-₹200", "name" => "Flame Sensor Module,,","description" =>"Detects the presence of flames or fire by sensing infrared radiation.
High sensitivity with a quick response time.
Adjustable sensitivity for different detection distances.","uses" =>"Fire detection systems in industrial and domestic settings.
Automatic fire alarm systems in buildings.
Safety monitoring in areas prone to combustion or flame hazards."],
                    ["file" => "images/photo22.jpg", "price" => "₹50-₹200", "name" => "5v DC Relay Module,","description" =>"Controls high voltage AC appliances using a low voltage DC signal.
Optocoupler isolation for protection against high voltage spikes.
Compatible with microcontrollers like Arduino for automation.","uses" =>"Automation systems controlling high voltage devices like motors and lights.
Used in home automation for controlling home appliances.
Switching devices on and off in security or monitoring systems."],
                    ["file" => "images/photo23.jpg", "price" => "₹30-₹100", "name" => "3.3-5V Passive Buzzer Alarm Module ,","description" =>"Operates with a voltage range of 3.3V to 5V.
Emits sound signals with different tones or frequencies.
Small size for easy integration into various projects.
","uses" =>"Warning or notification systems in electronic projects.
Alarms for motion detectors or security systems.
Signal indicators in robotics or automation systems."],
                    ["file" => "images/photo24.jpg", "price" => "₹50-₹100", "name" => "16x2 Yellow or Green Backlight Alphanumeric Character LCD Display,","description" =>"Displays 16 characters per row and 2 rows of text.
Yellow or green backlight options for improved visibility.
Compatible with Arduino and other microcontrollers for easy integration.","uses" =>"Displaying data or messages in embedded systems.
Used in temperature, humidity, or sensor display systems.
Provides user interfaces for project monitoring and control."],
                    ["file" => "images/photo25.jpg", "price" => "₹50-₹100", "name" => "PS2 Joystick Module Breakout Sensor,","description" =>"Detects the movement in two axes (X and Y) for directional control.
Includes push-button functionality for additional user input.
Compatible with microcontrollers like Arduino for gaming or robotic control.","uses" =>"Joystick input for gaming applications.
Used in robotic control systems for direction and action control.
Interface for user-controlled devices in DIY projects and robots."],
["file" => "images/photo26.jpg", "price" => "₹40-100", "name" => "jumper wires,","description" =>"Flexibility: They are made of flexible insulation material to connect components easily in a circuit.
Variety of Lengths: Available in different lengths to suit various applications.
Connector Types: Come with different end types, such as male-to-male, male-to-female, and female-to-female.
Insulation Material: Typically insulated with PVC or silicone to prevent short circuits.
","uses"=>"Prototyping: Frequently used to create temporary connections during circuit prototyping.
Testing: Handy for testing and debugging circuits.
Educational Purposes: Used in electronics education to teach circuit connections.
Modular Builds: Enable easy assembly and disassembly of circuit components.
Quick Repairs: Can bridge faulty traces or connections on a circuit board.
"],
["file" => "images/photo27.jpg", "price" => "₹3-₹10", "name" => "Resisters,","description" =>"Resistance Value: Available in a wide range of resistance values (ohms) to control current flow.
Tolerance: Indicated by color coding, it shows the permissible deviation from the resistance value.
Power Rating: Designed to handle specific power dissipation without overheating (e.g., 0.25W, 1W).","uses"=>"Current Limiting: Limits the amount of current flowing in a circuit to protect components.
Voltage Divider: Creates a proportional division of voltage in circuits.
Signal Conditioning: Filters or adjusts signals in analog circuits. "]
// Add more photos as needed...
            ];

            foreach($photos as $photo) {
                if (file_exists($photo["file"])) {
                    echo '<div class="photo-card">';
                    echo '<a href="details.php?file=' . urlencode($photo["file"]) . '&name=' . urlencode($photo["name"]) . '&description=' . urlencode($photo["description"]) . '&price=' . urlencode($photo["price"]) . '&uses=' . urlencode($photo["uses"]) . '" target="_blank">';
                    echo '<img src="' . htmlspecialchars($photo["file"]) . '" alt="' . htmlspecialchars($photo["name"]) . '">';
                    echo '</a>';
                    echo '<h3>' . htmlspecialchars($photo["name"]) . '</h3>';
                    echo '<p class="description"><strong>Description:</strong> ' . htmlspecialchars($photo["description"]) . '</p>';
                    echo '<p class="uses"><strong>Uses:</strong> ' . htmlspecialchars($photo["uses"]) . '</p>';
                    echo '<p class="price"><strong>Price:</strong> ' . htmlspecialchars($photo["price"]) . '</p>';
                    echo '</div>';
                } else {
                    echo '<p style="color:red;">Error: File not found - ' . htmlspecialchars($photo["file"]) . '</p>';
                }
            }
            
            ?>
        </div>

        <section id="contact">
            <h2>Contact Us</h2>
            <p>Phone: +91-886-709-4215</p>
            <p>Phone: +91-807-358-3599</p>
            <p>Email: support@digitalcomponent.com</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Digital Electronics Components. All rights reserved.</p>
        <p>
            Share our website: 
            <a href="http://localhost/gallery/index.php#home" target="_blank" id="shareLink">http://localhost/gallery/index.php#home</a>
        </p>
        <button onclick="copyLink()">Copy Link</button>
    </footer>

    <!-- Add the searchPhotos JavaScript function -->
    <script>
        function searchPhotos() {
            // Get the search query
            const query = document.getElementById('searchBar').value.toLowerCase();
            // Get all photo cards
            const photoCards = document.querySelectorAll('.photo-card');
            
            // Loop through photo cards and filter based on the query
            photoCards.forEach(card => {
                const photoName = card.querySelector('h3').textContent.toLowerCase();
                if (photoName.includes(query)) {
                    card.style.display = ''; // Show matching photo
                } else {
                    card.style.display = 'none'; // Hide non-matching photo
                }
            });
        }
        function copyLink() {
            const shareLink = "http://localhost/gallery/index.php#home";
            navigator.clipboard.writeText(shareLink)
                .then(() => alert("Link copied to clipboard!"))
                .catch(err => console.error("Error copying the link:", err));
        }
        

    </script>
</body>
</html>
