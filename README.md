# DnR Engineering Construction - Professional Construction Company Website

A comprehensive, modern website for DnR Engineering Construction, Ghana's premier construction and engineering firm. Built with advanced animations, responsive design, and professional functionality to showcase construction expertise and attract clients.

## 🏗️ Company Overview

DnR Engineering Construction has been Ghana's leading construction company since 2007, specializing in:
- **Residential Construction**: Custom homes, estates, and housing developments
- **Commercial Construction**: Office buildings, retail spaces, and corporate facilities  
- **Industrial Construction**: Manufacturing plants, warehouses, and industrial facilities
- **Architectural Design**: Climate-responsive design and 3D BIM modeling
- **Project Management**: End-to-end construction project delivery
- **Renovation Services**: Heritage restoration and modern upgrades

## 🚀 Website Features

### 📱 **Professional Design**
- Modern, construction-industry focused design
- Mobile-first responsive layout optimized for all devices
- Professional color scheme reflecting trust and reliability
- High-quality imagery placeholders for project showcases

### 🎨 **Advanced Animations**
- GSAP-powered smooth animations and micro-interactions
- Scroll-triggered animations for engaging user experience
- Custom cursor with magnetic effects
- Animated preloader with company branding
- Parallax effects and smooth scrolling

### 💼 **Business-Focused Content**
- Detailed service descriptions for different construction types
- Project portfolio with categorized filtering (Residential/Commercial/Industrial)
- Professional team profiles highlighting expertise
- Client testimonials and company statistics
- Comprehensive contact information and inquiry forms

### 🔧 **Technical Excellence**
- **Performance Optimized**: Fast loading with lazy loading and optimized assets
- **SEO Ready**: Semantic HTML, meta tags, and Ghana-focused keywords
- **Accessibility Compliant**: ARIA labels, keyboard navigation, screen reader support
- **Cross-browser Compatible**: Modern browser support with progressive enhancement
- **Contact System**: Advanced PHP contact form with validation and auto-responses

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Animations**: GSAP (GreenSock Animation Platform) with ScrollTrigger
- **Styling**: Modern CSS with custom properties, Grid, and Flexbox
- **Backend**: PHP 7.4+ for contact form processing and email handling
- **Email System**: PHPMailer with SMTP configuration
- **Fonts**: Google Fonts (Inter for body text, Playfair Display for headings)
- **Icons**: Font Awesome 6 for professional iconography
- **Development**: Local development with Python HTTP server

## 📁 Project Structure

```
rans/
├── index.html                 # Main website file with all sections
├── contact-handler.php        # PHP contact form processor with validation
├── README.md                 # Project documentation
├── assets/
│   ├── css/
│   │   ├── styles.css        # Main stylesheet (1,522 lines)
│   │   └── placeholders.css  # Development placeholder styles
│   ├── js/
│   │   ├── main.js          # Core JavaScript functionality (474 lines)
│   │   └── animations.js    # GSAP animations and effects (771 lines)
│   └── images/              # Image assets directory (currently empty)
│       ├── logo.png         # Company logo (needed)
│       ├── hero-bg.jpg      # Hero section background (needed)
│       ├── about-*.jpg      # About section images (needed)
│       ├── project-*.jpg    # Project portfolio images (needed)
│       └── team-*.jpg       # Team member photos (needed)
```

## 🎯 Business Sections

### 🏠 **Homepage**
- **Hero Section**: Compelling headline with company statistics (750+ projects, 18+ years, 85+ team members)
- **Call-to-Action**: Primary CTAs for project inquiries and consultation requests
- **Statistics Counter**: Animated counters showing company achievements

### 🏢 **About Section**  
- **Company Story**: 18+ years of experience in Ghana's construction industry
- **Key Features**: ISO 9001:2015 certification, local expertise, sustainable building practices
- **Safety Record**: Zero incidents in 2024, emphasizing safety-first culture

### 🔧 **Services Section**
- **Architectural Design & Planning**: Climate-responsive design for Ghana's conditions
- **General Construction**: End-to-end construction with quality assurance
- **Renovation & Remodeling**: Including heritage restoration services
- **Project Management & Consultancy**: Feasibility studies and permit processing

### 🏗️ **Projects Portfolio**
- **Filterable Gallery**: Projects categorized by Residential, Commercial, Industrial
- **Featured Projects**:
  - Executive Villa Complex - East Legon (12 luxury units)
  - Tema Industrial Hub (15-floor office complex)
  - Kumasi Manufacturing Plant (25,000 sqm pharmaceutical facility)
  - Takoradi Residential Estate (150-unit affordable housing)

### 👥 **Team Section**
- **Roland Darko**: Co-Founder & Managing Director (18+ years experience)
- **Ransford Atiakpo**: Co-Founder & Lead Engineer (Chartered Engineer)
- **Edem Dave Desu**: Senior Project Manager (PMP certified, 12+ years)

