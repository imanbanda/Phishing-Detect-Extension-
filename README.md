# Phishing-Detect-Extension
Phishing Detect Extension using Machine Learning(Screenshots Attached below)

This repository contains code and models for detecting phishing websites using machine learning techniques. The goal is to classify whether a given website URL is a phishing site or not.

**Background:-**
Phishing is a prevalent cyber threat where attackers create fake websites impersonating trusted brands to steal user data and credentials. As phishing attacks are becoming more sophisticated, traditional blacklist based techniques prove inadequate. This project explores using machine learning for more robust and generalizable phishing detection based on website features.

**Data:-**
The model is trained and evaluated on a dataset of website URLs containing both phishing and legitimate examples. Features are extracted from the URL text, domain attributes, page contents and more. The dataset is compiled from public sources like PhishTank, Kaggle datasets, UCI Machine Learning Repository etc. Preprocessing is done to handle missing values, duplicates etc.

**Methods:-**
Various machine learning algorithms are evaluated including Logistic Regression, Random Forest, SVM, Neural Networks etc. The best performing model is selected as the classifier. Hyperparameter tuning further optimizes the model. The system is designed to continuously retrain on new data.

**Usage:-**
The trained model can be integrated into a chrome extension or other application for real-time phishing classification of URLs. A browser extension prototype is implemented.

**References:-**
Research paper describing the phishing website detection system.
This provides an overview of the machine learning based phishing detection project documented in the paper. The README gives context for the code and models to anyone using the repository. Let me know if you would like me to modify or add anything.

# Screenshots

<img width="1440" alt="image" src="https://github.com/imanbanda/Phishing-Detect-Extension-/assets/91423754/70747f6b-d68c-48e2-9221-a31ca9728076">


<img width="1440" alt="image" src="https://github.com/imanbanda/Phishing-Detect-Extension-/assets/91423754/02b25828-7203-4e96-ad68-e843dd8104c6">

![image](https://github.com/imanbanda/Phishing-Detect-Extension-/assets/91423754/4237f26f-24df-4842-82b7-eb5d6cf6a6cd)


![image](https://github.com/imanbanda/Phishing-Detect-Extension-/assets/91423754/302da11c-d3d7-4573-b408-411d2a6b5d93)






