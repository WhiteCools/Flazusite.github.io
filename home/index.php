<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flazu Economy</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .top h1 {
            position: relative;
            right: -10px;
            color: white;
            margin: 0;
            font-size: 24px;
        }
        .top {    
            background-color: #091117;
            padding: 20px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 40 40 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: sticky;
            top : 0;
        }
        
        
        .top p {
            margin: 0;
        }
        
        .top button {
            padding: 10px 20px;
            background-color: transparent;
            border: none;
            border-radius: 50px;
            color: #dad6d6;
            cursor: pointer;
            margin-left: 10px;
            transition: border-radius 2s ease, background-color 0.3s ease;
            font-size: 16px;
        }
        
        .top button:hover {
            color: red;
            background-color: rgba(29, 27, 27, 0.2);
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(118, 118, 118, 0.5);
        }
        .container {
            background-color: #fff;
            padding: 10px;
            border-radius: 2%;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #ff0000;
            text-align: center;
        }
        .crypto-price {
            padding: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            background-color: #c6c0c0;
            border-radius: 5%;
            text-align: center;
            margin: 20px auto;
        }
        .crypto-price h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .service {
            padding: 20px;
            border-radius: 10%;
            box-shadow: 0 0 20px rgba(118, 118, 118, 0.5);
        }
        .box {
            background-color: #091117;
            padding: fixed;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 40 40 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex-wrap: wrap;
            gap: 20px
        }
        .discord{
            background-color: #c6c0c0;
            padding: 20px;
            border-radius: 20%;
            width: 40%;
        }
        .website {
            background-color: #c6c0c0;
            padding: 20px;
            border-radius: 20%;
            width: 40%;
        }
        .gtav {
            background-color: #c6c0c0;
            padding: 20px;
            border-radius: 20%;
            width: 40%;
        }
        .buy {
            font-family: 'Courier New', Courier, monospace;
            padding: 10px 90px;
            background-color: #3f7036bd;
            border-radius: 10%;
        }
        .buy:hover {
            background: rgb(0, 255, 0);
        }
        .website img,
        .gtav img,
        .discord img {
            height: 200px;
            filter: drop-shadow(5px 5px 6px rgb(142, 142, 142));
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            filter: drop-shadow(8px 2px 10px rgba(#ffffff))
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
        @media screen and (max-width: 800px) {
            .top {
                padding: 10px;
            }
            .top h1 {
                font-size: 20px; 
            }
            .top button {
                font-size: 14px; 
            }
            .crypto-price {
                width: 50%;
            }
            .website {
                width: 30%;
            }
            .discord {
                width: 30%;
            }
            .gtav {
                width: 30%;
            }
            .discord h2,
            .gtav h2,
            .website h2 {
                font-size: 10px;
            }
            .gtav img,
            .website img,
            .discord img {
                height: 80px;
            }
            .buy {
                font-family: 'Courier New', Courier, monospace;
                padding: 10px 10px;
                background-color: #3f7036bd;
                border-radius: 10%;
            }
        }
    </style>
</head>
<body>


<div class="top">
    <h1>Flazu Economy</h1>
    <p>
        <button class="home">Home</button>
        <button class="login-btn" onclick="window.location.href = '../login/';">Login</button>
        <button class="signup">Sign Up</button>
    </p>
</div>
<div class="container">
    <h1>Welcome To Flazu Economy</h1>
    <p>hye, here we provide services or sales from us, for example, selling service code discord bot, website and others</p>
</div>
<div class="crypto-price">
    <h2>Crypto Price Tracker</h2>
    <label for="crypto-select">Select Cryptocurrency: </label>
        <select id="crypto-select">
            <option value="bitcoin">Bitcoin</option>
            <option value="ethereum">Ethereum</option>
        </select>
    <p>Price: $<span id="btc-price"></span></p>
    <canvas id="btc-chart" width="400" height="200"></canvas>
    <script>
        let chart;
    
        function updateBTCPriceAndChart() {
            const selectedCrypto = document.getElementById('crypto-select').value;
            fetch(`https://api.coingecko.com/api/v3/coins/${selectedCrypto}/market_chart?vs_currency=usd&days=30&interval=daily`)
                .then(response => response.json())
                .then(data => {
                    const prices = data.prices.map(entry => entry[1]);
                    document.getElementById('btc-price').innerText = prices[prices.length - 1];
                    
                    if (!chart) {
                        const ctx = document.getElementById('btc-chart').getContext('2d');
                        chart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: Array.from({ length: prices.length }, (_, i) => ''),
                                datasets: [{
                                    label: `Price (USD)`,
                                    data: prices,
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    tension: 0.4
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: false
                                    }
                                }
                            }
                        });
                    } else {
                        chart.data.labels = Array.from({ length: prices.length }, (_, i) => '');
                        chart.data.datasets[0].data = prices;
                        chart.update();
                    }
                })
                .catch(error => {
                    console.error('Error fetching BTC price:', error);
                });
        }
    
        updateBTCPriceAndChart();
    
        setInterval(updateBTCPriceAndChart, 60000);
    
        document.getElementById('crypto-select').addEventListener('change', updateBTCPriceAndChart);
    </script>
