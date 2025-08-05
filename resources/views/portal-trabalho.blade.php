<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaria do Trabalho - Portal Oficial Moderno</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        /* Reset e Variáveis CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        :root {
    --primary-blue: #0066ff;
    --primary-purple: #6366f1;
    --secondary-yellow: #fbbf24;
    --secondary-orange: #f97316;
    --accent-green: #10b981;
    --accent-emerald: #059669;
    --text-primary: #0f172a;
    --text-secondary: #475569;
    --text-light: #64748b;
    --bg-primary: #ffffff;
    --bg-secondary: #f8fafc;
    --bg-dark: #0f172a;
    --border-light: #e2e8f0;
    --gradient-primary: linear-gradient(135deg, #0066ff 0%, #6366f1 100%);
    --gradient-secondary: linear-gradient(135deg, #10b981 0%, #059669 100%);
    --gradient-hero: linear-gradient(135deg, rgba(0, 102, 255, 0.9) 0%, rgba(99, 102, 241, 0.8) 100%);
}
        body {
              font-family: 'Inter', sans-serif;
    line-height: 1.6;
    color: var(--text-primary);
    background: linear-gradient(135deg, #e0f2fe 0%, #f0f9ff 50%, #ecfdf5 100%);
    overflow-x: hidden;
}
        /* Animações */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        .animate-fadeInRight {
            animation: fadeInRight 0.8s ease-out forwards;
        }
        .animate-fadeInLeft {
            animation: fadeInLeft 0.8s ease-out forwards;
        }
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-light);
            transition: all 0.3s ease;
        }
        .header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-lg);
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 4rem;
        }
        .nav-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            color: var(--text-primary);
        }
        .nav-logo-icon {
            width: 2.5rem;
            height: 2.5rem;
            background: var(--gradient-primary);
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
        }
        .nav-logo-text h1 {
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.2;
        }
        .nav-logo-text p {
            font-size: 0.75rem;
            color: var(--text-secondary);
        }
        .nav-menu {
            display: flex;
            align-items: center;
            gap: 2rem;
        }
        .nav-link {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }
        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-blue);
            background: rgba(37, 99, 235, 0.1);
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -0.25rem;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary-blue);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }
        .nav-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 0.5rem;
        }
        .nav-toggle span {
            width: 1.5rem;
            height: 2px;
            background: var(--text-primary);
            margin: 2px 0;
            transition: 0.3s;
            border-radius: 2px;
        }
        /* Hero Section */
        .hero {
         position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: linear-gradient(135deg, #1e40af 0%, #7c3aed 100%);
    padding-bottom: 4rem;
        }
        .hero-background {
             position: absolute;
    inset: 0;
    background-image: url('/assai_2.jpg');
    background-size: cover;
    background-position: center;
    opacity: 1.0;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: var(--gradient-hero);
        }
        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 4rem;
            align-items: center;
        }
        .hero-text {
            color: white;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 2rem;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }
        .hero-title .highlight {
            background: linear-gradient(45deg, #fbbf24, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-description {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            max-width: 600px;
        }
        .hero-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            border: none;
            border-radius: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            white-space: nowrap;
        }
        .btn-primary {
            background: var(--gradient-secondary);
            color: white;
            box-shadow: var(--shadow-lg);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }
        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        .btn-outline {
            background: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }
        .btn-outline:hover {
            background: var(--primary-blue);
            color: white;
        }
        .hero-stats {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1rem;
            padding: 1.5rem;
            text-align: center;
            color: white;
        }
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #fbbf24;
            margin-bottom: 0.5rem;
        }
        .stat-label {
            font-size: 0.875rem;
            opacity: 0.9;
        }
        .hero-quick-access {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1.5rem;
            padding: 2rem;
            margin-right: 200px;
        }
        .quick-access-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }
        .quick-access-header h3 {
            color: white;
            font-size: 1.25rem;
            font-weight: 600;
        }
        .quick-access-items {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .quick-access-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.75rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .quick-access-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }
        .quick-access-icon {
            width: 2.5rem;
            height: 2.5rem;
            background: var(--gradient-secondary);
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
        }
        .quick-access-text h4 {
            color: white;
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        .quick-access-text p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.875rem;
        }
        /* Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }
        .scroll-mouse {
            width: 1.5rem;
            height: 2.5rem;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 1rem;
            display: flex;
            justify-content: center;
            padding-top: 0.5rem;
        }
        .scroll-wheel {
            width: 2px;
            height: 0.75rem;
            background: white;
            border-radius: 1px;
            animation: scroll 1.5s infinite;
        }
        @keyframes scroll {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(0.75rem);
                opacity: 0;
            }
        }
        /* Quick Access Cards */
    .quick-access-section {
    background: linear-gradient(135deg, var(--bg-dark) 0%, #1e40af 100%);
    padding: 8rem 0 5rem 0;
    margin-top: 0;
    position: relative;
    z-index: 20;
}
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        .quick-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }
        .quick-card {
            background: white;
            border-radius: 1.5rem;
            padding: 2rem;
            text-align: center;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        .quick-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s;
        }
        .quick-card:hover::before {
            left: 100%;
        }
        .quick-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }
        .quick-card-icon {
            width: 4rem;
            height: 4rem;
            margin: 0 auto 1.5rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            transition: transform 0.3s ease;
        }
        .quick-card:hover .quick-card-icon {
            transform: scale(1.1);
        }
        .quick-card-icon.blue {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }
        .quick-card-icon.purple {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        }
        .quick-card-icon.green {
            background: linear-gradient(135deg, #10b981, #059669);
        }
        .quick-card-icon.orange {
            background: linear-gradient(135deg, #f59e0b, #ea580c);
        }
        .quick-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--text-primary);
        }
        .quick-card p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        .quick-card .btn {
            width: 100%;
            background: var(--gradient-primary);
            color: white;
            justify-content: center;
        }
        /* Sections */
        .section {
            padding: 5rem 0;
        }
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }
        .section-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }
        .section-title .highlight {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .section-subtitle {
            font-size: 1.25rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }
        /* Services */
        .services {
            background: white;
        }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 2rem;
        }
        .service-card {
            display: flex;
            gap: 2rem;
            padding: 2.5rem;
            background: white;
            border-radius: 1.5rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }
        .service-icon {
            width: 4rem;
            height: 4rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }
        .service-card:hover .service-icon {
            transform: scale(1.1);
        }
        .service-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }
        .service-content p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        .service-features {
            list-style: none;
        }
        .service-features li {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.5rem 0;
            color: var(--text-secondary);
        }
        .service-features li::before {
            content: '✓';
            color: var(--accent-green);
            font-weight: bold;
            width: 1rem;
            height: 1rem;
            background: rgba(16, 185, 129, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
        }
        /* Jobs */
        .jobs {
            background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
        }
        .jobs-filters {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }
        .filter-btn {
            padding: 0.75rem 1.5rem;
            border: 2px solid var(--border-light);
            background: white;
            color: var(--text-secondary);
            border-radius: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .filter-btn.active,
        .filter-btn:hover {
            background: var(--gradient-primary);
            color: white;
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .job-card {
            background: white;
            padding: 2rem;
            border-radius: 1.5rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .job-card:hover::before {
            transform: scaleX(1);
        }
        .job-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }
        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }
        .job-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }
        .job-company {
            color: var(--text-secondary);
            font-weight: 500;
        }
        .job-badge {
            background: var(--accent-green);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.75rem;
            font-weight: 500;
        }
        .job-badge.featured {
            background: var(--gradient-secondary);
        }
        .job-info {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }
        .job-info span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            font-size: 0.875rem;
        }
        .job-description {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        .job-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .job-salary {
            font-weight: 600;
            color: var(--accent-green);
            font-size: 1.125rem;
        }
        .job-apply {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .job-apply:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        /* Courses */
        .courses {
            background: white;
        }
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        .course-card {
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
        }
        .course-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }
        .course-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        .course-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .course-card:hover .course-image img {
            transform: scale(1.05);
        }
        .course-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--accent-green);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.75rem;
            font-weight: 500;
        }
        .course-content {
            padding: 2rem;
        }
        .course-category {
            background: rgba(37, 99, 235, 0.1);
            color: var(--primary-blue);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.75rem;
            font-weight: 500;
            margin-bottom: 1rem;
            display: inline-block;
        }
        .course-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--text-primary);
        }
        .course-content p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        .course-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }
        .course-info span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            font-size: 0.875rem;
        }
        .course-level {
            background: rgba(16, 185, 129, 0.1);
            color: var(--accent-green);
            padding: 0.25rem 0.5rem;
            border-radius: 0.5rem;
            font-size: 0.75rem;
            font-weight: 500;
        }
        /* News */
        .news {
            background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
        }
        .news-filters {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }
        .news-filter-btn {
            padding: 0.75rem 1.5rem;
            border: 2px solid var(--border-light);
            background: white;
            color: var(--text-secondary);
            border-radius: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.9rem;
        }
        .news-filter-btn.active,
        .news-filter-btn:hover {
            background: var(--gradient-primary);
            color: white;
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .news-card {
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }
        .news-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .news-card:hover::before {
            transform: scaleX(1);
        }
        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }
        .news-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .news-card:hover .news-image img {
            transform: scale(1.05);
        }
        .news-category {
            position: absolute;
            top: 1rem;
            left: 1rem;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.75rem;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .news-category.vagas {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }
        .news-category.cursos {
            background: linear-gradient(135deg, #10b981, #059669);
        }
        .news-category.beneficios {
            background: linear-gradient(135deg, #f59e0b, #ea580c);
        }
        .news-category.economia {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        }
        .news-date {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.75rem;
            backdrop-filter: blur(10px);
        }
        .news-content {
            padding: 2rem;
        }
        .news-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .news-excerpt {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .news-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 1rem;
            border-top: 1px solid var(--border-light);
        }
        .news-author {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            font-size: 0.875rem;
        }
        .news-read-more {
            color: var(--primary-blue);
            font-weight: 500;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
            transition: all 0.3s ease;
        }
        .news-read-more:hover {
            gap: 0.5rem;
        }
        .news-featured {
            grid-column: span 2;
        }
        .news-featured .news-image {
            height: 300px;
        }
        .news-featured .news-title {
            font-size: 1.5rem;
        }
        .news-featured .news-content {
            padding: 2.5rem;
        }
        /* Contact */
        .contact {
            background: linear-gradient(135deg, var(--bg-dark) 0%, #1e40af 100%);
            color: white;
        }
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }
        .contact-info h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .contact-info h2 .highlight {
            background: var(--gradient-secondary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .contact-info > p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2rem;
            font-size: 1.125rem;
        }
        .contact-item {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .contact-item-icon {
            width: 3rem;
            height: 3rem;
            background: var(--gradient-secondary);
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
            flex-shrink: 0;
        }
        .contact-item h4 {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .contact-item p {
            color: rgba(255, 255, 255, 0.8);
            white-space: pre-line;
        }
        .contact-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1.5rem;
            padding: 2.5rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: white;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 0.5rem;
            color: white;
            font-size: 1rem;    
            transition: border-color 0.3s ease;
            font-family: inherit;
        }
        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--secondary-yellow);
        }
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        /* Footer */
        .footer {
            background: var(--bg-dark);
            color: white;
            padding: 3rem 0 1rem;
        }
        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 2rem;
        }
.footer-logo {
    display: flex;
    align-items: flex-start; /* alinha topo com topo */
    gap: 0.75rem;
    margin-bottom: 1rem;
}

.footer-logo-icon {
    width: 2.5rem;
    height: 2.5rem;
    background: var(--gradient-primary);
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    flex-shrink: 0;
    margin-top: 0.2rem; /* ajuste fino opcional */
}

.footer-logo-text {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.footer-logo-text h3 {
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0;
    line-height: 1.25;
}

.footer-logo-text p {
    font-size: 0.875rem;
    color: var(--text-light);
    margin: 0;
    line-height: 1.2;
}
        .footer-section p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        .footer-section h4 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .footer-section ul {
            list-style: none;
        }
        .footer-section li {
            margin-bottom: 0.5rem;
        }
        .footer-section a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer-section a:hover {
            color: var(--secondary-yellow);
        }
        .footer-bottom {
            border-top: 1px solid #374151;
            padding-top: 2rem;
            text-align: center;
            color: var(--text-light);
        }
        /* Modals */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }
        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background: white;
            border-radius: 1.5rem;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            box-shadow: var(--shadow-xl);
            animation: modalSlideIn 0.3s ease-out;
        }
        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        .modal-header {
            padding: 2rem 2rem 1rem;
            border-bottom: 1px solid var(--border-light);
        }
        .modal-header h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }
        .modal-header p {
            color: var(--text-secondary);
        }
        .modal-close {
            position: absolute;
            right: 1rem;
            top: 1rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text-light);
            cursor: pointer;
            transition: color 0.3s ease;
            width: 2rem;
            height: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-close:hover {
            color: var(--text-primary);
        }
        .modal-body {
            padding: 2rem;
        }
        .tabs {
            margin-bottom: 2rem;
        }
        .tabs-list {
            display: flex;
            background: var(--bg-secondary);
            border-radius: 0.5rem;
            padding: 0.25rem;
        }
        .tabs-trigger {
            flex: 1;
            padding: 0.75rem 1rem;
            background: none;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            color: var(--text-secondary);
        }
        .tabs-trigger.active {
            background: white;
            color: var(--text-primary);
            box-shadow: var(--shadow-sm);
        }
        .tabs-content {
            display: none;
            padding-top: 1.5rem;
        }
        .tabs-content.active {
            display: block;
        }
        .upload-area {
            border: 2px dashed var(--border-light);
            border-radius: 0.75rem;
            padding: 3rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .upload-area:hover {
            border-color: var(--primary-blue);
            background: rgba(37, 99, 235, 0.05);
        }
        .upload-icon {
            width: 3rem;
            height: 3rem;
            background: var(--bg-secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: var(--text-secondary);
            font-size: 1.25rem;
        }
        .info-box {
            background: rgba(37, 99, 235, 0.1);
            border: 1px solid rgba(37, 99, 235, 0.2);
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }
        .info-box h3 {
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .info-box ul {
            list-style: none;
            color: var(--primary-blue);
        }
        .info-box li {
            padding: 0.25rem 0;
            position: relative;
            padding-left: 1.5rem;
        }
        .info-box li::before {
            content: '•';
            position: absolute;
            left: 0;
            font-weight: bold;
        }
        /* Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 3rem;
            height: 3rem;
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: var(--shadow-lg);
        }
        .back-to-top:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }
        .back-to-top.show {
            display: flex;
        }
        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }
            .hero-quick-access {
                max-width: 400px;
                margin: 0 auto;
            }
            .services-grid {
                grid-template-columns: 1fr;
            }
            .service-card {
                flex-direction: column;
                text-align: center;
            }
            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .footer-content {
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
            }
        }
        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                left: -100%;
                top: 4rem;
                flex-direction: column;
                background: white;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: var(--shadow-lg);
                padding: 2rem 0;
                gap: 0;
            }
            .nav-menu.active {
                left: 0;
            }
            .nav-menu .nav-link {
                display: block;
                padding: 1rem;
                margin: 0;
            }
            .nav-toggle {
                display: flex;
            }
            .nav-toggle.active span:nth-child(2) {
                opacity: 0;
            }
            .nav-toggle.active span:nth-child(1) {
                transform: translateY(6px) rotate(45deg);
            }
            .nav-toggle.active span:nth-child(3) {
                transform: translateY(-6px) rotate(-45deg);
            }
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            .hero-stats {
                  display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    margin-bottom: 6rem;
            }
            .stat-number {
                font-size: 1.5rem;
            }
            .quick-grid {
                grid-template-columns: 1fr;
            }
            .section-title {
                font-size: 2rem;
            }
            .jobs-grid {
                grid-template-columns: 1fr;
            }
            .courses-grid {
                grid-template-columns: 1fr;
            }
            .footer-content {
                grid-template-columns: 1fr;
            }
            .form-row {
                grid-template-columns: 1fr;
            }
            .modal-content {
                width: 95%;
                margin: 1rem;
            }
            .modal-header,
            .modal-body {
                padding: 1.5rem;
            }
            .news-featured {
                grid-column: span 1;
            }
                        .news-grid {
                grid-template-columns: 1fr;
            }
                        .news-filters {
                gap: 0.5rem;
            }
                        .news-filter-btn {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }
        }
        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }
            .hero-description {
                font-size: 1rem;
            }
            .btn {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
            }
            .section-title {
                font-size: 1.75rem;
            }
            .quick-card,
            .service-card,
            .contact-form {
                padding: 1.5rem;
            }
            .hero-stats {
                grid-template-columns: 1fr;
            }
        }
        /* Utility Classes */
        .hidden {
            display: none !important;
        }
        .opacity-0 {
            opacity: 0;
        }
        .opacity-100 {
            opacity: 1;
        }
        .transition-all {
            transition: all 0.3s ease;
        }
        .text-center {
            text-align: center;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .mt-4 {
            margin-top: 1rem;
        }
        .p-4 {
            padding: 1rem;
        }
        .rounded {
            border-radius: 0.5rem;
        }
        .shadow {
            box-shadow: var(--shadow-md);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="nav-container">
            <a href="#home" class="nav-logo">
               <div class="nav-logo-icon">
    <img src="/Brasao_Assai.png" alt="Logo do Assaí" style="width: 100%; height: 100%; object-fit: contain;">
</div>
                <div class="nav-logo-text">
                    <h1>Secretaria do Trabalho</h1>
                    <p>Portal Oficial</p>
                </div>
            </a>
            <nav class="nav-menu" id="nav-menu">
                <a href="#home" class="nav-link active">Início</a>
                <a href="#services" class="nav-link">Serviços</a>
                <a href="#jobs" class="nav-link">Vagas</a>
                <a href="#courses" class="nav-link">Cursos</a>
                <a href="#contact" class="nav-link">Notícias</a>
           <!--     <a href="#contact" class="nav-link">Contato</a>-->
            </nav>
            <div class="nav-toggle" id="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background"></div>
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge animate-fadeInUp" style="margin-top: 50px;">
                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                    <span>Portal do Trabalho    </span>
                </div>
                <h1 class="hero-title animate-fadeInUp" style="animation-delay: 0.2s;">
                    <span class="highlight">Assaí Conectando</span><br>
                    Talentos ao Futuro
                </h1>
                <p class="hero-description animate-fadeInUp" style="animation-delay: 0.4s;">
                    Sua jornada profissional começa aqui. Encontre oportunidades únicas, 
                    desenvolva habilidades essenciais e construa o futuro que você merece.
                </p>
                <div class="hero-buttons animate-fadeInUp" style="animation-delay: 0.6s;">
                    <button class="btn btn-primary" onclick="scrollToSection('services')">
                        <i class="fas fa-rocket"></i>
                        Explorar Serviços
                    </button>
                    <button class="btn btn-secondary" onclick="scrollToSection('jobs')">
                        <i class="fas fa-search"></i>
                        Buscar Vagas
                    </button>
                </div>
                </div>
            </div>
            <div class="hero-quick-access animate-fadeInLeft" style="animation-delay: 1s; ">
                <div class="quick-access-header">
                    <i class="fas fa-target" style="color: #fbbf24;"></i>
                </div>
                <div class="quick-access-items" style="margin-top: 10px;">
                    <div class="quick-access-item" onclick="openModal('curriculum-modal')">
                        <div class="quick-access-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="quick-access-text">
                            <h4>Cadastrar Currículo</h4>
                            <p>Registre seu perfil</p>
                        </div>
                        <i class="fas fa-chevron-right" style="color: rgba(255, 255, 255, 0.6);"></i>
                    </div>
                    </div>
                    <div class="quick-access-item" style="margin-top: 30px;" onclick="scrollToSection('courses')">
                        <div class="quick-access-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="quick-access-text" >
                            <h4>Cursos Gratuitos</h4>
                            <p>Desenvolva habilidades</p>
                        </div>
                        <i class="fas fa-chevron-right" style="color: rgba(255, 255, 255, 0.6);"></i>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
        </div>
    </section>

    <!-- Quick Access Cards -->
    

    <!-- Services Section -->
    <section id="services" class="section services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Nossos <span class="highlight">Serviços</span>
                </h2>
                <p class="section-subtitle">
                    Soluções completas para sua carreira profissional, desde a qualificação até a colocação no mercado de trabalho
                </p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="service-content">
                        <h3>Intermediação de Mão de Obra</h3>
                        <p>Conectamos trabalhadores e empresas de forma eficiente e personalizada, garantindo o match perfeito.</p>
                        <ul class="service-features">
                            <li>Cadastro de currículos</li>
                            <li>Triagem especializada</li>
                            <li>Encaminhamento direcionado</li>
                            <li>Acompanhamento pós-contratação</li>
                        </ul>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="service-content">
                        <h3>Qualificação Profissional</h3>
                        <p>Cursos e treinamentos para desenvolver suas competências e se destacar no mercado.</p>
                        <ul class="service-features">
                            <li>Cursos técnicos certificados</li>
                            <li>Capacitação digital</li>
                            <li>Workshops especializados</li>
                            <li>Mentoria profissional</li>
                        </ul>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="background: linear-gradient(135deg, #10b981, #059669);">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Benefícios Trabalhistas</h3>
                        <p>Orientação completa e solicitação de benefícios garantidos por lei.</p>
                        <ul class="service-features">
                            <li>Seguro-desemprego</li>
                            <li>Abono salarial</li>
                            <li>FGTS</li>
                            <li>Orientação jurídica</li>
                        </ul>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="background: linear-gradient(135deg, #f59e0b, #ea580c);">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="service-content">
                        <h3>Apoio ao Empreendedor</h3>
                        <p>Suporte completo para quem deseja abrir o próprio negócio e ser bem-sucedido.</p>
                        <ul class="service-features">
                            <li>Consultoria empresarial</li>
                            <li>Microcrédito</li>
                            <li>Capacitação empreendedora</li>
                            <li>Networking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jobs Section -->
    <section id="jobs" class="section jobs">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Vagas em <span class="highlight">Destaque</span>
                </h2>
                <p class="section-subtitle">
                    Oportunidades selecionadas especialmente para você. Encontre sua próxima carreira aqui.
                </p>
            </div>
            <div class="jobs-filters">
                <button class="filter-btn active" data-filter="all">Todas as Vagas</button>
                <button class="filter-btn" data-filter="tech">Tecnologia</button>
                <button class="filter-btn" data-filter="admin">Administrativo</button>
                <button class="filter-btn" data-filter="sales">Vendas</button>
                <button class="filter-btn" data-filter="health">Saúde</button>
            </div>
            <div class="jobs-grid" id="jobs-grid">
                <!-- Jobs will be loaded dynamically -->
            </div>
            <div class="text-center">
                <button class="btn btn-outline" onclick="loadMoreJobs()">
                    <i class="fas fa-plus"></i>
                    Carregar Mais Vagas
                </button>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="section courses">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Cursos de <span class="highlight">Qualificação</span>
                </h2>
                <p class="section-subtitle">
                    Desenvolva suas habilidades com nossos cursos gratuitos e certificados. Invista no seu futuro profissional.
                </p>
            </div>
            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-image">
                        <img src="/placeholder.svg?height=200&width=300&text=Programação+Web" alt="Curso de Programação Web">
                        <div class="course-badge">Gratuito</div>
                    </div>
                    <div class="course-content">
                        <div class="course-category">Tecnologia</div>
                        <h3>Programação Web Completa</h3>
                        <p>Aprenda HTML, CSS, JavaScript e React do zero ao avançado</p>
                        <div class="course-info">
                            <span><i class="fas fa-clock"></i> 40h</span>
                            <span><i class="fas fa-users"></i> 25 vagas</span>
                            <div class="course-level">Iniciante</div>
                        </div>
                        <button class="btn" style="background: var(--gradient-primary); color: white; width: 100%;">
                            <i class="fas fa-arrow-right"></i>
                            Inscrever-se
                        </button>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="/placeholder.svg?height=200&width=300&text=Marketing+Digital" alt="Curso de Marketing Digital">
                        <div class="course-badge">Gratuito</div>
                    </div>
                    <div class="course-content">
                        <div class="course-category">Marketing</div>
                        <h3>Marketing Digital Avançado</h3>
                        <p>Estratégias completas para o mundo digital e redes sociais</p>
                        <div class="course-info">
                            <span><i class="fas fa-clock"></i> 30h</span>
                            <span><i class="fas fa-users"></i> 30 vagas</span>
                            <div class="course-level">Intermediário</div>
                        </div>
                        <button class="btn" style="background: var(--gradient-primary); color: white; width: 100%;">
                            <i class="fas fa-arrow-right"></i>
                            Inscrever-se
                        </button>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="/placeholder.svg?height=200&width=300&text=Excel+Avançado" alt="Curso de Excel">
                        <div class="course-badge">Gratuito</div>
                    </div>
                    <div class="course-content">
                        <div class="course-category">Administração</div>
                        <h3>Excel e Análise de Dados</h3>
                        <p>Domine planilhas e análise de dados avançada para o mercado</p>
                        <div class="course-info">
                            <span><i class="fas fa-clock"></i> 20h</span>
                            <span><i class="fas fa-users"></i> 35 vagas</span>
                            <div class="course-level">Intermediário</div>
                        </div>
                        <button class="btn" style="background: var(--gradient-primary); color: white; width: 100%;">
                            <i class="fas fa-arrow-right"></i>
                            Inscrever-se
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="contact" class="section contact">
         <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: white;">
                    Últimas <span class="highlight">Notícias</span>
                </h2>
                <p class="section-subtitle" style="color: white;">
                    Fique por dentro das novidades do mercado de trabalho e notícias em destaque
                </p>
            </div>
            <div class="news-grid" id="news-grid">
    <div class="news-card">
        <div class="news-image">
            <img src="/placeholder.svg?height=200&width=400&text=Novas+Vagas+2024" alt="Novas Vagas 2024">
            <div class="news-date">15/01/2024</div>
        </div>
        <div class="news-content">
            <h3 class="news-title">Governo Anuncia 50 Mil Novas Vagas de Emprego para 2024</h3>
            <p class="news-excerpt">Programa nacional de geração de empregos prevê criação de oportunidades em diversos setores da economia...</p>
            <div class="news-meta">
                <div class="news-author">
                    <i class="fas fa-user"></i>
                    <span>Ministério do Trabalho</span>
                </div>
                <div class="news-read-more">
                    <span>Ler mais</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="news-card">
        <div class="news-image">
            <img src="/placeholder.svg?height=200&width=400&text=Cursos+Tecnologia" alt="Cursos Tecnologia">
            <div class="news-date">12/01/2024</div>
        </div>
        <div class="news-content">
            <h3 class="news-title">Novos Cursos Gratuitos de Tecnologia Disponíveis</h3>
            <p class="news-excerpt">Secretaria do Trabalho lança programa de capacitação em programação, inteligência artificial e análise de dados...</p>
            <div class="news-meta">
                <div class="news-author">
                    <i class="fas fa-user"></i>
                    <span>Equipe de Capacitação</span>
                </div>
                <div class="news-read-more">
                    <span>Ler mais</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="news-card">
        <div class="news-image">
            <img src="/placeholder.svg?height=200&width=400&text=Seguro+Desemprego" alt="Seguro Desemprego">
            <div class="news-date">10/01/2024</div>
        </div>
        <div class="news-content">
            <h3 class="news-title">Seguro-Desemprego: Novas Regras Facilitam Acesso</h3>
            <p class="news-excerpt">Mudanças na legislação tornam mais simples o processo de solicitação do benefício...</p>
            <div class="news-meta">
                <div class="news-author">
                    <i class="fas fa-user"></i>
                    <span>Departamento de Benefícios</span>
                </div>
                <div class="news-read-more">
                    <span>Ler mais</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="text-center">
                <button class="btn btn-outline" onclick="loadMoreNews()">
                    <i class="fas fa-plus"></i>
                    Carregar Mais Notícias
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                       <div class="footer-logo-icon">
    <img src="/Brasao_Assai.png" alt="Logo do Assaí" style="width: 100%; height: 100%; object-fit: contain;">
</div>
                        <div class="footer-logo-text">
                            <h3>Secretaria do Trabalho</h3>
                            <p>Portal Oficial</p>
                        </div>
                    </div>
                    <p>Conectando pessoas ao mercado de trabalho e promovendo o desenvolvimento profissional.</p>
                </div>
                <div class="footer-section">
                    <h4>Serviços</h4>
                    <ul>
                        <li><a href="#">Cadastro de Currículo</a></li>
                        <li><a href="#">Busca de Vagas</a></li>
                        <li><a href="#">Cursos Gratuitos</a></li>
                        <li><a href="#">Seguro-Desemprego</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Informações</h4>
                    <ul>
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Notícias</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contato</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> (43) 3262-4958</li>
                        <li><i class="fas fa-envelope"></i> assai@assai.pr.gov.br</li>
                        <li><i class="fas fa-map-marker-alt"></i> Av. Rio de Janeiro, 720 CEP 86220-000 - Assaí - PR</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- Curriculum Modal -->
    <div id="curriculum-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Cadastrar Currículo</h2>
                <p>Registre seu perfil profissional e seja encontrado por recrutadores de todo o país.</p>
                <button class="modal-close" onclick="closeModal('curriculum-modal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="tabs">
                    <div class="tabs-list">
                        <button class="tabs-trigger" onclick="switchTab('upload')">Upload CV</button>
                    </div>
                    <div id="personal" class="tabs-content active">
                        <form>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="full-name">Nome Completo</label>
                                    <input type="text" id="full-name" name="full-name" placeholder="Seu nome completo" required>
                                </div>
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email-cv">E-mail</label>
                                    <input type="email" id="email-cv" name="email-cv" placeholder="seu@email.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone-cv">Telefone</label>
                                    <input type="tel" id="phone-cv" name="phone-cv" placeholder="(11) 99999-9999" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="profession">Profissão</label>
                                <input type="text" id="profession" name="profession" placeholder="Ex: Desenvolvedor, Analista, Vendedor..." required>
                            </div>
                        </form>
                    </div>
                    <div id="professional" class="tabs-content">
                        <form>
                            <div class="form-group">
                                <label for="experience">Experiência Profissional</label>
                                <textarea id="experience" name="experience" placeholder="Descreva sua experiência profissional..." rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="skills">Habilidades</label>
                                <textarea id="skills" name="skills" placeholder="Liste suas principais habilidades..." rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="education">Formação</label>
                                <textarea id="education" name="education" placeholder="Sua formação acadêmica..." rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div id="upload" class="tabs-content">
                        <div class="upload-area" onclick="document.getElementById('cv-file').click()">
                            <div class="upload-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <h3>Upload do Currículo</h3>
                            <p>Arraste e solte seu arquivo PDF aqui ou clique para selecionar</p>
                            <button type="button" class="btn btn-outline">
                                <i class="fas fa-upload"></i>
                                Selecionar Arquivo
                            </button>
                            <input type="file" id="cv-file" name="cv-file" accept=".pdf" style="display: none;">
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 2rem;">
                    <button class="btn btn-outline" onclick="closeModal('curriculum-modal')">Cancelar</button>
                    <button class="btn btn-primary" onclick="submitCurriculum()">Cadastrar Currículo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jobs Modal -->
    <div id="jobs-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Buscar Vagas</h2>
                <p>Encontre oportunidades ideais para seu perfil profissional.</p>
                <button class="modal-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
      // Sample Jobs Data
const jobsData = [
    {
        id: 1,
        title: 'Desenvolvedor Full Stack',
        company: 'TechCorp',
        location: 'São Paulo, SP',
        salary: 'R$ 8.000 - R$ 12.000',
        type: 'CLT',
        category: 'tech',
        description: 'Desenvolvimento de aplicações web usando React, Node.js e MongoDB.',
        posted: '2 dias atrás',
        featured: true
    },
    {
        id: 2,
        title: 'Assistente Administrativo',
        company: 'Empresa ABC',
        location: 'Rio de Janeiro, RJ',
        salary: 'R$ 2.500 - R$ 3.500',
        type: 'CLT',
        category: 'admin',
        description: 'Apoio administrativo geral, atendimento ao cliente e organização de documentos.',
        posted: '1 dia atrás',
        featured: false
    },
    {
        id: 3,
        title: 'Vendedor Externo',
        company: 'Vendas Plus',
        location: 'Belo Horizonte, MG',
        salary: 'R$ 2.000 + comissões',
        type: 'CLT',
        category: 'sales',
        description: 'Vendas de produtos e serviços para clientes externos.',
        posted: '3 dias atrás',
        featured: false
    },
    {
        id: 4,
        title: 'Enfermeiro(a)',
        company: 'Hospital Central',
        location: 'Brasília, DF',
        salary: 'R$ 4.500 - R$ 6.000',
        type: 'CLT',
        category: 'health',
        description: 'Cuidados de enfermagem em unidade hospitalar.',
        posted: '1 dia atrás',
        featured: true
    },
    {
        id: 5,
        title: 'Analista de Sistemas',
        company: 'SoftTech',
        location: 'Porto Alegre, RS',
        salary: 'R$ 6.000 - R$ 7.500',
        type: 'CLT',
        category: 'tech',
        description: 'Análise e desenvolvimento de sistemas corporativos.',
        posted: '4 dias atrás',
        featured: false
    },
    {
        id: 6,
        title: 'Auxiliar Contábil',
        company: 'Contabilidade Geral',
        location: 'Salvador, BA',
        salary: 'R$ 2.200 - R$ 2.800',
        type: 'CLT',
        category: 'admin',
        description: 'Auxiliar nas rotinas contábeis e fiscais da empresa.',
        posted: '2 dias atrás',
        featured: false
    }
];

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
    loadJobs(); // Esta linha garante que as vagas sejam carregadas automaticamente
    loadNews();
});

        // Sample News Data
        const newsData = [
            {
                id: 1,
                title: 'Governo Anuncia 50 Mil Novas Vagas de Emprego para 2024',
                excerpt: 'Programa nacional de geração de empregos prevê criação de oportunidades em diversos setores da economia, com foco em jovens e pessoas em situação de vulnerabilidade.',
                content: 'O governo federal anunciou hoje um ambicioso programa de geração de empregos que prevê a criação de 50 mil novas vagas até o final de 2024. O programa, denominado "Trabalho para Todos", será implementado em parceria com empresas privadas e órgãos públicos...',
                category: 'vagas',
                author: 'Ministério do Trabalho',
                date: '2024-01-15',
                image: '/placeholder.svg?height=200&width=400&text=Novas+Vagas+2024',
                featured: true
            },
            {
                id: 2,
                title: 'Novos Cursos Gratuitos de Tecnologia Disponíveis',
                excerpt: 'Secretaria do Trabalho lança programa de capacitação em programação, inteligência artificial e análise de dados com certificação reconhecida pelo mercado.',
                content: 'A Secretaria do Trabalho, em parceria com grandes empresas de tecnologia, está oferecendo novos cursos gratuitos nas áreas mais demandadas do mercado...',
                category: 'cursos',
                author: 'Equipe de Capacitação',
                date: '2024-01-12',
                image: '/placeholder.svg?height=200&width=400&text=Cursos+Tecnologia',
                featured: false
            },
            {
                id: 3,
                title: 'Seguro-Desemprego: Novas Regras Facilitam Acesso',
                excerpt: 'Mudanças na legislação tornam mais simples o processo de solicitação do benefício, com redução de documentos necessários e agilização na análise.',
                content: 'As novas regras para solicitação do seguro-desemprego entram em vigor neste mês, trazendo importantes simplificações no processo...',
                category: 'beneficios',
                author: 'Departamento de Benefícios',
                date: '2024-01-10',
                image: '/placeholder.svg?height=200&width=400&text=Seguro+Desemprego',
                featured: false
            },
            {
                id: 4,
                title: 'Mercado de Trabalho Mostra Sinais de Recuperação',
                excerpt: 'Dados do último trimestre indicam crescimento de 3,2% na geração de empregos formais, com destaque para os setores de serviços e tecnologia.',
                content: 'Os números mais recentes do mercado de trabalho brasileiro mostram uma tendência positiva de recuperação...',
                category: 'economia',
                author: 'Instituto de Pesquisas',
                date: '2024-01-08',
                image: '/placeholder.svg?height=200&width=400&text=Mercado+Trabalho',
                featured: false
            },
            {
                id: 5,
                title: 'Programa de Estágio Conecta Jovens ao Mercado',
                excerpt: 'Iniciativa oferece oportunidades de primeiro emprego para estudantes universitários em empresas parceiras, com bolsa-auxílio e mentoria.',
                content: 'O novo programa de estágios da Secretaria do Trabalho já conectou mais de 2 mil jovens a oportunidades de primeiro emprego...',
                category: 'vagas',
                author: 'Coordenação de Estágios',
                date: '2024-01-05',
                image: '/placeholder.svg?height=200&width=400&text=Programa+Estágio',
                featured: false
            },
            {
                id: 6,
                title: 'Workshop Gratuito: Como Fazer um Currículo Vencedor',
                excerpt: 'Especialistas em recursos humanos compartilham dicas essenciais para criar um currículo que se destaque no processo seletivo.',
                content: 'No próximo sábado, a Secretaria do Trabalho realizará um workshop gratuito sobre elaboração de currículos...',
                category: 'cursos',
                author: 'Equipe de RH',
                date: '2024-01-03',
                image: '/placeholder.svg?height=200&width=400&text=Workshop+Currículo',
                featured: false
            }
        ];

        let currentJobs = [];
        let displayedJobs = 0;
        const jobsPerLoad = 6;
        let activeFilter = 'all';

        let currentNews = [];
        let displayedNews = 0;
        const newsPerLoad = 6;
        let activeNewsFilter = 'all';

        // DOM Elements
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');
        const navLinks = document.querySelectorAll('.nav-link');
        const backToTopBtn = document.getElementById('back-to-top');
        const jobsGrid = document.getElementById('jobs-grid');
        const filterBtns = document.querySelectorAll('.filter-btn');
        const header = document.getElementById('header');

        // Smooth Scrolling Function with Animation
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                // Calculate offset for fixed header
                const headerHeight = document.querySelector('.header').offsetHeight;
                const sectionTop = section.offsetTop - headerHeight - 20;
                
                // Smooth scroll with animation
                window.scrollTo({
                    top: sectionTop,
                    behavior: 'smooth'
                });
                
                // Add visual feedback animation
                section.style.transform = 'scale(1.02)';
                section.style.transition = 'transform 0.3s ease';
                
                setTimeout(() => {
                    section.style.transform = 'scale(1)';
                }, 300);
            }
        }

        // Mobile Navigation
        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
        });

        // Enhanced Navigation Links with Animation
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                
                // Close mobile menu
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
                
                // Get section ID from href
                const sectionId = link.getAttribute('href').substring(1);
                
                // Add loading animation to clicked link
                link.style.transform = 'scale(0.95)';
                link.style.transition = 'transform 0.2s ease';
                
                setTimeout(() => {
                    link.style.transform = 'scale(1)';
                    scrollToSection(sectionId);
                }, 100);
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Enhanced Active Navigation Link Detection
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section');
            const headerHeight = document.querySelector('.header').offsetHeight;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - headerHeight - 100;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href').substring(1);
                if (href === current) {
                    link.classList.add('active');
                }
            });
        });

        // Back to Top Button
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Load Jobs
        function loadJobs(category = 'all') {
            currentJobs = category === 'all' ? jobsData : jobsData.filter(job => job.category === category);
            displayedJobs = 0;
            jobsGrid.innerHTML = '';
            loadMoreJobs();
        }

        function loadMoreJobs() {
            const jobsToShow = currentJobs.slice(displayedJobs, displayedJobs + jobsPerLoad);
            
            jobsToShow.forEach(job => {
                const jobCard = createJobCard(job);
                jobsGrid.appendChild(jobCard);
            });
            
            displayedJobs += jobsToShow.length;
        }

        function createJobCard(job) {
            const card = document.createElement('div');
            card.className = 'job-card';
            card.innerHTML = `
                <div class="job-header">
                    <div>
                        <h3 class="job-title">${job.title}</h3>
                        <p class="job-company">${job.company}</p>
                    </div>
                    <span class="job-badge ${job.featured ? 'featured' : ''}">${job.featured ? 'Destaque' : job.type}</span>
                </div>
                <div class="job-info">
                    <span><i class="fas fa-map-marker-alt"></i> ${job.location}</span>
                    <span><i class="fas fa-clock"></i> ${job.posted}</span>
                </div>
                <p class="job-description">${job.description}</p>
                <div class="job-footer">
                    <span class="job-salary">${job.salary}</span>
                    <button class="job-apply" onclick="applyForJob(${job.id})">
                        <i class="fas fa-paper-plane"></i> Candidatar-se
                    </button>
                </div>
            `;
            return card;
        }

        // Job Filter
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                const category = btn.getAttribute('data-filter');
                activeFilter = category;
                loadJobs(category);
            });
        });

        // Apply for Job
        function applyForJob(jobId) {
            const job = jobsData.find(j => j.id === jobId);
            if (job) {
                alert(`Candidatura enviada para a vaga: ${job.title} na empresa ${job.company}`);
            }
        }

        // Load News
        function loadNews(category = 'all') {
            currentNews = category === 'all' ? newsData : newsData.filter(news => news.category === category);
            displayedNews = 0;
            document.getElementById('news-grid').innerHTML = '';
            loadMoreNews();
        }

        function loadMoreNews() {
            const newsToShow = currentNews.slice(displayedNews, displayedNews + newsPerLoad);
            const newsGrid = document.getElementById('news-grid');
            
            newsToShow.forEach((news, index) => {
                const newsCard = createNewsCard(news, displayedNews === 0 && index === 0);
                newsGrid.appendChild(newsCard);
            });
            
            displayedNews += newsToShow.length;
            
            // Hide load more button if all news are displayed
            const loadMoreBtn = document.querySelector('.btn.btn-outline');
            if (displayedNews >= currentNews.length) {
                loadMoreBtn.style.display = 'none';
            }
        }

        function createNewsCard(news, isFeatured = false) {
            const card = document.createElement('div');
            card.className = `news-card ${isFeatured ? 'news-featured' : ''}`;
            card.onclick = () => openNewsModal(news);
            
            const formattedDate = new Date(news.date).toLocaleDateString('pt-BR');
            
            card.innerHTML = `
                <div class="news-image">
                    <img src="${news.image}" alt="${news.title}">
                    <div class="news-date">${formattedDate}</div>
                </div>
                <div class="news-content">
                    <h3 class="news-title">${news.title}</h3>
                    <p class="news-excerpt">${news.excerpt}</p>
                    <div class="news-meta">
                        <div class="news-author">
                            <i class="fas fa-user"></i>
                            <span>${news.author}</span>
                        </div>
                        <div class="news-read-more">
                            <span>Ler mais</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            `;
            return card;
        }

        // Open News Modal
        function openNewsModal(news) {
            const modal = document.createElement('div');
            modal.className = 'modal active';
            modal.id = 'news-modal';
            
            const formattedDate = new Date(news.date).toLocaleDateString('pt-BR', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            
            modal.innerHTML = `
                <div class="modal-content" style="max-width: 800px;">
                    <div class="modal-header">
                        <div style="margin-bottom: 1rem;">
                            <span style="color: var(--text-secondary); font-size: 0.9rem;">${formattedDate}</span>
                        </div>
                        <h2>${news.title}</h2>
                        <p style="color: var(--text-secondary); font-size: 0.9rem; margin-top: 0.5rem;">
                            <i class="fas fa-user"></i> ${news.author}
                        </p>
                        <button class="modal-close" onclick="closeNewsModal()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="${news.image}" alt="${news.title}" style="width: 100%; height: 300px; object-fit: cover; border-radius: 0.75rem; margin-bottom: 2rem;">
                        <div style="font-size: 1.1rem; line-height: 1.8; color: var(--text-primary);">
                            <p style="font-weight: 500; color: var(--text-secondary); margin-bottom: 1.5rem; font-size: 1.2rem;">${news.excerpt}</p>
                            <p>${news.content}</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-light); display: flex; gap: 1rem;">
                            <button class="btn btn-primary" onclick="shareNews('${news.title}')">
                                <i class="fas fa-share"></i> Compartilhar
                            </button>
                            <button class="btn btn-outline" onclick="closeNewsModal()">
                                <i class="fas fa-arrow-left"></i> Voltar
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
            document.body.style.overflow = 'hidden';
        }

        function closeNewsModal() {
            const modal = document.getElementById('news-modal');
            if (modal) {
                modal.remove();
                document.body.style.overflow = 'auto';
            }
        }

        function shareNews(title) {
            if (navigator.share) {
                navigator.share({
                    title: title,
                    text: 'Confira esta notícia da Secretaria do Trabalho',
                    url: window.location.href
                });
            } else {
                // Fallback para navegadores que não suportam Web Share API
                const url = window.location.href;
                navigator.clipboard.writeText(`${title} - ${url}`).then(() => {
                    alert('Link copiado para a área de transferência!');
                });
            }
        }

        // Modal Functions
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        window.addEventListener('click', (e) => {
            if (e.target.classList.contains('modal')) {
                e.target.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });

        // Tab Functions
        function switchTab(tabName) {
            // Remove active class from all triggers and contents
            document.querySelectorAll('.tabs-trigger').forEach(trigger => {
                trigger.classList.remove('active');
            });
            document.querySelectorAll('.tabs-content').forEach(content => {
                content.classList.remove('active');
            });

            // Add active class to clicked trigger and corresponding content
            event.target.classList.add('active');
            document.getElementById(tabName).classList.add('active');
        }

        // Form Submissions
        function submitCurriculum() {
            alert('Currículo cadastrado com sucesso! Entraremos em contato em breve.');
            closeModal('curriculum-modal');
        }

        document.getElementById('job-search-form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Busca realizada! Confira os resultados abaixo.');
            closeModal('jobs-modal');
            scrollToSection('jobs');
        });

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            loadJobs();
            loadNews();
        });

        console.log('Portal da Secretaria do Trabalho carregado com sucesso! 🚀');
    </script>
</body>
</html>
