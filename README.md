# BMI Calculator - Laravel
A simple **Body Mass Index (BMI) Calculator** built with **Laravel** and **Bootstrap**. Users can input their **weight (kg)** and **height (cm)** to calculate their BMI and see their weight category.

---

## Features
- Enter **weight in kg** and **height in cm**
- **Bootstrap 5** responsive design
- BMI calculation with automatic height conversion (cm → m)
- Displays BMI **value** and **category**

---

## Installation

### **1. Clone the repository**
```sh
git clone https://github.com/your-username/bmi-calculator.git
cd bmi-calculator
```

### **2. Install dependencies**
```sh
composer install
npm install
```

### **3. Set up environment**
```sh
cp .env.example .env
php artisan key:generate
```

### **4. Run the application**
```sh
php artisan serve
```
Now visit **http://127.0.0.1:8000** in your browser

---

## How BMI is Calculated
```
BMI = weight (kg) / (height (m) ^ 2)
```
- **Underweight:** BMI < 18.5  
- **Normal weight:** 18.5 – 24.9  
- **Overweight:** 25 – 29.9  
- **Obesity:** BMI ≥ 30  

---
