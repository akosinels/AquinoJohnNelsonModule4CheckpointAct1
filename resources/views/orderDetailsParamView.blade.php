<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Transaction Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            'bg-primary': '#1a1a1a',
                            'bg-secondary': '#2d2d2d',
                            'text-primary': '#ffffff',
                            'text-secondary': '#a0aec0',
                            'border': '#404040'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-bg-primary text-dark-text-primary min-h-screen">
    <!-- Navigation -->
    <nav class="bg-dark-bg-secondary border-b border-dark-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-dark-text-primary hover:text-dark-text-secondary transition-colors">
                        Dashboard
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-dark-bg-secondary rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-dark-text-primary">Order Transaction Details</h2>
            
            <div class="space-y-6">
                <div class="border-b border-dark-border pb-4">
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Transaction Number</label>
                    <div class="text-lg text-dark-text-primary">{{ $transNo }}</div>
                </div>
                
                <div class="border-b border-dark-border pb-4">
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Order Number</label>
                    <div class="text-lg text-dark-text-primary">{{ $orderNo }}</div>
                </div>
                
                <div class="border-b border-dark-border pb-4">
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Item ID</label>
                    <div class="text-lg text-dark-text-primary">{{ $itemId }}</div>
                </div>
                
                <div class="border-b border-dark-border pb-4">
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Item Name</label>
                    <div class="text-lg text-dark-text-primary">{{ $itemName }}</div>
                </div>
                
                <div class="border-b border-dark-border pb-4">
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Price</label>
                    <div class="text-lg text-dark-text-primary">${{ number_format($itemPrice, 2) }}</div>
                </div>
                
                <div class="border-b border-dark-border pb-4">
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Quantity</label>
                    <div class="text-lg text-dark-text-primary">{{ $quantity }}</div>
                </div>
                
                <div class="pt-4">
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Total Amount</label>
                    <div class="text-xl font-bold text-dark-text-primary">${{ number_format($itemPrice * $quantity, 2) }}</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>