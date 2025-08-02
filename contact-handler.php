<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Basic validation
    if (!$name || !$email || !$subject || !$message) {
        die("All fields are required.");
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP settings for Gmail (localhost testing)
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com'; // Hostinger SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@dnrengineering.org'; // Updated to your provided email
        $mail->Password   = 'Dnr1234#';      // Hostinger email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL for Hostinger
        $mail->Port       = 465; // SSL port for Hostinger

        // Sender and recipient
        $mail->setFrom('enquire@dnrengineering.com', 'DnR Engineering Website');
        $mail->addAddress('enquire@dnrengineering.com'); // Where you want to receive the mail

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "Contact Form: " . htmlspecialchars($subject);
        $mail->Body    = "<strong>Name:</strong> " . htmlspecialchars($name) . "<br>"
            . "<strong>Email:</strong> " . htmlspecialchars($email) . "<br>"
            . "<strong>Subject:</strong> " . htmlspecialchars($subject) . "<br>"
            . "<strong>Message:</strong><br>" . nl2br(htmlspecialchars($message));

        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
<?php
// ===== CONTACT FORM HANDLER =====

// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Remove JSON headers for standard form POST

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<script>alert("Method not allowed."); window.history.back();</script>';
    exit;
}

// Configuration
$config = [
    'to_email' => 'enquire@dnrengineering.ore',
    'from_email' => 'enquire@dnrengineering.ore',
    'from_name' => 'DnR Engineering Website',
    'subject_prefix' => 'New Project Inquiry - ',
    'smtp_host' => 'smtp.hostinger.com',
    'smtp_port' => 465,
    'smtp_username' => 'info@dnrengineering.org',
    'smtp_password' => 'Dnr1234#',
    'business_hours' => 'Monday - Friday: 8:00 AM - 6:00 PM, Saturday: 9:00 AM - 3:00 PM',
    'response_time' => '24 hours'
];

// Validation rules
// Only validate fields present in the HTML form
$validation_rules = [
    'name' => ['required' => true, 'min_length' => 2, 'max_length' => 80],
    'email' => ['required' => true, 'email' => true],
    'subject' => ['required' => true, 'min_length' => 2, 'max_length' => 120],
    'message' => ['required' => true, 'min_length' => 10, 'max_length' => 2000]
];

/**
 * Sanitize input data
 */
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

/**
 * Validate form data
 */
function validateForm($data, $rules) {
    $errors = [];
    
    foreach ($rules as $field => $fieldRules) {
        $value = isset($data[$field]) ? sanitizeInput($data[$field]) : '';
        
        // Required field check
        if (isset($fieldRules['required']) && $fieldRules['required'] && empty($value)) {
            $errors[$field] = ucfirst($field) . ' is required';
            continue;
        }
        
        if (!empty($value)) {
            // Email validation
            if (isset($fieldRules['email']) && $fieldRules['email'] && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $errors[$field] = 'Please enter a valid email address';
            }
            
            // Length validation
            if (isset($fieldRules['min_length']) && strlen($value) < $fieldRules['min_length']) {
                $errors[$field] = ucfirst($field) . ' must be at least ' . $fieldRules['min_length'] . ' characters';
            }
            
            if (isset($fieldRules['max_length']) && strlen($value) > $fieldRules['max_length']) {
                $errors[$field] = ucfirst($field) . ' must not exceed ' . $fieldRules['max_length'] . ' characters';
            }
        }
    }
    
    return $errors;
}

/**
 * Send email using PHPMailer (if available) or mail() function
 */
function sendEmail($to, $subject, $body, $from_email, $from_name) {
    // Check if PHPMailer is available
    if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        return sendEmailWithPHPMailer($to, $subject, $body, $from_email, $from_name);
    } else {
        return sendEmailWithMailFunction($to, $subject, $body, $from_email, $from_name);
    }
}

/**
 * Send email using PHPMailer (recommended)
 */
function sendEmailWithPHPMailer($to, $subject, $body, $from_email, $from_name) {
    global $config;
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = $config['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp_username'];
        $mail->Password = $config['smtp_password'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = $config['smtp_port'];
        // Recipients
        $mail->setFrom($from_email, $from_name);
        $mail->addAddress($to);
        $mail->addReplyTo($from_email, $from_name);
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Email sending failed: " . $mail->ErrorInfo);
        return false;
    }
}