### 📞 **Contact Section**
- **Head Office**: East Legon Hills, Accra, Greater Accra Region
- **Multiple Contact Methods**: Office, mobile, emergency lines
- **Professional Email**: .com.gh domain for local credibility
- **Advanced Contact Form**: Service-specific inquiries with auto-responses
│   └── videos/              # Video assets (add background videos)
```

## 🎨 Design System

### Color Palette
- **Primary**: #ff6b35 (Orange)
- **Secondary**: #2c3e50 (Dark Blue)
- **Accent**: #f39c12 (Golden)
- **Text Dark**: #2c3e50
- **Text Light**: #7f8c8d
- **Background**: #f8f9fa

### Typography
- **Headings**: Playfair Display (Serif)
- **Body**: Inter (Sans-serif)

### Animations
- **Entrance**: Fade in with slide up
- **Hover**: Scale and lift effects
- **Scroll**: Parallax and reveal animations
- **Transitions**: Smooth cubic-bezier easing

## 🚀 Setup Instructions

### 1. Basic Setup (Static HTML)
1. Clone or download the project files
2. Add your images to `assets/images/` directory
3. Add background video to `assets/videos/` directory
4. Open `index.html` in a web browser

### 2. Full Setup (with PHP backend)
1. Upload files to a web server with PHP support
2. Configure email settings in `contact-handler.php`
3. Update SMTP credentials for email functionality
4. Test contact form submission

### 3. Local Development
1. Use a local server (XAMPP, WAMP, or Live Server)
2. Navigate to the project directory
3. Access via `http://localhost/rans/`

## 📝 Content Customization

### Images Required
Add these images to `assets/images/` directory:
- `logo.png` - Company logo
- `about-main.jpg` - Main about section image
- `about-1.jpg`, `about-2.jpg` - Additional about images
- `project-1.jpg` to `project-4.jpg` - Project showcase images
- `team-1.jpg` to `team-3.jpg` - Team member photos

### Video Assets
Add to `assets/videos/` directory:
- `construction-hero.mp4` - Hero section background video

### Text Content
Update the following in `index.html`:
- Company information and contact details
- Team member names and descriptions
- Project details and descriptions
- Service offerings

## ⚙️ Configuration

### Contact Form Setup
1. Open `contact-handler.php`
2. Update email configuration:
   ```php
   $config = [
       'to_email' => 'your-email@company.com',
       'smtp_username' => 'your-smtp-username',
       'smtp_password' => 'your-smtp-password',
   ];
   ```

### Google Analytics (Optional)
Add your Google Analytics tracking code before the closing `</head>` tag.

### SEO Optimization
- Update meta descriptions and titles
- Add Open Graph tags for social sharing
- Include structured data markup

## 🎯 Performance Optimization

### Implemented Optimizations
- **Image Lazy Loading**: Images load as they enter viewport
- **Event Throttling**: Scroll events are throttled for better performance
- **CSS Minification**: Ready for production minification
- **JavaScript Optimization**: Modular code structure
- **Resource Preloading**: Critical resources are preloaded

### Recommended Enhancements
- Compress images (WebP format recommended)
- Enable Gzip compression on server
- Use CDN for static assets
- Implement service worker for caching

## 🔧 Browser Support

- **Chrome**: 70+
- **Firefox**: 65+
- **Safari**: 12+
- **Edge**: 79+
- **Mobile**: iOS Safari 12+, Chrome Mobile 70+

## 📱 Responsive Breakpoints

- **Mobile**: 480px and below
- **Tablet**: 768px and below
- **Desktop**: 992px and above
- **Large Desktop**: 1200px and above

## 🐛 Troubleshooting

### Common Issues

1. **Animations not working**
   - Check if GSAP is loading correctly
   - Verify ScrollTrigger plugin is included
   - Check browser console for JavaScript errors

2. **Contact form not sending emails**
   - Verify PHP is enabled on server
   - Check SMTP configuration
   - Ensure proper file permissions

3. **Images not loading**
   - Verify image paths are correct
   - Check file naming conventions
   - Ensure images are in correct directory

4. **Mobile responsiveness issues**
   - Test on actual devices
   - Use browser developer tools
   - Check viewport meta tag

## 🔄 Updates and Maintenance

### Regular Tasks
- Update content and project portfolio
- Check for broken links and images
- Monitor contact form submissions
- Update team member information
- Review and update service offerings

### Security Considerations
- Keep PHP updated
- Validate all form inputs
- Implement rate limiting
- Use HTTPS for production
- Regularly backup website files

## 🤝 Contributing

To contribute to this project:
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is created for DnR Engineering Construction. All rights reserved.

## 📞 Support

For technical support or questions:
- Email: support@dnrengineering.com
- Phone: +233 24 123 4567

---

Built with ❤️ for DnR Engineering Construction
