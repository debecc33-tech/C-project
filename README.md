# Real Estate Development Project

![Logo](public/assets/images/logo.png)

## 🏢 About The Project

A modern real estate development platform built with Laravel and modern frontend technologies. The platform showcases luxury real estate projects, providing an immersive experience for potential investors and buyers.

## ✨ Key Features

- **Interactive Hero Section**: Dynamic slider showcasing featured properties
- **Responsive Design**: Fully responsive across all devices
- **Modern UI/UX**: Sleek animations and transitions
- **Project Showcase**: Detailed project galleries and information
- **News & Media Center**: Latest updates and company news
- **Career Portal**: Job listings and application system
- **Contact System**: Advanced contact forms and office locations

## 🛠 Tech Stack

- **Backend**:
  - Laravel 10.x
  - PHP 8.x

- **Frontend**:
  - Tailwind CSS
  - Swiper.js
  - Custom CSS Animations

- **Development**:
  - Vite
  - NPM
  - Git

## 📦 Prerequisites

- PHP >= 8.1
- Composer
- Node.js & NPM

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/real-estate-project.git
   cd real-estate-project
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install NPM packages**
   ```bash
   npm install
   ```

4. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Build Assets**
   ```bash
   npm run dev
   ```

7. **Start the server**
   ```bash
   php artisan serve
   ```

## 🎨 Project Structure

```
├── app/
│   ├── Http/Controllers/    # Controllers
│   ├── Models/             # Database models
│   └── Providers/          # Service providers
├── resources/
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   └── views/             # Blade templates
│       ├── components/    # Reusable components
│       ├── layouts/       # Layout templates
│       ├── pages/         # Page templates
│       └── partials/      # Partial views
├── public/                # Public assets
└── routes/                # Route definitions
```

## 📱 Features Breakdown

### Home Page
- Hero section with dynamic slider
## 🔧 Development

To start development:

```bash
# Start development server
php artisan serve

# Watch for asset changes
npm run dev
```

## 🤝 Contributing

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