/**
 * Send email using PHP mail() function (basic)
 */
function sendEmailWithMailFunction($to, $subject, $body, $from_email, $from_name) {
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . $from_name . ' <' . $from_email . '>',
        'Reply-To: ' . $from_email,
        'X-Mailer: PHP/' . phpversion()
    ];
    
    return mail($to, $subject, $body, implode("\r\n", $headers));
}

/**
 * Generate HTML email template
 */
function generateEmailTemplate($data) {
    $serviceNames = [
        'residential' => 'Residential Construction',
        'commercial' => 'Commercial Construction',
        'industrial' => 'Industrial Construction',
        'architectural' => 'Architectural Design',
        'renovation' => 'Renovation & Remodeling',
        'consultation' => 'Project Consultation',
        'other' => 'Other Services'
    ];
    
    $serviceName = isset($serviceNames[$data['service']]) ? $serviceNames[$data['service']] : $data['service'];
    
    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Contact Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #ff6b35 0%, #f39c12 100%); color: white; padding: 20px; text-align: center; }
            .content { background: #f8f9fa; padding: 30px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #2c3e50; }
            .value { background: white; padding: 10px; border-radius: 5px; margin-top: 5px; }
            .footer { text-align: center; padding: 20px; color: #7f8c8d; font-size: 14px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>DnR Engineering Construction</h1>
                <p>New Project Inquiry Received</p>
            </div>
            <div class="content">
                <div class="field">
                    <div class="label">Full Name:</div>
                    <div class="value">' . htmlspecialchars($data['firstName'] . ' ' . $data['lastName']) . '</div>
                </div>
                <div class="field">
                    <div class="label">Email Address:</div>
                    <div class="value">' . htmlspecialchars($data['email']) . '</div>
                </div>
                <div class="field">
                    <div class="label">Phone Number:</div>
                    <div class="value">' . htmlspecialchars($data['phone']) . '</div>
                </div>
                <div class="field">
                    <div class="label">Service Required:</div>
                    <div class="value">' . htmlspecialchars($serviceName) . '</div>
                </div>
                <div class="field">
                    <div class="label">Project Details:</div>
                    <div class="value">' . nl2br(htmlspecialchars($data['message'])) . '</div>
                </div>
                <div class="field">
                    <div class="label">Submission Date:</div>
                    <div class="value">' . date('F j, Y \a\t g:i A') . '</div>
                </div>
            </div>
            <div class="footer">
                <p>This inquiry was submitted through the DnR Engineering Construction website.</p>
                <p><strong>Response Required:</strong> Please contact the client within 24 hours during business hours.</p>
                <p><strong>Business Hours:</strong> Monday - Friday: 8:00 AM - 6:00 PM, Saturday: 9:00 AM - 3:00 PM</p>
            </div>
        </div>
    </body>
    </html>';
    
    return $html;
}

/**
 * Log form submission
 */
function logSubmission($data) {
    $logFile = 'contact_submissions.log';
    $logEntry = date('Y-m-d H:i:s') . ' - ' . $data['email'] . ' - ' . $data['firstName'] . ' ' . $data['lastName'] . PHP_EOL;
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

/**
 * Rate limiting to prevent spam
 */
function checkRateLimit($ip) {
    $rateLimitFile = 'rate_limit.json';
    $maxSubmissions = 5; // Max submissions per hour
    $timeWindow = 3600; // 1 hour in seconds
    
    if (!file_exists($rateLimitFile)) {
        file_put_contents($rateLimitFile, json_encode([]));
    }
    
    $rateLimitData = json_decode(file_get_contents($rateLimitFile), true);
    $currentTime = time();
    
    // Clean old entries
    $rateLimitData = array_filter($rateLimitData, function($timestamp) use ($currentTime, $timeWindow) {
        return ($currentTime - $timestamp) < $timeWindow;
    });
    
    // Check if IP has exceeded limit
    $ipSubmissions = array_filter($rateLimitData, function($timestamp, $submissionIp) use ($ip) {
        return $submissionIp === $ip;
    }, ARRAY_FILTER_USE_BOTH);
    
    if (count($ipSubmissions) >= $maxSubmissions) {
        return false;
    }
    
    // Add current submission
    $rateLimitData[$ip . '_' . $currentTime] = $currentTime;
    file_put_contents($rateLimitFile, json_encode($rateLimitData));
    
    return true;
}

// ===== MAIN PROCESSING =====

try {
    // Get client IP
    $clientIp = $_SERVER['REMOTE_ADDR'];
    
    // Check rate limit
    if (!checkRateLimit($clientIp)) {
        echo '<script>alert("Too many submissions. Please try again later."); window.history.back();</script>';
        exit;
    }
    
    // Get POST data
    $input = $_POST;

    // Validate form data
    $errors = validateForm($input, $validation_rules);

    if (!empty($errors)) {
        // Show error and go back
        echo '<script>alert("Validation failed: ' . implode(' | ', $errors) . '"); window.history.back();</script>';
        exit;
    }

    // Sanitize data
    $cleanData = [];
    foreach ($input as $key => $value) {
        $cleanData[$key] = sanitizeInput($value);
    }

    // Generate simple email content
    $emailBody = "Name: {$cleanData['name']}\nEmail: {$cleanData['email']}\nSubject: {$cleanData['subject']}\nMessage:\n{$cleanData['message']}";
    $subject = "Contact Form: {$cleanData['subject']}";

    // Send email
    $emailSent = sendEmail(
        $config['to_email'],
        $subject,
        nl2br(htmlspecialchars($emailBody)),
        $config['from_email'],
        $config['from_name']
    );
    
    if ($emailSent) {
        // Log successful submission
        logSubmission($cleanData);
        // Show success and redirect
        echo '<script>alert("Thank you for contacting us! We will get back to you soon."); window.location.href = "index.html#contact";</script>';
        exit;
    } else {
        echo '<script>alert("Sorry, there was a problem sending your message. Please try again later."); window.history.back();</script>';
        exit;
    }
    
} catch (Exception $e) {
    error_log('Contact form error: ' . $e->getMessage());
    echo '<script>alert("An unexpected error occurred. Please try again later."); window.history.back();</script>';
}

/**
 * Generate auto-reply email template
 */
function generateAutoReplyTemplate($data) {
    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank you for contacting DnR Engineering</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #ff6b35 0%, #f39c12 100%); color: white; padding: 30px; text-align: center; }
            .content { background: #f8f9fa; padding: 30px; }
            .highlight { background: white; padding: 20px; border-radius: 10px; margin: 20px 0; border-left: 4px solid #ff6b35; }
            .footer { text-align: center; padding: 20px; color: #7f8c8d; }
            .btn { display: inline-block; background: #ff6b35; color: white; padding: 12px 24px; text-decoration: none; border-radius: 25px; margin: 10px 0; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>DnR Engineering Construction</h1>
                <p>Thank you for reaching out to us!</p>
            </div>
            <div class="content">
                <p>Dear ' . htmlspecialchars($data['firstName']) . ',</p>
                
                <p>Thank you for contacting DnR Engineering Construction. We have received your project inquiry and our experienced team will review your requirements in detail.</p>
                
                <div class="highlight">
                    <h3>Next Steps in Our Process:</h3>
                    <ul>
                        <li><strong>Project Review:</strong> Our engineering team will analyze your requirements</li>
                        <li><strong>Initial Contact:</strong> We will call you within 24 hours during business hours</li>
                        <li><strong>Site Consultation:</strong> If needed, we will schedule a site visit</li>
                        <li><strong>Proposal & Quote:</strong> We will provide a detailed project proposal with timeline and costs</li>
                    </ul>
                </div>
                
                <p>With over 18 years of experience in Ghana\'s construction industry, we are committed to delivering quality projects on time and within budget.</p>
                
                <div style="text-align: center;">
                    <a href="https://dnrengineering.org" class="btn">Visit Our Website</a>
                </div>
                
                <p>If you have any urgent questions, please call us at <strong>+233 30 123 4567</strong> or WhatsApp <strong>+233 24 987 6543</strong>.</p>
                
                <p>Best regards,<br>
                <strong>The DnR Engineering Team</strong></p>
            </div>
            <div class="footer">
                <p>DnR Engineering Construction<br>
                East Legon Hills, Accra, Ghana<br>
                Phone: +233 30 123 4567 | Mobile: +233 24 987 6543<br>
                Email: info@dnrengineering.com.gh</p>
            </div>
        </div>
    </body>
    </html>';
    
    return $html;
}
?>