</div>
<div class="service">
    <h2>Our Service</h2>
    <p>Here we provide service for you</p>
</div>
<div class="box">
    <div class="discord">
        <p>Discord bot</p>
        <img src="../img/discord.png">
        <h2>Price : RM 30</h2>
        <button class="buy" onclick="openModal('Discord Bot', '30')">Buy</button>
    </div>
    <div class="website">
        <p>Website</p>
        <img src="../img/web.png">
        <h2>Price : RM 30</h2>
        <button class="buy" onclick="openModal('Website', '30')">Buy</button>
    </div>
    <div class="gtav">
        <p>GTAV Account</p>
        <img src="../img/gtav.png">
        <h2>Price : RM 30</h2>
        <button class="buy" onclick="openModal('GTAV Account', '30')">Buy</button>
    </div>
</div>

<!-- The modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Enter your details:</h2>
        <input type="text" id="nameInput" placeholder="Your Name">
        <input type="text" id="emailInput" placeholder="Your Email">
        <input type="text" id="phoneInput" placeholder="Your Phone Number">
        <button type="submit" onclick="submitDetails()">Submit</button>
    </div>
</div>

<script>
    var itemName;
    var itemPrice;

    function openModal(name, price) {
        itemName = name;
        itemPrice = price;
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

    function submitDetails() {
        var name = document.getElementById("nameInput").value;
        var email = document.getElementById("emailInput").value;
        var phone = document.getElementById("phoneInput").value;

        // Perform validation if needed

        closeModal();
        buyItem(itemName, itemPrice, name, email, phone);
    }

    function buyItem(itemName, price, name, email, phone) {
        var options = {
            "key": "rzp_test_XqHiouLm69jxsv", // Enter your Razorpay Key ID here
            "amount": price * 100, // Convert price to the smallest currency unit (e.g., cents)
            "currency": "MYR",
            "description": itemName,
            "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
            "prefill": {
                "email": email,
                "contact": phone,
            },
            config: {
                display: {
                blocks: {
                    banks: {
                    name: 'All payment methods',
                    instruments: [
                        {
                        method: 'card'
                        },
                        {
                            method: 'wallet'
                        },
                        {
                            method: 'fpx'
                        }
                    ],
                    },
                },
                sequence: ['block.banks'],
                preferences: {
                    show_default_blocks: false,
                },
                },
            },
            "handler": function (response) {
                alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                // You can add further actions here, like updating the database or displaying a success message.
            },
            "modal": {
                "ondismiss": function () {
                    console.log("Checkout form closed by the user");
                    // You can add actions here if the user closes the payment form.
                }
            }
        };

        var rzp = new Razorpay(options);
        rzp.open();
    }
</script>
  
</body>
</html>
