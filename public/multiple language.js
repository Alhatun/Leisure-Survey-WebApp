
var arrLang = {
    "en": {

      "emotions":"Rate your emotions experienced from this activity?",
      "Enjoyed":"Enjoyed",
      "Interested":"Interested",
      "Uninterested":"Uninterested",
      "Unenjoyed":"Unenjoyed",
      "Excited":"Excited",
      "Annoyed":"Annoyed",
      

      "age":"How old are you?",
      "14 years and under":"14 years and under",
      "15-24 years":"15-24 years",
      "25-64 years":"25-64 years",
      "65 years and over":"65 years and over",

      "budget range":"What is your budget range?",
      "$1000 and above":"$1000 and above",

      "gender":"What is your gender?",
      "Male":"Male",
      "Female":"Female",
      "Other":"Other",

      "income range":"What is your income level?",
      "Low":"Low",
      "Moderate":"Moderate",
      "High":"High",

      "education level":"What is your education level?",
      "Primary":"Primary",
      "Secondary":"Secondary",
      "Tertiary":"Tertiary",
      "Other":"Other",

      "visit with":"Who did you visit with?",
      "Alone":"Alone",
      "Friends":"Friends",
      "Family":"Family",
      "Other":"Other",

      "Service Quality Rating": "Service Quality Rating?",
      "Poor":"Poor",
      "Fair":"Fair",
      "Good":"Good",

      "visit again": "Would you visit again?",
      "Yes":"Yes",
      "No":"No",
      
      "organization rating": "Organization Rating?",
      "Poor":"Poor",
      "Fair":"Fair",
      "Good":"Good",

      "cost rating": "Rate the cost?",
      "Affordable":"Affordable",
      "Moderate":"Moderate",
      "Expensive":"Expensive",

      "cleanliness rating": "Cleanliness Rating?",
      "Poor":"Poor",
      "Fair":"Fair",
      "Good":"Good",

      "staff friendliness rating": "Staff Rating?",
      "Poor":"Poor",
      "Fair":"Fair",
      "Good":"Good",

      "physical disability": "Do you have a physical disability?",
      
      
    },
    "ar": {

      "emotions":"قيم مشاعرك خلال هذا النشاط الترفيهي؟ ",
      "Enjoyed":"مستمتع",
      "Interested":"مهتم",
      "Uninterested":"غير مهتم",
      "Unenjoyed":"غير مستمتع",
      "Excited":"متحمس",
      "Annoyed":"منزعج",

      "age":"كم عمرك؟",
      "14 years and under":"اقل من 14 سنة",
      "15-24 years":"15-24 سنة",
      "25-64 years":"25-64 سنة",
      "65 years and over":"اكبر من 65 سنة",

      "budget range":"ما هو نطاق ميزانيتك المخصصة للترفيه؟",
      "$1000 and above":"$1000 و اكثر ",

      "gender":"ما هو جنسك؟",
      "Male":"ذكر",
      "Female":"أنثى",
      "Other":"أخر",

      "income range":"ما مستوى دخلك؟",
      "Low":"منخفض",
      "Moderate":"متوسط",
      "High":"عالي",

      "education level":"ما مستواك التعليمي؟",
      "Primary":"ابتدائي",
      "Secondary":"ثانوي",
      "Tertiary":"جامعي",
      "Other":"أخر",

      "visit with":" مع من حضرت؟",
      "Alone":"لاحد",
      "Friends":"اصدقاء",
      "Family":"عائلة",
      "Other":"أخر",
      
      "Service Quality Rating": ":قيم جودة الخدمة",
      "Poor":"سيئ",
      "Fair":"متوسط",
      "Good":"ممتاز",



      "visit again": "هل ترغب بالزيارة مره أخرى؟",
      "Yes":"نعم",
      "No":"لا",
      
      "organization rating": ":قيم مستوى التنظيم",
      "Poor":"سيئ",
      "Fair":"متوسط",
      "Good":"ممتاز",

      "cost rating": ":قيم التكاليف",
      "Affordable":"ممتاز",
      "Moderate":"متوسطة",
      "Expensive":"مرتفعة",

      "cleanliness rating": ":قيم النظافة",
      "Poor":"سيئ",
      "Fair":"متوسط",
      "Good":"ممتاز",

      "staff friendliness rating": ":قيم تعاون الموظفين",
      "Poor":"سيئ",
      "Fair":"متوسط",
      "Good":"ممتاز",

      "physical disability": "هل لديك إعاقة؟",
    }
  };

  $(document).ready(function() {
    // The default language is English
    var lang = "en-gb";
    $(".lang").each(function(index, element) {
      $(this).text(arrLang[lang][$(this).attr("key")]);
    });
  });

  // get/set the selected language
  $(".translate").click(function() {
    var lang = $(this).attr("id");

    $(".lang").each(function(index, element) {
      $(this).text(arrLang[lang][$(this).attr("key")]);
    });
  });
