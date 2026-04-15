<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $request = json_decode('[
  {
    "id": 1,
    "name": "القاهرة",
    "centers": [
      {
        "id": 1,
        "villages": [
          {
            "Id": 1,
            "VillageName": "مساكن التبين الشعبية"
          },
          {
            "Id": 2,
            "VillageName": "مدينة الصلب "
          },
          {
            "Id": 3,
            "VillageName": "حكر التبين "
          },
          {
            "Id": 4,
            "VillageName": "التبين القبلية "
          },
          {
            "Id": 5,
            "VillageName": "التبين البحرية "
          }
        ],
        "name": "قسم التبين"
      },
      {
        "id": 2,
        "villages": [
          {
            "Id": 6,
            "VillageName": "عين حلوان "
          },
          {
            "Id": 7,
            "VillageName": "كفر العلو "
          },
          {
            "Id": 8,
            "VillageName": "حلوان القبلية "
          },
          {
            "Id": 9,
            "VillageName": "حلوان الغربية "
          },
          {
            "Id": 10,
            "VillageName": "حلوان الشرقية "
          },
          {
            "Id": 11,
            "VillageName": "حلوان البلد "
          },
          {
            "Id": 12,
            "VillageName": "حلوان البحرية "
          },
          {
            "Id": 13,
            "VillageName": "المساكن الإقتصادية "
          }
        ],
        "name": "قسم حلوان"
      },
      {
        "id": 3,
        "villages": [
          {
            "Id": 14,
            "VillageName": "وادى حــوف "
          },
          {
            "Id": 15,
            "VillageName": "حدائق حــلوان "
          },
          {
            "Id": 16,
            "VillageName": "المعصرة المحطة "
          },
          {
            "Id": 17,
            "VillageName": "المعصرة البلد "
          }
        ],
        "name": "قسم المعصرة"
      },
      {
        "id": 4,
        "villages": [
          {
            "Id": 18,
            "VillageName": "الشياخة الثالثة مجاورة من20 ـ35 "
          },
          {
            "Id": 19,
            "VillageName": "شياخة ثانية - مجاورة من 7ـ12 "
          },
          {
            "Id": 20,
            "VillageName": "شياخة اولى - مجاورة من 1ـ6 ومن 13ـ 19 "
          }
        ],
        "name": "قسم 15 مايو"
      },
      {
        "id": 5,
        "villages": [
          {
            "Id": 21,
            "VillageName": "الــزهراء "
          },
          {
            "Id": 22,
            "VillageName": "منشية المصرى "
          },
          {
            "Id": 23,
            "VillageName": "طرة الاسمنت "
          },
          {
            "Id": 24,
            "VillageName": "طرة الحيط (كوتسيكا سابقا) "
          },
          {
            "Id": 25,
            "VillageName": "طرة البلد (الفاروقية سابقا) "
          },
          {
            "Id": 26,
            "VillageName": "طرة الحجارة "
          }
        ],
        "name": "قسم طره"
      },
      {
        "id": 6,
        "villages": [
          {
            "Id": 27,
            "VillageName": "معادى السرايات الغربية "
          },
          {
            "Id": 28,
            "VillageName": "معادى السرايات الشرقية "
          },
          {
            "Id": 29,
            "VillageName": "معادى الخبيرى الوسطى"
          },
          {
            "Id": 30,
            "VillageName": "معادى الخبيرى الغربية "
          },
          {
            "Id": 31,
            "VillageName": "معادى الخبيرى الشرقية "
          }
        ],
        "name": "قسم المعادى"
      },
      {
        "id": 7,
        "villages": [
          {
            "Id": 32,
            "VillageName": "المعادى الجديدة "
          },
          {
            "Id": 33,
            "VillageName": "جبريل "
          },
          {
            "Id": 34,
            "VillageName": "البساتين "
          }
        ],
        "name": "قسم البساتين"
      },
      {
        "id": 8,
        "villages": [
          {
            "Id": 35,
            "VillageName": "نافــــع "
          },
          {
            "Id": 36,
            "VillageName": "العيسوية "
          },
          {
            "Id": 37,
            "VillageName": "دار السلام "
          }
        ],
        "name": "قسم دار السلام"
      },
      {
        "id": 9,
        "villages": [
          {
            "Id": 38,
            "VillageName": "كوم غراب "
          },
          {
            "Id": 39,
            "VillageName": "فم الخليج وديرالنحاس"
          },
          {
            "Id": 40,
            "VillageName": "عين الصيرة "
          },
          {
            "Id": 41,
            "VillageName": "المنيل الغربى "
          },
          {
            "Id": 42,
            "VillageName": "المنيل الشرقى "
          },
          {
            "Id": 43,
            "VillageName": "الكفور وساعى البحر "
          },
          {
            "Id": 44,
            "VillageName": "الروضة والمقياس "
          },
          {
            "Id": 45,
            "VillageName": "الديورة "
          },
          {
            "Id": 46,
            "VillageName": "الخوخة والقناية "
          },
          {
            "Id": 47,
            "VillageName": "الانور وعشش البارود "
          },
          {
            "Id": 48,
            "VillageName": "أثر النبى "
          },
          {
            "Id": 49,
            "VillageName": "ابو السعود والمدابغ "
          }
        ],
        "name": "قسم مصر القديمة"
      },
      {
        "id": 10,
        "villages": [
          {
            "Id": 50,
            "VillageName": "طولون "
          },
          {
            "Id": 51,
            "VillageName": "سنقر "
          },
          {
            "Id": 52,
            "VillageName": "زينهم "
          },
          {
            "Id": 53,
            "VillageName": "درب الجماميز "
          },
          {
            "Id": 54,
            "VillageName": "خيرت "
          },
          {
            "Id": 55,
            "VillageName": "حدائق زينهم "
          },
          {
            "Id": 56,
            "VillageName": "الكبش "
          },
          {
            "Id": 57,
            "VillageName": "العينى "
          },
          {
            "Id": 58,
            "VillageName": "العتريس "
          },
          {
            "Id": 59,
            "VillageName": "السيدة "
          },
          {
            "Id": 60,
            "VillageName": "السباعين "
          },
          {
            "Id": 61,
            "VillageName": "الدرب الجديد "
          },
          {
            "Id": 62,
            "VillageName": "الحنفى "
          },
          {
            "Id": 63,
            "VillageName": "البغالة "
          },
          {
            "Id": 64,
            "VillageName": "الانشا والمنيرة "
          }
        ],
        "name": "قسم السيدة زينب"
      },
      {
        "id": 11,
        "villages": [
          {
            "Id": 65,
            "VillageName": "عرب اليسار "
          },
          {
            "Id": 66,
            "VillageName": "درب غزية "
          },
          {
            "Id": 67,
            "VillageName": "درب الحصر "
          },
          {
            "Id": 68,
            "VillageName": "المحجر "
          },
          {
            "Id": 69,
            "VillageName": "القادرية "
          },
          {
            "Id": 70,
            "VillageName": "الصليبة "
          },
          {
            "Id": 71,
            "VillageName": "السيدة عائشة "
          },
          {
            "Id": 72,
            "VillageName": "الخليفة "
          },
          {
            "Id": 73,
            "VillageName": "الحلمية "
          },
          {
            "Id": 74,
            "VillageName": "الحطابة "
          },
          {
            "Id": 75,
            "VillageName": "التونسى "
          },
          {
            "Id": 76,
            "VillageName": "البقلى "
          },
          {
            "Id": 77,
            "VillageName": "الامامين "
          },
          {
            "Id": 78,
            "VillageName": "الاباجية "
          }
        ],
        "name": "قسم الخليفة"
      },
      {
        "id": 12,
        "villages": [
          {
            "Id": 79,
            "VillageName": "العبد "
          },
          {
            "Id": 80,
            "VillageName": "أطلس (ج) "
          },
          {
            "Id": 81,
            "VillageName": "صبحى حسين "
          },
          {
            "Id": 82,
            "VillageName": "ال 70 فدان "
          },
          {
            "Id": 83,
            "VillageName": "الصعيد "
          },
          {
            "Id": 84,
            "VillageName": "الجيزة "
          },
          {
            "Id": 85,
            "VillageName": "الشرق للتأمين "
          },
          {
            "Id": 86,
            "VillageName": "النصر "
          },
          {
            "Id": 87,
            "VillageName": "الأحياء "
          },
          {
            "Id": 88,
            "VillageName": "المقطم "
          }
        ],
        "name": "قسم المقطم"
      },
      {
        "id": 13,
        "villages": [
          {
            "Id": 89,
            "VillageName": "الدويقة ( مساكن سوزان مبارك الجديدة سابقا ) "
          },
          {
            "Id": 90,
            "VillageName": "مــنشاة ناصر "
          },
          {
            "Id": 91,
            "VillageName": "قـــايتباى "
          },
          {
            "Id": 92,
            "VillageName": "المـــجاوريين "
          },
          {
            "Id": 93,
            "VillageName": "الســلطان برقوق "
          },
          {
            "Id": 94,
            "VillageName": "المـــحاجر "
          },
          {
            "Id": 95,
            "VillageName": "المــعدسة "
          },
          {
            "Id": 96,
            "VillageName": "الخـــزان "
          }
        ],
        "name": "قسم منشأة ناصر"
      },
      {
        "id": 14,
        "villages": [
          {
            "Id": 97,
            "VillageName": "سوق السلاح "
          },
          {
            "Id": 98,
            "VillageName": "درب شغلان "
          },
          {
            "Id": 99,
            "VillageName": "درب سعادة "
          },
          {
            "Id": 100,
            "VillageName": "حارة الروم "
          },
          {
            "Id": 101,
            "VillageName": "تحت الربع "
          },
          {
            "Id": 102,
            "VillageName": "باب الوزير والغريب "
          },
          {
            "Id": 103,
            "VillageName": "المغربلين "
          },
          {
            "Id": 104,
            "VillageName": "القربية "
          },
          {
            "Id": 105,
            "VillageName": "الغورية "
          },
          {
            "Id": 106,
            "VillageName": "العمرى "
          },
          {
            "Id": 107,
            "VillageName": "السروجية "
          },
          {
            "Id": 108,
            "VillageName": "الدرب الاحمر "
          },
          {
            "Id": 109,
            "VillageName": "الداودية "
          },
          {
            "Id": 110,
            "VillageName": "الباطنية "
          }
        ],
        "name": "قسم الدرب الاحمر"
      },
      {
        "id": 15,
        "villages": [
          {
            "Id": 111,
            "VillageName": "كوم الشيخ سلامه "
          },
          {
            "Id": 112,
            "VillageName": "صفى الدين (الجامع الاحمر سابقا) "
          },
          {
            "Id": 113,
            "VillageName": "درب الجنينه "
          },
          {
            "Id": 114,
            "VillageName": "النوبى (درب النوبى سابقا) "
          },
          {
            "Id": 115,
            "VillageName": "المناصرة "
          },
          {
            "Id": 116,
            "VillageName": "اللواءامين الشريف (درب المهابيل سابقا) "
          },
          {
            "Id": 117,
            "VillageName": "العشماوى "
          },
          {
            "Id": 118,
            "VillageName": "الطمار "
          },
          {
            "Id": 119,
            "VillageName": "الشيخ ندا (درب مصطفى سابقا) "
          },
          {
            "Id": 120,
            "VillageName": "الرملى "
          }
        ],
        "name": "قسم الموسكى"
      },
      {
        "id": 16,
        "villages": [
          {
            "Id": 121,
            "VillageName": "غيط العدة "
          },
          {
            "Id": 122,
            "VillageName": "رحبة عابدين "
          },
          {
            "Id": 123,
            "VillageName": "باب اللوق "
          },
          {
            "Id": 124,
            "VillageName": "الفوالة "
          },
          {
            "Id": 125,
            "VillageName": "الشيخ عبدالله "
          },
          {
            "Id": 126,
            "VillageName": "السقايين "
          },
          {
            "Id": 127,
            "VillageName": "الساحة "
          },
          {
            "Id": 128,
            "VillageName": "الدواوين "
          },
          {
            "Id": 129,
            "VillageName": "الجزيرة الجديدة "
          },
          {
            "Id": 130,
            "VillageName": "البلاقسة "
          }
        ],
        "name": "قسم عابدين"
      },
      {
        "id": 17,
        "villages": [
          {
            "Id": 131,
            "VillageName": "معروف "
          },
          {
            "Id": 132,
            "VillageName": "قصرالدوبارة "
          },
          {
            "Id": 133,
            "VillageName": "جاردن سيتى "
          },
          {
            "Id": 134,
            "VillageName": "الاسماعيلية "
          }
        ],
        "name": "قسم قصرالنيل"
      },
      {
        "id": 18,
        "villages": [
          {
            "Id": 135,
            "VillageName": "محمد مظهر "
          },
          {
            "Id": 136,
            "VillageName": "عمر الخيام "
          },
          {
            "Id": 137,
            "VillageName": "الجبلاية "
          },
          {
            "Id": 138,
            "VillageName": "ابوالفدا "
          }
        ],
        "name": "قسم الزمالك"
      },
      {
        "id": 19,
        "villages": [
          {
            "Id": 139,
            "VillageName": "عشش الــنخل "
          },
          {
            "Id": 140,
            "VillageName": "شركس "
          },
          {
            "Id": 141,
            "VillageName": "ســوق العصر "
          },
          {
            "Id": 142,
            "VillageName": "ســنان باشا "
          },
          {
            "Id": 143,
            "VillageName": "درب نــصر "
          },
          {
            "Id": 144,
            "VillageName": "حــوض الزهور "
          },
          {
            "Id": 145,
            "VillageName": "القــلايـة "
          },
          {
            "Id": 146,
            "VillageName": "العليمى ( الفرنساوى سابقا) "
          },
          {
            "Id": 147,
            "VillageName": "العدوية "
          },
          {
            "Id": 148,
            "VillageName": "الشيخ فراج "
          },
          {
            "Id": 149,
            "VillageName": "الشيخ على "
          },
          {
            "Id": 150,
            "VillageName": "السندبيسى "
          },
          {
            "Id": 151,
            "VillageName": "السبتية "
          },
          {
            "Id": 152,
            "VillageName": "الخطيرى "
          },
          {
            "Id": 153,
            "VillageName": "الجوابر "
          },
          {
            "Id": 154,
            "VillageName": "الجلادين "
          },
          {
            "Id": 155,
            "VillageName": "الترجمان "
          },
          {
            "Id": 156,
            "VillageName": "الاحمدين "
          },
          {
            "Id": 157,
            "VillageName": "ابو العلا "
          }
        ],
        "name": "قسم بولاق"
      },
      {
        "id": 20,
        "villages": [
          {
            "Id": 158,
            "VillageName": "كــلوت بــك "
          },
          {
            "Id": 159,
            "VillageName": "عرابى (التوفيقية سابقا) "
          },
          {
            "Id": 160,
            "VillageName": "القللى "
          },
          {
            "Id": 161,
            "VillageName": "القـــبيلة "
          },
          {
            "Id": 162,
            "VillageName": "الفــجالة "
          },
          {
            "Id": 163,
            "VillageName": "الــزهار "
          },
          {
            "Id": 164,
            "VillageName": "الريحانى (قنطرة الدكة سابقا) "
          },
          {
            "Id": 165,
            "VillageName": "الجــيارة "
          }
        ],
        "name": "قسم الازبكية"
      },
      {
        "id": 21,
        "villages": [
          {
            "Id": 166,
            "VillageName": "سيدى مدين "
          },
          {
            "Id": 167,
            "VillageName": "درب الاقماعية "
          },
          {
            "Id": 168,
            "VillageName": "بركة الرطلى "
          },
          {
            "Id": 169,
            "VillageName": "باب الشعرية "
          },
          {
            "Id": 170,
            "VillageName": "باب البحر "
          },
          {
            "Id": 171,
            "VillageName": "النصــر (الفاروقية سابقا ) "
          },
          {
            "Id": 172,
            "VillageName": "المنسى "
          },
          {
            "Id": 173,
            "VillageName": "العدوى "
          },
          {
            "Id": 174,
            "VillageName": "الصوابى "
          },
          {
            "Id": 175,
            "VillageName": "الشمبكى "
          },
          {
            "Id": 176,
            "VillageName": "البنهاوى "
          }
        ],
        "name": "قسم باب الشعرية"
      },
      {
        "id": 22,
        "villages": [
          {
            "Id": 177,
            "VillageName": "قصر الشوق "
          },
          {
            "Id": 178,
            "VillageName": "خان الخليلى "
          },
          {
            "Id": 179,
            "VillageName": "جوهر القائد (اليهود الربان سابقا) "
          },
          {
            "Id": 180,
            "VillageName": "بين الصورين "
          },
          {
            "Id": 181,
            "VillageName": "باب الفتوح "
          },
          {
            "Id": 182,
            "VillageName": "المنصورية "
          },
          {
            "Id": 183,
            "VillageName": "المشهد الحسينى "
          },
          {
            "Id": 184,
            "VillageName": "الكردى "
          },
          {
            "Id": 185,
            "VillageName": "العطوف "
          },
          {
            "Id": 186,
            "VillageName": "الشعرانى "
          },
          {
            "Id": 187,
            "VillageName": "الدراسة "
          },
          {
            "Id": 188,
            "VillageName": "الخواص "
          },
          {
            "Id": 189,
            "VillageName": "الخرنفش "
          },
          {
            "Id": 190,
            "VillageName": "الحمزاوى "
          },
          {
            "Id": 191,
            "VillageName": "الجمالية "
          },
          {
            "Id": 192,
            "VillageName": "البيرقدار "
          },
          {
            "Id": 193,
            "VillageName": "الازهر "
          }
        ],
        "name": "قسم الجمالية"
      },
      {
        "id": 23,
        "villages": [
          {
            "Id": 194,
            "VillageName": "غمرة "
          },
          {
            "Id": 195,
            "VillageName": "القبيسى "
          },
          {
            "Id": 196,
            "VillageName": "الظاهر "
          },
          {
            "Id": 197,
            "VillageName": "السكاكينى "
          },
          {
            "Id": 198,
            "VillageName": "الجنزورى "
          },
          {
            "Id": 199,
            "VillageName": "ابوخودة "
          }
        ],
        "name": "قسم الظاهر"
      },
      {
        "id": 24,
        "villages": [
          {
            "Id": 200,
            "VillageName": "كوبرى القبة "
          },
          {
            "Id": 201,
            "VillageName": "جناين الوايلية (ب) "
          },
          {
            "Id": 202,
            "VillageName": "جناين الوايلية (أ) "
          },
          {
            "Id": 203,
            "VillageName": "بين الجناين "
          },
          {
            "Id": 204,
            "VillageName": "العباسية القبلية (ب)"
          },
          {
            "Id": 205,
            "VillageName": "العباسية القبلية (أ)"
          },
          {
            "Id": 206,
            "VillageName": "العباسية الغربية "
          },
          {
            "Id": 207,
            "VillageName": "العباسية الشرقية "
          },
          {
            "Id": 208,
            "VillageName": "العباسية البحرية "
          },
          {
            "Id": 209,
            "VillageName": "السرايات "
          },
          {
            "Id": 210,
            "VillageName": "الزعفران "
          },
          {
            "Id": 211,
            "VillageName": "الدمرداش (وتشمل المحمدى ) "
          }
        ],
        "name": "قسم الوايلى"
      },
      {
        "id": 25,
        "villages": [
          {
            "Id": 212,
            "VillageName": "منشية الصدر "
          },
          {
            "Id": 213,
            "VillageName": "مساكن الأميرية الجنوبية "
          },
          {
            "Id": 214,
            "VillageName": "حدائق القبة "
          },
          {
            "Id": 215,
            "VillageName": "الوايلى الكبير غرب "
          },
          {
            "Id": 216,
            "VillageName": "الوايلى الكبير شرق "
          },
          {
            "Id": 217,
            "VillageName": "القبة "
          },
          {
            "Id": 218,
            "VillageName": "الخاصة "
          },
          {
            "Id": 219,
            "VillageName": "الحدائق "
          }
        ],
        "name": "قسم حدائق القبة"
      },
      {
        "id": 26,
        "villages": [
          {
            "Id": 220,
            "VillageName": "مـــهمشة "
          },
          {
            "Id": 221,
            "VillageName": "الزاوية الحمراء البلد "
          },
          {
            "Id": 222,
            "VillageName": "الــعزب "
          },
          {
            "Id": 223,
            "VillageName": "الشــرابية "
          }
        ],
        "name": "قسم الشرابية"
      },
      {
        "id": 27,
        "villages": [
          {
            "Id": 224,
            "VillageName": "جــسر شبرا "
          },
          {
            "Id": 225,
            "VillageName": "الـعطار "
          },
          {
            "Id": 226,
            "VillageName": "الشــماشرجى "
          },
          {
            "Id": 227,
            "VillageName": "الــترعة البولاقية "
          }
        ],
        "name": "قسم شبرا"
      },
      {
        "id": 28,
        "villages": [
          {
            "Id": 228,
            "VillageName": "قصورة الشوام "
          },
          {
            "Id": 229,
            "VillageName": "طوسون "
          },
          {
            "Id": 230,
            "VillageName": "روض الفرج البلد "
          },
          {
            "Id": 231,
            "VillageName": "جزيرة بدران "
          },
          {
            "Id": 232,
            "VillageName": "المبيضة "
          },
          {
            "Id": 233,
            "VillageName": "ابن الرشيد "
          }
        ],
        "name": "قسم روض الفرج"
      },
      {
        "id": 29,
        "villages": [
          {
            "Id": 234,
            "VillageName": "منية السيرج "
          },
          {
            "Id": 235,
            "VillageName": "شريف "
          },
          {
            "Id": 236,
            "VillageName": "برهام "
          },
          {
            "Id": 237,
            "VillageName": "الساحل "
          },
          {
            "Id": 238,
            "VillageName": "الخازنداره "
          },
          {
            "Id": 239,
            "VillageName": "البراد "
          },
          {
            "Id": 240,
            "VillageName": "أسعد "
          }
        ],
        "name": "قسم الساحل"
      },
      {
        "id": 30,
        "villages": [
          {
            "Id": 241,
            "VillageName": "الأميرية البلد "
          },
          {
            "Id": 242,
            "VillageName": "مساكن الزاوية الحمراء "
          }
        ],
        "name": "قسم الزاوية الحمراء"
      },
      {
        "id": 31,
        "villages": [
          {
            "Id": 243,
            "VillageName": "مساكن السعودية "
          },
          {
            "Id": 244,
            "VillageName": "القفاصين "
          },
          {
            "Id": 245,
            "VillageName": "مرسى خليل الجديدة "
          },
          {
            "Id": 246,
            "VillageName": "القبة الجديدة "
          },
          {
            "Id": 247,
            "VillageName": "ناصر "
          },
          {
            "Id": 248,
            "VillageName": "الأميرية الجديدة "
          },
          {
            "Id": 249,
            "VillageName": "الأميرية الجنوبية "
          },
          {
            "Id": 250,
            "VillageName": "مساكن الأميرية الشمالية "
          }
        ],
        "name": "قسم الاميرية"
      },
      {
        "id": 32,
        "villages": [
          {
            "Id": 251,
            "VillageName": "الزيتون الغربية "
          },
          {
            "Id": 252,
            "VillageName": "الزيتون الشرقية "
          },
          {
            "Id": 253,
            "VillageName": "الزيتون القبلية "
          },
          {
            "Id": 254,
            "VillageName": "الزيتون البحرية "
          }
        ],
        "name": "قسم الزيتون"
      },
      {
        "id": 33,
        "villages": [
          {
            "Id": 255,
            "VillageName": "عزبة النخل الغربية "
          },
          {
            "Id": 256,
            "VillageName": "عين شمس الغربية "
          },
          {
            "Id": 257,
            "VillageName": "عرب الحصن "
          },
          {
            "Id": 258,
            "VillageName": "عرب طويلة "
          },
          {
            "Id": 259,
            "VillageName": "الخارجة (شجرة مريم )"
          },
          {
            "Id": 260,
            "VillageName": "المطرية القبلية "
          },
          {
            "Id": 261,
            "VillageName": "المطرية الغربية "
          },
          {
            "Id": 262,
            "VillageName": "المطرية البحرية "
          },
          {
            "Id": 263,
            "VillageName": "العزب "
          }
        ],
        "name": "قسم المطرية"
      },
      {
        "id": 34,
        "villages": [
          {
            "Id": 264,
            "VillageName": "منشية التحرير "
          },
          {
            "Id": 265,
            "VillageName": "عين شمس الشرقية "
          },
          {
            "Id": 266,
            "VillageName": "طلمبات عين شمس "
          },
          {
            "Id": 267,
            "VillageName": "حلمية النعام "
          },
          {
            "Id": 268,
            "VillageName": "حلمية الزيتون "
          },
          {
            "Id": 269,
            "VillageName": "الزهراء ومساكن الحلمية "
          }
        ],
        "name": "قسم عين شمس"
      },
      {
        "id": 35,
        "villages": [
          {
            "Id": 270,
            "VillageName": "كفر الشرفا "
          },
          {
            "Id": 271,
            "VillageName": "كفر الباشا "
          },
          {
            "Id": 272,
            "VillageName": "كفر ابو صير(بركة النصر ) "
          },
          {
            "Id": 273,
            "VillageName": "عزبة النخل الشرقية "
          },
          {
            "Id": 274,
            "VillageName": "بركة الحاج "
          },
          {
            "Id": 275,
            "VillageName": "المرج القبلية "
          },
          {
            "Id": 276,
            "VillageName": "المرج البحرية "
          }
        ],
        "name": "قسم المرج"
      },
      {
        "id": 36,
        "villages": [
          {
            "Id": 277,
            "VillageName": "العصارة "
          },
          {
            "Id": 278,
            "VillageName": "السلام الغربية "
          },
          {
            "Id": 279,
            "VillageName": "السلام الشرقية "
          }
        ],
        "name": "قسم أول السلام"
      },
      {
        "id": 37,
        "villages": [
          {
            "Id": 280,
            "VillageName": "التوفيق "
          },
          {
            "Id": 281,
            "VillageName": "الأمـل "
          },
          {
            "Id": 282,
            "VillageName": "المشير أحمد اسماعيل "
          },
          {
            "Id": 283,
            "VillageName": "النهضة "
          },
          {
            "Id": 284,
            "VillageName": "عمرو بن العاص "
          }
        ],
        "name": "قسم ثان السلام (النهضة)"
      },
      {
        "id": 38,
        "villages": [
          {
            "Id": 285,
            "VillageName": "شيراتون المطار "
          },
          {
            "Id": 286,
            "VillageName": "المطار "
          },
          {
            "Id": 287,
            "VillageName": "الهايكستب "
          },
          {
            "Id": 288,
            "VillageName": "النزهه "
          }
        ],
        "name": "قسم النزهة"
      },
      {
        "id": 39,
        "villages": [
          {
            "Id": 289,
            "VillageName": "منشية البكرى "
          },
          {
            "Id": 290,
            "VillageName": "المنتزة "
          },
          {
            "Id": 291,
            "VillageName": "الماظة "
          },
          {
            "Id": 292,
            "VillageName": "البستان "
          }
        ],
        "name": "قسم مصر الجديدة"
      },
      {
        "id": 40,
        "villages": [
          {
            "Id": 293,
            "VillageName": "الزهـــراء "
          },
          {
            "Id": 294,
            "VillageName": "منطقة السينما "
          },
          {
            "Id": 295,
            "VillageName": "مساكن المهندسين "
          },
          {
            "Id": 296,
            "VillageName": "عزبة الهجانه-الكيلو 4.5 "
          },
          {
            "Id": 297,
            "VillageName": "شرق المنطقة السادسة "
          },
          {
            "Id": 298,
            "VillageName": "رابعة العدوية "
          },
          {
            "Id": 299,
            "VillageName": "المنطقة السابعة "
          },
          {
            "Id": 300,
            "VillageName": "الحديقة الدولية "
          },
          {
            "Id": 301,
            "VillageName": "الوفاء والامل "
          },
          {
            "Id": 302,
            "VillageName": "المنطقة الثامنة "
          },
          {
            "Id": 303,
            "VillageName": "المنطقة السادسة "
          },
          {
            "Id": 304,
            "VillageName": "المنطقة الاولى "
          },
          {
            "Id": 305,
            "VillageName": "الحى العاشر "
          },
          {
            "Id": 306,
            "VillageName": "المنطقة العاشرة "
          },
          {
            "Id": 307,
            "VillageName": "المنطقة التاسعة "
          },
          {
            "Id": 308,
            "VillageName": "النادى الاهلى "
          },
          {
            "Id": 309,
            "VillageName": "الجولف "
          },
          {
            "Id": 310,
            "VillageName": "الشركات "
          },
          {
            "Id": 311,
            "VillageName": "التوفيق "
          }
        ],
        "name": "قسم اول مدينة نصر"
      },
      {
        "id": 41,
        "villages": [
          {
            "Id": 312,
            "VillageName": "نادى السكة الحديد "
          },
          {
            "Id": 313,
            "VillageName": "عزبة العرب "
          },
          {
            "Id": 314,
            "VillageName": "جامعة الازهر "
          },
          {
            "Id": 315,
            "VillageName": "السرايات الشرقية "
          },
          {
            "Id": 316,
            "VillageName": "الاستاد "
          },
          {
            "Id": 317,
            "VillageName": "الحى السادس "
          },
          {
            "Id": 318,
            "VillageName": "الحى السابع "
          }
        ],
        "name": "قسم ثان مدينة نصر"
      },
      {
        "id": 42,
        "villages": [
          {
            "Id": 319,
            "VillageName": "الجامعة الامريكية والروضة "
          },
          {
            "Id": 320,
            "VillageName": "الياسمين والبنفسج والمستثمرين الشمالية "
          },
          {
            "Id": 321,
            "VillageName": "النرجس والمستثمرين الجنوبية "
          },
          {
            "Id": 322,
            "VillageName": "التجمع الخامس "
          }
        ],
        "name": "قسم التجمع الخامس(اول القاهرة الجديدة)"
      },
      {
        "id": 43,
        "villages": [
          {
            "Id": 323,
            "VillageName": "أكاديمية الشرطة والميراج "
          },
          {
            "Id": 324,
            "VillageName": "الفردوس والكوثر "
          },
          {
            "Id": 325,
            "VillageName": "الرحاب والمستثمرون "
          }
        ],
        "name": "قسم التجمع الاول (ثان القاهرة الجديدة)"
      },
      {
        "id": 44,
        "villages": [
          {
            "Id": 326,
            "VillageName": "الأندلس "
          },
          {
            "Id": 327,
            "VillageName": "المنطقة الصناعية "
          },
          {
            "Id": 328,
            "VillageName": "الأنشطة "
          },
          {
            "Id": 329,
            "VillageName": "إسكان مبارك للشباب "
          },
          {
            "Id": 330,
            "VillageName": "القطامية "
          }
        ],
        "name": "قسم القطامية (ثالث القاهرة الجديدة)"
      },
      {
        "id": 45,
        "villages": [
          {
            "Id": 6359,
            "VillageName": "الشروق 1 "
          },
          {
            "Id": 6360,
            "VillageName": "الشروق 2 "
          },
          {
            "Id": 6361,
            "VillageName": "مدينة الضباط "
          }
        ],
        "name": "قسم الشروق"
      },
      {
        "id": 46,
        "villages": [
          {
            "Id": 331,
            "VillageName": "المنطقة الصناعية شرق طريق الروبيكى "
          },
          {
            "Id": 332,
            "VillageName": "المنطقة الصناعية ومنطقة الإمتداد المستقبلى "
          },
          {
            "Id": 333,
            "VillageName": "الحـــى المتميز "
          },
          {
            "Id": 334,
            "VillageName": "الحى الرابع والباقى من محور مركز المدينة "
          },
          {
            "Id": 335,
            "VillageName": "الحى الثالث والمنطقة الترفيهية "
          },
          {
            "Id": 336,
            "VillageName": "الحى الثانى ومنطقة الإمتداد المستقبلى "
          },
          {
            "Id": 337,
            "VillageName": "الحى الأول والحديقة المركزية "
          },
          {
            "Id": 338,
            "VillageName": "بـــــدر 1 "
          }
        ],
        "name": "قسم بدر"
      }
    ]
  },
  {
    "id": 2,
    "name": "الاسكندرية",
    "centers": [
      {
        "id": 47,
        "villages": [
          {
            "Id": 339,
            "VillageName": "سيدى بشر قبلى "
          },
          {
            "Id": 340,
            "VillageName": "سيدى بشر بحرى "
          },
          {
            "Id": 341,
            "VillageName": "خورشيد البحرية "
          },
          {
            "Id": 342,
            "VillageName": "المهاجرين "
          },
          {
            "Id": 343,
            "VillageName": "المنشية البحرية "
          },
          {
            "Id": 344,
            "VillageName": "القرداحى "
          },
          {
            "Id": 345,
            "VillageName": "السيوف قبلى ودربالة "
          },
          {
            "Id": 346,
            "VillageName": "السيوف بحرى "
          },
          {
            "Id": 347,
            "VillageName": "التوفيقية "
          }
        ],
        "name": "قسم أول المنتزة"
      },
      {
        "id": 48,
        "villages": [
          {
            "Id": 348,
            "VillageName": "أبو قير الغربية "
          },
          {
            "Id": 349,
            "VillageName": "أبو قير الشرقية "
          },
          {
            "Id": 350,
            "VillageName": "طلمبات الطابية "
          },
          {
            "Id": 351,
            "VillageName": "الناصرية (الكوبانية الانجليزية سابقا ) "
          },
          {
            "Id": 352,
            "VillageName": "العمراوى "
          },
          {
            "Id": 353,
            "VillageName": "المعمورة "
          },
          {
            "Id": 354,
            "VillageName": "المندرة قبلى "
          },
          {
            "Id": 355,
            "VillageName": "المندرة بحرى "
          }
        ],
        "name": "قسم ثان المنتزة"
      },
      {
        "id": 49,
        "villages": [
          {
            "Id": 356,
            "VillageName": "فلمنج "
          },
          {
            "Id": 357,
            "VillageName": "سان إستيفانو "
          },
          {
            "Id": 358,
            "VillageName": "باكوس "
          },
          {
            "Id": 359,
            "VillageName": "زعربانة "
          },
          {
            "Id": 360,
            "VillageName": "القصعى بحرى "
          }
        ],
        "name": "قسم أول الرمل"
      },
      {
        "id": 50,
        "villages": [
          {
            "Id": 361,
            "VillageName": "دنـــــا "
          },
          {
            "Id": 362,
            "VillageName": "أبيس الاولى "
          },
          {
            "Id": 363,
            "VillageName": "خورشيد "
          },
          {
            "Id": 364,
            "VillageName": "حجر النواتية "
          },
          {
            "Id": 365,
            "VillageName": "المحروسة "
          },
          {
            "Id": 366,
            "VillageName": "القصعى قبلى "
          },
          {
            "Id": 367,
            "VillageName": "الظاهرية "
          },
          {
            "Id": 368,
            "VillageName": "أبيس الثانية "
          }
        ],
        "name": "قسم ثان الرمل"
      },
      {
        "id": 51,
        "villages": [
          {
            "Id": 369,
            "VillageName": "مصطفى كامل وبولوكلى "
          },
          {
            "Id": 370,
            "VillageName": "عزبة سعد "
          },
          {
            "Id": 371,
            "VillageName": "عزبة النزهة "
          },
          {
            "Id": 372,
            "VillageName": "سيدى جابر "
          },
          {
            "Id": 373,
            "VillageName": "الرياضة "
          },
          {
            "Id": 374,
            "VillageName": "أبوالنواتير "
          }
        ],
        "name": "قسم سيدى جابر"
      },
      {
        "id": 52,
        "villages": [
          {
            "Id": 375,
            "VillageName": "عزبة الجامع "
          },
          {
            "Id": 376,
            "VillageName": "باب شرقى ووابور المياه "
          },
          {
            "Id": 377,
            "VillageName": "الحضرة قبلى "
          },
          {
            "Id": 378,
            "VillageName": "الأزاريطة والشاطبى "
          },
          {
            "Id": 379,
            "VillageName": "الابراهيمية قبلى والحضرة بحرى "
          },
          {
            "Id": 380,
            "VillageName": "الابراهيمية بحرى "
          }
        ],
        "name": "قسم باب شرقى"
      },
      {
        "id": 53,
        "villages": [
          {
            "Id": 381,
            "VillageName": "كوم الدكة غرب "
          },
          {
            "Id": 382,
            "VillageName": "كوم الدكة شرق "
          },
          {
            "Id": 383,
            "VillageName": "المسلةغرب وشريف باشا"
          },
          {
            "Id": 384,
            "VillageName": "المسلة شرق "
          },
          {
            "Id": 385,
            "VillageName": "المرغنى "
          },
          {
            "Id": 386,
            "VillageName": "العطارين غرب "
          },
          {
            "Id": 387,
            "VillageName": "العطارين شرق "
          },
          {
            "Id": 388,
            "VillageName": "الصورى "
          }
        ],
        "name": "قسم العطارين"
      },
      {
        "id": 54,
        "villages": [
          {
            "Id": 389,
            "VillageName": "أبيس 7 ،8, 10 "
          },
          {
            "Id": 390,
            "VillageName": "راغب باشا "
          },
          {
            "Id": 391,
            "VillageName": "بوالينو والاسكندرانى"
          },
          {
            "Id": 392,
            "VillageName": "أمبروز ومحرم بك "
          },
          {
            "Id": 393,
            "VillageName": "الصبحية وعزبة شركس وعزبة رأفت "
          },
          {
            "Id": 394,
            "VillageName": "الباب الجديد غرب ومنشا "
          },
          {
            "Id": 395,
            "VillageName": "الباب الجديد شرقى "
          }
        ],
        "name": "قسم محرم بك"
      },
      {
        "id": 55,
        "villages": [
          {
            "Id": 396,
            "VillageName": "سوق الغنم "
          },
          {
            "Id": 397,
            "VillageName": "نوبار "
          },
          {
            "Id": 398,
            "VillageName": "كرموز غرب "
          },
          {
            "Id": 399,
            "VillageName": "كرموز شرق "
          },
          {
            "Id": 400,
            "VillageName": "غيط العنب غرب "
          },
          {
            "Id": 401,
            "VillageName": "غيط العنب شرق "
          },
          {
            "Id": 402,
            "VillageName": "جامع سلطان "
          },
          {
            "Id": 403,
            "VillageName": "باب سدرة بحرى "
          },
          {
            "Id": 404,
            "VillageName": "باب سدرة البرانى غرب"
          },
          {
            "Id": 405,
            "VillageName": "باب سدرة البرانى شرق"
          },
          {
            "Id": 406,
            "VillageName": "الكارة والطوبجية وكفر الغاطس "
          }
        ],
        "name": "قسم كرموز"
      },
      {
        "id": 56,
        "villages": [
          {
            "Id": 407,
            "VillageName": "مشمس البصل "
          },
          {
            "Id": 408,
            "VillageName": "سوق الجمعة والمنير "
          },
          {
            "Id": 409,
            "VillageName": "حارة الفراهدة "
          },
          {
            "Id": 410,
            "VillageName": "العيونى والسكونيا "
          },
          {
            "Id": 411,
            "VillageName": "باب سدرة الجوانى وجنينة "
          },
          {
            "Id": 412,
            "VillageName": "النجع القديم "
          },
          {
            "Id": 413,
            "VillageName": "النجع الجديد "
          },
          {
            "Id": 414,
            "VillageName": "الصابورة "
          },
          {
            "Id": 415,
            "VillageName": "السكة الجديدة والطرطوشى "
          },
          {
            "Id": 416,
            "VillageName": "الحارة الواسعة والتخشيبة "
          },
          {
            "Id": 417,
            "VillageName": "الجنينة الكبيرة وسوق المعيز "
          },
          {
            "Id": 418,
            "VillageName": "الجنينة الصغيرة وكوم بكير "
          },
          {
            "Id": 419,
            "VillageName": "الجدد واللبان (الورشة ) "
          }
        ],
        "name": "قسم اللبان"
      },
      {
        "id": 57,
        "villages": [
          {
            "Id": 420,
            "VillageName": "المغاربة و سوق الترك"
          },
          {
            "Id": 421,
            "VillageName": "سوق البرسيم "
          },
          {
            "Id": 422,
            "VillageName": "الهماميل "
          },
          {
            "Id": 423,
            "VillageName": "المنشية الكبرى "
          }
        ],
        "name": "قسم المنشية"
      },
      {
        "id": 58,
        "villages": [
          {
            "Id": 424,
            "VillageName": "المزار "
          },
          {
            "Id": 425,
            "VillageName": "الميناء وتشمل ( الميناء ) "
          },
          {
            "Id": 426,
            "VillageName": "صفر وتشمل صفر والمغاوري ) "
          },
          {
            "Id": 427,
            "VillageName": "الشمولى وتشمل ( الشمولي والتمرازية ) "
          },
          {
            "Id": 428,
            "VillageName": "رأس التين وتشمل ( رأس التين والقبابية ) "
          },
          {
            "Id": 429,
            "VillageName": "الصيادين وتشمل ( الصيادين وخطاب ) "
          },
          {
            "Id": 430,
            "VillageName": "المدورة وتشمل ( مدورة والحلوجي ) "
          },
          {
            "Id": 431,
            "VillageName": "السيالة غرب وتشمل ( السيالة 2 ) "
          },
          {
            "Id": 432,
            "VillageName": "السيالة شرق وتشمل ( السيالة 1 ) "
          },
          {
            "Id": 433,
            "VillageName": "البلقطرية وتشمل ( البلقطرية وقبو الملاح ) "
          },
          {
            "Id": 434,
            "VillageName": "البركة وتشمل ( البركة والحجازي ) "
          },
          {
            "Id": 435,
            "VillageName": "أبو شوشة وتشمل ( ابوشوشة وسوق السمك القديم ) "
          }
        ],
        "name": "قسم الجمرك"
      },
      {
        "id": 59,
        "villages": [
          {
            "Id": 436,
            "VillageName": "الورديان "
          },
          {
            "Id": 437,
            "VillageName": "ام كبيبة ( المتراس )"
          },
          {
            "Id": 438,
            "VillageName": "القباري غرب والقباري شرق "
          },
          {
            "Id": 439,
            "VillageName": "المفروزة وتشمل ( المفروزة وطايبة صالح ) "
          },
          {
            "Id": 440,
            "VillageName": "كوم الشقافة وتشمل ( كوم الشقافة غرب وكوم الشقافة شرق ) "
          },
          {
            "Id": 441,
            "VillageName": "العامود( عامود السوارى ) "
          },
          {
            "Id": 442,
            "VillageName": "البورصة وتشمل ( كفر عشري ) "
          }
        ],
        "name": "قسم مينا البصل"
      },
      {
        "id": 60,
        "villages": [
          {
            "Id": 443,
            "VillageName": "المكس وتشمل ( وادي القمر ) "
          },
          {
            "Id": 444,
            "VillageName": "العجمي وتشمل (البيطاش شرق ,البيطاش غرب ) "
          },
          {
            "Id": 446,
            "VillageName": "الدخيلة "
          }
        ],
        "name": "قسم الدخيله"
      },
      {
        "id": 61,
        "villages": [
          {
            "Id": 447,
            "VillageName": "مرغم "
          },
          {
            "Id": 448,
            "VillageName": "ثان النهضة "
          },
          {
            "Id": 449,
            "VillageName": "أول النهضة "
          },
          {
            "Id": 450,
            "VillageName": "زاوية عبدالقادر "
          },
          {
            "Id": 451,
            "VillageName": "كـــرير "
          },
          {
            "Id": 452,
            "VillageName": "العجمى القبلية- أم زغبو "
          },
          {
            "Id": 453,
            "VillageName": "الذراع البحرى "
          },
          {
            "Id": 454,
            "VillageName": "العامرية غرب "
          },
          {
            "Id": 455,
            "VillageName": "العامرية شرق "
          }
        ],
        "name": "قسم أول العامرية"
      },
      {
        "id": 62,
        "villages": [
          {
            "Id": 456,
            "VillageName": "الشيخ مصطفى اسماعيل "
          },
          {
            "Id": 457,
            "VillageName": "فلسطين "
          },
          {
            "Id": 458,
            "VillageName": "الوادى "
          },
          {
            "Id": 459,
            "VillageName": "نجع العمدة هنداوى "
          },
          {
            "Id": 460,
            "VillageName": "نجع العمدة خليل "
          },
          {
            "Id": 461,
            "VillageName": "الهوارية "
          },
          {
            "Id": 462,
            "VillageName": "كينجى مريوط "
          }
        ],
        "name": "قسم ثان العامرية"
      },
      {
        "id": 63,
        "villages": [
          {
            "Id": 463,
            "VillageName": "القرية المركزية "
          },
          {
            "Id": 464,
            "VillageName": "طه الأمين "
          },
          {
            "Id": 465,
            "VillageName": "القرية 15 "
          },
          {
            "Id": 466,
            "VillageName": "مارقيا السياحية "
          },
          {
            "Id": 467,
            "VillageName": "أبو زهرة "
          },
          {
            "Id": 468,
            "VillageName": "التكامل "
          },
          {
            "Id": 469,
            "VillageName": "الشيخ عبدالباسط عبدالصمد "
          },
          {
            "Id": 470,
            "VillageName": "حوض سكرة وأبو حمد "
          },
          {
            "Id": 471,
            "VillageName": "النهضة "
          },
          {
            "Id": 472,
            "VillageName": "حمليص "
          },
          {
            "Id": 473,
            "VillageName": "بهيج "
          },
          {
            "Id": 474,
            "VillageName": "الغربانيات "
          },
          {
            "Id": 475,
            "VillageName": "السناقرة "
          },
          {
            "Id": 476,
            "VillageName": "الذراع البحرى "
          },
          {
            "Id": 477,
            "VillageName": "الجويرة "
          },
          {
            "Id": 478,
            "VillageName": "ابو صير "
          },
          {
            "Id": 479,
            "VillageName": "مدينة برج العرب "
          }
        ],
        "name": "قسم برج العرب"
      },
      {
        "id": 64,
        "villages": [
          {
            "Id": 480,
            "VillageName": "مدينة برج العرب الجديدة "
          }
        ],
        "name": "مدينة برج العرب الجديدة **"
      },
      {
        "id": 65,
        "villages": [
          {
            "Id": 481,
            "VillageName": "منطقة الساحل الشمالى"
          }
        ],
        "name": "الساحل الشمالى-جزء *"
      }
    ]
  },
  {
    "id": 3,
    "name": "بورسعيد",
    "centers": [
      {
        "id": 66,
        "villages": [
          {
            "Id": 482,
            "VillageName": "مصطفى حمزة (الافرنج غرب سابقا) "
          },
          {
            "Id": 483,
            "VillageName": "ابراهيم حسنين (لافرنج شرق سابقا) "
          }
        ],
        "name": "قسم الشرق"
      },
      {
        "id": 67,
        "villages": [
          {
            "Id": 484,
            "VillageName": "المنتزة سعد (ب) "
          },
          {
            "Id": 485,
            "VillageName": "المنتزة سعد (أ) "
          },
          {
            "Id": 486,
            "VillageName": "العــزب "
          },
          {
            "Id": 487,
            "VillageName": "العباسى (الجامع العباسى سابقا) "
          },
          {
            "Id": 488,
            "VillageName": "التوفيقى (الجامع التوفيقى سابقا) "
          },
          {
            "Id": 489,
            "VillageName": "أبـــوالحسن "
          }
        ],
        "name": "قسم العرب"
      },
      {
        "id": 68,
        "villages": [
          {
            "Id": 490,
            "VillageName": "عـــدلى "
          },
          {
            "Id": 491,
            "VillageName": "المـــناخ "
          },
          {
            "Id": 492,
            "VillageName": "الســـراى "
          },
          {
            "Id": 493,
            "VillageName": "الجـــلاء "
          }
        ],
        "name": "قسم المناخ"
      },
      {
        "id": 69,
        "villages": [
          {
            "Id": 494,
            "VillageName": "بـــنك الاســكان "
          },
          {
            "Id": 495,
            "VillageName": "الــقابوطى "
          },
          {
            "Id": 496,
            "VillageName": "الــسلام "
          }
        ],
        "name": "قسم الضواحى"
      },
      {
        "id": 70,
        "villages": [
          {
            "Id": 497,
            "VillageName": "الـــزهور "
          }
        ],
        "name": "قسم الزهور"
      },
      {
        "id": 71,
        "villages": [
          {
            "Id": 6362,
            "VillageName": "المناصرة "
          }
        ],
        "name": "قسم المناصرة-غرب بورسعيد"
      },
      {
        "id": 72,
        "villages": [
          {
            "Id": 499,
            "VillageName": "منطقة التينة * "
          },
          {
            "Id": 500,
            "VillageName": "منطقة رأس العش * "
          },
          {
            "Id": 6363,
            "VillageName": "الجنوب - جزء - يتبعه توابع تسمى الصديق "
          }
        ],
        "name": "قسم أول الجنوب"
      },
      {
        "id": 73,
        "villages": [
          {
            "Id": 502,
            "VillageName": "الجنوب "
          }
        ],
        "name": "قسم ثان الجنوب"
      },
      {
        "id": 74,
        "villages": [
          {
            "Id": 503,
            "VillageName": "أول بورفؤاد "
          }
        ],
        "name": "قسم أول بورفؤاد"
      },
      {
        "id": 75,
        "villages": [
          {
            "Id": 504,
            "VillageName": "ثــان بور فؤاد "
          }
        ],
        "name": "قسم ثان بورفؤاد"
      },
      {
        "id": 76,
        "villages": [
          {
            "Id": 505,
            "VillageName": "منطقة شرق التفريعة ( مبارك سابقا ) "
          }
        ],
        "name": "قسم شرق التفريعة"
      },
      {
        "id": 77,
        "villages": [
          {
            "Id": 506,
            "VillageName": "الدائرة الجمركية "
          }
        ],
        "name": "إدارة شرطة ميناء بورسعيد (قسم ميناء بورسعيد سابقا)*"
      }
    ]
  },
  {
    "id": 4,
    "name": "السويس",
    "centers": [
      {
        "id": 78,
        "villages": [
          {
            "Id": 507,
            "VillageName": "شيـــاخة ثان "
          },
          {
            "Id": 6358,
            "VillageName": "شياخة السويس "
          }
        ],
        "name": "قسم السويس"
      },
      {
        "id": 79,
        "villages": [
          {
            "Id": 509,
            "VillageName": "شياخة الأربعين "
          },
          {
            "Id": 510,
            "VillageName": "شياخة رابع "
          }
        ],
        "name": "قسم الاربعين"
      },
      {
        "id": 80,
        "villages": [
          {
            "Id": 511,
            "VillageName": "قرية مدينة السماد "
          },
          {
            "Id": 512,
            "VillageName": "فنار وبير ابو الدرج "
          },
          {
            "Id": 513,
            "VillageName": "غبة البوص وبير عديب "
          },
          {
            "Id": 514,
            "VillageName": "عربان العتيقة والمنايف والحويطات "
          },
          {
            "Id": 515,
            "VillageName": "عجرود "
          },
          {
            "Id": 516,
            "VillageName": "السادات "
          },
          {
            "Id": 517,
            "VillageName": "الحدايد "
          },
          {
            "Id": 518,
            "VillageName": "الادبية وتضم (المنطقة الحرة) "
          },
          {
            "Id": 519,
            "VillageName": "الاتكة "
          },
          {
            "Id": 520,
            "VillageName": "مدينة السخنة "
          },
          {
            "Id": 521,
            "VillageName": "مدينة عتاقة (الكامينون ) "
          }
        ],
        "name": "قسم عتاقة"
      },
      {
        "id": 81,
        "villages": [
          {
            "Id": 522,
            "VillageName": "منطقة فيصل والصباح "
          }
        ],
        "name": "قسم فيصل"
      },
      {
        "id": 82,
        "villages": [
          {
            "Id": 6364,
            "VillageName": "شياخة قسم خامس "
          }
        ],
        "name": "قسم الجناين"
      },
      {
        "id": 83,
        "villages": [
          {
            "Id": 524,
            "VillageName": "الدائرة الجمركية "
          }
        ],
        "name": "إدارة شرطه ميناء السويس(قسم ميناء السويس سابقا )*"
      },
      {
        "id": 84,
        "villages": [
          {
            "Id": 525,
            "VillageName": "خليج السويس السياحية"
          }
        ],
        "name": "منطقة خليج السويس السياحية*"
      }
    ]
  },
  {
    "id": 11,
    "name": "دمياط",
    "centers": [
      {
        "id": 85,
        "villages": [
          {
            "Id": 526,
            "VillageName": "شـــياخة ثــان "
          },
          {
            "Id": 527,
            "VillageName": "شـــياخة أول "
          }
        ],
        "name": "قسم أول دمياط"
      },
      {
        "id": 86,
        "villages": [
          {
            "Id": 528,
            "VillageName": "شــياخة رابــع "
          },
          {
            "Id": 529,
            "VillageName": "شــياخة ثــالث "
          }
        ],
        "name": "قسم ثان دمياط"
      },
      {
        "id": 87,
        "villages": [
          {
            "Id": 530,
            "VillageName": "عــزب النــهضة "
          },
          {
            "Id": 531,
            "VillageName": "عــزب البصــارطة "
          },
          {
            "Id": 532,
            "VillageName": "محب والسيالة "
          },
          {
            "Id": 533,
            "VillageName": "غيط النصارى "
          },
          {
            "Id": 534,
            "VillageName": "عزبة اللحم "
          },
          {
            "Id": 535,
            "VillageName": "شــط جريبه "
          },
          {
            "Id": 536,
            "VillageName": "شــط الشيخ درغام "
          },
          {
            "Id": 537,
            "VillageName": "شــط الشعراء "
          },
          {
            "Id": 538,
            "VillageName": "الخياطة "
          },
          {
            "Id": 539,
            "VillageName": "قرية شــطا "
          },
          {
            "Id": 540,
            "VillageName": "قرية أولاد حمام "
          },
          {
            "Id": 541,
            "VillageName": "العــنانية "
          },
          {
            "Id": 542,
            "VillageName": "العــدلية "
          },
          {
            "Id": 543,
            "VillageName": "الســنانية "
          },
          {
            "Id": 544,
            "VillageName": "الخــليفية "
          },
          {
            "Id": 545,
            "VillageName": "البستان وكــفر طبيخة"
          },
          {
            "Id": 546,
            "VillageName": "مــدينة عزبة البرج "
          }
        ],
        "name": "مركز دمياط"
      },
      {
        "id": 88,
        "villages": [
          {
            "Id": 547,
            "VillageName": "كــفر الــغوابين "
          },
          {
            "Id": 548,
            "VillageName": "مــيت الشيوخ "
          },
          {
            "Id": 549,
            "VillageName": "مــنشأة كرم ورزوق "
          },
          {
            "Id": 550,
            "VillageName": "كـــفر العرب "
          },
          {
            "Id": 551,
            "VillageName": "كــفر الشناوى "
          },
          {
            "Id": 552,
            "VillageName": "شــرباص "
          },
          {
            "Id": 553,
            "VillageName": "حــجاجة "
          },
          {
            "Id": 554,
            "VillageName": "أولاد خــلف "
          },
          {
            "Id": 555,
            "VillageName": "قرية الــنجارين "
          },
          {
            "Id": 556,
            "VillageName": "قرية أبوجريدة "
          },
          {
            "Id": 557,
            "VillageName": "الــناصرية "
          },
          {
            "Id": 558,
            "VillageName": "الــغوابين "
          },
          {
            "Id": 559,
            "VillageName": "الــغنيمية "
          },
          {
            "Id": 560,
            "VillageName": "الــعطوى "
          },
          {
            "Id": 561,
            "VillageName": "قرية الـعـزازمة "
          },
          {
            "Id": 562,
            "VillageName": "العــبيدية "
          },
          {
            "Id": 563,
            "VillageName": "قرية الطــرحة "
          },
          {
            "Id": 564,
            "VillageName": "الضــهرة "
          },
          {
            "Id": 565,
            "VillageName": "قرية السـالمية "
          },
          {
            "Id": 566,
            "VillageName": "الــرحــامنة "
          },
          {
            "Id": 567,
            "VillageName": "الحـــورانى "
          },
          {
            "Id": 568,
            "VillageName": "الــبراشية "
          },
          {
            "Id": 569,
            "VillageName": "الاربــعين "
          },
          {
            "Id": 570,
            "VillageName": "مــدينة الروضة "
          },
          {
            "Id": 571,
            "VillageName": "مدينة فارسكور "
          }
        ],
        "name": "مركز فارسكور"
      },
      {
        "id": 89,
        "villages": [
          {
            "Id": 572,
            "VillageName": "قرية الباز "
          },
          {
            "Id": 573,
            "VillageName": "مــيت الخـولى عبدالله "
          },
          {
            "Id": 574,
            "VillageName": "كــفر تـقى "
          },
          {
            "Id": 575,
            "VillageName": "كــفر المياسرة "
          },
          {
            "Id": 576,
            "VillageName": "شــرمساح "
          },
          {
            "Id": 577,
            "VillageName": "ســيف الــدين "
          },
          {
            "Id": 578,
            "VillageName": "دقــهلة "
          },
          {
            "Id": 579,
            "VillageName": "الــكاشف الــجديدة "
          },
          {
            "Id": 580,
            "VillageName": "قرية الــسلام "
          },
          {
            "Id": 581,
            "VillageName": "قرية الــزعاترة "
          },
          {
            "Id": 582,
            "VillageName": "مــدينة الزرقا "
          }
        ],
        "name": "مركز الزرقا"
      },
      {
        "id": 90,
        "villages": [
          {
            "Id": 583,
            "VillageName": "قرية تقتيش ثان "
          },
          {
            "Id": 584,
            "VillageName": " عزبة اللوزي "
          },
          {
            "Id": 585,
            "VillageName": "النواصرية "
          },
          {
            "Id": 586,
            "VillageName": "أبــو راشد "
          },
          {
            "Id": 587,
            "VillageName": "الــحسينية "
          },
          {
            "Id": 588,
            "VillageName": "قرية مــنشية ناصر "
          },
          {
            "Id": 589,
            "VillageName": "كــفر شحاتة "
          },
          {
            "Id": 590,
            "VillageName": "كفور الغاب (بلقاس ثان سابقا) "
          },
          {
            "Id": 591,
            "VillageName": "كفر سليمان البحرى "
          },
          {
            "Id": 592,
            "VillageName": "كفر الوسطانى "
          },
          {
            "Id": 593,
            "VillageName": "كفر المنازلة "
          },
          {
            "Id": 594,
            "VillageName": "كفر المرابعين الشرقية "
          },
          {
            "Id": 595,
            "VillageName": "كفر سعد البلد "
          },
          {
            "Id": 596,
            "VillageName": "عزب أم الرزق "
          },
          {
            "Id": 597,
            "VillageName": "دار السلام "
          },
          {
            "Id": 598,
            "VillageName": "المحمدية ( منشأة فاروق سابقا) "
          },
          {
            "Id": 599,
            "VillageName": "العباسية "
          },
          {
            "Id": 600,
            "VillageName": "السوالم "
          },
          {
            "Id": 601,
            "VillageName": "السعيدية القبلية "
          },
          {
            "Id": 602,
            "VillageName": "السعيدية البحرية "
          },
          {
            "Id": 603,
            "VillageName": "الزهراء(كفر ميت أبو غالب سابقا) "
          },
          {
            "Id": 604,
            "VillageName": "قرية الدهايمة "
          },
          {
            "Id": 605,
            "VillageName": "التوفيقية "
          },
          {
            "Id": 606,
            "VillageName": "قرية البدراوي "
          },
          {
            "Id": 607,
            "VillageName": "الابراهيمية القبلية "
          },
          {
            "Id": 608,
            "VillageName": "الابراهيمية البحرية "
          },
          {
            "Id": 609,
            "VillageName": "الإسماعيلية ( تشمل عزبة-3) "
          },
          {
            "Id": 610,
            "VillageName": "قرية أبوعياد "
          },
          {
            "Id": 611,
            "VillageName": "مدينة ميت أبوغالب "
          },
          {
            "Id": 612,
            "VillageName": "مدينة كفر سعد "
          }
        ],
        "name": "مركز كفر سعد"
      },
      {
        "id": 91,
        "villages": [
          {
            "Id": 613,
            "VillageName": "جــمصة "
          },
          {
            "Id": 614,
            "VillageName": "الــركابية "
          },
          {
            "Id": 615,
            "VillageName": "أم الـــرضا الــجديدة "
          },
          {
            "Id": 616,
            "VillageName": "أم الــرضا "
          },
          {
            "Id": 617,
            "VillageName": "كــحيل "
          },
          {
            "Id": 618,
            "VillageName": "الــرياض (الهواشم سابقا) "
          },
          {
            "Id": 619,
            "VillageName": "الســواحل "
          },
          {
            "Id": 620,
            "VillageName": "الــبساتين (العوامر سابقا) "
          },
          {
            "Id": 621,
            "VillageName": "مــدينة كفر البطيخ "
          }
        ],
        "name": "مركز كفر البطيخ"
      },
      {
        "id": 92,
        "villages": [
          {
            "Id": 622,
            "VillageName": "مدينة دمياط الجديدة "
          }
        ],
        "name": "قسم مدينة دمياط الجديدة"
      },
      {
        "id": 93,
        "villages": [
          {
            "Id": 623,
            "VillageName": "ميناء دمياط الجديد "
          }
        ],
        "name": "ادارة شرطة ميناء دمياط الجديدة"
      },
      {
        "id": 94,
        "villages": [
          {
            "Id": 624,
            "VillageName": "مدينة ر أس البر والجربي "
          }
        ],
        "name": "قسم رأس البر"
      },
      {
        "id": 95,
        "villages": [
          {
            "Id": 625,
            "VillageName": "محمد عبدالهادى السنباطى "
          },
          {
            "Id": 6365,
            "VillageName": "محمود شلبى "
          },
          {
            "Id": 6366,
            "VillageName": "عقل توفيق بدوى "
          },
          {
            "Id": 6367,
            "VillageName": "فتحى اليمانى هلال "
          }
        ],
        "name": "قسم الســــــرو"
      }
    ]
  },
  {
    "id": 12,
    "name": "الدقهليه",
    "centers": [
      {
        "id": 96,
        "villages": [
          {
            "Id": 626,
            "VillageName": "سندوب وكفر المناصرة "
          },
          {
            "Id": 627,
            "VillageName": "قسم رابع النجار "
          },
          {
            "Id": 628,
            "VillageName": "قسم ثالث ريحان "
          },
          {
            "Id": 629,
            "VillageName": "قسم ثان الحوار "
          },
          {
            "Id": 630,
            "VillageName": "قسم أول ميت طلخا "
          }
        ],
        "name": "قسم أول المنصورة"
      },
      {
        "id": 97,
        "villages": [
          {
            "Id": 631,
            "VillageName": "قولنجيل "
          },
          {
            "Id": 632,
            "VillageName": "جديلة "
          },
          {
            "Id": 633,
            "VillageName": "قسم كفر البدماص "
          },
          {
            "Id": 634,
            "VillageName": "قسم المنصورية(طوريل سابقا) "
          },
          {
            "Id": 635,
            "VillageName": "قسم سابع البحر الصغير "
          },
          {
            "Id": 636,
            "VillageName": "قسم سادس الحسينية ( ميت حدر ) "
          },
          {
            "Id": 637,
            "VillageName": "قسم خامس صيام "
          }
        ],
        "name": "قسم ثان المنصورة"
      },
      {
        "id": 98,
        "villages": [
          {
            "Id": 638,
            "VillageName": "ميت الأكراد "
          },
          {
            "Id": 639,
            "VillageName": "منية سندوب "
          },
          {
            "Id": 640,
            "VillageName": "منية بدواى "
          },
          {
            "Id": 641,
            "VillageName": "كوم بنى مراسى "
          },
          {
            "Id": 642,
            "VillageName": "كوم الدربى "
          },
          {
            "Id": 643,
            "VillageName": "كفر ميت فاتك "
          },
          {
            "Id": 644,
            "VillageName": "كفر طناح "
          },
          {
            "Id": 645,
            "VillageName": "كفر تلبانة "
          },
          {
            "Id": 646,
            "VillageName": "كفر بدواى القديم "
          },
          {
            "Id": 647,
            "VillageName": "كفر بدواى الجديد "
          },
          {
            "Id": 648,
            "VillageName": "كفر الشنهاب "
          },
          {
            "Id": 649,
            "VillageName": "كفر البرامون "
          },
          {
            "Id": 650,
            "VillageName": "كفر الأمشوطى "
          },
          {
            "Id": 651,
            "VillageName": "كرم الجديدة "
          },
          {
            "Id": 652,
            "VillageName": "طناح "
          },
          {
            "Id": 653,
            "VillageName": "طرانيس البحر "
          },
          {
            "Id": 654,
            "VillageName": "شها "
          },
          {
            "Id": 655,
            "VillageName": "شبرا بدين "
          },
          {
            "Id": 656,
            "VillageName": "شاوه "
          },
          {
            "Id": 657,
            "VillageName": "سللنت "
          },
          {
            "Id": 658,
            "VillageName": "سلكا "
          },
          {
            "Id": 659,
            "VillageName": "سلامون "
          },
          {
            "Id": 660,
            "VillageName": "دبو عوام "
          },
          {
            "Id": 661,
            "VillageName": "جميزة بلجاى "
          },
          {
            "Id": 662,
            "VillageName": "جديدة الهالة "
          },
          {
            "Id": 663,
            "VillageName": "تلبانة "
          },
          {
            "Id": 664,
            "VillageName": "بلجاى "
          },
          {
            "Id": 665,
            "VillageName": "برق العز "
          },
          {
            "Id": 666,
            "VillageName": "بدين "
          },
          {
            "Id": 667,
            "VillageName": "بدواى "
          },
          {
            "Id": 668,
            "VillageName": "بحقيرة "
          },
          {
            "Id": 669,
            "VillageName": "أويش الحجر "
          },
          {
            "Id": 670,
            "VillageName": "النسيمية "
          },
          {
            "Id": 671,
            "VillageName": "النزهة "
          },
          {
            "Id": 672,
            "VillageName": "المالحة "
          },
          {
            "Id": 673,
            "VillageName": "الزمار "
          },
          {
            "Id": 674,
            "VillageName": "الريدانية "
          },
          {
            "Id": 675,
            "VillageName": "الدنابيق "
          },
          {
            "Id": 676,
            "VillageName": "الخيارية "
          },
          {
            "Id": 677,
            "VillageName": "الخليج "
          },
          {
            "Id": 678,
            "VillageName": "الحواوشة "
          },
          {
            "Id": 679,
            "VillageName": "البنديرة "
          },
          {
            "Id": 680,
            "VillageName": "البقلية "
          },
          {
            "Id": 681,
            "VillageName": "البرامون "
          },
          {
            "Id": 682,
            "VillageName": "البدالة "
          },
          {
            "Id": 683,
            "VillageName": "نسيم-2 "
          },
          {
            "Id": 684,
            "VillageName": "كفر أبو شوارب "
          },
          {
            "Id": 685,
            "VillageName": "مجــــــــــر "
          },
          {
            "Id": 686,
            "VillageName": "نقيطة "
          },
          {
            "Id": 687,
            "VillageName": "ميت مزاح "
          },
          {
            "Id": 688,
            "VillageName": "ميت محمود "
          },
          {
            "Id": 689,
            "VillageName": "ميت لوزة "
          },
          {
            "Id": 690,
            "VillageName": "ميت عوام "
          },
          {
            "Id": 691,
            "VillageName": "ميت على "
          },
          {
            "Id": 692,
            "VillageName": "ميت عزون "
          },
          {
            "Id": 693,
            "VillageName": "ميت خيرون "
          },
          {
            "Id": 694,
            "VillageName": "ميت خميس وكفر الموجى"
          },
          {
            "Id": 695,
            "VillageName": "ميت جراح "
          },
          {
            "Id": 696,
            "VillageName": "ميت بدر خميس "
          },
          {
            "Id": 697,
            "VillageName": "ميت الصارم "
          }
        ],
        "name": "مركز المنصورة"
      },
      {
        "id": 99,
        "villages": [
          {
            "Id": 698,
            "VillageName": "السلام "
          },
          {
            "Id": 699,
            "VillageName": "أبو زيد "
          },
          {
            "Id": 700,
            "VillageName": "نوسا الغيط "
          },
          {
            "Id": 701,
            "VillageName": "نوسا البحر "
          },
          {
            "Id": 702,
            "VillageName": "ميت معاند "
          },
          {
            "Id": 703,
            "VillageName": "ميت مسعود "
          },
          {
            "Id": 704,
            "VillageName": "ميت فضالة "
          },
          {
            "Id": 705,
            "VillageName": "ميت دمسيس ( ميت دمسيس وكفر أبو جرج ) "
          },
          {
            "Id": 706,
            "VillageName": "ميت العامل "
          },
          {
            "Id": 707,
            "VillageName": "ميت أشنا "
          },
          {
            "Id": 708,
            "VillageName": "ميت أبو الحسين "
          },
          {
            "Id": 709,
            "VillageName": "ميت أبو الحارس "
          },
          {
            "Id": 710,
            "VillageName": "منية سمنود "
          },
          {
            "Id": 711,
            "VillageName": "منشأة منصور "
          },
          {
            "Id": 712,
            "VillageName": "منشأة عبدالنبى "
          },
          {
            "Id": 713,
            "VillageName": "منشأة البقلى "
          },
          {
            "Id": 714,
            "VillageName": "منشأة الأخوة "
          },
          {
            "Id": 715,
            "VillageName": "كفر عوض السنيطة "
          },
          {
            "Id": 716,
            "VillageName": "كفر ديرب بقطارس "
          },
          {
            "Id": 717,
            "VillageName": "كفر النجبا "
          },
          {
            "Id": 718,
            "VillageName": "كفر المندرة "
          },
          {
            "Id": 719,
            "VillageName": "كفر الشراقوة (كفر الشراقوة السنيطة ) "
          },
          {
            "Id": 720,
            "VillageName": "قرموط البهو "
          },
          {
            "Id": 721,
            "VillageName": "فيشا بنا "
          },
          {
            "Id": 722,
            "VillageName": "عزب العرب "
          },
          {
            "Id": 723,
            "VillageName": "طنامل الغربى "
          },
          {
            "Id": 724,
            "VillageName": "طنامل الشرقى وعزبة الأتربة "
          },
          {
            "Id": 725,
            "VillageName": "صهرجت الصغرى وكفر السيد "
          },
          {
            "Id": 726,
            "VillageName": "شيوة الغربية "
          },
          {
            "Id": 727,
            "VillageName": "شيوة الشرقية "
          },
          {
            "Id": 728,
            "VillageName": "شنيسة "
          },
          {
            "Id": 729,
            "VillageName": "شنفاص "
          },
          {
            "Id": 730,
            "VillageName": "شنشا "
          },
          {
            "Id": 731,
            "VillageName": "شبراويش "
          },
          {
            "Id": 732,
            "VillageName": "شبرا البهو "
          },
          {
            "Id": 733,
            "VillageName": "سنجيد "
          },
          {
            "Id": 734,
            "VillageName": "سنبخت "
          },
          {
            "Id": 735,
            "VillageName": "سماحة "
          },
          {
            "Id": 736,
            "VillageName": "ديرب بقطارس "
          },
          {
            "Id": 737,
            "VillageName": "دروة "
          },
          {
            "Id": 738,
            "VillageName": "جلموة "
          },
          {
            "Id": 739,
            "VillageName": "جراح "
          },
          {
            "Id": 740,
            "VillageName": "تلبنت أجا "
          },
          {
            "Id": 741,
            "VillageName": "بقطارس "
          },
          {
            "Id": 742,
            "VillageName": "برج نور الحمص "
          },
          {
            "Id": 743,
            "VillageName": "المندرة "
          },
          {
            "Id": 744,
            "VillageName": "الكرامة "
          },
          {
            "Id": 745,
            "VillageName": "الغراقة "
          },
          {
            "Id": 746,
            "VillageName": "السلامية "
          },
          {
            "Id": 747,
            "VillageName": "السبخا "
          },
          {
            "Id": 748,
            "VillageName": "الديرس (الدبوس وكفر لطيف ) "
          },
          {
            "Id": 749,
            "VillageName": "الدير "
          },
          {
            "Id": 750,
            "VillageName": "البهو فريك "
          },
          {
            "Id": 751,
            "VillageName": "البساتين( ميت بزو وكفر عثمان سليم سابقا) "
          },
          {
            "Id": 752,
            "VillageName": "الانشاصية "
          },
          {
            "Id": 753,
            "VillageName": "أخطاب "
          },
          {
            "Id": 754,
            "VillageName": "ابو دواود العنب "
          },
          {
            "Id": 755,
            "VillageName": "مدينة أجا "
          }
        ],
        "name": "مركز أجا"
      },
      {
        "id": 100,
        "villages": [
          {
            "Id": 756,
            "VillageName": "مدينة ميت غمر وتشمل دقادوس "
          }
        ],
        "name": "قسم ميت غمر"
      },
      {
        "id": 101,
        "villages": [
          {
            "Id": 757,
            "VillageName": "هــلا "
          },
          {
            "Id": 758,
            "VillageName": "ميت يعيش وكفورها "
          },
          {
            "Id": 759,
            "VillageName": "ميت ناجى "
          },
          {
            "Id": 760,
            "VillageName": "ميت محسن "
          },
          {
            "Id": 761,
            "VillageName": "ميت القرشى "
          },
          {
            "Id": 762,
            "VillageName": "ميت الفرماوى "
          },
          {
            "Id": 763,
            "VillageName": "ميت العز "
          },
          {
            "Id": 764,
            "VillageName": "ميت أبو خالد وكفر على بدرة "
          },
          {
            "Id": 765,
            "VillageName": "كوم النور وكفر الدليل "
          },
          {
            "Id": 766,
            "VillageName": "كفور البهايتة "
          },
          {
            "Id": 767,
            "VillageName": "كفر بهيدة "
          },
          {
            "Id": 768,
            "VillageName": "كفر نعمان "
          },
          {
            "Id": 769,
            "VillageName": "كفر ميت العز "
          },
          {
            "Id": 770,
            "VillageName": "كفر على عبد الله "
          },
          {
            "Id": 771,
            "VillageName": "كفر عطا الله سليمان "
          },
          {
            "Id": 772,
            "VillageName": "كفر ابراهيم شرف (كفر شرف ) "
          },
          {
            "Id": 773,
            "VillageName": "كفر سليمان تادرس "
          },
          {
            "Id": 774,
            "VillageName": "كفر سرنجا "
          },
          {
            "Id": 775,
            "VillageName": "كفر رشدى "
          },
          {
            "Id": 776,
            "VillageName": "كفر داودمطر "
          },
          {
            "Id": 777,
            "VillageName": "كفر بربرى سليمان "
          },
          {
            "Id": 778,
            "VillageName": "كفر الوزير "
          },
          {
            "Id": 779,
            "VillageName": "كفر النعيم "
          },
          {
            "Id": 780,
            "VillageName": "كفر المقدام "
          },
          {
            "Id": 781,
            "VillageName": "كفر المحمدية "
          },
          {
            "Id": 782,
            "VillageName": "كفر الشيخ هلال "
          },
          {
            "Id": 783,
            "VillageName": "كفر الشهيد "
          },
          {
            "Id": 784,
            "VillageName": "كفر الشراقوة "
          },
          {
            "Id": 785,
            "VillageName": "كفر حجازى "
          },
          {
            "Id": 786,
            "VillageName": "كفر الجوهرى "
          },
          {
            "Id": 787,
            "VillageName": "كفر أبو نبهان "
          },
          {
            "Id": 788,
            "VillageName": "كفر أبو العينين "
          },
          {
            "Id": 789,
            "VillageName": "كفر إبراهيم يوسف "
          },
          {
            "Id": 790,
            "VillageName": "صهرجت الكبرى وكفر جرجس يوسف "
          },
          {
            "Id": 791,
            "VillageName": "سنفا "
          },
          {
            "Id": 792,
            "VillageName": "سنتماى "
          },
          {
            "Id": 793,
            "VillageName": "سنبو مقام "
          },
          {
            "Id": 794,
            "VillageName": "سرنجا "
          },
          {
            "Id": 795,
            "VillageName": "دنديط وكفر محمود نافع "
          },
          {
            "Id": 796,
            "VillageName": "دماص "
          },
          {
            "Id": 797,
            "VillageName": "جصفا "
          },
          {
            "Id": 798,
            "VillageName": "تفاهنه الأشراف "
          },
          {
            "Id": 799,
            "VillageName": "بهيدة "
          },
          {
            "Id": 800,
            "VillageName": "بشلا "
          },
          {
            "Id": 801,
            "VillageName": "بشالوش "
          },
          {
            "Id": 802,
            "VillageName": "أوليلة "
          },
          {
            "Id": 803,
            "VillageName": "المعصرة وكفورها "
          },
          {
            "Id": 804,
            "VillageName": "القيطون "
          },
          {
            "Id": 805,
            "VillageName": "الرحمانية "
          },
          {
            "Id": 806,
            "VillageName": "الدبونية "
          },
          {
            "Id": 807,
            "VillageName": "الحاكمية "
          },
          {
            "Id": 808,
            "VillageName": "البوها "
          },
          {
            "Id": 809,
            "VillageName": "أتميدة "
          }
        ],
        "name": "مركز ميت غمر"
      },
      {
        "id": 102,
        "villages": [
          {
            "Id": 810,
            "VillageName": "منشأة أدهم "
          },
          {
            "Id": 811,
            "VillageName": "سعد الدين "
          },
          {
            "Id": 812,
            "VillageName": "السرسى "
          },
          {
            "Id": 813,
            "VillageName": "القنان "
          },
          {
            "Id": 814,
            "VillageName": "مبارك "
          },
          {
            "Id": 815,
            "VillageName": "نوب طريف "
          },
          {
            "Id": 816,
            "VillageName": "ميت غريطة "
          },
          {
            "Id": 817,
            "VillageName": "ميت غراب "
          },
          {
            "Id": 818,
            "VillageName": "منشأة رضا "
          },
          {
            "Id": 819,
            "VillageName": "منشأة هلال "
          },
          {
            "Id": 820,
            "VillageName": "منشأة عزت "
          },
          {
            "Id": 821,
            "VillageName": "كفر يوسف عوض "
          },
          {
            "Id": 822,
            "VillageName": "كفر ميت غراب "
          },
          {
            "Id": 823,
            "VillageName": "كفر محمد الشناوى "
          },
          {
            "Id": 824,
            "VillageName": "كفر قنصوة "
          },
          {
            "Id": 825,
            "VillageName": "كفر غنام "
          },
          {
            "Id": 826,
            "VillageName": "كفر عزام "
          },
          {
            "Id": 827,
            "VillageName": "كفر عبد الأمين حسب الله "
          },
          {
            "Id": 828,
            "VillageName": "كفر طنبول القديم "
          },
          {
            "Id": 829,
            "VillageName": "كفر شبرا هور "
          },
          {
            "Id": 830,
            "VillageName": "كفر سلامة "
          },
          {
            "Id": 831,
            "VillageName": "كفر سعد "
          },
          {
            "Id": 832,
            "VillageName": "كفر بنى سالم "
          },
          {
            "Id": 833,
            "VillageName": "كفر بدوى جرجس "
          },
          {
            "Id": 834,
            "VillageName": "كفر العنانية "
          },
          {
            "Id": 835,
            "VillageName": "كفر الشهيد مصطفى حمودة "
          },
          {
            "Id": 836,
            "VillageName": "كفر الشرفا "
          },
          {
            "Id": 837,
            "VillageName": "كفر الروك "
          },
          {
            "Id": 838,
            "VillageName": "كفر الحاج عزب "
          },
          {
            "Id": 839,
            "VillageName": "قرقيرة "
          },
          {
            "Id": 840,
            "VillageName": "غزالة "
          },
          {
            "Id": 841,
            "VillageName": "طوخ الأقلام "
          },
          {
            "Id": 842,
            "VillageName": "طهواى "
          },
          {
            "Id": 843,
            "VillageName": "طنبول الكبرى "
          },
          {
            "Id": 844,
            "VillageName": "طنبارة "
          },
          {
            "Id": 845,
            "VillageName": "طماى الزهايرة "
          },
          {
            "Id": 846,
            "VillageName": "طرانيس العرب "
          },
          {
            "Id": 847,
            "VillageName": "شبرا هور "
          },
          {
            "Id": 848,
            "VillageName": "شبرا قبالة "
          },
          {
            "Id": 849,
            "VillageName": "شبرا سندى "
          },
          {
            "Id": 850,
            "VillageName": "ديو الوسطى "
          },
          {
            "Id": 851,
            "VillageName": "بشمس "
          },
          {
            "Id": 852,
            "VillageName": "برهمتوش "
          },
          {
            "Id": 853,
            "VillageName": "برقين "
          },
          {
            "Id": 854,
            "VillageName": "برج نور العرب "
          },
          {
            "Id": 855,
            "VillageName": "الوحدةالعربية "
          },
          {
            "Id": 856,
            "VillageName": "المقاطعة "
          },
          {
            "Id": 857,
            "VillageName": "المخزن "
          },
          {
            "Id": 858,
            "VillageName": "المتوه "
          },
          {
            "Id": 859,
            "VillageName": "الفتح "
          },
          {
            "Id": 860,
            "VillageName": "العزاوى "
          },
          {
            "Id": 861,
            "VillageName": "الشعالة "
          },
          {
            "Id": 862,
            "VillageName": "السلام(كفر طنبول الجديد سابقا) "
          },
          {
            "Id": 863,
            "VillageName": "الزهايرة "
          },
          {
            "Id": 864,
            "VillageName": "الزريقى "
          },
          {
            "Id": 865,
            "VillageName": "الروضة "
          },
          {
            "Id": 866,
            "VillageName": "الرمزية "
          },
          {
            "Id": 867,
            "VillageName": "الحصوة "
          },
          {
            "Id": 868,
            "VillageName": "الحصاينة "
          },
          {
            "Id": 869,
            "VillageName": "الحجايزة "
          },
          {
            "Id": 870,
            "VillageName": "الجلايلة "
          },
          {
            "Id": 871,
            "VillageName": "التمد الحجر "
          },
          {
            "Id": 872,
            "VillageName": "البلامون "
          },
          {
            "Id": 873,
            "VillageName": "البكارية "
          },
          {
            "Id": 874,
            "VillageName": "البشنينى "
          },
          {
            "Id": 875,
            "VillageName": "الأورمان "
          },
          {
            "Id": 876,
            "VillageName": "أبو قراميط "
          },
          {
            "Id": 877,
            "VillageName": "مدينة السنبلاوين "
          }
        ],
        "name": "مركز السنبلاوين"
      },
      {
        "id": 103,
        "villages": [
          {
            "Id": 878,
            "VillageName": "كفر الأمير عبد الله بن سلامة "
          },
          {
            "Id": 879,
            "VillageName": "صدقا "
          },
          {
            "Id": 880,
            "VillageName": "زفــر "
          },
          {
            "Id": 881,
            "VillageName": "أبو الصير "
          },
          {
            "Id": 882,
            "VillageName": "تاج العز "
          },
          {
            "Id": 883,
            "VillageName": "الميهى "
          },
          {
            "Id": 884,
            "VillageName": "الكمال "
          },
          {
            "Id": 885,
            "VillageName": "العميد وكفر على السيد "
          },
          {
            "Id": 886,
            "VillageName": "الصفا ( غرور سابقا )"
          },
          {
            "Id": 887,
            "VillageName": "السمارة "
          },
          {
            "Id": 888,
            "VillageName": "السعودية "
          },
          {
            "Id": 889,
            "VillageName": "الربع "
          },
          {
            "Id": 890,
            "VillageName": "الخمسة "
          },
          {
            "Id": 891,
            "VillageName": "البيضا "
          },
          {
            "Id": 892,
            "VillageName": "أبو داود "
          },
          {
            "Id": 893,
            "VillageName": "مدينة تمى الامديد( تشمل عزبتى عاصم وعفيفى) "
          },
          {
            "Id": 894,
            "VillageName": "الفتح الجديدة "
          },
          {
            "Id": 895,
            "VillageName": "منشية الغربى "
          },
          {
            "Id": 896,
            "VillageName": "منشية الشرفا "
          },
          {
            "Id": 897,
            "VillageName": "منشية السلام "
          },
          {
            "Id": 898,
            "VillageName": "منشأة صبرى ابو علم "
          },
          {
            "Id": 899,
            "VillageName": "منشأة المعالوه "
          },
          {
            "Id": 900,
            "VillageName": "كفر سنجاب "
          }
        ],
        "name": "مركز تمى الامديد"
      },
      {
        "id": 104,
        "villages": [
          {
            "Id": 901,
            "VillageName": "ميت فارس ( ميت فارس و كفرها ) "
          },
          {
            "Id": 902,
            "VillageName": "ميت عدلان "
          },
          {
            "Id": 903,
            "VillageName": "ميت سويد وطبيل "
          },
          {
            "Id": 904,
            "VillageName": "منشأة مصبح "
          },
          {
            "Id": 905,
            "VillageName": "مبارك "
          },
          {
            "Id": 906,
            "VillageName": "كفر ميت فارس "
          },
          {
            "Id": 907,
            "VillageName": "كفر الصلاحات "
          },
          {
            "Id": 908,
            "VillageName": "طلمبات بنى عبيد "
          },
          {
            "Id": 909,
            "VillageName": "ديرب الخضر "
          },
          {
            "Id": 910,
            "VillageName": "اليوسيفية "
          },
          {
            "Id": 911,
            "VillageName": "الصلاحات "
          },
          {
            "Id": 912,
            "VillageName": "الزهيرى "
          },
          {
            "Id": 913,
            "VillageName": "الديسة "
          },
          {
            "Id": 914,
            "VillageName": "الحدادة "
          },
          {
            "Id": 915,
            "VillageName": "أبو المعاطى الباز "
          },
          {
            "Id": 916,
            "VillageName": "مدينة بنى عبيد "
          }
        ],
        "name": "مركز بنى عبيد"
      },
      {
        "id": 105,
        "villages": [
          {
            "Id": 917,
            "VillageName": "منية محلة دمنة "
          },
          {
            "Id": 918,
            "VillageName": "منشأة السلام (كفر الأعجر سابقا ) "
          },
          {
            "Id": 919,
            "VillageName": "مبارك الجديدة "
          },
          {
            "Id": 920,
            "VillageName": "كفر سعفان "
          },
          {
            "Id": 921,
            "VillageName": "كفر العلو "
          },
          {
            "Id": 922,
            "VillageName": "الناصرة "
          },
          {
            "Id": 923,
            "VillageName": "مدينة محلة دمنه "
          }
        ],
        "name": "مركز محلة دمنة"
      },
      {
        "id": 106,
        "villages": [
          {
            "Id": 924,
            "VillageName": "الحسانية "
          },
          {
            "Id": 925,
            "VillageName": "العبور الجديدة "
          },
          {
            "Id": 926,
            "VillageName": "عرب شراويد "
          },
          {
            "Id": 927,
            "VillageName": "ابو اسماعيل "
          },
          {
            "Id": 928,
            "VillageName": "الشركة 2 "
          },
          {
            "Id": 929,
            "VillageName": "ناصر "
          },
          {
            "Id": 930,
            "VillageName": "أبو طه "
          },
          {
            "Id": 931,
            "VillageName": "نجير وميت شداد "
          },
          {
            "Id": 932,
            "VillageName": "ميت طريف "
          },
          {
            "Id": 933,
            "VillageName": "ميت ضافر "
          },
          {
            "Id": 934,
            "VillageName": "ميت شرف "
          },
          {
            "Id": 935,
            "VillageName": "ميت سعدان "
          },
          {
            "Id": 936,
            "VillageName": "ميت النحال "
          },
          {
            "Id": 937,
            "VillageName": "ميت السودان "
          },
          {
            "Id": 938,
            "VillageName": "منشأة عبد الرحمن "
          },
          {
            "Id": 939,
            "VillageName": "كفرى عبد المؤمن والشيخ رضوان "
          },
          {
            "Id": 940,
            "VillageName": "كفر القباب "
          },
          {
            "Id": 941,
            "VillageName": "كفر الزهايرة "
          },
          {
            "Id": 942,
            "VillageName": "كفر الباز "
          },
          {
            "Id": 943,
            "VillageName": "كفر أبو ناصر "
          },
          {
            "Id": 944,
            "VillageName": "كفر أبو على "
          },
          {
            "Id": 945,
            "VillageName": "دمشلت "
          },
          {
            "Id": 946,
            "VillageName": "دموه(دموه السباخ سابقا) "
          },
          {
            "Id": 947,
            "VillageName": "الجزيره(جزيرة القباب سابقا) "
          },
          {
            "Id": 948,
            "VillageName": "حمادة "
          },
          {
            "Id": 949,
            "VillageName": "النهضة الجديدة "
          },
          {
            "Id": 950,
            "VillageName": "المرساة "
          },
          {
            "Id": 951,
            "VillageName": "المحمودية "
          },
          {
            "Id": 952,
            "VillageName": "الكرما الجديدة "
          },
          {
            "Id": 953,
            "VillageName": "الكرما القديمة "
          },
          {
            "Id": 954,
            "VillageName": "القليوبية "
          },
          {
            "Id": 955,
            "VillageName": "القباب الكبرى "
          },
          {
            "Id": 956,
            "VillageName": "القباب الصغرى "
          },
          {
            "Id": 957,
            "VillageName": "العزازنه "
          },
          {
            "Id": 958,
            "VillageName": "السلام "
          },
          {
            "Id": 959,
            "VillageName": "الربيعه "
          },
          {
            "Id": 960,
            "VillageName": "الخشاشنة "
          },
          {
            "Id": 961,
            "VillageName": "الحرية "
          },
          {
            "Id": 962,
            "VillageName": "البشمور "
          },
          {
            "Id": 963,
            "VillageName": "أشمون الرمان "
          },
          {
            "Id": 964,
            "VillageName": "مدينة دكرنس "
          }
        ],
        "name": "مركز دكرنس"
      },
      {
        "id": 107,
        "villages": [
          {
            "Id": 965,
            "VillageName": "الجمال ثان "
          },
          {
            "Id": 966,
            "VillageName": "الجمال أول "
          },
          {
            "Id": 967,
            "VillageName": "السلام "
          },
          {
            "Id": 968,
            "VillageName": "الوشايحه "
          },
          {
            "Id": 969,
            "VillageName": "غنيم شطا "
          },
          {
            "Id": 970,
            "VillageName": "ميت عاصم "
          },
          {
            "Id": 971,
            "VillageName": "ميت حديد "
          },
          {
            "Id": 972,
            "VillageName": "ميت تمامة "
          },
          {
            "Id": 973,
            "VillageName": "منشأة مبارك "
          },
          {
            "Id": 974,
            "VillageName": "منشأة عاصم "
          },
          {
            "Id": 975,
            "VillageName": "منشأة الجمال "
          },
          {
            "Id": 976,
            "VillageName": "كفر قنيش "
          },
          {
            "Id": 977,
            "VillageName": "كفر علام "
          },
          {
            "Id": 978,
            "VillageName": "كفر أبو ذكرى "
          },
          {
            "Id": 979,
            "VillageName": "برمبال القديمة "
          },
          {
            "Id": 980,
            "VillageName": "برمبال الجديدة "
          },
          {
            "Id": 981,
            "VillageName": "النزل "
          },
          {
            "Id": 982,
            "VillageName": "الرياض "
          },
          {
            "Id": 983,
            "VillageName": "الخضيرى "
          },
          {
            "Id": 984,
            "VillageName": "الحميدية "
          },
          {
            "Id": 985,
            "VillageName": "الجنينة "
          },
          {
            "Id": 986,
            "VillageName": "البجلات "
          },
          {
            "Id": 987,
            "VillageName": "مدينة منية النصر "
          }
        ],
        "name": "مركز منية النصر"
      },
      {
        "id": 108,
        "villages": [
          {
            "Id": 988,
            "VillageName": "عزبة الرافعى "
          },
          {
            "Id": 989,
            "VillageName": "محمود ابوالفرج السيد بكفر الكردى "
          },
          {
            "Id": 990,
            "VillageName": "سيف اليزل احمد يوسف "
          },
          {
            "Id": 991,
            "VillageName": "محمود حسن ابراهيم بكفر الكردى "
          },
          {
            "Id": 992,
            "VillageName": "مدحت أبو السعود على حسانين بالكردى "
          },
          {
            "Id": 993,
            "VillageName": "عزبة شتا بالكردى "
          },
          {
            "Id": 994,
            "VillageName": "محمدين الطنطاوى السيد "
          },
          {
            "Id": 995,
            "VillageName": "فاروق الدبس "
          },
          {
            "Id": 996,
            "VillageName": "احمد فودة محمدين "
          }
        ],
        "name": "قسم الكردى"
      },
      {
        "id": 109,
        "villages": [
          {
            "Id": 997,
            "VillageName": "الجعافرة "
          },
          {
            "Id": 998,
            "VillageName": "الكفر الجديد "
          },
          {
            "Id": 999,
            "VillageName": "الأتحاد "
          },
          {
            "Id": 1000,
            "VillageName": "الجوابر "
          },
          {
            "Id": 1001,
            "VillageName": "مدينة ميت سلسيل "
          }
        ],
        "name": "مركز ميت سلسيل"
      },
      {
        "id": 110,
        "villages": [
          {
            "Id": 1002,
            "VillageName": "اسكندرية الجديدة "
          },
          {
            "Id": 1003,
            "VillageName": "ميت مرجا سلسيل "
          },
          {
            "Id": 1004,
            "VillageName": "مبارك "
          },
          {
            "Id": 1005,
            "VillageName": "الهيشة "
          },
          {
            "Id": 1006,
            "VillageName": "المحلاوى "
          },
          {
            "Id": 1007,
            "VillageName": "مدينة الجمالية "
          }
        ],
        "name": "مركز الجمالية"
      },
      {
        "id": 111,
        "villages": [
          {
            "Id": 1008,
            "VillageName": "أبو الأخضر "
          },
          {
            "Id": 1009,
            "VillageName": "ميت شريف "
          },
          {
            "Id": 1010,
            "VillageName": "ميت خضير "
          },
          {
            "Id": 1011,
            "VillageName": "كفر حجاج "
          },
          {
            "Id": 1012,
            "VillageName": "عزبة الطوابرة "
          },
          {
            "Id": 1013,
            "VillageName": "دار السلام (القنايلة سابقا ) "
          },
          {
            "Id": 1014,
            "VillageName": "جديدة المنزلة "
          },
          {
            "Id": 1015,
            "VillageName": "بنى هلال "
          },
          {
            "Id": 1016,
            "VillageName": "أولاد نور "
          },
          {
            "Id": 1017,
            "VillageName": "أولاد ناصر "
          },
          {
            "Id": 1018,
            "VillageName": "أولاد علم "
          },
          {
            "Id": 1019,
            "VillageName": "أولاد سراج "
          },
          {
            "Id": 1020,
            "VillageName": "أولاد حانة "
          },
          {
            "Id": 1021,
            "VillageName": "أولاد بانة "
          },
          {
            "Id": 1022,
            "VillageName": "الهنايدة "
          },
          {
            "Id": 1023,
            "VillageName": "النسايمة "
          },
          {
            "Id": 1024,
            "VillageName": "المواجد "
          },
          {
            "Id": 1025,
            "VillageName": "القطشة "
          },
          {
            "Id": 1026,
            "VillageName": "القزاقزة "
          },
          {
            "Id": 1027,
            "VillageName": "الفروسات "
          },
          {
            "Id": 1028,
            "VillageName": "العمارنة "
          },
          {
            "Id": 1029,
            "VillageName": "العزيزة "
          },
          {
            "Id": 1030,
            "VillageName": "العربان "
          },
          {
            "Id": 1031,
            "VillageName": "العامرة "
          },
          {
            "Id": 1032,
            "VillageName": "الشبول "
          },
          {
            "Id": 1033,
            "VillageName": "الشريفية "
          },
          {
            "Id": 1034,
            "VillageName": "الستايتة "
          },
          {
            "Id": 1035,
            "VillageName": "الرودة "
          },
          {
            "Id": 1036,
            "VillageName": "الدقانوة الجديدة "
          },
          {
            "Id": 1037,
            "VillageName": "الخلايفة "
          },
          {
            "Id": 1038,
            "VillageName": "الحوتة "
          },
          {
            "Id": 1039,
            "VillageName": "الجماملة "
          },
          {
            "Id": 1040,
            "VillageName": "البصراط "
          },
          {
            "Id": 1041,
            "VillageName": "البصايلة "
          },
          {
            "Id": 1042,
            "VillageName": "الأحمدية "
          },
          {
            "Id": 1043,
            "VillageName": "مدينة المنزلة "
          }
        ],
        "name": "مركز المنزلة"
      },
      {
        "id": 112,
        "villages": [
          {
            "Id": 1044,
            "VillageName": "أولاد صبور "
          },
          {
            "Id": 1045,
            "VillageName": "العصافرة "
          },
          {
            "Id": 1046,
            "VillageName": "الضهير "
          },
          {
            "Id": 1047,
            "VillageName": "مدينة المطرية "
          }
        ],
        "name": "مركز المطرية"
      },
      {
        "id": 113,
        "villages": [
          {
            "Id": 1048,
            "VillageName": "محله أنشاق "
          },
          {
            "Id": 1049,
            "VillageName": "كفر يوسف "
          },
          {
            "Id": 1050,
            "VillageName": "كفر منشأة النصر "
          },
          {
            "Id": 1051,
            "VillageName": "كفر الوكاله "
          },
          {
            "Id": 1052,
            "VillageName": "كفر الشيخ عطية "
          },
          {
            "Id": 1053,
            "VillageName": "كفر الدبوسى "
          },
          {
            "Id": 1054,
            "VillageName": "كفر الحطبه "
          },
          {
            "Id": 1055,
            "VillageName": "كفر الحاج شربينى "
          },
          {
            "Id": 1056,
            "VillageName": "كفر الترعة القديم "
          },
          {
            "Id": 1057,
            "VillageName": "كفر الترعة الجديدة "
          },
          {
            "Id": 1058,
            "VillageName": "كفر الأطرش "
          },
          {
            "Id": 1059,
            "VillageName": "كفر ابو زاهر وعزبها "
          },
          {
            "Id": 1060,
            "VillageName": "رأس الخليج "
          },
          {
            "Id": 1061,
            "VillageName": "دنجواى "
          },
          {
            "Id": 1062,
            "VillageName": "ترعة غنيم "
          },
          {
            "Id": 1063,
            "VillageName": "بساط كريم الدين "
          },
          {
            "Id": 1064,
            "VillageName": "العيادية "
          },
          {
            "Id": 1065,
            "VillageName": "العوضية "
          },
          {
            "Id": 1066,
            "VillageName": "الضهرية "
          },
          {
            "Id": 1067,
            "VillageName": "الصبرية "
          },
          {
            "Id": 1068,
            "VillageName": "الشناوى "
          },
          {
            "Id": 1069,
            "VillageName": "السلام "
          },
          {
            "Id": 1070,
            "VillageName": "السعدية "
          },
          {
            "Id": 1071,
            "VillageName": "الحصص "
          },
          {
            "Id": 1072,
            "VillageName": "الأحمدية "
          },
          {
            "Id": 1073,
            "VillageName": "أبو جلال "
          },
          {
            "Id": 1074,
            "VillageName": "مدينة شربين "
          }
        ],
        "name": "مركز شربين"
      },
      {
        "id": 114,
        "villages": [
          {
            "Id": 1075,
            "VillageName": "مدينة جمصة "
          }
        ],
        "name": "قسم جمصة"
      },
      {
        "id": 115,
        "villages": [
          {
            "Id": 1076,
            "VillageName": "ســرســق "
          },
          {
            "Id": 1077,
            "VillageName": "ميت نابت "
          },
          {
            "Id": 1078,
            "VillageName": "ميت عنتر "
          },
          {
            "Id": 1079,
            "VillageName": "ميت زنقر "
          },
          {
            "Id": 1080,
            "VillageName": "ميت الكرماء "
          },
          {
            "Id": 1081,
            "VillageName": "منشأة البدوى "
          },
          {
            "Id": 1082,
            "VillageName": "كفور العرب "
          },
          {
            "Id": 1083,
            "VillageName": "كفر دميره القديم "
          },
          {
            "Id": 1084,
            "VillageName": "كفر دميره الجديد "
          },
          {
            "Id": 1085,
            "VillageName": "كفر بساط "
          },
          {
            "Id": 1086,
            "VillageName": "كفر القصالى "
          },
          {
            "Id": 1087,
            "VillageName": "كفر العرب "
          },
          {
            "Id": 1088,
            "VillageName": "كفر الطويلة "
          },
          {
            "Id": 1089,
            "VillageName": "كفر الخوزام "
          },
          {
            "Id": 1090,
            "VillageName": "كتامة الشرقية "
          },
          {
            "Id": 1091,
            "VillageName": "ديسط "
          },
          {
            "Id": 1092,
            "VillageName": "دميرة "
          },
          {
            "Id": 1093,
            "VillageName": "دار السلام (شرنقاش سابقا) "
          },
          {
            "Id": 1094,
            "VillageName": "جوجر "
          },
          {
            "Id": 1095,
            "VillageName": "بطرة "
          },
          {
            "Id": 1096,
            "VillageName": "بساط "
          },
          {
            "Id": 1097,
            "VillageName": "أورمان طلخا "
          },
          {
            "Id": 1098,
            "VillageName": "المنيل "
          },
          {
            "Id": 1099,
            "VillageName": "الطويلة "
          },
          {
            "Id": 1100,
            "VillageName": "الروضة "
          },
          {
            "Id": 1101,
            "VillageName": "مدينة طلخا "
          }
        ],
        "name": "مركز طلخا"
      },
      {
        "id": 116,
        "villages": [
          {
            "Id": 1102,
            "VillageName": "نشا ( تشمل كفر الحورانى وكفرالبشابشة) "
          },
          {
            "Id": 1103,
            "VillageName": "ميت عياد "
          },
          {
            "Id": 1104,
            "VillageName": "كفر بهوت "
          },
          {
            "Id": 1105,
            "VillageName": "كفر الدكرورى "
          },
          {
            "Id": 1106,
            "VillageName": "كفر الحصة "
          },
          {
            "Id": 1107,
            "VillageName": "كفر الجنينة البحرى "
          },
          {
            "Id": 1108,
            "VillageName": "الأبحر "
          },
          {
            "Id": 1109,
            "VillageName": "طنيخ "
          },
          {
            "Id": 1110,
            "VillageName": "طنبوها "
          },
          {
            "Id": 1111,
            "VillageName": "درين "
          },
          {
            "Id": 1112,
            "VillageName": "تيروة "
          },
          {
            "Id": 1113,
            "VillageName": "بهوت "
          },
          {
            "Id": 1114,
            "VillageName": "بانوب "
          },
          {
            "Id": 1115,
            "VillageName": "الطيبة "
          },
          {
            "Id": 1116,
            "VillageName": "الدروتين "
          },
          {
            "Id": 1117,
            "VillageName": "أفنيش "
          },
          {
            "Id": 1118,
            "VillageName": "أبستوا "
          },
          {
            "Id": 1119,
            "VillageName": "مدينة نبروه "
          }
        ],
        "name": "مركز نبروة"
      },
      {
        "id": 117,
        "villages": [
          {
            "Id": 1120,
            "VillageName": "جالـــــية "
          },
          {
            "Id": 1121,
            "VillageName": "النقعة ( الأمل ) "
          },
          {
            "Id": 1122,
            "VillageName": "الرياض "
          },
          {
            "Id": 1123,
            "VillageName": "الكمال "
          },
          {
            "Id": 1124,
            "VillageName": "الرجاء "
          },
          {
            "Id": 1125,
            "VillageName": "الطليعة ( 6 اكتوبر )"
          },
          {
            "Id": 1126,
            "VillageName": "السادات "
          },
          {
            "Id": 1127,
            "VillageName": "السد العالي "
          },
          {
            "Id": 1128,
            "VillageName": "ابو ماضي "
          },
          {
            "Id": 1129,
            "VillageName": "الخازندار "
          },
          {
            "Id": 1130,
            "VillageName": "القنان "
          },
          {
            "Id": 1131,
            "VillageName": "السبخاويه "
          },
          {
            "Id": 1132,
            "VillageName": "شرقية المعصره "
          },
          {
            "Id": 1133,
            "VillageName": "منشأة عبدالقادر "
          },
          {
            "Id": 1134,
            "VillageName": "منشأة شومان "
          },
          {
            "Id": 1135,
            "VillageName": "منشأة بسنديلة "
          },
          {
            "Id": 1136,
            "VillageName": "دملاش "
          },
          {
            "Id": 1137,
            "VillageName": "كفر الغنامة "
          },
          {
            "Id": 1138,
            "VillageName": "قلبشوه "
          },
          {
            "Id": 1139,
            "VillageName": "زيان "
          },
          {
            "Id": 1140,
            "VillageName": "بسنديلة "
          },
          {
            "Id": 1141,
            "VillageName": "النشرة "
          },
          {
            "Id": 1142,
            "VillageName": "المعصرة "
          },
          {
            "Id": 1143,
            "VillageName": "العريض "
          },
          {
            "Id": 1144,
            "VillageName": "الشوامى "
          },
          {
            "Id": 1145,
            "VillageName": "الشركة(بلقاس خامس سابقا) "
          },
          {
            "Id": 1146,
            "VillageName": "السماحية الكبرى "
          },
          {
            "Id": 1147,
            "VillageName": "الستامونى "
          },
          {
            "Id": 1148,
            "VillageName": "الزهراء "
          },
          {
            "Id": 1149,
            "VillageName": "الرملة "
          },
          {
            "Id": 1150,
            "VillageName": "الدومين-بلقاس ثالث سابقا "
          },
          {
            "Id": 1151,
            "VillageName": "الدمايرة "
          },
          {
            "Id": 1152,
            "VillageName": "الخلاله(بلقاس رابع سابقا) "
          },
          {
            "Id": 1153,
            "VillageName": "الحفير والأمل ( الحرية ) "
          },
          {
            "Id": 1154,
            "VillageName": "الجوادية "
          },
          {
            "Id": 1155,
            "VillageName": "ابو طه "
          },
          {
            "Id": 1156,
            "VillageName": "ابو شريف "
          },
          {
            "Id": 1157,
            "VillageName": "أبو دشيشة "
          },
          {
            "Id": 1158,
            "VillageName": "أبو بصل "
          },
          {
            "Id": 1159,
            "VillageName": "مدينة بلقاس "
          },
          {
            "Id": 1160,
            "VillageName": "المركــزية "
          }
        ],
        "name": "مركز بلقاس"
      }
    ]
  },
  {
    "id": 13,
    "name": "الشرقيه",
    "centers": [
      {
        "id": 118,
        "villages": [
          {
            "Id": 1161,
            "VillageName": "منشأة أباظة- تشمل الزند "
          },
          {
            "Id": 1162,
            "VillageName": "معوض "
          },
          {
            "Id": 1163,
            "VillageName": "النظام "
          },
          {
            "Id": 1164,
            "VillageName": "النحال- تشمل المبرز "
          },
          {
            "Id": 1165,
            "VillageName": "المنتزة "
          },
          {
            "Id": 1166,
            "VillageName": "الحسينية "
          },
          {
            "Id": 1167,
            "VillageName": "الحريرى "
          }
        ],
        "name": "قسم أول الزقازيق"
      },
      {
        "id": 119,
        "villages": [
          {
            "Id": 1168,
            "VillageName": "يوسف "
          },
          {
            "Id": 1169,
            "VillageName": "كفر عبد العزيز "
          },
          {
            "Id": 1170,
            "VillageName": "المنشية- حسن صالح "
          },
          {
            "Id": 1171,
            "VillageName": "الصيادين "
          },
          {
            "Id": 1172,
            "VillageName": "الزقازيق القبلية "
          },
          {
            "Id": 1173,
            "VillageName": "الزقازيق البحرية "
          },
          {
            "Id": 1174,
            "VillageName": "الحكما "
          },
          {
            "Id": 1175,
            "VillageName": "الجامع "
          },
          {
            "Id": 1176,
            "VillageName": "الاشارة "
          }
        ],
        "name": "قسم ثان الزقازيق"
      },
      {
        "id": 120,
        "villages": [
          {
            "Id": 1177,
            "VillageName": "كفر ابو حاكم "
          },
          {
            "Id": 1178,
            "VillageName": "كفر جمعة "
          },
          {
            "Id": 1179,
            "VillageName": "هرية رزنة "
          },
          {
            "Id": 1180,
            "VillageName": "نشوة "
          },
          {
            "Id": 1181,
            "VillageName": "ميت زافر "
          },
          {
            "Id": 1182,
            "VillageName": "ميت ركاب "
          },
          {
            "Id": 1183,
            "VillageName": "ميت أبو على "
          },
          {
            "Id": 1184,
            "VillageName": "ميت أبو عربى "
          },
          {
            "Id": 1185,
            "VillageName": "منشأة أبو الاخضر "
          },
          {
            "Id": 1186,
            "VillageName": "مشتول القاضى "
          },
          {
            "Id": 1187,
            "VillageName": "كوم الاشراف "
          },
          {
            "Id": 1188,
            "VillageName": "كفر مكاوى "
          },
          {
            "Id": 1189,
            "VillageName": "كفر يوسف سلامة "
          },
          {
            "Id": 1190,
            "VillageName": "كفر نوار حنا "
          },
          {
            "Id": 1191,
            "VillageName": "كفر محمود جاويش "
          },
          {
            "Id": 1192,
            "VillageName": "كفر محمد جاويش "
          },
          {
            "Id": 1193,
            "VillageName": "كفر محمد حسين "
          },
          {
            "Id": 1194,
            "VillageName": "كفر عوض الله حجازى "
          },
          {
            "Id": 1195,
            "VillageName": "كفر عطا الله سلامة "
          },
          {
            "Id": 1196,
            "VillageName": "كفر عبد الملك منصور "
          },
          {
            "Id": 1197,
            "VillageName": "كفر سليمان موسى "
          },
          {
            "Id": 1198,
            "VillageName": "كفر دنوهيا "
          },
          {
            "Id": 1199,
            "VillageName": "كفر الشيخ موسى عمران"
          },
          {
            "Id": 1200,
            "VillageName": "كفر الحلبى "
          },
          {
            "Id": 1201,
            "VillageName": "كفر الشاويشية "
          },
          {
            "Id": 1202,
            "VillageName": "كفر السطوحية "
          },
          {
            "Id": 1203,
            "VillageName": "كفر الحمام "
          },
          {
            "Id": 1204,
            "VillageName": "كفر الحصر "
          },
          {
            "Id": 1205,
            "VillageName": "كفر الجراية "
          },
          {
            "Id": 1206,
            "VillageName": "كفر الاشراف "
          },
          {
            "Id": 1207,
            "VillageName": "كفر أحمد صالح "
          },
          {
            "Id": 1208,
            "VillageName": "كفر أحمد جبران "
          },
          {
            "Id": 1209,
            "VillageName": "كفر أحمد برهام "
          },
          {
            "Id": 1210,
            "VillageName": "كفر أبو نجاح "
          },
          {
            "Id": 1211,
            "VillageName": "كفر أبو جبل "
          },
          {
            "Id": 1212,
            "VillageName": "كفر أباظة "
          },
          {
            "Id": 1213,
            "VillageName": "فرسيس "
          },
          {
            "Id": 1214,
            "VillageName": "غزالة الخيس "
          },
          {
            "Id": 1215,
            "VillageName": "طهرة حميد "
          },
          {
            "Id": 1216,
            "VillageName": "طحلة بردين "
          },
          {
            "Id": 1217,
            "VillageName": "طاروط "
          },
          {
            "Id": 1218,
            "VillageName": "صفيطة "
          },
          {
            "Id": 1219,
            "VillageName": "شيبة النكارية "
          },
          {
            "Id": 1220,
            "VillageName": "شوبك بسطة "
          },
          {
            "Id": 1221,
            "VillageName": "شنبارة الميمونة "
          },
          {
            "Id": 1222,
            "VillageName": "شرويدة "
          },
          {
            "Id": 1223,
            "VillageName": "دويدة "
          },
          {
            "Id": 1224,
            "VillageName": "حوض الطرفة "
          },
          {
            "Id": 1225,
            "VillageName": "تل مسمار "
          },
          {
            "Id": 1226,
            "VillageName": "تل حوين "
          },
          {
            "Id": 1227,
            "VillageName": "بيشة فايد "
          },
          {
            "Id": 1228,
            "VillageName": "بهنباى "
          },
          {
            "Id": 1229,
            "VillageName": "بهجات "
          },
          {
            "Id": 1230,
            "VillageName": "بنى عياد "
          },
          {
            "Id": 1231,
            "VillageName": "بنى عامر "
          },
          {
            "Id": 1232,
            "VillageName": "بنى أشبل "
          },
          {
            "Id": 1233,
            "VillageName": "بنايوس "
          },
          {
            "Id": 1234,
            "VillageName": "بردين "
          },
          {
            "Id": 1235,
            "VillageName": "أنشاص البصل "
          },
          {
            "Id": 1236,
            "VillageName": "أم رماد "
          },
          {
            "Id": 1237,
            "VillageName": "أم الزين "
          },
          {
            "Id": 1238,
            "VillageName": "النكارية "
          },
          {
            "Id": 1239,
            "VillageName": "النخاس "
          },
          {
            "Id": 1240,
            "VillageName": "المسلمية "
          },
          {
            "Id": 1241,
            "VillageName": "الغار "
          },
          {
            "Id": 1242,
            "VillageName": "العلوية "
          },
          {
            "Id": 1243,
            "VillageName": "العصلوجى "
          },
          {
            "Id": 1244,
            "VillageName": "الطيبة "
          },
          {
            "Id": 1245,
            "VillageName": "الطاهرة "
          },
          {
            "Id": 1246,
            "VillageName": "الصفا(كفر نخلة يعقوب سابقا) "
          },
          {
            "Id": 1247,
            "VillageName": "الشبانات "
          },
          {
            "Id": 1248,
            "VillageName": "السعادة "
          },
          {
            "Id": 1249,
            "VillageName": "الزهراء "
          },
          {
            "Id": 1250,
            "VillageName": "الزنكلون "
          },
          {
            "Id": 1251,
            "VillageName": "الرياض "
          },
          {
            "Id": 1252,
            "VillageName": "البيوم "
          }
        ],
        "name": "مركز الزقازيق"
      },
      {
        "id": 121,
        "villages": [
          {
            "Id": 1253,
            "VillageName": "مدينة القنايات "
          }
        ],
        "name": "قسم القنايات"
      },
      {
        "id": 122,
        "villages": [
          {
            "Id": 1254,
            "VillageName": "كفر المراغة "
          },
          {
            "Id": 1255,
            "VillageName": "كفر أبو شحاته "
          },
          {
            "Id": 1256,
            "VillageName": "ميت يزيد "
          },
          {
            "Id": 1257,
            "VillageName": "ميت سهيل "
          },
          {
            "Id": 1258,
            "VillageName": "ميت ربيعة الدللا "
          },
          {
            "Id": 1259,
            "VillageName": "ميت بشار "
          },
          {
            "Id": 1260,
            "VillageName": "منشأة شفيق "
          },
          {
            "Id": 1261,
            "VillageName": "ملامــس "
          },
          {
            "Id": 1262,
            "VillageName": "كوم حلين "
          },
          {
            "Id": 1263,
            "VillageName": "كفر يوسف سمرى "
          },
          {
            "Id": 1264,
            "VillageName": "كفر نشوة "
          },
          {
            "Id": 1265,
            "VillageName": "كفر ميت سهيل "
          },
          {
            "Id": 1266,
            "VillageName": "كفر شعبان "
          },
          {
            "Id": 1267,
            "VillageName": "كفر ميت بشار "
          },
          {
            "Id": 1268,
            "VillageName": "كفر موسى شاويش "
          },
          {
            "Id": 1269,
            "VillageName": "كفر مصطفى "
          },
          {
            "Id": 1270,
            "VillageName": "كفر محمد الغتورى "
          },
          {
            "Id": 1271,
            "VillageName": "كفر محمد أحمد "
          },
          {
            "Id": 1272,
            "VillageName": "كفر الصعيدي ( فرج جرجس ) "
          },
          {
            "Id": 1273,
            "VillageName": "كفر عمر مصطفى "
          },
          {
            "Id": 1274,
            "VillageName": "كفر على غالى "
          },
          {
            "Id": 1275,
            "VillageName": "كفر عثمان عفت "
          },
          {
            "Id": 1276,
            "VillageName": "كفر عبد النبى "
          },
          {
            "Id": 1277,
            "VillageName": "كفر عبد الله عزيزة "
          },
          {
            "Id": 1278,
            "VillageName": "كفر عبد الله شنقاص "
          },
          {
            "Id": 1279,
            "VillageName": "كفر شلشلمون "
          },
          {
            "Id": 1280,
            "VillageName": "كفر سلامة بشارة "
          },
          {
            "Id": 1281,
            "VillageName": "كفر سلامة إبراهيم "
          },
          {
            "Id": 1282,
            "VillageName": "كفر حسين الطوبجى "
          },
          {
            "Id": 1283,
            "VillageName": "كفر حسن ندا "
          },
          {
            "Id": 1284,
            "VillageName": "كفر حسن عكاشة "
          },
          {
            "Id": 1285,
            "VillageName": "كفر حسن عطا الله "
          },
          {
            "Id": 1286,
            "VillageName": "كفر بقطر سعد "
          },
          {
            "Id": 1287,
            "VillageName": "كفر بدران "
          },
          {
            "Id": 1288,
            "VillageName": "كفر أيوب عوض "
          },
          {
            "Id": 1289,
            "VillageName": "كفر الغنيمى "
          },
          {
            "Id": 1290,
            "VillageName": "كفر الصعايدة "
          },
          {
            "Id": 1291,
            "VillageName": "كفر الشيخ خليفه "
          },
          {
            "Id": 1292,
            "VillageName": "كفر الشعاورة "
          },
          {
            "Id": 1293,
            "VillageName": "كفر الزقازيق القبلى "
          },
          {
            "Id": 1294,
            "VillageName": "كفر الدير "
          },
          {
            "Id": 1295,
            "VillageName": "كفر أبو دقن "
          },
          {
            "Id": 1296,
            "VillageName": "كرديدة "
          },
          {
            "Id": 1297,
            "VillageName": "قمرونة "
          },
          {
            "Id": 1298,
            "VillageName": "قطيفة العزيزية "
          },
          {
            "Id": 1299,
            "VillageName": "ظهر شرب "
          },
          {
            "Id": 1300,
            "VillageName": "شيبة قش "
          },
          {
            "Id": 1301,
            "VillageName": "شلشلمون "
          },
          {
            "Id": 1302,
            "VillageName": "شبرا السلام "
          },
          {
            "Id": 1303,
            "VillageName": "شبرا العنب "
          },
          {
            "Id": 1304,
            "VillageName": "سنيطة أبو طوالة "
          },
          {
            "Id": 1305,
            "VillageName": "سنهوت(سنهوت البرك سابقا) "
          },
          {
            "Id": 1306,
            "VillageName": "سنهوا ومنشأة فتحى "
          },
          {
            "Id": 1307,
            "VillageName": "خلوة الشعراوى "
          },
          {
            "Id": 1308,
            "VillageName": "تلبانة "
          },
          {
            "Id": 1309,
            "VillageName": "بيشة عامر "
          },
          {
            "Id": 1310,
            "VillageName": "بنى هلال "
          },
          {
            "Id": 1311,
            "VillageName": "بنى قريش "
          },
          {
            "Id": 1312,
            "VillageName": "بنى حسين "
          },
          {
            "Id": 1313,
            "VillageName": "بندف "
          },
          {
            "Id": 1314,
            "VillageName": "الولجا "
          },
          {
            "Id": 1315,
            "VillageName": "النعامنة "
          },
          {
            "Id": 1316,
            "VillageName": "الميمونة "
          },
          {
            "Id": 1317,
            "VillageName": "المعالى "
          },
          {
            "Id": 1318,
            "VillageName": "المساعدة "
          },
          {
            "Id": 1319,
            "VillageName": "المحمدية "
          },
          {
            "Id": 1320,
            "VillageName": "المجازر "
          },
          {
            "Id": 1321,
            "VillageName": "القراقرة "
          },
          {
            "Id": 1322,
            "VillageName": "القبة "
          },
          {
            "Id": 1323,
            "VillageName": "العقدة "
          },
          {
            "Id": 1324,
            "VillageName": "العزيزية "
          },
          {
            "Id": 1325,
            "VillageName": "الصنافين القبلية "
          },
          {
            "Id": 1326,
            "VillageName": "الصنافين البحرية "
          },
          {
            "Id": 1327,
            "VillageName": "السعديين "
          },
          {
            "Id": 1328,
            "VillageName": "الربعماية "
          },
          {
            "Id": 1329,
            "VillageName": "الخرس "
          },
          {
            "Id": 1330,
            "VillageName": "الحوض الطويل "
          },
          {
            "Id": 1331,
            "VillageName": "الحميدية "
          },
          {
            "Id": 1332,
            "VillageName": "الجديدة "
          },
          {
            "Id": 1333,
            "VillageName": "التلين "
          },
          {
            "Id": 1334,
            "VillageName": "الاعراس "
          },
          {
            "Id": 1335,
            "VillageName": "أبو طوالة "
          },
          {
            "Id": 1336,
            "VillageName": "مدينة منيا القمح "
          }
        ],
        "name": "مركز منيا القمح"
      },
      {
        "id": 123,
        "villages": [
          {
            "Id": 1337,
            "VillageName": "نبتيت "
          },
          {
            "Id": 1338,
            "VillageName": "كفر يوسف شحاتة "
          },
          {
            "Id": 1339,
            "VillageName": "كفر دهمشا "
          },
          {
            "Id": 1340,
            "VillageName": "كفر الشرابية "
          },
          {
            "Id": 1341,
            "VillageName": "كفر ابراش "
          },
          {
            "Id": 1342,
            "VillageName": "قشا "
          },
          {
            "Id": 1343,
            "VillageName": "دهمشا "
          },
          {
            "Id": 1344,
            "VillageName": "المنير "
          },
          {
            "Id": 1345,
            "VillageName": "المناصرة "
          },
          {
            "Id": 1346,
            "VillageName": "الغفارية "
          },
          {
            "Id": 1347,
            "VillageName": "الصحافة "
          },
          {
            "Id": 1348,
            "VillageName": "الخشة "
          },
          {
            "Id": 1349,
            "VillageName": "البتية "
          },
          {
            "Id": 1350,
            "VillageName": "ابراش "
          },
          {
            "Id": 1351,
            "VillageName": "مدينة مشتول السوق "
          }
        ],
        "name": "مركز مشتول السوق"
      },
      {
        "id": 124,
        "villages": [
          {
            "Id": 1352,
            "VillageName": "حوض الندى "
          },
          {
            "Id": 1353,
            "VillageName": "نوبة "
          },
          {
            "Id": 1354,
            "VillageName": "منشاة السلام "
          },
          {
            "Id": 1355,
            "VillageName": "ميت معلا "
          },
          {
            "Id": 1356,
            "VillageName": "ميت ربيعة البيضاء "
          },
          {
            "Id": 1357,
            "VillageName": "ميت حمل "
          },
          {
            "Id": 1358,
            "VillageName": "ميت حبيب "
          },
          {
            "Id": 1359,
            "VillageName": "ميت جابر "
          },
          {
            "Id": 1360,
            "VillageName": "منية سنتا "
          },
          {
            "Id": 1361,
            "VillageName": "منية سلمنت "
          },
          {
            "Id": 1362,
            "VillageName": "كفر مسعود حجازى "
          },
          {
            "Id": 1363,
            "VillageName": "كفر حفنا "
          },
          {
            "Id": 1364,
            "VillageName": "كفر بنى عليم "
          },
          {
            "Id": 1365,
            "VillageName": "كفر أيوب سليمان "
          },
          {
            "Id": 1366,
            "VillageName": "كفر العرب "
          },
          {
            "Id": 1367,
            "VillageName": "كفر الشيخ عيسى "
          },
          {
            "Id": 1368,
            "VillageName": "كفر أكياد "
          },
          {
            "Id": 1369,
            "VillageName": "كفر ابراهيم العايدى "
          },
          {
            "Id": 1370,
            "VillageName": "قهلة الجبلة "
          },
          {
            "Id": 1371,
            "VillageName": "قرملة "
          },
          {
            "Id": 1372,
            "VillageName": "غيته "
          },
          {
            "Id": 1373,
            "VillageName": "شبرا النخلة "
          },
          {
            "Id": 1374,
            "VillageName": "سندنهور "
          },
          {
            "Id": 1375,
            "VillageName": "سلمنت "
          },
          {
            "Id": 1376,
            "VillageName": "حفنا "
          },
          {
            "Id": 1377,
            "VillageName": "تل روزن "
          },
          {
            "Id": 1378,
            "VillageName": "بير عمارة "
          },
          {
            "Id": 1379,
            "VillageName": "بنى صالح "
          },
          {
            "Id": 1380,
            "VillageName": "بساتين سراج الدين "
          },
          {
            "Id": 1381,
            "VillageName": "بساتين الاسماعيلية "
          },
          {
            "Id": 1382,
            "VillageName": "أولاد مهنا "
          },
          {
            "Id": 1383,
            "VillageName": "أولاد سيف "
          },
          {
            "Id": 1384,
            "VillageName": "أنشاص الرمل "
          },
          {
            "Id": 1385,
            "VillageName": "المنشية "
          },
          {
            "Id": 1386,
            "VillageName": "الكفر القديم "
          },
          {
            "Id": 1387,
            "VillageName": "الكتيبة "
          },
          {
            "Id": 1388,
            "VillageName": "العرايشية (كفر السلاوي سابقا ) "
          },
          {
            "Id": 1389,
            "VillageName": "العدلية "
          },
          {
            "Id": 1390,
            "VillageName": "العبسى "
          },
          {
            "Id": 1391,
            "VillageName": "الطحاوية "
          },
          {
            "Id": 1392,
            "VillageName": "الشولية "
          },
          {
            "Id": 1393,
            "VillageName": "الشعابنة "
          },
          {
            "Id": 1394,
            "VillageName": "السلام "
          },
          {
            "Id": 1395,
            "VillageName": "السعيدية "
          },
          {
            "Id": 1396,
            "VillageName": "السعادات "
          },
          {
            "Id": 1397,
            "VillageName": "الزوامل "
          },
          {
            "Id": 1398,
            "VillageName": "الدهاشنة "
          },
          {
            "Id": 1399,
            "VillageName": "الروضة "
          },
          {
            "Id": 1400,
            "VillageName": "الجوسق "
          },
          {
            "Id": 1401,
            "VillageName": "البلاشون "
          },
          {
            "Id": 1402,
            "VillageName": "مدينة بلبيس "
          }
        ],
        "name": "مركز بلبيس"
      },
      {
        "id": 125,
        "villages": [
          {
            "Id": 1403,
            "VillageName": "الحي الثالث "
          },
          {
            "Id": 1404,
            "VillageName": "الحي الثاني "
          },
          {
            "Id": 1405,
            "VillageName": "الحي الأول "
          },
          {
            "Id": 6368,
            "VillageName": "الحي الرابع "
          }
        ],
        "name": "قسم أول مدينة العاشر من رمضان"
      },
      {
        "id": 126,
        "villages": [
          {
            "Id": 1406,
            "VillageName": "الحي الثامن "
          },
          {
            "Id": 1407,
            "VillageName": "الحي السابع "
          },
          {
            "Id": 1408,
            "VillageName": "الحي السادس "
          },
          {
            "Id": 1409,
            "VillageName": "الحي الخامس "
          }
        ],
        "name": "قسم ثان مدينة العاشر من رمضان"
      },
      {
        "id": 127,
        "villages": [
          {
            "Id": 1410,
            "VillageName": "ميت ردين "
          },
          {
            "Id": 1411,
            "VillageName": "منشأة العباسه "
          },
          {
            "Id": 1412,
            "VillageName": "كفر عياد كريم "
          },
          {
            "Id": 1413,
            "VillageName": "كفر زيدان منديل "
          },
          {
            "Id": 1414,
            "VillageName": "كفر حافظ "
          },
          {
            "Id": 1415,
            "VillageName": "كفر أبو نجم "
          },
          {
            "Id": 1416,
            "VillageName": "كفر العزازى "
          },
          {
            "Id": 1417,
            "VillageName": "كشيك "
          },
          {
            "Id": 1418,
            "VillageName": "كفر أبو مسلم "
          },
          {
            "Id": 1419,
            "VillageName": "عرب الفدان "
          },
          {
            "Id": 1420,
            "VillageName": "عمريط "
          },
          {
            "Id": 1421,
            "VillageName": "عليم "
          },
          {
            "Id": 1422,
            "VillageName": "طويحر "
          },
          {
            "Id": 1423,
            "VillageName": "صفط الحنا وكفرها "
          },
          {
            "Id": 1424,
            "VillageName": "شنبارة الطنانات "
          },
          {
            "Id": 1425,
            "VillageName": "تل مفتاح "
          },
          {
            "Id": 1426,
            "VillageName": "بنى جرى "
          },
          {
            "Id": 1427,
            "VillageName": "بنى أيوب "
          },
          {
            "Id": 1428,
            "VillageName": "بحطيط "
          },
          {
            "Id": 1429,
            "VillageName": "النصر "
          },
          {
            "Id": 1430,
            "VillageName": "المسيد "
          },
          {
            "Id": 1431,
            "VillageName": "القطاوية "
          },
          {
            "Id": 1432,
            "VillageName": "العراقى "
          },
          {
            "Id": 1433,
            "VillageName": "العمارة "
          },
          {
            "Id": 1434,
            "VillageName": "العباسة "
          },
          {
            "Id": 1435,
            "VillageName": "الصوه "
          },
          {
            "Id": 1436,
            "VillageName": "الشيخ جبيل "
          },
          {
            "Id": 1437,
            "VillageName": "السعدية "
          },
          {
            "Id": 1438,
            "VillageName": "السناجرة "
          },
          {
            "Id": 1439,
            "VillageName": "الخيس "
          },
          {
            "Id": 1440,
            "VillageName": "الحرية "
          },
          {
            "Id": 1441,
            "VillageName": "الحلمية "
          },
          {
            "Id": 1442,
            "VillageName": "الجعفرية "
          },
          {
            "Id": 1443,
            "VillageName": "الاسدية "
          },
          {
            "Id": 1444,
            "VillageName": "مدينة أبو حماد "
          }
        ],
        "name": "مركز أبو حماد"
      },
      {
        "id": 128,
        "villages": [
          {
            "Id": 1445,
            "VillageName": "منشأة السلام "
          },
          {
            "Id": 1446,
            "VillageName": "مهدية "
          },
          {
            "Id": 1447,
            "VillageName": "منشأة غالى منصور "
          },
          {
            "Id": 1448,
            "VillageName": "منزل حيان "
          },
          {
            "Id": 1449,
            "VillageName": "كفر عجيبة "
          },
          {
            "Id": 1450,
            "VillageName": "كفر دبوس "
          },
          {
            "Id": 1451,
            "VillageName": "كفر حموده أرناؤوط "
          },
          {
            "Id": 1452,
            "VillageName": "كفر أولاد عطية "
          },
          {
            "Id": 1453,
            "VillageName": "كفر المحمودية "
          },
          {
            "Id": 1454,
            "VillageName": "كفر العايد "
          },
          {
            "Id": 1455,
            "VillageName": "كفر الخضيرى "
          },
          {
            "Id": 1456,
            "VillageName": "كفر الشيخ الظواهرى "
          },
          {
            "Id": 1457,
            "VillageName": "كفر أبو حطب "
          },
          {
            "Id": 1458,
            "VillageName": "صبيح "
          },
          {
            "Id": 1459,
            "VillageName": "شرشيمة "
          },
          {
            "Id": 1460,
            "VillageName": "خلوة أبو حطب "
          },
          {
            "Id": 1461,
            "VillageName": "حوض نجيح "
          },
          {
            "Id": 1462,
            "VillageName": "المطاوعة "
          },
          {
            "Id": 1463,
            "VillageName": "المسلمى "
          },
          {
            "Id": 1464,
            "VillageName": "المحمودية "
          },
          {
            "Id": 1465,
            "VillageName": "الفواقسة "
          },
          {
            "Id": 1466,
            "VillageName": "العواسجة "
          },
          {
            "Id": 1467,
            "VillageName": "العلاقمة "
          },
          {
            "Id": 1468,
            "VillageName": "العدوة "
          },
          {
            "Id": 1469,
            "VillageName": "الشبراوين "
          },
          {
            "Id": 1470,
            "VillageName": "السلامون "
          },
          {
            "Id": 1471,
            "VillageName": "السكاكرة "
          },
          {
            "Id": 1472,
            "VillageName": "الزرزمون "
          },
          {
            "Id": 1473,
            "VillageName": "الاحسانية "
          },
          {
            "Id": 1474,
            "VillageName": "مدينة ههيا "
          }
        ],
        "name": "مركز ههيا"
      },
      {
        "id": 129,
        "villages": [
          {
            "Id": 1475,
            "VillageName": "منشأة العطارين "
          },
          {
            "Id": 1476,
            "VillageName": "منشأة كشك "
          },
          {
            "Id": 1477,
            "VillageName": "منشأة قاسم "
          },
          {
            "Id": 1478,
            "VillageName": "منشأة عودة سالم "
          },
          {
            "Id": 1479,
            "VillageName": "منشأة صهبرة "
          },
          {
            "Id": 1480,
            "VillageName": "منشأة صفوت "
          },
          {
            "Id": 1481,
            "VillageName": "منا حريت "
          },
          {
            "Id": 1482,
            "VillageName": "كفر جنيدى "
          },
          {
            "Id": 1483,
            "VillageName": "كفر اللبا "
          },
          {
            "Id": 1484,
            "VillageName": "كفر العكل "
          },
          {
            "Id": 1485,
            "VillageName": "كفر الحاج حسن "
          },
          {
            "Id": 1486,
            "VillageName": "كفر الباشا "
          },
          {
            "Id": 1487,
            "VillageName": "كفر أبو متنا "
          },
          {
            "Id": 1488,
            "VillageName": "كفر أبو برى "
          },
          {
            "Id": 1489,
            "VillageName": "كراديس "
          },
          {
            "Id": 1490,
            "VillageName": "قرموط صهبرة "
          },
          {
            "Id": 1491,
            "VillageName": "قاويشة "
          },
          {
            "Id": 1492,
            "VillageName": "فرغان "
          },
          {
            "Id": 1493,
            "VillageName": "طحا المرج "
          },
          {
            "Id": 1494,
            "VillageName": "صهبرة "
          },
          {
            "Id": 1495,
            "VillageName": "صفط زريق "
          },
          {
            "Id": 1496,
            "VillageName": "صافور "
          },
          {
            "Id": 1497,
            "VillageName": "شوبك أكراش "
          },
          {
            "Id": 1498,
            "VillageName": "شنبارة منقلا "
          },
          {
            "Id": 1499,
            "VillageName": "شبرا صورة "
          },
          {
            "Id": 1500,
            "VillageName": "ديرب السوق "
          },
          {
            "Id": 1501,
            "VillageName": "دبيج "
          },
          {
            "Id": 1502,
            "VillageName": "حصة الرهبان "
          },
          {
            "Id": 1503,
            "VillageName": "جميزة بنى عمرو "
          },
          {
            "Id": 1504,
            "VillageName": "تل القاضى "
          },
          {
            "Id": 1505,
            "VillageName": "بهنيا "
          },
          {
            "Id": 1506,
            "VillageName": "برمكيم "
          },
          {
            "Id": 1507,
            "VillageName": "الهوابر "
          },
          {
            "Id": 1508,
            "VillageName": "الميساه "
          },
          {
            "Id": 1509,
            "VillageName": "المناصافور "
          },
          {
            "Id": 1510,
            "VillageName": "المجفف "
          },
          {
            "Id": 1511,
            "VillageName": "القطايع "
          },
          {
            "Id": 1512,
            "VillageName": "العصايد "
          },
          {
            "Id": 1513,
            "VillageName": "الصوينى "
          },
          {
            "Id": 1514,
            "VillageName": "الصانية "
          },
          {
            "Id": 1515,
            "VillageName": "الجواشنة "
          },
          {
            "Id": 1516,
            "VillageName": "أكوه "
          },
          {
            "Id": 1517,
            "VillageName": "أكراش "
          },
          {
            "Id": 1518,
            "VillageName": "أبو عيد "
          },
          {
            "Id": 1519,
            "VillageName": "مدينة ديرب نجم "
          }
        ],
        "name": "مركز ديرب نجم"
      },
      {
        "id": 130,
        "villages": [
          {
            "Id": 1520,
            "VillageName": "منشاة التحرير "
          },
          {
            "Id": 1521,
            "VillageName": "مباشر "
          },
          {
            "Id": 1522,
            "VillageName": "كفور نجم "
          },
          {
            "Id": 1523,
            "VillageName": "كفر محسن "
          },
          {
            "Id": 1524,
            "VillageName": "كفر عوض سليمان "
          },
          {
            "Id": 1525,
            "VillageName": "كفر أبو الديب "
          },
          {
            "Id": 1526,
            "VillageName": "كفر الشيخ داود "
          },
          {
            "Id": 1527,
            "VillageName": "كفر الشرفا البحرى "
          },
          {
            "Id": 1528,
            "VillageName": "كفر الجلايلة "
          },
          {
            "Id": 1529,
            "VillageName": "قطيفة مباشر "
          },
          {
            "Id": 1530,
            "VillageName": "طواحين اكراش "
          },
          {
            "Id": 1531,
            "VillageName": "شرقية مباشر "
          },
          {
            "Id": 1532,
            "VillageName": "تل محمد "
          },
          {
            "Id": 1533,
            "VillageName": "الطرادية "
          },
          {
            "Id": 1534,
            "VillageName": "السدس "
          },
          {
            "Id": 1535,
            "VillageName": "الخضارية "
          },
          {
            "Id": 1536,
            "VillageName": "الحلاوات "
          },
          {
            "Id": 1537,
            "VillageName": "الحبش "
          },
          {
            "Id": 1538,
            "VillageName": "مدينة الإبراهيمية "
          }
        ],
        "name": "مركز الابراهيمية"
      },
      {
        "id": 131,
        "villages": [
          {
            "Id": 1539,
            "VillageName": "هربيط "
          },
          {
            "Id": 1540,
            "VillageName": "نزلة خيال "
          },
          {
            "Id": 1541,
            "VillageName": "نزلة العارين "
          },
          {
            "Id": 1542,
            "VillageName": "منشأة صدقى "
          },
          {
            "Id": 1543,
            "VillageName": "منشأة رضوان "
          },
          {
            "Id": 1544,
            "VillageName": "منشأة المناسترلى "
          },
          {
            "Id": 1545,
            "VillageName": "منزل ميمون "
          },
          {
            "Id": 1546,
            "VillageName": "كفر هربيط "
          },
          {
            "Id": 1547,
            "VillageName": "كفر النصيرى "
          },
          {
            "Id": 1548,
            "VillageName": "كفر السواقى-تشمل كفر مهير "
          },
          {
            "Id": 1549,
            "VillageName": "فراشة "
          },
          {
            "Id": 1550,
            "VillageName": "طوخ القراموص "
          },
          {
            "Id": 1551,
            "VillageName": "سنتريس "
          },
          {
            "Id": 1552,
            "VillageName": "جزيرة الشيخ "
          },
          {
            "Id": 1553,
            "VillageName": "بنى عياض "
          },
          {
            "Id": 1554,
            "VillageName": "أولاد موسى "
          },
          {
            "Id": 1555,
            "VillageName": "العزازية "
          },
          {
            "Id": 1556,
            "VillageName": "المشاعلة "
          },
          {
            "Id": 1557,
            "VillageName": "القراموص "
          },
          {
            "Id": 1558,
            "VillageName": "الغابة "
          },
          {
            "Id": 1559,
            "VillageName": "الرياض "
          },
          {
            "Id": 1560,
            "VillageName": "الرحمانية "
          },
          {
            "Id": 1561,
            "VillageName": "الدهتمون "
          },
          {
            "Id": 1562,
            "VillageName": "الحماديين "
          },
          {
            "Id": 1563,
            "VillageName": "الحصوة "
          },
          {
            "Id": 1564,
            "VillageName": "الاحراز "
          },
          {
            "Id": 1565,
            "VillageName": "أبو ياسين "
          },
          {
            "Id": 1566,
            "VillageName": "مدينة أبو كبير "
          }
        ],
        "name": "مركز أبو كبير"
      },
      {
        "id": 132,
        "villages": [
          {
            "Id": 1567,
            "VillageName": "أبو عمران "
          },
          {
            "Id": 1568,
            "VillageName": "نجوم "
          },
          {
            "Id": 1569,
            "VillageName": "ناطورة "
          },
          {
            "Id": 1570,
            "VillageName": "منشية عبداللطيف واكد"
          },
          {
            "Id": 1571,
            "VillageName": "منشأة يوسف منصور "
          },
          {
            "Id": 1572,
            "VillageName": "منشأة شلبى "
          },
          {
            "Id": 1573,
            "VillageName": "منشأة بن العاصى "
          },
          {
            "Id": 1574,
            "VillageName": "كفر عبد الشهيد شنودة"
          },
          {
            "Id": 1575,
            "VillageName": "كفر حماد "
          },
          {
            "Id": 1576,
            "VillageName": "كفر الحديدى "
          },
          {
            "Id": 1577,
            "VillageName": "كفر أبو شرابية "
          },
          {
            "Id": 1578,
            "VillageName": "قراجة "
          },
          {
            "Id": 1579,
            "VillageName": "شيط الهوى "
          },
          {
            "Id": 1580,
            "VillageName": "شنيط الحرابوة "
          },
          {
            "Id": 1581,
            "VillageName": "سنجها "
          },
          {
            "Id": 1582,
            "VillageName": "حانوت "
          },
          {
            "Id": 1583,
            "VillageName": "تليجة "
          },
          {
            "Id": 1584,
            "VillageName": "الهجارسة "
          },
          {
            "Id": 1585,
            "VillageName": "الموانسة "
          },
          {
            "Id": 1586,
            "VillageName": "المنشأة الجديدة "
          },
          {
            "Id": 1587,
            "VillageName": "القضاة "
          },
          {
            "Id": 1588,
            "VillageName": "القرايين "
          },
          {
            "Id": 1589,
            "VillageName": "الصورة "
          },
          {
            "Id": 1590,
            "VillageName": "الشرقاية "
          },
          {
            "Id": 1591,
            "VillageName": "السويركى "
          },
          {
            "Id": 1592,
            "VillageName": "الرباعيين "
          },
          {
            "Id": 1593,
            "VillageName": "الحوامدة "
          },
          {
            "Id": 1594,
            "VillageName": "البوها "
          },
          {
            "Id": 1595,
            "VillageName": "أبو حريز "
          },
          {
            "Id": 1596,
            "VillageName": "أبو الشقوق "
          },
          {
            "Id": 1597,
            "VillageName": "مدينة كفر صقر "
          }
        ],
        "name": "مركز كفر صقر"
      },
      {
        "id": 133,
        "villages": [
          {
            "Id": 1598,
            "VillageName": "ترعة البطيخ "
          },
          {
            "Id": 1599,
            "VillageName": "راغب "
          },
          {
            "Id": 1600,
            "VillageName": "أبو عوينات "
          },
          {
            "Id": 1601,
            "VillageName": "منشأة الأمير "
          },
          {
            "Id": 1602,
            "VillageName": "منشأة السادات "
          },
          {
            "Id": 1603,
            "VillageName": "منشأة ناصر "
          },
          {
            "Id": 1604,
            "VillageName": "كفر الفرايحة "
          },
          {
            "Id": 1605,
            "VillageName": "كفر الشوافين "
          },
          {
            "Id": 1606,
            "VillageName": "قصاصين الأزهار "
          },
          {
            "Id": 1607,
            "VillageName": "زور أبو الليل "
          },
          {
            "Id": 1608,
            "VillageName": "حمادة "
          },
          {
            "Id": 1609,
            "VillageName": "جزيرة مطاوع "
          },
          {
            "Id": 1610,
            "VillageName": "تلراك "
          },
          {
            "Id": 1611,
            "VillageName": "بنى عبس "
          },
          {
            "Id": 1612,
            "VillageName": "بنى منصور "
          },
          {
            "Id": 1613,
            "VillageName": "بنى حسن "
          },
          {
            "Id": 1614,
            "VillageName": "الصوفية "
          },
          {
            "Id": 1615,
            "VillageName": "ابراهيم حسن "
          },
          {
            "Id": 1616,
            "VillageName": "مدينة أولاد صقر "
          }
        ],
        "name": "مركز أولاد صقر"
      },
      {
        "id": 134,
        "villages": [
          {
            "Id": 1617,
            "VillageName": "كفر المسلمية "
          },
          {
            "Id": 1618,
            "VillageName": "الرست "
          },
          {
            "Id": 1619,
            "VillageName": "القصبي غرب "
          },
          {
            "Id": 1620,
            "VillageName": "أبو عريضة "
          },
          {
            "Id": 1621,
            "VillageName": "حنورة "
          },
          {
            "Id": 1622,
            "VillageName": "تانيس "
          },
          {
            "Id": 1623,
            "VillageName": "القصبى شرق "
          },
          {
            "Id": 1624,
            "VillageName": "الناصرية "
          },
          {
            "Id": 1625,
            "VillageName": "النجيحى "
          },
          {
            "Id": 1626,
            "VillageName": "البكارشة "
          },
          {
            "Id": 1627,
            "VillageName": "صان الحجر البحرية "
          },
          {
            "Id": 1628,
            "VillageName": "مدينـة صان الحجرالقبلية "
          }
        ],
        "name": "مركز صان الحجر"
      },
      {
        "id": 135,
        "villages": [
          {
            "Id": 1629,
            "VillageName": "إصلاح هانون "
          },
          {
            "Id": 1630,
            "VillageName": "منشأة الدبيكي "
          },
          {
            "Id": 1631,
            "VillageName": "كفر المدينة "
          },
          {
            "Id": 1632,
            "VillageName": "كفر الربعمائة "
          },
          {
            "Id": 1633,
            "VillageName": "الظــواهرية "
          },
          {
            "Id": 1634,
            "VillageName": "مدينة منشأة أبو عمر "
          }
        ],
        "name": "مركز منشأة أبو عمر"
      },
      {
        "id": 136,
        "villages": [
          {
            "Id": 1635,
            "VillageName": "منشية بشارة الطحاوى "
          },
          {
            "Id": 1636,
            "VillageName": "منشية أبو عامر "
          },
          {
            "Id": 1637,
            "VillageName": "منشأة مصطفى خليل "
          },
          {
            "Id": 1638,
            "VillageName": "منشأة راغب الطحاوى "
          },
          {
            "Id": 1639,
            "VillageName": "قهبونة "
          },
          {
            "Id": 1640,
            "VillageName": "قصاصين الشرق "
          },
          {
            "Id": 1641,
            "VillageName": "بحر البقر 5 "
          },
          {
            "Id": 1642,
            "VillageName": "بحر البقر 4 "
          },
          {
            "Id": 1643,
            "VillageName": "بحر البقر 3 "
          },
          {
            "Id": 1644,
            "VillageName": "بحر البقر 2 "
          },
          {
            "Id": 1645,
            "VillageName": "سماكين الغرب "
          },
          {
            "Id": 1646,
            "VillageName": "سماكين الشرق "
          },
          {
            "Id": 1647,
            "VillageName": "حصة المناصرة "
          },
          {
            "Id": 1648,
            "VillageName": "جزيرة سعودى "
          },
          {
            "Id": 1649,
            "VillageName": "المناجاة الكبرى "
          },
          {
            "Id": 1650,
            "VillageName": "المناجاة الصغرى "
          },
          {
            "Id": 1651,
            "VillageName": "الملكيين القبلية "
          },
          {
            "Id": 1652,
            "VillageName": "الملكيين البحرية "
          },
          {
            "Id": 1653,
            "VillageName": "الصالحية البساتين "
          },
          {
            "Id": 1654,
            "VillageName": "الصالحية - الأحرار 7"
          },
          {
            "Id": 1655,
            "VillageName": "الصالحية- الأبطال 3 "
          },
          {
            "Id": 1656,
            "VillageName": "الحماديين "
          },
          {
            "Id": 1657,
            "VillageName": "الحجازية "
          },
          {
            "Id": 1658,
            "VillageName": "الجمالية "
          },
          {
            "Id": 1659,
            "VillageName": "الاخيوة "
          },
          {
            "Id": 1660,
            "VillageName": "مدينة الحسينية "
          }
        ],
        "name": "مركز الحسينية"
      },
      {
        "id": 137,
        "villages": [
          {
            "Id": 1661,
            "VillageName": "مدينة فاقوس وتشمل قريتي كفر محمد اسماعيل ومنية مكرم "
          }
        ],
        "name": "قسم فاقوس"
      },
      {
        "id": 138,
        "villages": [
          {
            "Id": 1662,
            "VillageName": "مــنشأة نبهان "
          },
          {
            "Id": 1663,
            "VillageName": "منزل نعيم "
          },
          {
            "Id": 1664,
            "VillageName": "منشية القاضى "
          },
          {
            "Id": 1665,
            "VillageName": "كفر كشك "
          },
          {
            "Id": 1666,
            "VillageName": "كفر شاويش "
          },
          {
            "Id": 1667,
            "VillageName": "كفر العلماء "
          },
          {
            "Id": 1668,
            "VillageName": "كفر الحاج عمر "
          },
          {
            "Id": 1669,
            "VillageName": "كفر الاشقم "
          },
          {
            "Id": 1670,
            "VillageName": "كفر ابراهيم بشارة "
          },
          {
            "Id": 1671,
            "VillageName": "قنتير "
          },
          {
            "Id": 1672,
            "VillageName": "غزالة عبدون "
          },
          {
            "Id": 1673,
            "VillageName": "سوادة "
          },
          {
            "Id": 1674,
            "VillageName": "السنيطة ( سنيطة الرفاعيين ) "
          },
          {
            "Id": 1675,
            "VillageName": "دوامة "
          },
          {
            "Id": 1676,
            "VillageName": "جهينة القبلية "
          },
          {
            "Id": 1677,
            "VillageName": "عرب درويش "
          },
          {
            "Id": 1678,
            "VillageName": "جهينة البحرية "
          },
          {
            "Id": 1679,
            "VillageName": "بنى صريد "
          },
          {
            "Id": 1680,
            "VillageName": "أولاد عابدين "
          },
          {
            "Id": 1681,
            "VillageName": "أولاد العدوى "
          },
          {
            "Id": 1682,
            "VillageName": "الهيصمية "
          },
          {
            "Id": 1683,
            "VillageName": "النحاسين "
          },
          {
            "Id": 1684,
            "VillageName": "النوافعة "
          },
          {
            "Id": 1685,
            "VillageName": "النمروط "
          },
          {
            "Id": 1686,
            "VillageName": "الفدادنة "
          },
          {
            "Id": 1687,
            "VillageName": "الغزالى "
          },
          {
            "Id": 1688,
            "VillageName": "العزازى "
          },
          {
            "Id": 1689,
            "VillageName": "العارين "
          },
          {
            "Id": 1690,
            "VillageName": "الطويلة "
          },
          {
            "Id": 1691,
            "VillageName": "الصوالح "
          },
          {
            "Id": 1692,
            "VillageName": "الصالحية "
          },
          {
            "Id": 1693,
            "VillageName": "السماعنة "
          },
          {
            "Id": 1694,
            "VillageName": "السلاطنة "
          },
          {
            "Id": 1695,
            "VillageName": "الزاوية الحمراء "
          },
          {
            "Id": 1696,
            "VillageName": "الروضة "
          },
          {
            "Id": 1697,
            "VillageName": "الديدمون "
          },
          {
            "Id": 1698,
            "VillageName": "الدميين "
          },
          {
            "Id": 1699,
            "VillageName": "الخطارة "
          },
          {
            "Id": 1700,
            "VillageName": "الحجاجية المستجدة "
          },
          {
            "Id": 1701,
            "VillageName": "الحجاجية القديمة "
          },
          {
            "Id": 1702,
            "VillageName": "الجعافرة "
          },
          {
            "Id": 1703,
            "VillageName": "البيروم "
          },
          {
            "Id": 1704,
            "VillageName": "الاخميين "
          },
          {
            "Id": 1705,
            "VillageName": "أكياد القبلية "
          },
          {
            "Id": 1706,
            "VillageName": "أكياد البحرية "
          },
          {
            "Id": 1707,
            "VillageName": "أشكر "
          },
          {
            "Id": 1708,
            "VillageName": "ميت العز "
          }
        ],
        "name": "مركز فاقوس"
      },
      {
        "id": 139,
        "villages": [
          {
            "Id": 1709,
            "VillageName": "مــدينة القــرين "
          }
        ],
        "name": "قسم القرين"
      },
      {
        "id": 140,
        "villages": [
          {
            "Id": 1710,
            "VillageName": "مدينة الصالحية الجديدة "
          }
        ],
        "name": "قسم الصالحية الجديدة *"
      }
    ]
  },
  {
    "id": 14,
    "name": "القليوبيه",
    "centers": [
      {
        "id": 141,
        "villages": [
          {
            "Id": 6369,
            "VillageName": "مدينة بنها "
          }
        ],
        "name": "قسم أول بنها"
      },
      {
        "id": 142,
        "villages": [
          {
            "Id": 6370,
            "VillageName": "مدينة بنها الجديدة "
          }
        ],
        "name": "قسم ثان بنها *"
      },
      {
        "id": 143,
        "villages": [
          {
            "Id": 1713,
            "VillageName": "ساحل دجوي (الساحل ) "
          },
          {
            "Id": 1714,
            "VillageName": "ورورة "
          },
          {
            "Id": 1715,
            "VillageName": "نقباس "
          },
          {
            "Id": 1716,
            "VillageName": "ميت عاصم "
          },
          {
            "Id": 1717,
            "VillageName": "ميت راضى "
          },
          {
            "Id": 1718,
            "VillageName": "ميت العطار "
          },
          {
            "Id": 1719,
            "VillageName": "ميت الحوفيين "
          },
          {
            "Id": 1720,
            "VillageName": "منية السباع "
          },
          {
            "Id": 1721,
            "VillageName": "منشأة بنها "
          },
          {
            "Id": 1722,
            "VillageName": "منشأة أبو دياب "
          },
          {
            "Id": 1723,
            "VillageName": "مرصفا "
          },
          {
            "Id": 1724,
            "VillageName": "مجول "
          },
          {
            "Id": 1725,
            "VillageName": "كفر مويس "
          },
          {
            "Id": 1726,
            "VillageName": "كفر فرسيس "
          },
          {
            "Id": 1727,
            "VillageName": "كفر عطالله "
          },
          {
            "Id": 1728,
            "VillageName": "كفر طحلة "
          },
          {
            "Id": 1729,
            "VillageName": "سندانهور "
          },
          {
            "Id": 1730,
            "VillageName": "كفر سعد "
          },
          {
            "Id": 1731,
            "VillageName": "كــفر بـــطا "
          },
          {
            "Id": 1732,
            "VillageName": "كــفر الــعرب "
          },
          {
            "Id": 1733,
            "VillageName": "كــفر الشيخ إبراهيم "
          },
          {
            "Id": 1734,
            "VillageName": "كــفر الشموت "
          },
          {
            "Id": 1735,
            "VillageName": "كــفر الحمام "
          },
          {
            "Id": 1736,
            "VillageName": "كــفر الحصة "
          },
          {
            "Id": 1737,
            "VillageName": "كــفر الجزار "
          },
          {
            "Id": 1738,
            "VillageName": "كــفر الأربعين "
          },
          {
            "Id": 1739,
            "VillageName": "كــفر أبو زهرة "
          },
          {
            "Id": 1740,
            "VillageName": "كــفر أبو ذكرى "
          },
          {
            "Id": 1741,
            "VillageName": "فـــرسيس "
          },
          {
            "Id": 1742,
            "VillageName": "طـــحلة "
          },
          {
            "Id": 1743,
            "VillageName": "شبلنجة "
          },
          {
            "Id": 1744,
            "VillageName": "كفر سندانهور "
          },
          {
            "Id": 1745,
            "VillageName": "دملو "
          },
          {
            "Id": 1746,
            "VillageName": "دجوى "
          },
          {
            "Id": 1747,
            "VillageName": "جمجرة "
          },
          {
            "Id": 1748,
            "VillageName": "جزيرة بلى "
          },
          {
            "Id": 1749,
            "VillageName": "بطا "
          },
          {
            "Id": 1750,
            "VillageName": "بقيرة "
          },
          {
            "Id": 1751,
            "VillageName": "بتمدة "
          },
          {
            "Id": 1752,
            "VillageName": "الشموت "
          },
          {
            "Id": 1753,
            "VillageName": "الرملة "
          }
        ],
        "name": "مركز بنها"
      },
      {
        "id": 144,
        "villages": [
          {
            "Id": 1754,
            "VillageName": "كفر مروان "
          },
          {
            "Id": 1755,
            "VillageName": "ميت الدريج "
          },
          {
            "Id": 1756,
            "VillageName": "كفور عامر ورضوان "
          },
          {
            "Id": 1757,
            "VillageName": "كفر منصور "
          },
          {
            "Id": 1758,
            "VillageName": "كفر كردى "
          },
          {
            "Id": 1759,
            "VillageName": "كفر عزب غنيم "
          },
          {
            "Id": 1760,
            "VillageName": "كفر عبدالسيد نوار "
          },
          {
            "Id": 1761,
            "VillageName": "كفر تصفا "
          },
          {
            "Id": 1762,
            "VillageName": "كفر صليب سلامه "
          },
          {
            "Id": 1763,
            "VillageName": "كفر شرف الدين "
          },
          {
            "Id": 1764,
            "VillageName": "كفر رجب "
          },
          {
            "Id": 1765,
            "VillageName": "كفر الولجا "
          },
          {
            "Id": 1766,
            "VillageName": "كفر الشهاوى خاطر "
          },
          {
            "Id": 1767,
            "VillageName": "تصفا "
          },
          {
            "Id": 1768,
            "VillageName": "برقطا "
          },
          {
            "Id": 1769,
            "VillageName": "المنشاة الكبرى "
          },
          {
            "Id": 1770,
            "VillageName": "المنشاة الصغرى "
          },
          {
            "Id": 1771,
            "VillageName": "الصفين "
          },
          {
            "Id": 1772,
            "VillageName": "الشقر "
          },
          {
            "Id": 1773,
            "VillageName": "الزمرونية "
          },
          {
            "Id": 1774,
            "VillageName": "البقاشين "
          },
          {
            "Id": 1775,
            "VillageName": "اسنيت "
          },
          {
            "Id": 1776,
            "VillageName": "مدينة كفر شكر "
          }
        ],
        "name": "مركز كفر شكر"
      },
      {
        "id": 145,
        "villages": [
          {
            "Id": 1777,
            "VillageName": "كومبتين "
          },
          {
            "Id": 1778,
            "VillageName": "نامول "
          },
          {
            "Id": 1779,
            "VillageName": "ميت كنانة "
          },
          {
            "Id": 1780,
            "VillageName": "منصورة نامول "
          },
          {
            "Id": 1781,
            "VillageName": "منشية العمار "
          },
          {
            "Id": 1782,
            "VillageName": "مشتهر "
          },
          {
            "Id": 1783,
            "VillageName": "كوم الأطرون "
          },
          {
            "Id": 1784,
            "VillageName": "كفور عابد "
          },
          {
            "Id": 1785,
            "VillageName": "كفر منصور "
          },
          {
            "Id": 1786,
            "VillageName": "كفر علوان "
          },
          {
            "Id": 1787,
            "VillageName": "كفر حسن سعد "
          },
          {
            "Id": 1788,
            "VillageName": "كفر النخلة "
          },
          {
            "Id": 1789,
            "VillageName": "كفر الفقهاء "
          },
          {
            "Id": 1790,
            "VillageName": "كفر العمار "
          },
          {
            "Id": 1791,
            "VillageName": "كفر الرجالات "
          },
          {
            "Id": 1792,
            "VillageName": "كفر الحصافة "
          },
          {
            "Id": 1793,
            "VillageName": "كفر الحدادين "
          },
          {
            "Id": 1794,
            "VillageName": "كفر الجمال "
          },
          {
            "Id": 1795,
            "VillageName": "قرقشندة "
          },
          {
            "Id": 1796,
            "VillageName": "عرب الغديرى "
          },
          {
            "Id": 1797,
            "VillageName": "عرب الرواشدة "
          },
          {
            "Id": 1798,
            "VillageName": "طنط الجزيرة "
          },
          {
            "Id": 1799,
            "VillageName": "شبرا هارس "
          },
          {
            "Id": 1800,
            "VillageName": "سرى "
          },
          {
            "Id": 1801,
            "VillageName": "سنهرة "
          },
          {
            "Id": 1802,
            "VillageName": "زاوية بلتان "
          },
          {
            "Id": 1803,
            "VillageName": "دندنا "
          },
          {
            "Id": 1804,
            "VillageName": "خلوة سنهرة "
          },
          {
            "Id": 1805,
            "VillageName": "جزيرة الأحرار (جزيرة الأعجام سابقا) "
          },
          {
            "Id": 1806,
            "VillageName": "ترسا "
          },
          {
            "Id": 1807,
            "VillageName": "بلتان "
          },
          {
            "Id": 1808,
            "VillageName": "برشوم الكبرى "
          },
          {
            "Id": 1809,
            "VillageName": "برشوم الصغرى "
          },
          {
            "Id": 1810,
            "VillageName": "امياى "
          },
          {
            "Id": 1811,
            "VillageName": "المنزلة "
          },
          {
            "Id": 1812,
            "VillageName": "الغزاوية "
          },
          {
            "Id": 1813,
            "VillageName": "العمار الكبرى "
          },
          {
            "Id": 1814,
            "VillageName": "العبادلة "
          },
          {
            "Id": 1815,
            "VillageName": "الصفا "
          },
          {
            "Id": 1816,
            "VillageName": "الصالحية "
          },
          {
            "Id": 1817,
            "VillageName": "السيفا "
          },
          {
            "Id": 1818,
            "VillageName": "السفاينة "
          },
          {
            "Id": 1819,
            "VillageName": "الدير "
          },
          {
            "Id": 1820,
            "VillageName": "الحصوة "
          },
          {
            "Id": 1821,
            "VillageName": "الحصة "
          },
          {
            "Id": 1822,
            "VillageName": "أكياد دجوى "
          },
          {
            "Id": 1823,
            "VillageName": "أجهور الكبرى "
          },
          {
            "Id": 1824,
            "VillageName": "الأبيارى "
          },
          {
            "Id": 1825,
            "VillageName": "مدينة طوخ "
          }
        ],
        "name": "مركز طوخ"
      },
      {
        "id": 146,
        "villages": [
          {
            "Id": 1826,
            "VillageName": "الناصرية (منشأة شبرا هارس سابقا) "
          },
          {
            "Id": 1827,
            "VillageName": "الحسانية "
          },
          {
            "Id": 1828,
            "VillageName": "مدينة قها "
          }
        ],
        "name": "قسم قها"
      },
      {
        "id": 147,
        "villages": [
          {
            "Id": 1829,
            "VillageName": "كفر عليم "
          },
          {
            "Id": 1830,
            "VillageName": "كفر سليم "
          },
          {
            "Id": 1831,
            "VillageName": "كفر الشرفا الغربى "
          },
          {
            "Id": 1832,
            "VillageName": "كفر الحارث "
          },
          {
            "Id": 1833,
            "VillageName": "قرنفيل "
          },
          {
            "Id": 1834,
            "VillageName": "شلقان "
          },
          {
            "Id": 1835,
            "VillageName": "شبرا شهاب "
          },
          {
            "Id": 1836,
            "VillageName": "سندبيس "
          },
          {
            "Id": 1837,
            "VillageName": "بهادة "
          },
          {
            "Id": 1838,
            "VillageName": "باسوس "
          },
          {
            "Id": 1839,
            "VillageName": "المنيرة "
          },
          {
            "Id": 1840,
            "VillageName": "العامرية (كفر الحوالة سابقا ) "
          },
          {
            "Id": 1841,
            "VillageName": "الخرقانية "
          },
          {
            "Id": 1842,
            "VillageName": "البرادعة وخلوتها "
          },
          {
            "Id": 1843,
            "VillageName": "الأخميين "
          },
          {
            "Id": 1844,
            "VillageName": "أجهور الصغرى "
          },
          {
            "Id": 1845,
            "VillageName": "أبو الغيط "
          },
          {
            "Id": 1846,
            "VillageName": "مدينة القناطر الخيرية "
          }
        ],
        "name": "مركز القناطر الخيرية"
      },
      {
        "id": 148,
        "villages": [
          {
            "Id": 1847,
            "VillageName": "مــدينة قلــيوب "
          }
        ],
        "name": "قسم قليوب"
      },
      {
        "id": 149,
        "villages": [
          {
            "Id": 1848,
            "VillageName": "أبو سنة "
          },
          {
            "Id": 1849,
            "VillageName": "ميت نما "
          },
          {
            "Id": 1850,
            "VillageName": "ميت حلفا "
          },
          {
            "Id": 1851,
            "VillageName": "منطى "
          },
          {
            "Id": 1852,
            "VillageName": "كوم اشفين "
          },
          {
            "Id": 1853,
            "VillageName": "كفر رمادة والترجمان "
          },
          {
            "Id": 1854,
            "VillageName": "كفر أبو جمعه "
          },
          {
            "Id": 1855,
            "VillageName": "قلما "
          },
          {
            "Id": 1856,
            "VillageName": "طنان "
          },
          {
            "Id": 1857,
            "VillageName": "صنافير "
          },
          {
            "Id": 1858,
            "VillageName": "سنديون "
          },
          {
            "Id": 1859,
            "VillageName": "زاوية النجار "
          },
          {
            "Id": 1860,
            "VillageName": "حلابة وكفر السبيل "
          },
          {
            "Id": 1861,
            "VillageName": "بلقس "
          },
          {
            "Id": 1862,
            "VillageName": "الصباح "
          },
          {
            "Id": 1863,
            "VillageName": "السد "
          },
          {
            "Id": 1864,
            "VillageName": "الإصلاح الزراعى "
          },
          {
            "Id": 1865,
            "VillageName": "ناى "
          }
        ],
        "name": "مركز قليوب"
      },
      {
        "id": 150,
        "villages": [
          {
            "Id": 1866,
            "VillageName": "دمنهور شــبرا "
          },
          {
            "Id": 1867,
            "VillageName": "بيجام "
          },
          {
            "Id": 1868,
            "VillageName": "مــدينة شبرا الخيمة "
          }
        ],
        "name": "قسم أول شبرا الخيمة"
      },
      {
        "id": 151,
        "villages": [
          {
            "Id": 1869,
            "VillageName": "مسطرد "
          },
          {
            "Id": 1870,
            "VillageName": "بهتيم "
          }
        ],
        "name": "قسم ثان شبرا الخيمة"
      },
      {
        "id": 152,
        "villages": [
          {
            "Id": 1871,
            "VillageName": "مــدينة الــخصوص "
          }
        ],
        "name": "قسم الخصوص"
      },
      {
        "id": 153,
        "villages": [
          {
            "Id": 1872,
            "VillageName": "نـــوى "
          },
          {
            "Id": 1873,
            "VillageName": "نــوب طحا "
          },
          {
            "Id": 1874,
            "VillageName": "نـــزلة عرب جهينة "
          },
          {
            "Id": 1875,
            "VillageName": "مــنية شبين "
          },
          {
            "Id": 1876,
            "VillageName": "مــنشأة الكرام "
          },
          {
            "Id": 1877,
            "VillageName": "كـــفر سليمان الور "
          },
          {
            "Id": 1878,
            "VillageName": "كــوم السمن "
          },
          {
            "Id": 1879,
            "VillageName": "كــفر طحورية "
          },
          {
            "Id": 1880,
            "VillageName": "كــفر طحا "
          },
          {
            "Id": 1881,
            "VillageName": "كــفر شبين "
          },
          {
            "Id": 1882,
            "VillageName": "كــفر سندوة "
          },
          {
            "Id": 1883,
            "VillageName": "كــفر سعد بحيرى "
          },
          {
            "Id": 1884,
            "VillageName": "كــفر الصهبى "
          },
          {
            "Id": 1885,
            "VillageName": "كــفر الشيخة سالمة "
          },
          {
            "Id": 1886,
            "VillageName": "كفر الشوبك "
          },
          {
            "Id": 1887,
            "VillageName": "كفر الشرفا القبلى "
          },
          {
            "Id": 1888,
            "VillageName": "كفر الدير "
          },
          {
            "Id": 1889,
            "VillageName": "عرب الصوالحة "
          },
          {
            "Id": 1890,
            "VillageName": "عرب الشعاره "
          },
          {
            "Id": 1891,
            "VillageName": "طحورية "
          },
          {
            "Id": 1892,
            "VillageName": "طحا نوب "
          },
          {
            "Id": 1893,
            "VillageName": "تل بنى تميم "
          },
          {
            "Id": 1894,
            "VillageName": "الغريرى "
          },
          {
            "Id": 1895,
            "VillageName": "المريج "
          },
          {
            "Id": 1896,
            "VillageName": "الكوم الأحمر "
          },
          {
            "Id": 1897,
            "VillageName": "القلزم "
          },
          {
            "Id": 1898,
            "VillageName": "القشيش "
          },
          {
            "Id": 1899,
            "VillageName": "العطارة "
          },
          {
            "Id": 1900,
            "VillageName": "الشوبك "
          },
          {
            "Id": 1901,
            "VillageName": "السلمانية "
          },
          {
            "Id": 1902,
            "VillageName": "الزهويين "
          },
          {
            "Id": 1903,
            "VillageName": "الحصافة "
          },
          {
            "Id": 1904,
            "VillageName": "الحساينة "
          },
          {
            "Id": 1905,
            "VillageName": "الحزانية "
          },
          {
            "Id": 1906,
            "VillageName": "الجعافرة "
          },
          {
            "Id": 1907,
            "VillageName": "الأحراز "
          },
          {
            "Id": 1908,
            "VillageName": "مدينة شبين القناطر "
          }
        ],
        "name": "مركز شبين القناطر"
      },
      {
        "id": 154,
        "villages": [
          {
            "Id": 1909,
            "VillageName": "أمــين يوسف "
          },
          {
            "Id": 1910,
            "VillageName": "محمد شافعى "
          },
          {
            "Id": 1911,
            "VillageName": "عــواد صالح "
          },
          {
            "Id": 1912,
            "VillageName": "أحــمد غــريب "
          }
        ],
        "name": "قسم الخانكة"
      },
      {
        "id": 155,
        "villages": [
          {
            "Id": 1913,
            "VillageName": "مزرعة الجبل الأصفر "
          },
          {
            "Id": 1914,
            "VillageName": "كفر عبيان "
          },
          {
            "Id": 1915,
            "VillageName": "كفر حمزة "
          },
          {
            "Id": 1916,
            "VillageName": "23يولــــيو "
          },
          {
            "Id": 1917,
            "VillageName": "الجبل الأصفر "
          },
          {
            "Id": 1918,
            "VillageName": "عرب العليقات "
          },
          {
            "Id": 1919,
            "VillageName": "عرب العيايدة "
          },
          {
            "Id": 1920,
            "VillageName": "سندوه "
          },
          {
            "Id": 1921,
            "VillageName": "سرياقوس "
          },
          {
            "Id": 1922,
            "VillageName": "المنية "
          },
          {
            "Id": 1923,
            "VillageName": "المنايل "
          },
          {
            "Id": 1924,
            "VillageName": "القلج "
          },
          {
            "Id": 1925,
            "VillageName": "أبو زعبل "
          }
        ],
        "name": "مركز الخانكة"
      },
      {
        "id": 156,
        "villages": [
          {
            "Id": 1926,
            "VillageName": "جمعية أحمد عرابى "
          },
          {
            "Id": 6371,
            "VillageName": "مدينة العبور "
          }
        ],
        "name": "قسم العبور"
      }
    ]
  },
  {
    "id": 15,
    "name": "كفر الشيخ",
    "centers": [
      {
        "id": 157,
        "villages": [
          {
            "Id": 1928,
            "VillageName": "على مصطفى الزواوى "
          },
          {
            "Id": 1929,
            "VillageName": "ســـخا "
          },
          {
            "Id": 1930,
            "VillageName": "عوض الزواوى "
          },
          {
            "Id": 1931,
            "VillageName": "الملحقات "
          },
          {
            "Id": 1932,
            "VillageName": "ميت علوان "
          }
        ],
        "name": "قسم أول كفر الشيخ #"
      },
      {
        "id": 158,
        "villages": [
          {
            "Id": 1933,
            "VillageName": "بدير عليوة "
          },
          {
            "Id": 1934,
            "VillageName": "الشوادفى اللقانى "
          }
        ],
        "name": "قسم ثان كفر الشيخ #"
      },
      {
        "id": 159,
        "villages": [
          {
            "Id": 1935,
            "VillageName": "الشــــــيخ "
          },
          {
            "Id": 1936,
            "VillageName": "نــــويــــش "
          },
          {
            "Id": 1937,
            "VillageName": "طـــاهــــر "
          },
          {
            "Id": 1938,
            "VillageName": "منشة الشرقية "
          },
          {
            "Id": 1939,
            "VillageName": "منشاة الصفا "
          },
          {
            "Id": 1940,
            "VillageName": "نصرة "
          },
          {
            "Id": 1941,
            "VillageName": "منية مسير "
          },
          {
            "Id": 1942,
            "VillageName": "مصطفى كامل- الطواحنية "
          },
          {
            "Id": 1943,
            "VillageName": "مسير "
          },
          {
            "Id": 1944,
            "VillageName": "محلة موسى "
          },
          {
            "Id": 1945,
            "VillageName": "محلة القصب "
          },
          {
            "Id": 1946,
            "VillageName": "متبول "
          },
          {
            "Id": 1947,
            "VillageName": "كفر متبول "
          },
          {
            "Id": 1948,
            "VillageName": "كفر عسكر "
          },
          {
            "Id": 1949,
            "VillageName": "كفر دفرية "
          },
          {
            "Id": 1950,
            "VillageName": "كفر المنشى (كفر المنشى البحرى ىسابقا) "
          },
          {
            "Id": 1951,
            "VillageName": "كفر المرابعين "
          },
          {
            "Id": 1952,
            "VillageName": "كفر الطايفة "
          },
          {
            "Id": 1953,
            "VillageName": "كفر الحمراوى "
          },
          {
            "Id": 1954,
            "VillageName": "كفر أبو طبل "
          },
          {
            "Id": 1955,
            "VillageName": "قراجة "
          },
          {
            "Id": 1956,
            "VillageName": "صندلا "
          },
          {
            "Id": 1957,
            "VillageName": "شنو "
          },
          {
            "Id": 1958,
            "VillageName": "روينة "
          },
          {
            "Id": 1959,
            "VillageName": "رزقة أماى "
          },
          {
            "Id": 1960,
            "VillageName": "رزقة الشناوى "
          },
          {
            "Id": 1961,
            "VillageName": "دقميرة "
          },
          {
            "Id": 1962,
            "VillageName": "دقلت "
          },
          {
            "Id": 1963,
            "VillageName": "دفرية "
          },
          {
            "Id": 1964,
            "VillageName": "حليس "
          },
          {
            "Id": 1965,
            "VillageName": "بلشاشة "
          },
          {
            "Id": 1966,
            "VillageName": "بطيطة "
          },
          {
            "Id": 1967,
            "VillageName": "النطاف "
          },
          {
            "Id": 1968,
            "VillageName": "المرابعين "
          },
          {
            "Id": 1969,
            "VillageName": "الكفر الجديد "
          },
          {
            "Id": 1970,
            "VillageName": "القرضا "
          },
          {
            "Id": 1971,
            "VillageName": "الطرابية "
          },
          {
            "Id": 1972,
            "VillageName": "الطايفة "
          },
          {
            "Id": 1973,
            "VillageName": "الشمارقه "
          },
          {
            "Id": 1974,
            "VillageName": "الخضيرى "
          },
          {
            "Id": 1975,
            "VillageName": "الخادمية "
          },
          {
            "Id": 1976,
            "VillageName": "الحمراء "
          },
          {
            "Id": 1977,
            "VillageName": "الحلافى "
          },
          {
            "Id": 1978,
            "VillageName": "الحدود "
          },
          {
            "Id": 1979,
            "VillageName": "البخانيس "
          },
          {
            "Id": 1980,
            "VillageName": "إسحاقة "
          },
          {
            "Id": 1981,
            "VillageName": "أريمون "
          },
          {
            "Id": 1982,
            "VillageName": "أدريجة "
          },
          {
            "Id": 1983,
            "VillageName": "أبو تمادة "
          },
          {
            "Id": 1984,
            "VillageName": "أبعادية الروضة "
          },
          {
            "Id": 1985,
            "VillageName": "مدينة سيدى غازى "
          }
        ],
        "name": "مركز كفر الشيخ"
      },
      {
        "id": 160,
        "villages": [
          {
            "Id": 1986,
            "VillageName": "مخالي "
          },
          {
            "Id": 1987,
            "VillageName": "الفيروز ( 3خريجين) "
          },
          {
            "Id": 1988,
            "VillageName": "المجد 55 "
          },
          {
            "Id": 1989,
            "VillageName": "أم سن الكبرى "
          },
          {
            "Id": 1990,
            "VillageName": "منشأة سلامة "
          },
          {
            "Id": 1991,
            "VillageName": "فرج الكبرى "
          },
          {
            "Id": 1992,
            "VillageName": "بقلولة "
          },
          {
            "Id": 1993,
            "VillageName": "الوزيرية "
          },
          {
            "Id": 1994,
            "VillageName": "المثلث "
          },
          {
            "Id": 1995,
            "VillageName": "العمدان "
          },
          {
            "Id": 1996,
            "VillageName": "العباسية "
          },
          {
            "Id": 1997,
            "VillageName": "العاقولة "
          },
          {
            "Id": 1998,
            "VillageName": "الضبعة "
          },
          {
            "Id": 1999,
            "VillageName": "الرغامة "
          },
          {
            "Id": 2000,
            "VillageName": "الرصيف "
          },
          {
            "Id": 2001,
            "VillageName": "الحصفة "
          },
          {
            "Id": 2002,
            "VillageName": "البشاير "
          },
          {
            "Id": 2003,
            "VillageName": "البرية "
          },
          {
            "Id": 2004,
            "VillageName": "أبو مصطفى "
          },
          {
            "Id": 2005,
            "VillageName": "أبو رية "
          },
          {
            "Id": 2006,
            "VillageName": "مدينة الرياض "
          }
        ],
        "name": "مركز الرياض"
      },
      {
        "id": 161,
        "villages": [
          {
            "Id": 2007,
            "VillageName": "الثمانين "
          },
          {
            "Id": 2008,
            "VillageName": "تفتيش ناصر "
          },
          {
            "Id": 2009,
            "VillageName": "قطاع منصور "
          },
          {
            "Id": 2010,
            "VillageName": "قطاع الحامول "
          },
          {
            "Id": 2011,
            "VillageName": "المناوفة القبلية "
          },
          {
            "Id": 2012,
            "VillageName": "الحرية 61 "
          },
          {
            "Id": 2013,
            "VillageName": "السحايت "
          },
          {
            "Id": 2014,
            "VillageName": "غرب تيرة "
          },
          {
            "Id": 2015,
            "VillageName": "التفتيش "
          },
          {
            "Id": 2016,
            "VillageName": "كوم الحجر "
          },
          {
            "Id": 2017,
            "VillageName": "الكفر الشرقى "
          },
          {
            "Id": 2018,
            "VillageName": "الزعفران "
          },
          {
            "Id": 2019,
            "VillageName": "الــبـنا "
          },
          {
            "Id": 2020,
            "VillageName": "الأبعادية البحرية "
          },
          {
            "Id": 2021,
            "VillageName": "مدينة الحامول "
          }
        ],
        "name": "مركز الحامول"
      },
      {
        "id": 162,
        "villages": [
          {
            "Id": 2025,
            "VillageName": "الشياخة الآولى : وتضم حى أبو دشيش حى أبو رخا "
          },
          {
            "Id": 6372,
            "VillageName": " الشياخة الثانية : وتضم حى المعمل والشوارع الاتية ( بورسعيد- الجمهوري"
          },
          {
            "Id": 6373,
            "VillageName": " الشياخة الثالثة : وتضم أحياء المشرفى - نافع - الصنايع وشارعى الا"
          },
          {
            "Id": 6374,
            "VillageName": " الشياخة الرابعة : وتضم حى فرحات والشوارع الاتية ( النيل - 26 يوليو "
          }
        ],
        "name": "قسم بيـــلا #"
      },
      {
        "id": 163,
        "villages": [
          {
            "Id": 2026,
            "VillageName": "الجزار "
          },
          {
            "Id": 2027,
            "VillageName": "الترزى "
          },
          {
            "Id": 2028,
            "VillageName": "روس الفرخ "
          },
          {
            "Id": 2029,
            "VillageName": "الحوة "
          },
          {
            "Id": 2030,
            "VillageName": "كوم الحجنة "
          },
          {
            "Id": 2031,
            "VillageName": "كفر قتة "
          },
          {
            "Id": 2032,
            "VillageName": "كفر العجمى "
          },
          {
            "Id": 2033,
            "VillageName": "كفر الجرايدة "
          },
          {
            "Id": 2034,
            "VillageName": "عزبة بدوى "
          },
          {
            "Id": 2035,
            "VillageName": "دار السلام "
          },
          {
            "Id": 2036,
            "VillageName": "حاذق "
          },
          {
            "Id": 2037,
            "VillageName": "الهمة "
          },
          {
            "Id": 2038,
            "VillageName": "الناصرية "
          },
          {
            "Id": 2039,
            "VillageName": "الكوم الطويل "
          },
          {
            "Id": 2040,
            "VillageName": "العلامية "
          },
          {
            "Id": 2041,
            "VillageName": "الشطوط "
          },
          {
            "Id": 2042,
            "VillageName": "أبشان "
          }
        ],
        "name": "مركز بيـــلا"
      },
      {
        "id": 164,
        "villages": [
          {
            "Id": 2043,
            "VillageName": "الزهـــراء "
          },
          {
            "Id": 2044,
            "VillageName": "بر بحرى "
          },
          {
            "Id": 2045,
            "VillageName": "العياش "
          },
          {
            "Id": 2046,
            "VillageName": "الشيخ مبارك "
          },
          {
            "Id": 2047,
            "VillageName": "الشهابية "
          },
          {
            "Id": 2048,
            "VillageName": "الساحل القبلى (الوهابية ) "
          },
          {
            "Id": 2049,
            "VillageName": "الساحل البحرى (بلوش)"
          },
          {
            "Id": 2050,
            "VillageName": "الربــع (سوق التلات ) "
          },
          {
            "Id": 2051,
            "VillageName": "الحماد "
          },
          {
            "Id": 2052,
            "VillageName": "البنائين "
          },
          {
            "Id": 2053,
            "VillageName": "مدينة برج البرلس "
          },
          {
            "Id": 2054,
            "VillageName": "مدينة مصيف بلطيم "
          },
          {
            "Id": 2055,
            "VillageName": "مدينة بلطيم "
          }
        ],
        "name": "مركز البرلس"
      },
      {
        "id": 165,
        "villages": [
          {
            "Id": 2056,
            "VillageName": "البصراط "
          },
          {
            "Id": 2057,
            "VillageName": "منية المرشد "
          },
          {
            "Id": 2058,
            "VillageName": "معدية مهدى "
          },
          {
            "Id": 2059,
            "VillageName": "عزبة عمر "
          },
          {
            "Id": 2060,
            "VillageName": "الوقف قبلى "
          },
          {
            "Id": 2061,
            "VillageName": "الوقف بحرى "
          },
          {
            "Id": 2062,
            "VillageName": "عزب الغرب "
          },
          {
            "Id": 2063,
            "VillageName": "عزب الخليج بحرى "
          },
          {
            "Id": 2064,
            "VillageName": "عزب الخليج قبلى "
          },
          {
            "Id": 2065,
            "VillageName": "بنى بكار "
          },
          {
            "Id": 2066,
            "VillageName": "بريدعة "
          },
          {
            "Id": 2067,
            "VillageName": "برمبال "
          },
          {
            "Id": 2068,
            "VillageName": "برج مغيزل "
          },
          {
            "Id": 2069,
            "VillageName": "القومسيون غرب "
          },
          {
            "Id": 2070,
            "VillageName": "القومسيون شرق "
          },
          {
            "Id": 2071,
            "VillageName": "القنى "
          },
          {
            "Id": 2072,
            "VillageName": "الجزيرة الخضراء "
          },
          {
            "Id": 2073,
            "VillageName": "أبيانة "
          },
          {
            "Id": 2074,
            "VillageName": "مدينة مطوبس "
          }
        ],
        "name": "مركز مطوبس"
      },
      {
        "id": 166,
        "villages": [
          {
            "Id": 2075,
            "VillageName": "عزب الزوامل البحرية "
          },
          {
            "Id": 2076,
            "VillageName": "منية الأشراف "
          },
          {
            "Id": 2077,
            "VillageName": "قبريط "
          },
          {
            "Id": 2078,
            "VillageName": "عربان "
          },
          {
            "Id": 2079,
            "VillageName": "شمشيرة "
          },
          {
            "Id": 2080,
            "VillageName": "سنديون "
          },
          {
            "Id": 2081,
            "VillageName": "الفتوح "
          },
          {
            "Id": 2082,
            "VillageName": "المنشية "
          },
          {
            "Id": 2083,
            "VillageName": "السالمية "
          },
          {
            "Id": 2084,
            "VillageName": "أبو دراز "
          },
          {
            "Id": 2085,
            "VillageName": "مدينة فوه "
          }
        ],
        "name": "مركز فوه"
      },
      {
        "id": 167,
        "villages": [
          {
            "Id": 2086,
            "VillageName": "الصبايحة "
          },
          {
            "Id": 2087,
            "VillageName": "الكوم "
          },
          {
            "Id": 2088,
            "VillageName": "البلاصى "
          },
          {
            "Id": 2089,
            "VillageName": "القن "
          },
          {
            "Id": 2090,
            "VillageName": "التفتيش (اصلاح شالما ) "
          },
          {
            "Id": 2091,
            "VillageName": "منشاة عقل "
          },
          {
            "Id": 2092,
            "VillageName": "منشاة عباس "
          },
          {
            "Id": 2093,
            "VillageName": "منشاة المصرى "
          },
          {
            "Id": 2094,
            "VillageName": "منشاة على "
          },
          {
            "Id": 2095,
            "VillageName": "كفر تيدة "
          },
          {
            "Id": 2096,
            "VillageName": "كفر المشارقة "
          },
          {
            "Id": 2097,
            "VillageName": "كوم الدهب(زبيدة البحرية سابقا) "
          },
          {
            "Id": 2098,
            "VillageName": "شالمة "
          },
          {
            "Id": 2099,
            "VillageName": "سد خميس "
          },
          {
            "Id": 2100,
            "VillageName": "دمرو "
          },
          {
            "Id": 2101,
            "VillageName": "تيدة "
          },
          {
            "Id": 2102,
            "VillageName": "بوريد وكفر يوسف "
          },
          {
            "Id": 2103,
            "VillageName": "برية لا صيفر "
          },
          {
            "Id": 2104,
            "VillageName": "الوراق "
          },
          {
            "Id": 2105,
            "VillageName": "الهندسة "
          },
          {
            "Id": 2106,
            "VillageName": "القضابى "
          },
          {
            "Id": 2107,
            "VillageName": "الفقهاء القبلية "
          },
          {
            "Id": 2108,
            "VillageName": "الفقهاء البحرية (الملاحة) "
          },
          {
            "Id": 2109,
            "VillageName": "العيسوية "
          },
          {
            "Id": 2110,
            "VillageName": "الصالحات "
          },
          {
            "Id": 2111,
            "VillageName": "الروضة "
          },
          {
            "Id": 2112,
            "VillageName": "الحدادى "
          },
          {
            "Id": 2113,
            "VillageName": "الخوالد "
          },
          {
            "Id": 2114,
            "VillageName": "أبو أحمد "
          },
          {
            "Id": 2115,
            "VillageName": "أبو عليوه الغربية "
          },
          {
            "Id": 2116,
            "VillageName": "أبو غنيمة "
          },
          {
            "Id": 2117,
            "VillageName": "مدينة سيدى سالم "
          }
        ],
        "name": "مركز سيدى سالم"
      },
      {
        "id": 168,
        "villages": [
          {
            "Id": 2118,
            "VillageName": "مدينة دسوق "
          }
        ],
        "name": "قسم دسوق"
      },
      {
        "id": 169,
        "villages": [
          {
            "Id": 2119,
            "VillageName": "منية جناح "
          },
          {
            "Id": 2120,
            "VillageName": "منشأة على أغا "
          },
          {
            "Id": 2121,
            "VillageName": "منشاة زعلوك "
          },
          {
            "Id": 2122,
            "VillageName": "منشاة بطاح "
          },
          {
            "Id": 2123,
            "VillageName": "محلة مالك "
          },
          {
            "Id": 2124,
            "VillageName": "محلة دياى "
          },
          {
            "Id": 2125,
            "VillageName": "محلة ابوعلي "
          },
          {
            "Id": 2126,
            "VillageName": "لا صيفر البلد "
          },
          {
            "Id": 2127,
            "VillageName": "كنيسة السرادوسى "
          },
          {
            "Id": 2128,
            "VillageName": "كفر مجر "
          },
          {
            "Id": 2129,
            "VillageName": "كفر عبد الرحمن "
          },
          {
            "Id": 2130,
            "VillageName": "كفر أم يوسف "
          },
          {
            "Id": 2131,
            "VillageName": "كفر العرب "
          },
          {
            "Id": 2132,
            "VillageName": "كفر السودان "
          },
          {
            "Id": 2133,
            "VillageName": "كفر الخير "
          },
          {
            "Id": 2134,
            "VillageName": "كفر أبو زيادة "
          },
          {
            "Id": 2135,
            "VillageName": "كفر إبراهيم "
          },
          {
            "Id": 2136,
            "VillageName": "الشباسية "
          },
          {
            "Id": 2137,
            "VillageName": "أبو مندور "
          },
          {
            "Id": 2138,
            "VillageName": "شباس الملح "
          },
          {
            "Id": 2139,
            "VillageName": "شباس الشهداء "
          },
          {
            "Id": 2140,
            "VillageName": "شابة "
          },
          {
            "Id": 2141,
            "VillageName": "سنهور المدينة "
          },
          {
            "Id": 2142,
            "VillageName": "دمنكة "
          },
          {
            "Id": 2143,
            "VillageName": "دمرو سلميان "
          },
          {
            "Id": 2144,
            "VillageName": "جماجمون "
          },
          {
            "Id": 2145,
            "VillageName": "النوايجة "
          },
          {
            "Id": 2146,
            "VillageName": "المندورة "
          },
          {
            "Id": 2147,
            "VillageName": "العجوزين "
          },
          {
            "Id": 2148,
            "VillageName": "الصافية وميت الحميد "
          },
          {
            "Id": 2149,
            "VillageName": "الشون "
          },
          {
            "Id": 2150,
            "VillageName": "الإبراهمية "
          },
          {
            "Id": 2151,
            "VillageName": "أبيوقا "
          },
          {
            "Id": 2152,
            "VillageName": "أبطو "
          }
        ],
        "name": "مركز دسوق"
      },
      {
        "id": 170,
        "villages": [
          {
            "Id": 2153,
            "VillageName": "الحرية "
          },
          {
            "Id": 2154,
            "VillageName": "عبد الكريم "
          },
          {
            "Id": 2155,
            "VillageName": "نشرت "
          },
          {
            "Id": 2156,
            "VillageName": "منشأة عجلان "
          },
          {
            "Id": 2157,
            "VillageName": "ميت الديبة "
          },
          {
            "Id": 2158,
            "VillageName": "منية قلين "
          },
          {
            "Id": 2159,
            "VillageName": "منشأة شبراطو "
          },
          {
            "Id": 2160,
            "VillageName": "منشأة الشاذلى "
          },
          {
            "Id": 2161,
            "VillageName": "كفر يوسف داود "
          },
          {
            "Id": 2162,
            "VillageName": "كفر يوسف حنس "
          },
          {
            "Id": 2163,
            "VillageName": "كفر المشايخ "
          },
          {
            "Id": 2164,
            "VillageName": "كفر المرازقة "
          },
          {
            "Id": 2165,
            "VillageName": "كفر الجزائر "
          },
          {
            "Id": 2166,
            "VillageName": "قونة "
          },
          {
            "Id": 2167,
            "VillageName": "قزمان "
          },
          {
            "Id": 2168,
            "VillageName": "طويلة نشرت "
          },
          {
            "Id": 2169,
            "VillageName": "صروة "
          },
          {
            "Id": 2170,
            "VillageName": "شباس عمير "
          },
          {
            "Id": 2171,
            "VillageName": "حصة الغنيمى "
          },
          {
            "Id": 2172,
            "VillageName": "بلنكومة "
          },
          {
            "Id": 2173,
            "VillageName": "المنشلين "
          },
          {
            "Id": 2174,
            "VillageName": "المنشاة الكبرى "
          },
          {
            "Id": 2175,
            "VillageName": "المنشاة الصغرى "
          },
          {
            "Id": 2176,
            "VillageName": "الكفر البحرى "
          },
          {
            "Id": 2177,
            "VillageName": "الكردى "
          },
          {
            "Id": 2178,
            "VillageName": "الغنيمى "
          },
          {
            "Id": 2179,
            "VillageName": "الشقة "
          },
          {
            "Id": 2180,
            "VillageName": "البكاتوش "
          },
          {
            "Id": 2181,
            "VillageName": "مدينة قلين "
          }
        ],
        "name": "مركز قلين"
      }
    ]
  },
  {
    "id": 16,
    "name": "الغربيه",
    "centers": [
      {
        "id": 171,
        "villages": [
          {
            "Id": 2182,
            "VillageName": "العجيزى "
          },
          {
            "Id": 2183,
            "VillageName": "ابن الفارض "
          },
          {
            "Id": 2184,
            "VillageName": "أم المؤمنين "
          },
          {
            "Id": 2185,
            "VillageName": "النادى "
          },
          {
            "Id": 2186,
            "VillageName": "على مبارك "
          },
          {
            "Id": 2187,
            "VillageName": "طة الحكيم "
          },
          {
            "Id": 2188,
            "VillageName": "أحمد ماهر "
          },
          {
            "Id": 2189,
            "VillageName": "سيجر "
          },
          {
            "Id": 2190,
            "VillageName": "سعد الدين "
          },
          {
            "Id": 2191,
            "VillageName": "السيد البدوى "
          }
        ],
        "name": "قسم أول طنطا *"
      },
      {
        "id": 172,
        "villages": [
          {
            "Id": 2192,
            "VillageName": "محمد جعيصة "
          },
          {
            "Id": 2193,
            "VillageName": "فخرى جعيصة "
          },
          {
            "Id": 2194,
            "VillageName": "احمد عواجة "
          },
          {
            "Id": 2195,
            "VillageName": "محمد اسماعيل "
          },
          {
            "Id": 2196,
            "VillageName": "احمد الباجورى "
          },
          {
            "Id": 2197,
            "VillageName": "الشعراوى "
          },
          {
            "Id": 2198,
            "VillageName": "رمضان مصطفى "
          },
          {
            "Id": 2199,
            "VillageName": "محمد طة "
          },
          {
            "Id": 2200,
            "VillageName": "احمد عبدالرحمن "
          },
          {
            "Id": 2201,
            "VillageName": "احمد هاشم "
          },
          {
            "Id": 2202,
            "VillageName": "محمود أبو شليب "
          },
          {
            "Id": 2203,
            "VillageName": "محمد عبدالعال "
          },
          {
            "Id": 2204,
            "VillageName": "السيد منصور "
          },
          {
            "Id": 2205,
            "VillageName": "عبدة الرفاعى "
          },
          {
            "Id": 2206,
            "VillageName": "حسن سالم "
          },
          {
            "Id": 2207,
            "VillageName": "محمد مجاهد "
          },
          {
            "Id": 2208,
            "VillageName": "احمد البابلى "
          }
        ],
        "name": "قسم ثان طنطا *"
      },
      {
        "id": 173,
        "villages": [
          {
            "Id": 2209,
            "VillageName": "نواج "
          },
          {
            "Id": 2210,
            "VillageName": "نفيا "
          },
          {
            "Id": 2211,
            "VillageName": "ميت حبيش القبلية "
          },
          {
            "Id": 2212,
            "VillageName": "ميت حبيش البحرية "
          },
          {
            "Id": 2213,
            "VillageName": "ميت السودان "
          },
          {
            "Id": 2214,
            "VillageName": "منيل الهويشات "
          },
          {
            "Id": 2215,
            "VillageName": "منشية جنزور "
          },
          {
            "Id": 2216,
            "VillageName": "منشية الأوقاف "
          },
          {
            "Id": 2217,
            "VillageName": "منشأة الجنيدى "
          },
          {
            "Id": 2218,
            "VillageName": "محلة منوف "
          },
          {
            "Id": 2219,
            "VillageName": "محلة مرحوم "
          },
          {
            "Id": 2220,
            "VillageName": "محلة روح "
          },
          {
            "Id": 2221,
            "VillageName": "كنيسة دمشيت "
          },
          {
            "Id": 2222,
            "VillageName": "كفر مسعود "
          },
          {
            "Id": 2223,
            "VillageName": "كفر علوان "
          },
          {
            "Id": 2224,
            "VillageName": "كفر عصام "
          },
          {
            "Id": 2225,
            "VillageName": "كفر طرنه "
          },
          {
            "Id": 2226,
            "VillageName": "كفر سبطاس "
          },
          {
            "Id": 2227,
            "VillageName": "كفر خضر "
          },
          {
            "Id": 2228,
            "VillageName": "كفر المنصورة "
          },
          {
            "Id": 2229,
            "VillageName": "كفر المنشى القبلى "
          },
          {
            "Id": 2230,
            "VillageName": "كفر العراقى "
          },
          {
            "Id": 2231,
            "VillageName": "كفر الشيخ سليم "
          },
          {
            "Id": 2232,
            "VillageName": "كفر الشرفا الشرقى "
          },
          {
            "Id": 2233,
            "VillageName": "كفر الساحل "
          },
          {
            "Id": 2234,
            "VillageName": "كفر الحما "
          },
          {
            "Id": 2235,
            "VillageName": "كفر أبو داود "
          },
          {
            "Id": 2236,
            "VillageName": "فيشا سليم "
          },
          {
            "Id": 2237,
            "VillageName": "صناديد "
          },
          {
            "Id": 2238,
            "VillageName": "شونى "
          },
          {
            "Id": 2239,
            "VillageName": "شوبر "
          },
          {
            "Id": 2240,
            "VillageName": "شقرف "
          },
          {
            "Id": 2241,
            "VillageName": "شبشير الحصة "
          },
          {
            "Id": 2242,
            "VillageName": "شبرا النملة "
          },
          {
            "Id": 2243,
            "VillageName": "سبطاس "
          },
          {
            "Id": 2244,
            "VillageName": "سبرباى "
          },
          {
            "Id": 2245,
            "VillageName": "دمشيت "
          },
          {
            "Id": 2246,
            "VillageName": "دكوده "
          },
          {
            "Id": 2247,
            "VillageName": "دفره "
          },
          {
            "Id": 2248,
            "VillageName": "خرسيت "
          },
          {
            "Id": 2249,
            "VillageName": "حصة شبشير "
          },
          {
            "Id": 2250,
            "VillageName": "حصة برما "
          },
          {
            "Id": 2251,
            "VillageName": "تلبنت قيصر "
          },
          {
            "Id": 2252,
            "VillageName": "بريك الحجر "
          },
          {
            "Id": 2253,
            "VillageName": "برما "
          },
          {
            "Id": 2254,
            "VillageName": "الكرسة "
          },
          {
            "Id": 2255,
            "VillageName": "الرملية "
          },
          {
            "Id": 2256,
            "VillageName": "الرجدية "
          },
          {
            "Id": 2257,
            "VillageName": "الجوهرية "
          },
          {
            "Id": 2258,
            "VillageName": "أخناواى الزلاقة "
          }
        ],
        "name": "مركز طنطا"
      },
      {
        "id": 174,
        "villages": [
          {
            "Id": 2259,
            "VillageName": "ميت يزيد "
          },
          {
            "Id": 2260,
            "VillageName": "ميت ميمون "
          },
          {
            "Id": 2261,
            "VillageName": "ميت غزال "
          },
          {
            "Id": 2262,
            "VillageName": "ميت حواى "
          },
          {
            "Id": 2263,
            "VillageName": "ميت الليت بقلولة "
          },
          {
            "Id": 2264,
            "VillageName": "منية طوخ "
          },
          {
            "Id": 2265,
            "VillageName": "منية البندرة "
          },
          {
            "Id": 2266,
            "VillageName": "منشاة أبو عبد الله "
          },
          {
            "Id": 2267,
            "VillageName": "مسهلة "
          },
          {
            "Id": 2268,
            "VillageName": "كفر ميت حواى "
          },
          {
            "Id": 2269,
            "VillageName": "كفر كلا الباب "
          },
          {
            "Id": 2270,
            "VillageName": "كفر قرطام "
          },
          {
            "Id": 2271,
            "VillageName": "كفر سليمان عوض "
          },
          {
            "Id": 2272,
            "VillageName": "كفر سالم النحال "
          },
          {
            "Id": 2273,
            "VillageName": "كفر خزاعل "
          },
          {
            "Id": 2274,
            "VillageName": "كفر الشيخ مفتاح "
          },
          {
            "Id": 2275,
            "VillageName": "كفر الحاج داود "
          },
          {
            "Id": 2276,
            "VillageName": "الروضة( عزبة طوخ سابقا ) "
          },
          {
            "Id": 2277,
            "VillageName": "طوخ مزيد "
          },
          {
            "Id": 2278,
            "VillageName": "شنره البحرية "
          },
          {
            "Id": 2279,
            "VillageName": "شنراق "
          },
          {
            "Id": 2280,
            "VillageName": "شندلات "
          },
          {
            "Id": 2281,
            "VillageName": "شبرا قاص "
          },
          {
            "Id": 2282,
            "VillageName": "شبرابيل "
          },
          {
            "Id": 2283,
            "VillageName": "شبرا بلولة السمنودية"
          },
          {
            "Id": 2284,
            "VillageName": "سحيم "
          },
          {
            "Id": 2285,
            "VillageName": "تطاى "
          },
          {
            "Id": 2286,
            "VillageName": "تاج العجم "
          },
          {
            "Id": 2287,
            "VillageName": "بلوس الهوى "
          },
          {
            "Id": 2288,
            "VillageName": "بلكيم "
          },
          {
            "Id": 2289,
            "VillageName": "بلاى "
          },
          {
            "Id": 2290,
            "VillageName": "بقلولة "
          },
          {
            "Id": 2291,
            "VillageName": "المنشاة الكبرى "
          },
          {
            "Id": 2292,
            "VillageName": "المنشاة الجديدة "
          },
          {
            "Id": 2293,
            "VillageName": "الكرما "
          },
          {
            "Id": 2294,
            "VillageName": "القرشية "
          },
          {
            "Id": 2295,
            "VillageName": "الرجابية "
          },
          {
            "Id": 2296,
            "VillageName": "الجميزة "
          },
          {
            "Id": 2297,
            "VillageName": "الجعفرية "
          },
          {
            "Id": 2298,
            "VillageName": "البندرة "
          },
          {
            "Id": 2299,
            "VillageName": "البدنجانية "
          },
          {
            "Id": 2300,
            "VillageName": "الأنبوطين "
          },
          {
            "Id": 2301,
            "VillageName": "أشناواى "
          },
          {
            "Id": 2302,
            "VillageName": "أبو الجهور "
          },
          {
            "Id": 2303,
            "VillageName": "مدينة السنطة "
          }
        ],
        "name": "مركز السنطة"
      },
      {
        "id": 175,
        "villages": [
          {
            "Id": 2304,
            "VillageName": "نهطاى "
          },
          {
            "Id": 2305,
            "VillageName": "ميت المخلص "
          },
          {
            "Id": 2306,
            "VillageName": "ميت المباشرين "
          },
          {
            "Id": 2307,
            "VillageName": "ميت الرخا "
          },
          {
            "Id": 2308,
            "VillageName": "ميت الحارون "
          },
          {
            "Id": 2309,
            "VillageName": "ميت البز "
          },
          {
            "Id": 2310,
            "VillageName": "منشاة حسن "
          },
          {
            "Id": 2311,
            "VillageName": "منشاة حاتم "
          },
          {
            "Id": 2312,
            "VillageName": "مسجد وصيف "
          },
          {
            "Id": 2313,
            "VillageName": "كفر نواى "
          },
          {
            "Id": 2314,
            "VillageName": "كفر ميت الحارون "
          },
          {
            "Id": 2315,
            "VillageName": "كفر فرسيس "
          },
          {
            "Id": 2316,
            "VillageName": "كفر غازى "
          },
          {
            "Id": 2317,
            "VillageName": "كفر عبد الرحمن "
          },
          {
            "Id": 2318,
            "VillageName": "كفر شمارة "
          },
          {
            "Id": 2319,
            "VillageName": "كفر ششتا "
          },
          {
            "Id": 2320,
            "VillageName": "كفر شبرا قلوج "
          },
          {
            "Id": 2321,
            "VillageName": "كفر شبرا اليمن "
          },
          {
            "Id": 2322,
            "VillageName": "كفر شاهين "
          },
          {
            "Id": 2323,
            "VillageName": "كفر سنبو "
          },
          {
            "Id": 2324,
            "VillageName": "كفر سنباط "
          },
          {
            "Id": 2325,
            "VillageName": "كفر دمنهور القديم "
          },
          {
            "Id": 2326,
            "VillageName": "كفر حسين "
          },
          {
            "Id": 2327,
            "VillageName": "كفر حانوت القبلى "
          },
          {
            "Id": 2328,
            "VillageName": "كفر حانوت البحرى "
          },
          {
            "Id": 2329,
            "VillageName": "كفر العرب "
          },
          {
            "Id": 2330,
            "VillageName": "كفر الصارم القبلى "
          },
          {
            "Id": 2331,
            "VillageName": "كفر السنادية "
          },
          {
            "Id": 2332,
            "VillageName": "كفر السحيمية "
          },
          {
            "Id": 2333,
            "VillageName": "كفر الزيتون "
          },
          {
            "Id": 2334,
            "VillageName": "كفر الديب "
          },
          {
            "Id": 2335,
            "VillageName": "كفر الدغايده "
          },
          {
            "Id": 2336,
            "VillageName": "كفر الجنيدى "
          },
          {
            "Id": 2337,
            "VillageName": "كفر الجزيرة "
          },
          {
            "Id": 2338,
            "VillageName": "كفر اسماعيل "
          },
          {
            "Id": 2339,
            "VillageName": "كفر أبرى "
          },
          {
            "Id": 2340,
            "VillageName": "فرسيس "
          },
          {
            "Id": 2341,
            "VillageName": "ششتا "
          },
          {
            "Id": 2342,
            "VillageName": "شرشابة "
          },
          {
            "Id": 2343,
            "VillageName": "شبرا ملس "
          },
          {
            "Id": 2344,
            "VillageName": "شبرا اليمن "
          },
          {
            "Id": 2345,
            "VillageName": "سند بسط "
          },
          {
            "Id": 2346,
            "VillageName": "سنبو الكبري "
          },
          {
            "Id": 2347,
            "VillageName": "سنباط "
          },
          {
            "Id": 2348,
            "VillageName": "دهتورة "
          },
          {
            "Id": 2349,
            "VillageName": "دمنهور الوحش "
          },
          {
            "Id": 2350,
            "VillageName": "حنون "
          },
          {
            "Id": 2351,
            "VillageName": "حانوت "
          },
          {
            "Id": 2352,
            "VillageName": "تفهنا العزب "
          },
          {
            "Id": 2353,
            "VillageName": "الغريب "
          },
          {
            "Id": 2354,
            "VillageName": "العايشة "
          },
          {
            "Id": 2355,
            "VillageName": "الضبابشة "
          },
          {
            "Id": 2356,
            "VillageName": "السملاوية "
          },
          {
            "Id": 2357,
            "VillageName": "الرياض "
          }
        ],
        "name": "مركز زفتى"
      },
      {
        "id": 176,
        "villages": [
          {
            "Id": 2358,
            "VillageName": "ميت هاشم "
          },
          {
            "Id": 2359,
            "VillageName": "ميت عساس "
          },
          {
            "Id": 2360,
            "VillageName": "ميت حبيب الشرقية "
          },
          {
            "Id": 2361,
            "VillageName": "ميت بدر حلاوة "
          },
          {
            "Id": 2362,
            "VillageName": "منشاة نظيف "
          },
          {
            "Id": 2363,
            "VillageName": "محلة زياد "
          },
          {
            "Id": 2364,
            "VillageName": "محلة خلف "
          },
          {
            "Id": 2365,
            "VillageName": "مجول "
          },
          {
            "Id": 2366,
            "VillageName": "كفر حسان "
          },
          {
            "Id": 2367,
            "VillageName": "كفر العزيزية "
          },
          {
            "Id": 2368,
            "VillageName": "كفر الصارم البحرى "
          },
          {
            "Id": 2369,
            "VillageName": "كفر الشراقوة "
          },
          {
            "Id": 2370,
            "VillageName": "كفر التعبانية "
          },
          {
            "Id": 2371,
            "VillageName": "طليمة "
          },
          {
            "Id": 2372,
            "VillageName": "بهبيت الحجارة "
          },
          {
            "Id": 2373,
            "VillageName": "بنا أبو صير "
          },
          {
            "Id": 2374,
            "VillageName": "الناوية "
          },
          {
            "Id": 2375,
            "VillageName": "الناصرية "
          },
          {
            "Id": 2376,
            "VillageName": "العزيزية "
          },
          {
            "Id": 2377,
            "VillageName": "الراهبين "
          },
          {
            "Id": 2378,
            "VillageName": "أبو صيرينا "
          },
          {
            "Id": 2379,
            "VillageName": "مدينة سمنود "
          }
        ],
        "name": "مركز سمنود"
      },
      {
        "id": 177,
        "villages": [
          {
            "Id": 2380,
            "VillageName": "ناصر "
          },
          {
            "Id": 2381,
            "VillageName": "الـــبرج "
          },
          {
            "Id": 2382,
            "VillageName": "حسين سيد أحمد على "
          }
        ],
        "name": "قسم أول المحلة الكبرى #"
      },
      {
        "id": 178,
        "villages": [
          {
            "Id": 2383,
            "VillageName": "مصطفى الأجرودى "
          },
          {
            "Id": 2384,
            "VillageName": "السبخاوى "
          },
          {
            "Id": 2385,
            "VillageName": "أمام الحسينى "
          },
          {
            "Id": 2386,
            "VillageName": "أحمد المنسى "
          }
        ],
        "name": "قسم ثان المحلة الكبرى #"
      },
      {
        "id": 179,
        "villages": [
          {
            "Id": 2387,
            "VillageName": "محمد حسين السحلى "
          },
          {
            "Id": 2388,
            "VillageName": "عبدالحى شلبى "
          },
          {
            "Id": 2389,
            "VillageName": "المنسى سرحان "
          },
          {
            "Id": 2390,
            "VillageName": "التـــحرير "
          }
        ],
        "name": "قسم ثالث المحلة الكبرى #"
      },
      {
        "id": 180,
        "villages": [
          {
            "Id": 2391,
            "VillageName": "راغب الحديثة "
          },
          {
            "Id": 2392,
            "VillageName": "الشرقية "
          },
          {
            "Id": 2393,
            "VillageName": "محب الجديدة "
          },
          {
            "Id": 2394,
            "VillageName": "سيدى حمود "
          },
          {
            "Id": 2395,
            "VillageName": "نمرة البصل "
          },
          {
            "Id": 2396,
            "VillageName": "ميت الليت هاشم "
          },
          {
            "Id": 2397,
            "VillageName": "ميت السراج "
          },
          {
            "Id": 2398,
            "VillageName": "منية شنتنا عياش "
          },
          {
            "Id": 2399,
            "VillageName": "منشية طنبارة "
          },
          {
            "Id": 2400,
            "VillageName": "منشية الأوقاف "
          },
          {
            "Id": 2401,
            "VillageName": "منشية الأمراء "
          },
          {
            "Id": 2402,
            "VillageName": "محلة حسن "
          },
          {
            "Id": 2403,
            "VillageName": "محلة القصب "
          },
          {
            "Id": 2404,
            "VillageName": "محلة أبو على القنطرة"
          },
          {
            "Id": 2405,
            "VillageName": "لومانا الجديدة "
          },
          {
            "Id": 2406,
            "VillageName": "الأبشيط "
          },
          {
            "Id": 2407,
            "VillageName": "كفر قريطنه "
          },
          {
            "Id": 2408,
            "VillageName": "كفر فياله "
          },
          {
            "Id": 2409,
            "VillageName": "كفر دمرو "
          },
          {
            "Id": 2410,
            "VillageName": "كفر دمنتو "
          },
          {
            "Id": 2411,
            "VillageName": "كفر دخميس "
          },
          {
            "Id": 2412,
            "VillageName": "كفر حجازى "
          },
          {
            "Id": 2413,
            "VillageName": "كفر العبايدة "
          },
          {
            "Id": 2414,
            "VillageName": "كفر الجنينة القبلى "
          },
          {
            "Id": 2415,
            "VillageName": "كفر البسطويسى "
          },
          {
            "Id": 2416,
            "VillageName": "عطاف "
          },
          {
            "Id": 2417,
            "VillageName": "طنباره "
          },
          {
            "Id": 2418,
            "VillageName": "طرينه "
          },
          {
            "Id": 2419,
            "VillageName": "صفط تراب "
          },
          {
            "Id": 2420,
            "VillageName": "شبرا نبات "
          },
          {
            "Id": 2421,
            "VillageName": "شبرا ملكان "
          },
          {
            "Id": 2422,
            "VillageName": "شبرا بابل "
          },
          {
            "Id": 2423,
            "VillageName": "سندسيس "
          },
          {
            "Id": 2424,
            "VillageName": "سنباره "
          },
          {
            "Id": 2425,
            "VillageName": "سامول "
          },
          {
            "Id": 2426,
            "VillageName": "ديرب هاشم "
          },
          {
            "Id": 2427,
            "VillageName": "دنوشر "
          },
          {
            "Id": 2428,
            "VillageName": "دمرو السادات ( دمرو خمارة ) "
          },
          {
            "Id": 2429,
            "VillageName": "دمتنو "
          },
          {
            "Id": 2430,
            "VillageName": "دخميس "
          },
          {
            "Id": 2431,
            "VillageName": "بلقينا "
          },
          {
            "Id": 2432,
            "VillageName": "بطينة "
          },
          {
            "Id": 2433,
            "VillageName": "بشبيش "
          },
          {
            "Id": 2434,
            "VillageName": "الهياتم "
          },
          {
            "Id": 2435,
            "VillageName": "المعتمدية "
          },
          {
            "Id": 2436,
            "VillageName": "الكمالية "
          },
          {
            "Id": 2437,
            "VillageName": "القصرية "
          },
          {
            "Id": 2438,
            "VillageName": "القراطبة "
          },
          {
            "Id": 2439,
            "VillageName": "العتمانية "
          },
          {
            "Id": 2440,
            "VillageName": "العامرية "
          },
          {
            "Id": 2441,
            "VillageName": "الشهيدى "
          },
          {
            "Id": 2442,
            "VillageName": "السجاعية "
          },
          {
            "Id": 2443,
            "VillageName": "الدواخلية "
          },
          {
            "Id": 2444,
            "VillageName": "الجابرية "
          },
          {
            "Id": 2445,
            "VillageName": "الحوامدية الجديدة "
          },
          {
            "Id": 2446,
            "VillageName": "البناوان "
          },
          {
            "Id": 2447,
            "VillageName": "الأنشا "
          },
          {
            "Id": 2448,
            "VillageName": "أبو النجا "
          }
        ],
        "name": "مركز المحلة الكبرى"
      },
      {
        "id": 181,
        "villages": [
          {
            "Id": 2449,
            "VillageName": "نشيل "
          },
          {
            "Id": 2450,
            "VillageName": "ميت الشيخ "
          },
          {
            "Id": 2451,
            "VillageName": "منشاة العيارى "
          },
          {
            "Id": 2452,
            "VillageName": "محلة مسير "
          },
          {
            "Id": 2453,
            "VillageName": "كوم على "
          },
          {
            "Id": 2454,
            "VillageName": "كفر محلة مسير "
          },
          {
            "Id": 2455,
            "VillageName": "كفر سعدون "
          },
          {
            "Id": 2456,
            "VillageName": "كفر بلضم "
          },
          {
            "Id": 2457,
            "VillageName": "كفر النعناعى "
          },
          {
            "Id": 2458,
            "VillageName": "كفر أحمد شلبى "
          },
          {
            "Id": 2459,
            "VillageName": "كفر أبو جندى "
          },
          {
            "Id": 2460,
            "VillageName": "عطف أبو جندى "
          },
          {
            "Id": 2461,
            "VillageName": "صرد "
          },
          {
            "Id": 2462,
            "VillageName": "شبرا نباص "
          },
          {
            "Id": 2463,
            "VillageName": "شبرا بلولة "
          },
          {
            "Id": 2464,
            "VillageName": "سملا "
          },
          {
            "Id": 2465,
            "VillageName": "سماتاى "
          },
          {
            "Id": 2466,
            "VillageName": "سجين الكوم "
          },
          {
            "Id": 2467,
            "VillageName": "دماط "
          },
          {
            "Id": 2468,
            "VillageName": "خباطه "
          },
          {
            "Id": 2469,
            "VillageName": "حوين "
          },
          {
            "Id": 2470,
            "VillageName": "بوريج "
          },
          {
            "Id": 2471,
            "VillageName": "بلتاج "
          },
          {
            "Id": 2472,
            "VillageName": "أميوط "
          },
          {
            "Id": 2473,
            "VillageName": "العمه "
          },
          {
            "Id": 2474,
            "VillageName": "العتوه القبلية "
          },
          {
            "Id": 2475,
            "VillageName": "العتوه البحرية "
          },
          {
            "Id": 2476,
            "VillageName": "الشين "
          },
          {
            "Id": 2477,
            "VillageName": "الرياينة "
          },
          {
            "Id": 2478,
            "VillageName": "أبشاواى الملق "
          },
          {
            "Id": 2479,
            "VillageName": "مدينة قطور "
          }
        ],
        "name": "مركز قطور"
      },
      {
        "id": 182,
        "villages": [
          {
            "Id": 2480,
            "VillageName": "نجريج "
          },
          {
            "Id": 2481,
            "VillageName": "ميت شريف "
          },
          {
            "Id": 2482,
            "VillageName": "ميت الخير "
          },
          {
            "Id": 2483,
            "VillageName": "منشاة بسيون "
          },
          {
            "Id": 2484,
            "VillageName": "منشاة اليعقوبية "
          },
          {
            "Id": 2485,
            "VillageName": "مشال "
          },
          {
            "Id": 2486,
            "VillageName": "محلة اللبن "
          },
          {
            "Id": 2487,
            "VillageName": "كوم النجار "
          },
          {
            "Id": 2488,
            "VillageName": "كنيسة شبراطو "
          },
          {
            "Id": 2489,
            "VillageName": "كفر نصير "
          },
          {
            "Id": 2490,
            "VillageName": "كفر سليمان "
          },
          {
            "Id": 2491,
            "VillageName": "كفر سالم الهباب "
          },
          {
            "Id": 2492,
            "VillageName": "كفر المنشى أبو حمر "
          },
          {
            "Id": 2493,
            "VillageName": "كفر الدوار "
          },
          {
            "Id": 2494,
            "VillageName": "كفر الحمام "
          },
          {
            "Id": 2495,
            "VillageName": "كتامة الغابة "
          },
          {
            "Id": 2496,
            "VillageName": "قرنشو "
          },
          {
            "Id": 2497,
            "VillageName": "صا الحجر "
          },
          {
            "Id": 2498,
            "VillageName": "شفا وقرون "
          },
          {
            "Id": 2499,
            "VillageName": "شبراطو "
          },
          {
            "Id": 2500,
            "VillageName": "شبراتنا "
          },
          {
            "Id": 2501,
            "VillageName": "سلامون الغبار "
          },
          {
            "Id": 2502,
            "VillageName": "حصة أبيار "
          },
          {
            "Id": 2503,
            "VillageName": "جناج "
          },
          {
            "Id": 2504,
            "VillageName": "بار الحمام "
          },
          {
            "Id": 2505,
            "VillageName": "القضابة "
          },
          {
            "Id": 2506,
            "VillageName": "الفرستق "
          },
          {
            "Id": 2507,
            "VillageName": "الحداد "
          },
          {
            "Id": 2508,
            "VillageName": "مدينة بسيون "
          }
        ],
        "name": "مركز بسيون"
      },
      {
        "id": 183,
        "villages": [
          {
            "Id": 2509,
            "VillageName": "منية ابيار "
          },
          {
            "Id": 2510,
            "VillageName": "منصورية الفراستق "
          },
          {
            "Id": 2511,
            "VillageName": "منشاة سليمان "
          },
          {
            "Id": 2512,
            "VillageName": "منشاة الكردى "
          },
          {
            "Id": 2513,
            "VillageName": "مشلة "
          },
          {
            "Id": 2514,
            "VillageName": "كفر المحروقي "
          },
          {
            "Id": 2515,
            "VillageName": "كفور بلشاي "
          },
          {
            "Id": 2516,
            "VillageName": "كفر يعقوب "
          },
          {
            "Id": 2517,
            "VillageName": "كفر مشلة "
          },
          {
            "Id": 2518,
            "VillageName": "كفر شماخ "
          },
          {
            "Id": 2519,
            "VillageName": "كفر ديما "
          },
          {
            "Id": 2520,
            "VillageName": "كفر حشاد "
          },
          {
            "Id": 2521,
            "VillageName": "كفر الهواشم "
          },
          {
            "Id": 2522,
            "VillageName": "كفر القصار "
          },
          {
            "Id": 2523,
            "VillageName": "كفر العرب "
          },
          {
            "Id": 2524,
            "VillageName": "كفر الشوربجي "
          },
          {
            "Id": 2525,
            "VillageName": "كفر الباجة "
          },
          {
            "Id": 2526,
            "VillageName": "كفر الاشقر "
          },
          {
            "Id": 2527,
            "VillageName": "كفر اخشا "
          },
          {
            "Id": 2528,
            "VillageName": "قليب ابيار "
          },
          {
            "Id": 2529,
            "VillageName": "قصر نصر الدين "
          },
          {
            "Id": 2530,
            "VillageName": "قصر بغداد "
          },
          {
            "Id": 2531,
            "VillageName": "قسطا "
          },
          {
            "Id": 2532,
            "VillageName": "شبرا ريس "
          },
          {
            "Id": 2533,
            "VillageName": "دلبشان "
          },
          {
            "Id": 2534,
            "VillageName": "دقرن "
          },
          {
            "Id": 2535,
            "VillageName": "حصة اكوه "
          },
          {
            "Id": 2536,
            "VillageName": "بنوفر "
          },
          {
            "Id": 2537,
            "VillageName": "محمد نجيب (النحارية سابقا) "
          },
          {
            "Id": 2538,
            "VillageName": "الطالبية "
          },
          {
            "Id": 2539,
            "VillageName": "الدلجمون "
          },
          {
            "Id": 2540,
            "VillageName": "أكوه الحصة "
          },
          {
            "Id": 2541,
            "VillageName": "اسديمة "
          },
          {
            "Id": 2542,
            "VillageName": "ابشاى "
          },
          {
            "Id": 2543,
            "VillageName": "ابيج "
          },
          {
            "Id": 2544,
            "VillageName": "ابيار "
          },
          {
            "Id": 2545,
            "VillageName": "أبو الغر "
          },
          {
            "Id": 2546,
            "VillageName": "مدينة كفر الزيات "
          }
        ],
        "name": "مركز كفر الزيات"
      },
      {
        "id": 184,
        "villages": [
          {
            "Id": 2547,
            "VillageName": "كفر عنان "
          },
          {
            "Id": 2548,
            "VillageName": "خليفة "
          },
          {
            "Id": 2549,
            "VillageName": "جعفر "
          },
          {
            "Id": 2550,
            "VillageName": "العزب "
          },
          {
            "Id": 2551,
            "VillageName": "الأقرع "
          },
          {
            "Id": 2552,
            "VillageName": "سعدة "
          }
        ],
        "name": "قسم زفتى"
      }
    ]
  },
  {
    "id": 17,
    "name": "المنوفيه",
    "centers": [
      {
        "id": 185,
        "villages": [
          {
            "Id": 2553,
            "VillageName": "ميت خاقان وحصتها "
          },
          {
            "Id": 2554,
            "VillageName": "كفر المصيلحة "
          },
          {
            "Id": 2555,
            "VillageName": "على محمد سليمة "
          },
          {
            "Id": 2556,
            "VillageName": "سيد أحمد حسن القط "
          },
          {
            "Id": 2557,
            "VillageName": "حسن حسن عامر القماش "
          },
          {
            "Id": 2558,
            "VillageName": "جودة موسى حبيب "
          }
        ],
        "name": "قسم شبين الكوم"
      },
      {
        "id": 186,
        "villages": [
          {
            "Id": 2559,
            "VillageName": "ميت موسى "
          },
          {
            "Id": 2560,
            "VillageName": "ميت مسعود "
          },
          {
            "Id": 2561,
            "VillageName": "ميت عافية "
          },
          {
            "Id": 2562,
            "VillageName": "ميت خلف "
          },
          {
            "Id": 2563,
            "VillageName": "ميت الموز "
          },
          {
            "Id": 2564,
            "VillageName": "منشاة شنوان "
          },
          {
            "Id": 2565,
            "VillageName": "منشاة بخاتى "
          },
          {
            "Id": 2566,
            "VillageName": "منشاة الشريكين "
          },
          {
            "Id": 2567,
            "VillageName": "مليج "
          },
          {
            "Id": 2568,
            "VillageName": "منشأة عصام(طوخ البراغتة سابقا) "
          },
          {
            "Id": 2569,
            "VillageName": "كفر طنبدى "
          },
          {
            "Id": 2570,
            "VillageName": "كفر شنوان "
          },
          {
            "Id": 2571,
            "VillageName": "كفر دقماق "
          },
          {
            "Id": 2572,
            "VillageName": "كفر العجايزة "
          },
          {
            "Id": 2573,
            "VillageName": "كفر الشيخ خليل "
          },
          {
            "Id": 2574,
            "VillageName": "كفر البتانون "
          },
          {
            "Id": 2575,
            "VillageName": "طنبدى "
          },
          {
            "Id": 2576,
            "VillageName": "شنوفة "
          },
          {
            "Id": 2577,
            "VillageName": "شنوان "
          },
          {
            "Id": 2578,
            "VillageName": "شبرا خلفون "
          },
          {
            "Id": 2579,
            "VillageName": "شبرا باص "
          },
          {
            "Id": 2580,
            "VillageName": "سلكة "
          },
          {
            "Id": 2581,
            "VillageName": "زوير "
          },
          {
            "Id": 2582,
            "VillageName": "دكما "
          },
          {
            "Id": 2583,
            "VillageName": "حصة مليج "
          },
          {
            "Id": 2584,
            "VillageName": "بخاتى "
          },
          {
            "Id": 2585,
            "VillageName": "بتبس "
          },
          {
            "Id": 2586,
            "VillageName": "المصيلحة "
          },
          {
            "Id": 2587,
            "VillageName": "الماى "
          },
          {
            "Id": 2588,
            "VillageName": "الكوم الأخضر "
          },
          {
            "Id": 2589,
            "VillageName": "العسالته "
          },
          {
            "Id": 2590,
            "VillageName": "السكرية "
          },
          {
            "Id": 2591,
            "VillageName": "الراهب "
          },
          {
            "Id": 2592,
            "VillageName": "الدلاتون "
          },
          {
            "Id": 2593,
            "VillageName": "البتانون "
          },
          {
            "Id": 2594,
            "VillageName": "إصطبارى "
          }
        ],
        "name": "مركز شبين الكوم"
      },
      {
        "id": 187,
        "villages": [
          {
            "Id": 2595,
            "VillageName": "نادر "
          },
          {
            "Id": 2596,
            "VillageName": "منشأة السادات "
          },
          {
            "Id": 2597,
            "VillageName": "كفر سرسموس "
          },
          {
            "Id": 2598,
            "VillageName": "كفر دنشواى "
          },
          {
            "Id": 2599,
            "VillageName": "كفر حجازى "
          },
          {
            "Id": 2600,
            "VillageName": "كفر الشبع "
          },
          {
            "Id": 2601,
            "VillageName": "كفر السوالمية "
          },
          {
            "Id": 2602,
            "VillageName": "كفر الجمالة "
          },
          {
            "Id": 2603,
            "VillageName": "كفر الجلابطه "
          },
          {
            "Id": 2604,
            "VillageName": "كفر عشما "
          },
          {
            "Id": 2605,
            "VillageName": "عمروس "
          },
          {
            "Id": 2606,
            "VillageName": "عشما "
          },
          {
            "Id": 2607,
            "VillageName": "شمياطس "
          },
          {
            "Id": 2608,
            "VillageName": "سلامون قبلى "
          },
          {
            "Id": 2609,
            "VillageName": "سلامون بحرى "
          },
          {
            "Id": 2610,
            "VillageName": "سرسموس "
          },
          {
            "Id": 2611,
            "VillageName": "ساحل الجوابر "
          },
          {
            "Id": 2612,
            "VillageName": "زاوية الناعورة "
          },
          {
            "Id": 2613,
            "VillageName": "زاوية البقلى "
          },
          {
            "Id": 2614,
            "VillageName": "دنشواى "
          },
          {
            "Id": 2615,
            "VillageName": "دناصور "
          },
          {
            "Id": 2616,
            "VillageName": "دراجيل "
          },
          {
            "Id": 2617,
            "VillageName": "جزيرة الحجر "
          },
          {
            "Id": 2618,
            "VillageName": "بشتامى "
          },
          {
            "Id": 2619,
            "VillageName": "العراقية "
          },
          {
            "Id": 2620,
            "VillageName": "أبو كلس "
          },
          {
            "Id": 2621,
            "VillageName": "أبشادى "
          },
          {
            "Id": 2622,
            "VillageName": "مدينة الشهداء "
          }
        ],
        "name": "مركز الشهداء"
      },
      {
        "id": 188,
        "villages": [
          {
            "Id": 2623,
            "VillageName": "كفر حمام "
          },
          {
            "Id": 2624,
            "VillageName": "منشأة محمد "
          },
          {
            "Id": 2625,
            "VillageName": "منشأة السلام "
          },
          {
            "Id": 2626,
            "VillageName": "ميت الكرام "
          },
          {
            "Id": 2627,
            "VillageName": "ميت أبو الكوم "
          },
          {
            "Id": 2628,
            "VillageName": "منشية طوخ دلكة "
          },
          {
            "Id": 2629,
            "VillageName": "كوم مازن "
          },
          {
            "Id": 2630,
            "VillageName": "كوم الشيخ عبيد "
          },
          {
            "Id": 2631,
            "VillageName": "كمشيش "
          },
          {
            "Id": 2632,
            "VillageName": "كفر ميت أبو الكوم "
          },
          {
            "Id": 2633,
            "VillageName": "كفر قرشوم "
          },
          {
            "Id": 2634,
            "VillageName": "كفر عسكر "
          },
          {
            "Id": 2635,
            "VillageName": "كفر طبلوها "
          },
          {
            "Id": 2636,
            "VillageName": "كفر صناديد "
          },
          {
            "Id": 2637,
            "VillageName": "كفر سماليج "
          },
          {
            "Id": 2638,
            "VillageName": "كفر زرقان "
          },
          {
            "Id": 2639,
            "VillageName": "كفر ربيع "
          },
          {
            "Id": 2640,
            "VillageName": "كفر جنزور "
          },
          {
            "Id": 2641,
            "VillageName": "كفر بتبس "
          },
          {
            "Id": 2642,
            "VillageName": "كفر القلشى "
          },
          {
            "Id": 2643,
            "VillageName": "كفر العلوى "
          },
          {
            "Id": 2644,
            "VillageName": "كفر العرب البحرى "
          },
          {
            "Id": 2645,
            "VillageName": "كفر الشيخ شحاته "
          },
          {
            "Id": 2646,
            "VillageName": "كفر الشرفا الغربى "
          },
          {
            "Id": 2647,
            "VillageName": "كفر السكرية "
          },
          {
            "Id": 2648,
            "VillageName": "كفر السادات "
          },
          {
            "Id": 2649,
            "VillageName": "قشطوخ "
          },
          {
            "Id": 2650,
            "VillageName": "طوخ دلكة "
          },
          {
            "Id": 2651,
            "VillageName": "طنوب "
          },
          {
            "Id": 2652,
            "VillageName": "طبلوها "
          },
          {
            "Id": 2653,
            "VillageName": "صفط جدام "
          },
          {
            "Id": 2654,
            "VillageName": "شبرا بتوش "
          },
          {
            "Id": 2655,
            "VillageName": "سماليج "
          },
          {
            "Id": 2656,
            "VillageName": "زنارة "
          },
          {
            "Id": 2657,
            "VillageName": "زرقان "
          },
          {
            "Id": 2658,
            "VillageName": "زاوية بمم "
          },
          {
            "Id": 2659,
            "VillageName": "جدام "
          },
          {
            "Id": 2660,
            "VillageName": "بمم "
          },
          {
            "Id": 2661,
            "VillageName": "بروى "
          },
          {
            "Id": 2662,
            "VillageName": "بابل "
          },
          {
            "Id": 2663,
            "VillageName": "الكمايشة "
          },
          {
            "Id": 2664,
            "VillageName": "القلشى "
          },
          {
            "Id": 2665,
            "VillageName": "البندارية "
          },
          {
            "Id": 2666,
            "VillageName": "مدينة تلا "
          }
        ],
        "name": "مركز تــلا"
      },
      {
        "id": 189,
        "villages": [
          {
            "Id": 2667,
            "VillageName": "هورين "
          },
          {
            "Id": 2668,
            "VillageName": "ميت فارس "
          },
          {
            "Id": 2669,
            "VillageName": "ميت أم صالح "
          },
          {
            "Id": 2670,
            "VillageName": "منشاة الرافعى "
          },
          {
            "Id": 2671,
            "VillageName": "كفر هلال "
          },
          {
            "Id": 2672,
            "VillageName": "كفر هورين "
          },
          {
            "Id": 2673,
            "VillageName": "كفر نفرة البحرى "
          },
          {
            "Id": 2674,
            "VillageName": "كفر مليج "
          },
          {
            "Id": 2675,
            "VillageName": "كفر عليم "
          },
          {
            "Id": 2676,
            "VillageName": "كفر الشيخ طعيمة "
          },
          {
            "Id": 2677,
            "VillageName": "كفر الحمادية "
          },
          {
            "Id": 2678,
            "VillageName": "طوخ طنبشا "
          },
          {
            "Id": 2679,
            "VillageName": "طنبشا "
          },
          {
            "Id": 2680,
            "VillageName": "شنتنا الحجر "
          },
          {
            "Id": 2681,
            "VillageName": "جنزور "
          },
          {
            "Id": 2682,
            "VillageName": "الغورى "
          },
          {
            "Id": 2683,
            "VillageName": "الشهيد فكرى "
          },
          {
            "Id": 2684,
            "VillageName": "الروضة "
          },
          {
            "Id": 2685,
            "VillageName": "الدبايبة "
          },
          {
            "Id": 2686,
            "VillageName": "الحلامشة "
          },
          {
            "Id": 2687,
            "VillageName": "أبو مشهور "
          },
          {
            "Id": 2688,
            "VillageName": "مدينة بركة السبع "
          }
        ],
        "name": "مركز بركة السبع"
      },
      {
        "id": 190,
        "villages": [
          {
            "Id": 2689,
            "VillageName": "منشية العرب "
          },
          {
            "Id": 2690,
            "VillageName": "ميت سراج "
          },
          {
            "Id": 2691,
            "VillageName": "ميت بره "
          },
          {
            "Id": 2692,
            "VillageName": "ميت القصرى "
          },
          {
            "Id": 2693,
            "VillageName": "ميت العز "
          },
          {
            "Id": 2694,
            "VillageName": "ميت العبسى "
          },
          {
            "Id": 2695,
            "VillageName": "ميت أبو شيخة "
          },
          {
            "Id": 2696,
            "VillageName": "منشاة دملو "
          },
          {
            "Id": 2697,
            "VillageName": "منشأة الشهيد عبد المنعم رياض "
          },
          {
            "Id": 2698,
            "VillageName": "منشاة أم خنان "
          },
          {
            "Id": 2699,
            "VillageName": "منشاة أبو ذكرى "
          },
          {
            "Id": 2700,
            "VillageName": "مصطاى "
          },
          {
            "Id": 2701,
            "VillageName": "كفور الرمل "
          },
          {
            "Id": 2702,
            "VillageName": "كفر وهب "
          },
          {
            "Id": 2703,
            "VillageName": "كفر ميت سراج "
          },
          {
            "Id": 2704,
            "VillageName": "كفر ميت العبسى "
          },
          {
            "Id": 2705,
            "VillageName": "كفر عبده "
          },
          {
            "Id": 2706,
            "VillageName": "كفر طه شبرا "
          },
          {
            "Id": 2707,
            "VillageName": "كفر زين الدين "
          },
          {
            "Id": 2708,
            "VillageName": "كفر بنى غريان "
          },
          {
            "Id": 2709,
            "VillageName": "كفر المنشى القبلى "
          },
          {
            "Id": 2710,
            "VillageName": "كفر العرب القبلى "
          },
          {
            "Id": 2711,
            "VillageName": "كفر الشيخ إبراهيم "
          },
          {
            "Id": 2712,
            "VillageName": "كفر السلامية "
          },
          {
            "Id": 2713,
            "VillageName": "كفر الأكرم "
          },
          {
            "Id": 2714,
            "VillageName": "كفر اشليم "
          },
          {
            "Id": 2715,
            "VillageName": "كفر أبو الحسن "
          },
          {
            "Id": 2716,
            "VillageName": "كفر ابنهس "
          },
          {
            "Id": 2717,
            "VillageName": "كفر ابشيش "
          },
          {
            "Id": 2718,
            "VillageName": "قويسنا البلد "
          },
          {
            "Id": 2719,
            "VillageName": "عرب الرمل "
          },
          {
            "Id": 2720,
            "VillageName": "طه شبرا "
          },
          {
            "Id": 2721,
            "VillageName": "شمنديل "
          },
          {
            "Id": 2722,
            "VillageName": "شرانيس "
          },
          {
            "Id": 2723,
            "VillageName": "شبرا قبالة "
          },
          {
            "Id": 2724,
            "VillageName": "شبرا بخوم "
          },
          {
            "Id": 2725,
            "VillageName": "دمهوج "
          },
          {
            "Id": 2726,
            "VillageName": "بنى غريان "
          },
          {
            "Id": 2727,
            "VillageName": "بقسا "
          },
          {
            "Id": 2728,
            "VillageName": "بره العجوز "
          },
          {
            "Id": 2729,
            "VillageName": "بجيرم "
          },
          {
            "Id": 2730,
            "VillageName": "أم خنان "
          },
          {
            "Id": 2731,
            "VillageName": "العجايزة "
          },
          {
            "Id": 2732,
            "VillageName": "الرمالى "
          },
          {
            "Id": 2733,
            "VillageName": "اشليم "
          },
          {
            "Id": 2734,
            "VillageName": "أجهور الرمل "
          },
          {
            "Id": 2735,
            "VillageName": "ابنهس "
          },
          {
            "Id": 2736,
            "VillageName": "مدينة قويسنا "
          }
        ],
        "name": "مركز قويسنا"
      },
      {
        "id": 191,
        "villages": [
          {
            "Id": 2737,
            "VillageName": "ميت عفيف "
          },
          {
            "Id": 2738,
            "VillageName": "ميت الوسطى "
          },
          {
            "Id": 2739,
            "VillageName": "ميت البيضة "
          },
          {
            "Id": 2740,
            "VillageName": "منشاة مسجد الخضر "
          },
          {
            "Id": 2741,
            "VillageName": "منشاة سيف "
          },
          {
            "Id": 2742,
            "VillageName": "مناوهلة "
          },
          {
            "Id": 2743,
            "VillageName": "مشيرف "
          },
          {
            "Id": 2744,
            "VillageName": "مسجد الخضر "
          },
          {
            "Id": 2745,
            "VillageName": "كوم الضبع "
          },
          {
            "Id": 2746,
            "VillageName": "كفر مناوهلة "
          },
          {
            "Id": 2747,
            "VillageName": "كفر محمود "
          },
          {
            "Id": 2748,
            "VillageName": "كفر شبرا زنجى "
          },
          {
            "Id": 2749,
            "VillageName": "كفر سنجلف القديم "
          },
          {
            "Id": 2750,
            "VillageName": "كفر سنجلف الجديد "
          },
          {
            "Id": 2751,
            "VillageName": "كفر سبك "
          },
          {
            "Id": 2752,
            "VillageName": "كفر القرينين "
          },
          {
            "Id": 2753,
            "VillageName": "كفر الغنامية "
          },
          {
            "Id": 2754,
            "VillageName": "كفر الدوار "
          },
          {
            "Id": 2755,
            "VillageName": "كفر الخضرة "
          },
          {
            "Id": 2756,
            "VillageName": "كفر الباجور "
          },
          {
            "Id": 2757,
            "VillageName": "قلتى الكبرى "
          },
          {
            "Id": 2758,
            "VillageName": "فيشا الصغرى "
          },
          {
            "Id": 2759,
            "VillageName": "شبرا زنجى "
          },
          {
            "Id": 2760,
            "VillageName": "سنجلف "
          },
          {
            "Id": 2761,
            "VillageName": "سمان "
          },
          {
            "Id": 2762,
            "VillageName": "سبك الضحاك "
          },
          {
            "Id": 2763,
            "VillageName": "زاوية جروان "
          },
          {
            "Id": 2764,
            "VillageName": "جروان "
          },
          {
            "Id": 2765,
            "VillageName": "تلوانة "
          },
          {
            "Id": 2766,
            "VillageName": "تلبنت أبشيش "
          },
          {
            "Id": 2767,
            "VillageName": "بير شمس "
          },
          {
            "Id": 2768,
            "VillageName": "بى العرب "
          },
          {
            "Id": 2769,
            "VillageName": "بهناى "
          },
          {
            "Id": 2770,
            "VillageName": "المنشاة الجديدة "
          },
          {
            "Id": 2771,
            "VillageName": "المقاطع "
          },
          {
            "Id": 2772,
            "VillageName": "الكتامية "
          },
          {
            "Id": 2773,
            "VillageName": "القرينين "
          },
          {
            "Id": 2774,
            "VillageName": "العطف "
          },
          {
            "Id": 2775,
            "VillageName": "الخضرة(قلتى الصغرى سابقا) "
          },
          {
            "Id": 2776,
            "VillageName": "الجزيرة الشرقية "
          },
          {
            "Id": 2777,
            "VillageName": "البرانقة "
          },
          {
            "Id": 2778,
            "VillageName": "الأطارشة "
          },
          {
            "Id": 2779,
            "VillageName": "أسطنها "
          },
          {
            "Id": 2780,
            "VillageName": "أسريجة "
          },
          {
            "Id": 2781,
            "VillageName": "أبو سنيطة "
          },
          {
            "Id": 2782,
            "VillageName": "أبشيش "
          },
          {
            "Id": 2783,
            "VillageName": "أبخاص "
          },
          {
            "Id": 2784,
            "VillageName": "مدينة الباجور "
          }
        ],
        "name": "مركز الباجور"
      },
      {
        "id": 192,
        "villages": [
          {
            "Id": 2785,
            "VillageName": "مونسة و عزبتها "
          },
          {
            "Id": 2786,
            "VillageName": "منيل عروس "
          },
          {
            "Id": 2787,
            "VillageName": "منيل دويب ومنشاتها "
          },
          {
            "Id": 2788,
            "VillageName": "منيل جويدة "
          },
          {
            "Id": 2789,
            "VillageName": "منشاة جريس "
          },
          {
            "Id": 2790,
            "VillageName": "محلة سبك "
          },
          {
            "Id": 2791,
            "VillageName": "مجرية وكفر مجاهد "
          },
          {
            "Id": 2792,
            "VillageName": "لبيشة وحصتها "
          },
          {
            "Id": 2793,
            "VillageName": "كوم عياد "
          },
          {
            "Id": 2794,
            "VillageName": "كفر منصور "
          },
          {
            "Id": 2795,
            "VillageName": "كفر عون "
          },
          {
            "Id": 2796,
            "VillageName": "كفر قورص "
          },
          {
            "Id": 2797,
            "VillageName": "كفر صراوه "
          },
          {
            "Id": 2798,
            "VillageName": "كفر الفرعونية "
          },
          {
            "Id": 2799,
            "VillageName": "كفر الغريب "
          },
          {
            "Id": 2800,
            "VillageName": "كفر الطراينة "
          },
          {
            "Id": 2801,
            "VillageName": "كفر السيد "
          },
          {
            "Id": 2802,
            "VillageName": "كفر الحما "
          },
          {
            "Id": 2803,
            "VillageName": "كفر أبو محمود "
          },
          {
            "Id": 2804,
            "VillageName": "كفر ابو رقبة "
          },
          {
            "Id": 2805,
            "VillageName": "قورص "
          },
          {
            "Id": 2806,
            "VillageName": "طهواى "
          },
          {
            "Id": 2807,
            "VillageName": "طليا "
          },
          {
            "Id": 2808,
            "VillageName": "صراوه "
          },
          {
            "Id": 2809,
            "VillageName": "شوشاى "
          },
          {
            "Id": 2810,
            "VillageName": "شنواى "
          },
          {
            "Id": 2811,
            "VillageName": "شنشور "
          },
          {
            "Id": 2812,
            "VillageName": "شما "
          },
          {
            "Id": 2813,
            "VillageName": "شعشاع "
          },
          {
            "Id": 2814,
            "VillageName": "شطانوف "
          },
          {
            "Id": 2815,
            "VillageName": "سهواج "
          },
          {
            "Id": 2816,
            "VillageName": "سنتريس "
          },
          {
            "Id": 2817,
            "VillageName": "سملاى "
          },
          {
            "Id": 2818,
            "VillageName": "سمادون "
          },
          {
            "Id": 2819,
            "VillageName": "سبك الأحد "
          },
          {
            "Id": 2820,
            "VillageName": "ساقية المنقدى "
          },
          {
            "Id": 2821,
            "VillageName": "ساقية ابو شعرة "
          },
          {
            "Id": 2822,
            "VillageName": "رملة الأنجب "
          },
          {
            "Id": 2823,
            "VillageName": "دلهمو "
          },
          {
            "Id": 2824,
            "VillageName": "دروة "
          },
          {
            "Id": 2825,
            "VillageName": "جريس "
          },
          {
            "Id": 2826,
            "VillageName": "بوهة شطانوف "
          },
          {
            "Id": 2827,
            "VillageName": "براشيم "
          },
          {
            "Id": 2828,
            "VillageName": "النعناعية "
          },
          {
            "Id": 2829,
            "VillageName": "الكوادى "
          },
          {
            "Id": 2830,
            "VillageName": "القناطرين "
          },
          {
            "Id": 2831,
            "VillageName": "الفرعونية "
          },
          {
            "Id": 2832,
            "VillageName": "الغنامية "
          },
          {
            "Id": 2833,
            "VillageName": "الخور "
          },
          {
            "Id": 2834,
            "VillageName": "الحلواصى "
          },
          {
            "Id": 2835,
            "VillageName": "البرانية "
          },
          {
            "Id": 2836,
            "VillageName": "الأنجب "
          },
          {
            "Id": 2837,
            "VillageName": "أبو عوالى ومنشاتها "
          },
          {
            "Id": 2838,
            "VillageName": "أبو رقبة "
          },
          {
            "Id": 2839,
            "VillageName": "مدينة أشمون "
          }
        ],
        "name": "مركز أشمون"
      },
      {
        "id": 193,
        "villages": [
          {
            "Id": 2840,
            "VillageName": "مدينة سرس الليان "
          }
        ],
        "name": "قسم سرس الليان"
      },
      {
        "id": 194,
        "villages": [
          {
            "Id": 2841,
            "VillageName": "مدينة منوف "
          }
        ],
        "name": "قسم مدينة منوف"
      },
      {
        "id": 195,
        "villages": [
          {
            "Id": 2842,
            "VillageName": "هيت "
          },
          {
            "Id": 2843,
            "VillageName": "ميت ربيعة "
          },
          {
            "Id": 2844,
            "VillageName": "منشاة غمرين "
          },
          {
            "Id": 2845,
            "VillageName": "منشاة سلطان "
          },
          {
            "Id": 2846,
            "VillageName": "كمشوش "
          },
          {
            "Id": 2847,
            "VillageName": "كفر فيشا الكبرى "
          },
          {
            "Id": 2848,
            "VillageName": "كفر شبرا بلولة "
          },
          {
            "Id": 2849,
            "VillageName": "كفر رماح "
          },
          {
            "Id": 2850,
            "VillageName": "كفر بالمشط "
          },
          {
            "Id": 2851,
            "VillageName": "كفر العامرة "
          },
          {
            "Id": 2852,
            "VillageName": "كفر السنابسة وعزبتها"
          },
          {
            "Id": 2853,
            "VillageName": "فيشا الكبرى "
          },
          {
            "Id": 2854,
            "VillageName": "غمرين "
          },
          {
            "Id": 2855,
            "VillageName": "طملاى "
          },
          {
            "Id": 2856,
            "VillageName": "صنصفط "
          },
          {
            "Id": 2857,
            "VillageName": "شبشير طملاى "
          },
          {
            "Id": 2858,
            "VillageName": "شبرا بلولة "
          },
          {
            "Id": 2859,
            "VillageName": "سنجرج "
          },
          {
            "Id": 2860,
            "VillageName": "سروهيت "
          },
          {
            "Id": 2861,
            "VillageName": "سدود "
          },
          {
            "Id": 2862,
            "VillageName": "زاوية رزين "
          },
          {
            "Id": 2863,
            "VillageName": "دمليج "
          },
          {
            "Id": 2864,
            "VillageName": "دبركى "
          },
          {
            "Id": 2865,
            "VillageName": "جزى "
          },
          {
            "Id": 2866,
            "VillageName": "تتا "
          },
          {
            "Id": 2867,
            "VillageName": "بهواش "
          },
          {
            "Id": 2868,
            "VillageName": "برهيم ومنشاة سدود "
          },
          {
            "Id": 2869,
            "VillageName": "بلمشط "
          },
          {
            "Id": 2870,
            "VillageName": "الكوم الأحمر "
          },
          {
            "Id": 2871,
            "VillageName": "العامرة "
          },
          {
            "Id": 2872,
            "VillageName": "الحامول "
          }
        ],
        "name": "مركز منوف"
      },
      {
        "id": 196,
        "villages": [
          {
            "Id": 2873,
            "VillageName": "الخطاطبة المحطة "
          },
          {
            "Id": 2874,
            "VillageName": "السلام "
          },
          {
            "Id": 2875,
            "VillageName": "الجيار "
          },
          {
            "Id": 2876,
            "VillageName": "منشأة سرورى "
          },
          {
            "Id": 2877,
            "VillageName": "كفر داود "
          },
          {
            "Id": 2878,
            "VillageName": "عزبة الطرانة "
          },
          {
            "Id": 2879,
            "VillageName": "الأخماس "
          },
          {
            "Id": 2880,
            "VillageName": "أبو نشابة "
          },
          {
            "Id": 2881,
            "VillageName": "الطرانه "
          },
          {
            "Id": 2882,
            "VillageName": "الخطاطبة "
          },
          {
            "Id": 2883,
            "VillageName": "مـــدينة السادات* وتشمل عدنان مدنى "
          }
        ],
        "name": "مركز ومدينة السادات"
      }
    ]
  },
  {
    "id": 18,
    "name": "البحيره",
    "centers": [
      {
        "id": 197,
        "villages": [
          {
            "Id": 2884,
            "VillageName": "نقرها "
          },
          {
            "Id": 2885,
            "VillageName": "قرطسا "
          },
          {
            "Id": 2886,
            "VillageName": "طاموس "
          },
          {
            "Id": 2887,
            "VillageName": "شبرا "
          },
          {
            "Id": 2888,
            "VillageName": "سكنيده "
          }
        ],
        "name": "قسم دمنهور"
      },
      {
        "id": 198,
        "villages": [
          {
            "Id": 2889,
            "VillageName": "نــديبة "
          },
          {
            "Id": 2890,
            "VillageName": "منية عطية "
          },
          {
            "Id": 2891,
            "VillageName": "منية بنى موسى "
          },
          {
            "Id": 2892,
            "VillageName": "منشية الأوقاف "
          },
          {
            "Id": 2893,
            "VillageName": "منشاة نصار "
          },
          {
            "Id": 2894,
            "VillageName": "منشاة محمد الوكيل "
          },
          {
            "Id": 2895,
            "VillageName": "منشاة غربال "
          },
          {
            "Id": 2896,
            "VillageName": "منشاة سعيد ( طوسون )"
          },
          {
            "Id": 2897,
            "VillageName": "منشاة راغب "
          },
          {
            "Id": 2898,
            "VillageName": "منشاة حمور "
          },
          {
            "Id": 2899,
            "VillageName": "منشاة المطران "
          },
          {
            "Id": 2900,
            "VillageName": "منشاة الخزان "
          },
          {
            "Id": 2901,
            "VillageName": "منشأة الحبشى "
          },
          {
            "Id": 2902,
            "VillageName": "كفر سنطيس "
          },
          {
            "Id": 2903,
            "VillageName": "كفر بنى هلال "
          },
          {
            "Id": 2904,
            "VillageName": "كفر الحمايدة "
          },
          {
            "Id": 2905,
            "VillageName": "قراقص "
          },
          {
            "Id": 2906,
            "VillageName": "قابيل "
          },
          {
            "Id": 2907,
            "VillageName": "عزبة محمد عوض "
          },
          {
            "Id": 2908,
            "VillageName": "عزبة طرابنبا (دريك )"
          },
          {
            "Id": 2909,
            "VillageName": "عزبة سليم "
          },
          {
            "Id": 2910,
            "VillageName": "عزبة حسين عمرو "
          },
          {
            "Id": 2911,
            "VillageName": "عزبة بسطرة "
          },
          {
            "Id": 2912,
            "VillageName": "بدر الدين "
          },
          {
            "Id": 2913,
            "VillageName": "عزبة السلانكلى "
          },
          {
            "Id": 2914,
            "VillageName": "عزبة السرو "
          },
          {
            "Id": 2915,
            "VillageName": "عزبة الدرويش "
          },
          {
            "Id": 2916,
            "VillageName": "عزبة الأبريقجى "
          },
          {
            "Id": 2917,
            "VillageName": "عزب نقرها "
          },
          {
            "Id": 2918,
            "VillageName": "عزب قرطسا وطاموس "
          },
          {
            "Id": 2919,
            "VillageName": "عزب قابيل "
          },
          {
            "Id": 2920,
            "VillageName": "عزب شبرا "
          },
          {
            "Id": 2921,
            "VillageName": "عزب سكنيده "
          },
          {
            "Id": 2922,
            "VillageName": "عزب الأوقاف "
          },
          {
            "Id": 2923,
            "VillageName": "طرابنبا "
          },
          {
            "Id": 2924,
            "VillageName": "شرنوب "
          },
          {
            "Id": 2925,
            "VillageName": "سنهور "
          },
          {
            "Id": 2926,
            "VillageName": "سنطيس "
          },
          {
            "Id": 2927,
            "VillageName": "زهرة القبلية "
          },
          {
            "Id": 2928,
            "VillageName": "زهرة البحرية "
          },
          {
            "Id": 2929,
            "VillageName": "زرقون "
          },
          {
            "Id": 2930,
            "VillageName": "زاوية غزال "
          },
          {
            "Id": 2931,
            "VillageName": "دنشال "
          },
          {
            "Id": 2932,
            "VillageName": "دسونس أم دينار "
          },
          {
            "Id": 2933,
            "VillageName": "حفص "
          },
          {
            "Id": 2934,
            "VillageName": "بسطرة "
          },
          {
            "Id": 2935,
            "VillageName": "المنشية الإبراهيمية "
          },
          {
            "Id": 2936,
            "VillageName": "المخايض "
          },
          {
            "Id": 2937,
            "VillageName": "العوجا "
          },
          {
            "Id": 2938,
            "VillageName": "العمرية "
          },
          {
            "Id": 2939,
            "VillageName": "الصفاصيف "
          },
          {
            "Id": 2940,
            "VillageName": "الشوكة "
          },
          {
            "Id": 2941,
            "VillageName": "الحمامية "
          },
          {
            "Id": 2942,
            "VillageName": "البساتين "
          },
          {
            "Id": 2943,
            "VillageName": "البرنوجى "
          },
          {
            "Id": 2944,
            "VillageName": "أفلاقه "
          },
          {
            "Id": 2945,
            "VillageName": "الأبعدية الجديدة (البادية دمنهور ) "
          }
        ],
        "name": "مركز دمنهور"
      },
      {
        "id": 199,
        "villages": [
          {
            "Id": 2946,
            "VillageName": "عبدالمنعم رياض * "
          },
          {
            "Id": 2947,
            "VillageName": "عباس العقاد * "
          },
          {
            "Id": 2948,
            "VillageName": "محمد رفعت * "
          },
          {
            "Id": 2949,
            "VillageName": "توفيق الحكيم * "
          },
          {
            "Id": 2950,
            "VillageName": "نجيب محفوظ * "
          },
          {
            "Id": 2951,
            "VillageName": "الشعراوى * "
          },
          {
            "Id": 2952,
            "VillageName": "على بن أبى طالب * "
          },
          {
            "Id": 2953,
            "VillageName": "الشعشاعى * "
          },
          {
            "Id": 2954,
            "VillageName": "منشاة خياط "
          },
          {
            "Id": 2955,
            "VillageName": "كفر الواق "
          },
          {
            "Id": 2956,
            "VillageName": "شلتوت ( عزب حوش عيسي ) "
          },
          {
            "Id": 2957,
            "VillageName": "حرارة "
          },
          {
            "Id": 2958,
            "VillageName": "الكوم الأخضر "
          },
          {
            "Id": 2959,
            "VillageName": "الكردود "
          },
          {
            "Id": 2960,
            "VillageName": "القرنين "
          },
          {
            "Id": 2961,
            "VillageName": "الستمائة "
          },
          {
            "Id": 2962,
            "VillageName": "الرزيمات "
          },
          {
            "Id": 2963,
            "VillageName": "الحرفة(صالح الدمينى سابقا) "
          },
          {
            "Id": 2964,
            "VillageName": "الأبقعين "
          },
          {
            "Id": 2965,
            "VillageName": "ابو الشقاف "
          },
          {
            "Id": 2966,
            "VillageName": "مدينة حوش عيسى "
          }
        ],
        "name": "مركز حوش عيسى"
      },
      {
        "id": 200,
        "villages": [
          {
            "Id": 2967,
            "VillageName": "ك3 * "
          },
          {
            "Id": 2968,
            "VillageName": "المثلث * "
          },
          {
            "Id": 2969,
            "VillageName": "العزة * "
          },
          {
            "Id": 2970,
            "VillageName": "أولى ناصر * "
          },
          {
            "Id": 2971,
            "VillageName": "الثامنة * "
          },
          {
            "Id": 2972,
            "VillageName": "الرابعة * "
          },
          {
            "Id": 2973,
            "VillageName": "السادسة * "
          },
          {
            "Id": 2974,
            "VillageName": "الخامسة * "
          },
          {
            "Id": 2975,
            "VillageName": "الدواجن 1و2و3(وشهرتها مساكن الدواجن والنجوع) "
          },
          {
            "Id": 2976,
            "VillageName": "الشهيد فؤاد عويس(وشهرتهاالحادبة عشر) "
          },
          {
            "Id": 2977,
            "VillageName": "الشهيد محمد صباح (وشهرتها العاشرة والمزرعة الثانية بذور ) "
          },
          {
            "Id": 2978,
            "VillageName": "الشهيد أسعد خير (وشهرتها التاسعة بذور ) "
          },
          {
            "Id": 2979,
            "VillageName": "الشهيد محمد فرج ( وشهرتها السابعة بذور وحسن علام) "
          },
          {
            "Id": 2980,
            "VillageName": "الشهيد رزق درويش - وشهرتها السادسة بذور وكوم أمبو "
          },
          {
            "Id": 2981,
            "VillageName": "الشهيد محمد عبد المولى وشهرتها الخامسة بذور "
          },
          {
            "Id": 2982,
            "VillageName": "الناصر "
          },
          {
            "Id": 2983,
            "VillageName": "المهدى "
          },
          {
            "Id": 2984,
            "VillageName": "الكفاح "
          },
          {
            "Id": 2985,
            "VillageName": "القاهرة "
          },
          {
            "Id": 2986,
            "VillageName": "العزيمة "
          },
          {
            "Id": 2987,
            "VillageName": "الصفا "
          },
          {
            "Id": 2988,
            "VillageName": "الشيخ محمد متولى الشعراوى "
          },
          {
            "Id": 2989,
            "VillageName": "السلام "
          },
          {
            "Id": 2990,
            "VillageName": "الرخا "
          },
          {
            "Id": 2991,
            "VillageName": "الحويحى "
          },
          {
            "Id": 2992,
            "VillageName": "الحرية "
          },
          {
            "Id": 2993,
            "VillageName": "الإيمان "
          },
          {
            "Id": 2994,
            "VillageName": "الأمـــل "
          },
          {
            "Id": 2995,
            "VillageName": "منشأة علوبة شمال التحرير والعشرة الاف ( القطاع الشمالى سابقا) "
          },
          {
            "Id": 2996,
            "VillageName": "منشاة جناكليس "
          },
          {
            "Id": 2997,
            "VillageName": "منشاة ثروت "
          },
          {
            "Id": 2998,
            "VillageName": "كوم حفين "
          },
          {
            "Id": 2999,
            "VillageName": "كوم القدح "
          },
          {
            "Id": 3000,
            "VillageName": "كوم الفرج "
          },
          {
            "Id": 3001,
            "VillageName": "زاوية صقر "
          },
          {
            "Id": 3002,
            "VillageName": "زاوية سالم "
          },
          {
            "Id": 3003,
            "VillageName": "تروجى "
          },
          {
            "Id": 3004,
            "VillageName": "الياسينية "
          },
          {
            "Id": 3005,
            "VillageName": "النمرية "
          },
          {
            "Id": 3006,
            "VillageName": "النجيلى وأولاد الشيخ"
          },
          {
            "Id": 3007,
            "VillageName": "المهديه "
          },
          {
            "Id": 3008,
            "VillageName": "الغيته "
          },
          {
            "Id": 3009,
            "VillageName": "أبو المطامير البحرية"
          },
          {
            "Id": 3010,
            "VillageName": "مدينة أبو المطامير "
          }
        ],
        "name": "مركز أبو المطامير"
      },
      {
        "id": 201,
        "villages": [
          {
            "Id": 3011,
            "VillageName": "منشاة الأوقاف "
          },
          {
            "Id": 3012,
            "VillageName": "كفر سليم "
          },
          {
            "Id": 3013,
            "VillageName": "بردلة "
          },
          {
            "Id": 3014,
            "VillageName": "العكريشة "
          },
          {
            "Id": 3015,
            "VillageName": "السعرانية "
          },
          {
            "Id": 3016,
            "VillageName": "مدينة كفرالدوار "
          }
        ],
        "name": "قسم كفر الدوار"
      },
      {
        "id": 202,
        "villages": [
          {
            "Id": 3017,
            "VillageName": "أبو النوم وتوابعها "
          },
          {
            "Id": 3018,
            "VillageName": "الحاجر وتوابعها "
          },
          {
            "Id": 3019,
            "VillageName": "أبيس السادسة وتوابعها "
          },
          {
            "Id": 3020,
            "VillageName": "أبيس الخامسة وتوابعها "
          },
          {
            "Id": 3021,
            "VillageName": "أبيس الرابعة وتوابعها "
          },
          {
            "Id": 3022,
            "VillageName": "أبيس الثالثة وتوابعها "
          },
          {
            "Id": 3023,
            "VillageName": "منشاة يونس "
          },
          {
            "Id": 3024,
            "VillageName": "منشاة عامر "
          },
          {
            "Id": 3025,
            "VillageName": "منشاة بولين ( منشأة بلبع ومنشأة بولين سابقا ) "
          },
          {
            "Id": 3026,
            "VillageName": "منشاة بسيونى "
          },
          {
            "Id": 3027,
            "VillageName": "منشاة الهلباوى "
          },
          {
            "Id": 3028,
            "VillageName": "معمل القزاز "
          },
          {
            "Id": 3029,
            "VillageName": "لوقين "
          },
          {
            "Id": 3030,
            "VillageName": "كوم دفشو "
          },
          {
            "Id": 3031,
            "VillageName": "كوم الطرفاية "
          },
          {
            "Id": 3032,
            "VillageName": "كوم البركة "
          },
          {
            "Id": 3033,
            "VillageName": "كوم أشو "
          },
          {
            "Id": 3034,
            "VillageName": "كنج عثمان "
          },
          {
            "Id": 3035,
            "VillageName": "قومبانية لوقين "
          },
          {
            "Id": 3036,
            "VillageName": "قومبانية أبو قير "
          },
          {
            "Id": 3037,
            "VillageName": "عزب دفشو "
          },
          {
            "Id": 3038,
            "VillageName": "صيرة "
          },
          {
            "Id": 3039,
            "VillageName": "سيدى غازى "
          },
          {
            "Id": 3040,
            "VillageName": "زهرة "
          },
          {
            "Id": 3041,
            "VillageName": "الوسطانية "
          },
          {
            "Id": 3042,
            "VillageName": "النشو البحرى "
          },
          {
            "Id": 3043,
            "VillageName": "الملقة "
          },
          {
            "Id": 3044,
            "VillageName": "الكنايس "
          },
          {
            "Id": 3045,
            "VillageName": "الكريون "
          },
          {
            "Id": 3046,
            "VillageName": "العرقوب "
          },
          {
            "Id": 3047,
            "VillageName": "العالى "
          },
          {
            "Id": 3048,
            "VillageName": "الطرح "
          },
          {
            "Id": 3049,
            "VillageName": "الخضراء "
          },
          {
            "Id": 3050,
            "VillageName": "التمامة "
          },
          {
            "Id": 3051,
            "VillageName": "البيضا "
          },
          {
            "Id": 3052,
            "VillageName": "البسلقون "
          },
          {
            "Id": 3053,
            "VillageName": "الأمراء "
          },
          {
            "Id": 3054,
            "VillageName": "أبيس المستجدة "
          }
        ],
        "name": "مركز كفر الدوار"
      },
      {
        "id": 203,
        "villages": [
          {
            "Id": 3055,
            "VillageName": "6 أكتوبر "
          },
          {
            "Id": 3056,
            "VillageName": "منشية دبونو "
          },
          {
            "Id": 3057,
            "VillageName": "المعدية (تشمل عزبة الحلواني ) "
          },
          {
            "Id": 3058,
            "VillageName": "مدينة ادكو "
          }
        ],
        "name": "مركز ادكو"
      },
      {
        "id": 204,
        "villages": [
          {
            "Id": 3059,
            "VillageName": "منشأة علوان "
          },
          {
            "Id": 3060,
            "VillageName": "محلة الأمير "
          },
          {
            "Id": 3061,
            "VillageName": "سيدى عمر "
          },
          {
            "Id": 3062,
            "VillageName": "ديبى "
          },
          {
            "Id": 3063,
            "VillageName": "برج رشيد "
          },
          {
            "Id": 3064,
            "VillageName": "الملقة "
          },
          {
            "Id": 3065,
            "VillageName": "الكوم "
          },
          {
            "Id": 3066,
            "VillageName": "العامرية الغربية "
          },
          {
            "Id": 3067,
            "VillageName": "العامرية الشرقية "
          },
          {
            "Id": 3068,
            "VillageName": "الشماسمة "
          },
          {
            "Id": 3069,
            "VillageName": "الساحل "
          },
          {
            "Id": 3070,
            "VillageName": "الحماد "
          },
          {
            "Id": 3071,
            "VillageName": "الجديدة "
          },
          {
            "Id": 3073,
            "VillageName": "الجدية "
          },
          {
            "Id": 3074,
            "VillageName": "التفتيش "
          },
          {
            "Id": 3075,
            "VillageName": "ادفينا "
          },
          {
            "Id": 3076,
            "VillageName": "مدينة رشيد "
          }
        ],
        "name": "مركز رشيد"
      },
      {
        "id": 205,
        "villages": [
          {
            "Id": 3077,
            "VillageName": "بلقطر الغربية "
          },
          {
            "Id": 3078,
            "VillageName": "منشاة دمسنا "
          },
          {
            "Id": 3079,
            "VillageName": "منشاة الوكيل "
          },
          {
            "Id": 3080,
            "VillageName": "محلة كيل "
          },
          {
            "Id": 3081,
            "VillageName": "كوم القناطر "
          },
          {
            "Id": 3082,
            "VillageName": "كفر عزاز "
          },
          {
            "Id": 3083,
            "VillageName": "كفر حصام "
          },
          {
            "Id": 3084,
            "VillageName": "قافلة "
          },
          {
            "Id": 3085,
            "VillageName": "عزب أمين سيد أحمد "
          },
          {
            "Id": 3086,
            "VillageName": "طلمبات حلق الجمل "
          },
          {
            "Id": 3087,
            "VillageName": "سحالى "
          },
          {
            "Id": 3088,
            "VillageName": "زاوية نعيم "
          },
          {
            "Id": 3089,
            "VillageName": "روضة خيرى "
          },
          {
            "Id": 3090,
            "VillageName": "دير امس "
          },
          {
            "Id": 3091,
            "VillageName": "دسونس الحلفاية "
          },
          {
            "Id": 3092,
            "VillageName": "بلقطر الشرقية "
          },
          {
            "Id": 3093,
            "VillageName": "بطورس "
          },
          {
            "Id": 3094,
            "VillageName": "بسنتواى "
          },
          {
            "Id": 3095,
            "VillageName": "بركة غطاس "
          },
          {
            "Id": 3096,
            "VillageName": "برسيق "
          },
          {
            "Id": 3097,
            "VillageName": "النخلة البحرية "
          },
          {
            "Id": 3098,
            "VillageName": "القروى "
          },
          {
            "Id": 3099,
            "VillageName": "الغابة "
          },
          {
            "Id": 3100,
            "VillageName": "الصخرة "
          },
          {
            "Id": 3101,
            "VillageName": "جواد حسني "
          },
          {
            "Id": 3102,
            "VillageName": "الزينى "
          },
          {
            "Id": 3103,
            "VillageName": "الرزقة "
          },
          {
            "Id": 3104,
            "VillageName": "الحرفة "
          },
          {
            "Id": 3105,
            "VillageName": "الجرن "
          },
          {
            "Id": 3106,
            "VillageName": "الجرادات "
          },
          {
            "Id": 3107,
            "VillageName": "أبو الخذر "
          },
          {
            "Id": 3108,
            "VillageName": "مدينة أبو حمص "
          }
        ],
        "name": "مركز أبو حمص"
      },
      {
        "id": 206,
        "villages": [
          {
            "Id": 3109,
            "VillageName": "نظارة المسعدة "
          },
          {
            "Id": 3110,
            "VillageName": "نظارة السعيدية "
          },
          {
            "Id": 3111,
            "VillageName": "نظارة الروضة "
          },
          {
            "Id": 3112,
            "VillageName": "منية السعيد "
          },
          {
            "Id": 3113,
            "VillageName": "منشاة أريمون "
          },
          {
            "Id": 3114,
            "VillageName": "كوم النصر "
          },
          {
            "Id": 3115,
            "VillageName": "كفر نكلا "
          },
          {
            "Id": 3116,
            "VillageName": "كفر أمليط "
          },
          {
            "Id": 3117,
            "VillageName": "كفر الرحمانية "
          },
          {
            "Id": 3118,
            "VillageName": "فيشا بلخة "
          },
          {
            "Id": 3119,
            "VillageName": "نزارة "
          },
          {
            "Id": 3120,
            "VillageName": "عزب بسنتواى "
          },
          {
            "Id": 3121,
            "VillageName": "سيدى عقبه "
          },
          {
            "Id": 3122,
            "VillageName": "سناباده "
          },
          {
            "Id": 3123,
            "VillageName": "سرنباى "
          },
          {
            "Id": 3124,
            "VillageName": "ديروط "
          },
          {
            "Id": 3125,
            "VillageName": "دسيا الكنايس "
          },
          {
            "Id": 3126,
            "VillageName": "اللويه "
          },
          {
            "Id": 3127,
            "VillageName": "القصر "
          },
          {
            "Id": 3128,
            "VillageName": "العطف "
          },
          {
            "Id": 3129,
            "VillageName": "مدينة المحمودية "
          }
        ],
        "name": "مركز المحمودية"
      },
      {
        "id": 207,
        "villages": [
          {
            "Id": 3130,
            "VillageName": "نظارة سماديس "
          },
          {
            "Id": 3131,
            "VillageName": "نظارة بويط "
          },
          {
            "Id": 3132,
            "VillageName": "نظارة المنيا "
          },
          {
            "Id": 3133,
            "VillageName": "نظارة المنشية "
          },
          {
            "Id": 3134,
            "VillageName": "نظارة الأنشا "
          },
          {
            "Id": 3135,
            "VillageName": "منية سلامة "
          },
          {
            "Id": 3136,
            "VillageName": "محلة داود "
          },
          {
            "Id": 3137,
            "VillageName": "محلة ثابت "
          },
          {
            "Id": 3138,
            "VillageName": "كفر محلة داود "
          },
          {
            "Id": 3139,
            "VillageName": "كفر غنيم "
          },
          {
            "Id": 3140,
            "VillageName": "كفر الشيخ حسن "
          },
          {
            "Id": 3141,
            "VillageName": "عزبة كفر غنيم "
          },
          {
            "Id": 3142,
            "VillageName": "عزبة حسن قبودان "
          },
          {
            "Id": 3143,
            "VillageName": "عزبة جرجس نخلة "
          },
          {
            "Id": 3144,
            "VillageName": "عزبة المجد(عزبة مرقص سابقا) "
          },
          {
            "Id": 3145,
            "VillageName": "عزبة البكوات "
          },
          {
            "Id": 3146,
            "VillageName": "سمخراط "
          },
          {
            "Id": 3147,
            "VillageName": "سماديس "
          },
          {
            "Id": 3148,
            "VillageName": "درشابة "
          },
          {
            "Id": 3149,
            "VillageName": "بويط "
          },
          {
            "Id": 3150,
            "VillageName": "المجد(مرقص سابقا) "
          },
          {
            "Id": 3151,
            "VillageName": "الكفر الجديد "
          },
          {
            "Id": 3152,
            "VillageName": "القهوقية "
          },
          {
            "Id": 3153,
            "VillageName": "الأشراك "
          },
          {
            "Id": 3154,
            "VillageName": "الأبريقجى "
          },
          {
            "Id": 3155,
            "VillageName": "أبو خراش "
          },
          {
            "Id": 3156,
            "VillageName": "مدينة الرحمانية "
          }
        ],
        "name": "مركز الرحمانية"
      },
      {
        "id": 208,
        "villages": [
          {
            "Id": 3157,
            "VillageName": "منشية أوقاف لقانة "
          },
          {
            "Id": 3158,
            "VillageName": "منشاة رزافة "
          },
          {
            "Id": 3159,
            "VillageName": "أبو حـــنا "
          },
          {
            "Id": 3160,
            "VillageName": "محلة نصر "
          },
          {
            "Id": 3161,
            "VillageName": "محلة قيس "
          },
          {
            "Id": 3162,
            "VillageName": "محلة فرنوى "
          },
          {
            "Id": 3163,
            "VillageName": "محلة صا "
          },
          {
            "Id": 3164,
            "VillageName": "محلة بشر "
          },
          {
            "Id": 3165,
            "VillageName": "لقانة "
          },
          {
            "Id": 3166,
            "VillageName": "كنيسة أورين "
          },
          {
            "Id": 3167,
            "VillageName": "كفر مستنان "
          },
          {
            "Id": 3168,
            "VillageName": "كفر قشاش "
          },
          {
            "Id": 3169,
            "VillageName": "كفر عثمان "
          },
          {
            "Id": 3170,
            "VillageName": "كفر خضير "
          },
          {
            "Id": 3171,
            "VillageName": "كفر الصناديدى "
          },
          {
            "Id": 3172,
            "VillageName": "كفر السلبى "
          },
          {
            "Id": 3173,
            "VillageName": "كفر الدفراوى "
          },
          {
            "Id": 3174,
            "VillageName": "فرنوى "
          },
          {
            "Id": 3175,
            "VillageName": "عزبة يوسف كمال "
          },
          {
            "Id": 3176,
            "VillageName": "عزبة يعقوب "
          },
          {
            "Id": 3177,
            "VillageName": "عزبة كفر السلبى "
          },
          {
            "Id": 3178,
            "VillageName": "عزبة فرنوى "
          },
          {
            "Id": 3179,
            "VillageName": "عزبة فتح الله الجزار"
          },
          {
            "Id": 3180,
            "VillageName": "عزبة سعادة "
          },
          {
            "Id": 3181,
            "VillageName": "عزبة حسين الديب "
          },
          {
            "Id": 3182,
            "VillageName": "عزبة بشارة حنا "
          },
          {
            "Id": 3183,
            "VillageName": "عزبة الكنيسة "
          },
          {
            "Id": 3184,
            "VillageName": "عزبة الشماشرجى "
          },
          {
            "Id": 3185,
            "VillageName": "عزبة الجوخدار "
          },
          {
            "Id": 3186,
            "VillageName": "قرية الأشراك "
          },
          {
            "Id": 3187,
            "VillageName": "عزبة إبراهيم أغا "
          },
          {
            "Id": 3188,
            "VillageName": "شبرا ريس "
          },
          {
            "Id": 3189,
            "VillageName": "زمزم "
          },
          {
            "Id": 3190,
            "VillageName": "جزيرة نكلا "
          },
          {
            "Id": 3191,
            "VillageName": "أورين "
          },
          {
            "Id": 3192,
            "VillageName": "أمرى "
          },
          {
            "Id": 3193,
            "VillageName": "أم حكيم "
          },
          {
            "Id": 3194,
            "VillageName": "المناشلة "
          },
          {
            "Id": 3195,
            "VillageName": "الريدان "
          },
          {
            "Id": 3196,
            "VillageName": "الأصلاب "
          },
          {
            "Id": 3197,
            "VillageName": "عزبة إسمانية "
          },
          {
            "Id": 3198,
            "VillageName": "أبو يحيى "
          },
          {
            "Id": 3199,
            "VillageName": "أبو منجوج "
          },
          {
            "Id": 3200,
            "VillageName": "أبو درة "
          },
          {
            "Id": 3201,
            "VillageName": "أبو السحما "
          },
          {
            "Id": 3202,
            "VillageName": "أبتوك "
          },
          {
            "Id": 3203,
            "VillageName": "مدينة شبرا خيت "
          },
          {
            "Id": 3204,
            "VillageName": "منشية حمادة "
          }
        ],
        "name": "مركز شبرا خيت"
      },
      {
        "id": 209,
        "villages": [
          {
            "Id": 3205,
            "VillageName": "منية بنى منصور "
          },
          {
            "Id": 3206,
            "VillageName": "منشأة النصر "
          },
          {
            "Id": 3207,
            "VillageName": "منشاة الصيرفى "
          },
          {
            "Id": 3208,
            "VillageName": "معنيا "
          },
          {
            "Id": 3209,
            "VillageName": "محلة عبيد "
          },
          {
            "Id": 3210,
            "VillageName": "كنيسة الضهرية "
          },
          {
            "Id": 3211,
            "VillageName": "كفر السوالم قبلى "
          },
          {
            "Id": 3212,
            "VillageName": "كفر السوالم بحرى "
          },
          {
            "Id": 3213,
            "VillageName": "كفر مساعد "
          },
          {
            "Id": 3214,
            "VillageName": "كفر عوانه "
          },
          {
            "Id": 3215,
            "VillageName": "كفر عسكر صفط "
          },
          {
            "Id": 3216,
            "VillageName": "كفر عسكر شنديد "
          },
          {
            "Id": 3217,
            "VillageName": "كفر خليفة "
          },
          {
            "Id": 3218,
            "VillageName": "كفر الغابة "
          },
          {
            "Id": 3219,
            "VillageName": "كفر الشيخ مخلوف "
          },
          {
            "Id": 3220,
            "VillageName": "كفر السقا "
          },
          {
            "Id": 3221,
            "VillageName": "كفر الحاجة "
          },
          {
            "Id": 3222,
            "VillageName": "كفر أبو مندور "
          },
          {
            "Id": 3223,
            "VillageName": "قليشان "
          },
          {
            "Id": 3224,
            "VillageName": "قادوس "
          },
          {
            "Id": 3225,
            "VillageName": "يوسف العسكرى "
          },
          {
            "Id": 3226,
            "VillageName": "طلعت "
          },
          {
            "Id": 3227,
            "VillageName": "عزبة حوض فارس "
          },
          {
            "Id": 3228,
            "VillageName": "عزبةراضى(عزبة أبو رزيق سابقا) "
          },
          {
            "Id": 3229,
            "VillageName": "ظهر التمساح "
          },
          {
            "Id": 3230,
            "VillageName": "صفط خالد "
          },
          {
            "Id": 3231,
            "VillageName": "صفط الحرية(صفط الملوك سابقا) "
          },
          {
            "Id": 3232,
            "VillageName": "صافية "
          },
          {
            "Id": 3233,
            "VillageName": "شنديد "
          },
          {
            "Id": 3234,
            "VillageName": "ششت الانعام "
          },
          {
            "Id": 3235,
            "VillageName": "شبرا النونه "
          },
          {
            "Id": 3236,
            "VillageName": "زبيده "
          },
          {
            "Id": 3237,
            "VillageName": "رمسيس "
          },
          {
            "Id": 3238,
            "VillageName": "ربع شنديد "
          },
          {
            "Id": 3239,
            "VillageName": "دميسنا "
          },
          {
            "Id": 3240,
            "VillageName": "دقدوقه "
          },
          {
            "Id": 3241,
            "VillageName": "خمارة "
          },
          {
            "Id": 3242,
            "VillageName": "حوض فارس "
          },
          {
            "Id": 3243,
            "VillageName": "حصة الضهرية "
          },
          {
            "Id": 3244,
            "VillageName": "جنبواى "
          },
          {
            "Id": 3245,
            "VillageName": "جعيف "
          },
          {
            "Id": 3246,
            "VillageName": "جبارس القبلية "
          },
          {
            "Id": 3247,
            "VillageName": "جبارس البحرية "
          },
          {
            "Id": 3248,
            "VillageName": "تلبانة "
          },
          {
            "Id": 3249,
            "VillageName": "برقامة "
          },
          {
            "Id": 3250,
            "VillageName": "أمليط "
          },
          {
            "Id": 3251,
            "VillageName": "النقراش "
          },
          {
            "Id": 3252,
            "VillageName": "النبيرة "
          },
          {
            "Id": 3253,
            "VillageName": "العيون "
          },
          {
            "Id": 3254,
            "VillageName": "العوامر "
          },
          {
            "Id": 3255,
            "VillageName": "الضهرية "
          },
          {
            "Id": 3256,
            "VillageName": "الشعيرة "
          },
          {
            "Id": 3257,
            "VillageName": "الروقة "
          },
          {
            "Id": 3258,
            "VillageName": "الدرملية "
          },
          {
            "Id": 3259,
            "VillageName": "الخوالد "
          },
          {
            "Id": 3260,
            "VillageName": "الحوتة "
          },
          {
            "Id": 3261,
            "VillageName": "التوفيقية "
          },
          {
            "Id": 3262,
            "VillageName": "البهى "
          },
          {
            "Id": 3263,
            "VillageName": "الابراهيمية "
          },
          {
            "Id": 3264,
            "VillageName": "اشليمة "
          },
          {
            "Id": 3265,
            "VillageName": "أرمانية "
          },
          {
            "Id": 3266,
            "VillageName": "أثريات فاضل "
          },
          {
            "Id": 3267,
            "VillageName": "ابراك حمام "
          },
          {
            "Id": 3268,
            "VillageName": "مدينة إيتاى البارود "
          },
          {
            "Id": 3269,
            "VillageName": "نكلا العنب "
          }
        ],
        "name": "مركز ايتاى البارود"
      },
      {
        "id": 210,
        "villages": [
          {
            "Id": 3270,
            "VillageName": "واقد "
          },
          {
            "Id": 3271,
            "VillageName": "نتما "
          },
          {
            "Id": 3272,
            "VillageName": "ميت يزيد "
          },
          {
            "Id": 3273,
            "VillageName": "منشاة على مهنا "
          },
          {
            "Id": 3274,
            "VillageName": "منشاة راضى "
          },
          {
            "Id": 3275,
            "VillageName": "منشأة أمين اسماعيل "
          },
          {
            "Id": 3276,
            "VillageName": "منشأة الشوربجي "
          },
          {
            "Id": 3277,
            "VillageName": "منشاة ابو رية "
          },
          {
            "Id": 3278,
            "VillageName": "مليحة "
          },
          {
            "Id": 3279,
            "VillageName": "مغنين "
          },
          {
            "Id": 3280,
            "VillageName": "محلة أحمد "
          },
          {
            "Id": 3281,
            "VillageName": "كوم شريك "
          },
          {
            "Id": 3282,
            "VillageName": "كفر مجاهد "
          },
          {
            "Id": 3283,
            "VillageName": "كفر غرين "
          },
          {
            "Id": 3284,
            "VillageName": "كفر غانم "
          },
          {
            "Id": 3285,
            "VillageName": "كفر سلامون "
          },
          {
            "Id": 3286,
            "VillageName": "كفر زيادة "
          },
          {
            "Id": 3287,
            "VillageName": "كفر دمتيوه "
          },
          {
            "Id": 3288,
            "VillageName": "كفر بولين "
          },
          {
            "Id": 3289,
            "VillageName": "كفر العيص "
          },
          {
            "Id": 3290,
            "VillageName": "علقام "
          },
          {
            "Id": 3291,
            "VillageName": "عزبة حسن على حمزة "
          },
          {
            "Id": 3292,
            "VillageName": "صفط العنب "
          },
          {
            "Id": 3293,
            "VillageName": "شبرا وسيم "
          },
          {
            "Id": 3294,
            "VillageName": "شابور "
          },
          {
            "Id": 3295,
            "VillageName": "سلامون "
          },
          {
            "Id": 3296,
            "VillageName": "سرسيقة "
          },
          {
            "Id": 3297,
            "VillageName": "زاوية مبارك "
          },
          {
            "Id": 3298,
            "VillageName": "زاوية خنيزة "
          },
          {
            "Id": 3299,
            "VillageName": "زاوية البحر "
          },
          {
            "Id": 3300,
            "VillageName": "دمشلى "
          },
          {
            "Id": 3301,
            "VillageName": "دمتيوه "
          },
          {
            "Id": 3302,
            "VillageName": "دست الأشراف "
          },
          {
            "Id": 3303,
            "VillageName": "خنيزة "
          },
          {
            "Id": 3304,
            "VillageName": "خربتا "
          },
          {
            "Id": 3305,
            "VillageName": "بيبان "
          },
          {
            "Id": 3306,
            "VillageName": "تلبقا "
          },
          {
            "Id": 3307,
            "VillageName": "بولين الفوايد "
          },
          {
            "Id": 3308,
            "VillageName": "بريم "
          },
          {
            "Id": 3309,
            "VillageName": "النقيدى "
          },
          {
            "Id": 3310,
            "VillageName": "النجيلة "
          },
          {
            "Id": 3311,
            "VillageName": "القلاوات "
          },
          {
            "Id": 3312,
            "VillageName": "الطيرية "
          },
          {
            "Id": 3313,
            "VillageName": "الطود "
          },
          {
            "Id": 3314,
            "VillageName": "الصواف "
          },
          {
            "Id": 3315,
            "VillageName": "الزعفرانى "
          },
          {
            "Id": 3316,
            "VillageName": "الداخلى "
          },
          {
            "Id": 3317,
            "VillageName": "الحدين "
          },
          {
            "Id": 3318,
            "VillageName": "البلاكوس "
          },
          {
            "Id": 3319,
            "VillageName": "البريجات "
          },
          {
            "Id": 3320,
            "VillageName": "أبيوقا "
          },
          {
            "Id": 3321,
            "VillageName": "أبو الخاوى "
          },
          {
            "Id": 3322,
            "VillageName": "أبسوم الغربية "
          },
          {
            "Id": 3323,
            "VillageName": "أبسوم الشرقية "
          },
          {
            "Id": 3324,
            "VillageName": "إبراهيمية مهنا "
          },
          {
            "Id": 3325,
            "VillageName": "مدينة كوم حمادة "
          }
        ],
        "name": "مركز كوم حمادة"
      },
      {
        "id": 211,
        "villages": [
          {
            "Id": 3326,
            "VillageName": "الشهيد قنديل * "
          },
          {
            "Id": 3327,
            "VillageName": "السخنة * "
          },
          {
            "Id": 3328,
            "VillageName": "الجمعيات المشهرة * "
          },
          {
            "Id": 3329,
            "VillageName": "ى (الايمان 3) * "
          },
          {
            "Id": 3330,
            "VillageName": "مصطفى كامل * "
          },
          {
            "Id": 3331,
            "VillageName": "عبد المجيد المرسى *"
          },
          {
            "Id": 3332,
            "VillageName": "ط (الايمان 2 )* "
          },
          {
            "Id": 3333,
            "VillageName": "س(عمر بن العاص) * "
          },
          {
            "Id": 3334,
            "VillageName": "ح (الايمان 1 ) * "
          },
          {
            "Id": 3335,
            "VillageName": "منشأة عامر ومنشأة ناصر * "
          },
          {
            "Id": 3336,
            "VillageName": "فلسطين "
          },
          {
            "Id": 3337,
            "VillageName": "عمر بن الخطاب "
          },
          {
            "Id": 3338,
            "VillageName": "المجد "
          },
          {
            "Id": 3339,
            "VillageName": "الخرطوم "
          },
          {
            "Id": 3340,
            "VillageName": "أبو بكر الصديق "
          },
          {
            "Id": 3341,
            "VillageName": "عين جالوت "
          },
          {
            "Id": 3342,
            "VillageName": "المعركة "
          },
          {
            "Id": 3343,
            "VillageName": "النجاح "
          },
          {
            "Id": 3344,
            "VillageName": "الكفاح "
          },
          {
            "Id": 3345,
            "VillageName": "الفالوجا "
          },
          {
            "Id": 3346,
            "VillageName": "العزيمة "
          },
          {
            "Id": 3347,
            "VillageName": "التل الكبير "
          },
          {
            "Id": 3348,
            "VillageName": "كمال الدين صلاح "
          },
          {
            "Id": 3349,
            "VillageName": "على بن أبى طالب "
          },
          {
            "Id": 3350,
            "VillageName": "عثمان بن عفان "
          },
          {
            "Id": 3351,
            "VillageName": "عبد السلام عارف "
          },
          {
            "Id": 3352,
            "VillageName": "خالد بن الوليد "
          },
          {
            "Id": 3353,
            "VillageName": "حراء "
          },
          {
            "Id": 3354,
            "VillageName": "بغداد "
          },
          {
            "Id": 3355,
            "VillageName": "نبيل الوقاد "
          },
          {
            "Id": 3356,
            "VillageName": "صلاح الدين "
          },
          {
            "Id": 3357,
            "VillageName": "عمر مكرم "
          },
          {
            "Id": 3358,
            "VillageName": "عمر شاهين "
          },
          {
            "Id": 3359,
            "VillageName": "عبد الحميد أبو زيد "
          },
          {
            "Id": 3360,
            "VillageName": "أم صابر "
          },
          {
            "Id": 3361,
            "VillageName": "أحمد عرابى "
          },
          {
            "Id": 3362,
            "VillageName": "مدينة بدر "
          }
        ],
        "name": "مركز بدر"
      },
      {
        "id": 212,
        "villages": [
          {
            "Id": 3363,
            "VillageName": "منطقة الزمام المستجدة "
          },
          {
            "Id": 3364,
            "VillageName": "أحمد رامى "
          },
          {
            "Id": 3365,
            "VillageName": "الإمام الغزالى "
          },
          {
            "Id": 3366,
            "VillageName": "الإمام الحسين "
          },
          {
            "Id": 3367,
            "VillageName": "عبد المجيد صالح "
          },
          {
            "Id": 3368,
            "VillageName": "العزبة الحمراء "
          },
          {
            "Id": 3369,
            "VillageName": "البستان قبلى النوبارية "
          },
          {
            "Id": 3370,
            "VillageName": "العروبة "
          },
          {
            "Id": 3371,
            "VillageName": "مؤسسة البستان "
          },
          {
            "Id": 3372,
            "VillageName": "منشاة فاضل "
          },
          {
            "Id": 3373,
            "VillageName": "منشاة بشارة "
          },
          {
            "Id": 3374,
            "VillageName": "منشأة أبو وافية "
          },
          {
            "Id": 3375,
            "VillageName": "محمود أبو وافية الكبيرة "
          },
          {
            "Id": 3376,
            "VillageName": "لحيمر "
          },
          {
            "Id": 3377,
            "VillageName": "كوم زمران "
          },
          {
            "Id": 3378,
            "VillageName": "كفر لحيمر "
          },
          {
            "Id": 3379,
            "VillageName": "قمحة "
          },
          {
            "Id": 3380,
            "VillageName": "زهورالأمراء "
          },
          {
            "Id": 3381,
            "VillageName": "عزبة يوسف حمزة "
          },
          {
            "Id": 3382,
            "VillageName": "عزب شركة الإتحاد "
          },
          {
            "Id": 3383,
            "VillageName": "عزبة سعد داود "
          },
          {
            "Id": 3384,
            "VillageName": "عزبة المنشاوى اللحاح"
          },
          {
            "Id": 3385,
            "VillageName": "عزبة القاسى مطرود "
          },
          {
            "Id": 3386,
            "VillageName": "عزبة الطيرية "
          },
          {
            "Id": 3387,
            "VillageName": "طيبة "
          },
          {
            "Id": 3388,
            "VillageName": "زمران النخل "
          },
          {
            "Id": 3389,
            "VillageName": "زاوية مسلم "
          },
          {
            "Id": 3390,
            "VillageName": "زاوية حمور "
          },
          {
            "Id": 3391,
            "VillageName": "زاوية أبو شوشة "
          },
          {
            "Id": 3392,
            "VillageName": "رزافه "
          },
          {
            "Id": 3393,
            "VillageName": "درشاى "
          },
          {
            "Id": 3394,
            "VillageName": "جزائر عيسى "
          },
          {
            "Id": 3395,
            "VillageName": "اليوسيفية "
          },
          {
            "Id": 3396,
            "VillageName": "الوفائية "
          },
          {
            "Id": 3397,
            "VillageName": "المنشية الجديدة "
          },
          {
            "Id": 3398,
            "VillageName": "المسين "
          },
          {
            "Id": 3399,
            "VillageName": "العلامية "
          },
          {
            "Id": 3400,
            "VillageName": "الخليلية "
          },
          {
            "Id": 3401,
            "VillageName": "الحجر المحروق "
          },
          {
            "Id": 3402,
            "VillageName": "البستان "
          },
          {
            "Id": 3403,
            "VillageName": "أطلميس "
          },
          {
            "Id": 3404,
            "VillageName": "أبيا الحمراء "
          },
          {
            "Id": 3405,
            "VillageName": "أبو مسعود "
          },
          {
            "Id": 3406,
            "VillageName": "أبو صمادة "
          },
          {
            "Id": 3407,
            "VillageName": "أبو سعيفة "
          },
          {
            "Id": 3408,
            "VillageName": "مدينة الدلنجات "
          }
        ],
        "name": "مركز الدلنجات"
      },
      {
        "id": 213,
        "villages": [
          {
            "Id": 3409,
            "VillageName": "عبدالعظيم زاهر * "
          },
          {
            "Id": 3410,
            "VillageName": "الشهداء * "
          },
          {
            "Id": 3411,
            "VillageName": "الياس * "
          },
          {
            "Id": 3412,
            "VillageName": "الصفا والمروة * "
          },
          {
            "Id": 3413,
            "VillageName": "الطبرانى * "
          },
          {
            "Id": 3414,
            "VillageName": "الهدى والتقوى* "
          },
          {
            "Id": 3415,
            "VillageName": "على مبارك * "
          },
          {
            "Id": 3416,
            "VillageName": "صلاح العبد * "
          },
          {
            "Id": 3417,
            "VillageName": "الاسراء والمعراج * "
          },
          {
            "Id": 3418,
            "VillageName": "أم المؤمنين * "
          },
          {
            "Id": 3419,
            "VillageName": "التوحيد * "
          },
          {
            "Id": 3420,
            "VillageName": "جابر بن حيان * "
          },
          {
            "Id": 3421,
            "VillageName": "عزيز علية السلام * "
          },
          {
            "Id": 3422,
            "VillageName": "الامام مالك * "
          },
          {
            "Id": 3423,
            "VillageName": "الصديق يوسف * "
          },
          {
            "Id": 3424,
            "VillageName": "كفر داود "
          },
          {
            "Id": 3425,
            "VillageName": "بنى سلامة "
          },
          {
            "Id": 3426,
            "VillageName": "الحمراء "
          },
          {
            "Id": 3427,
            "VillageName": "الجعار "
          },
          {
            "Id": 3428,
            "VillageName": "مدينة وادى النطرون "
          }
        ],
        "name": "مركز وادى النطرون"
      },
      {
        "id": 214,
        "villages": [
          {
            "Id": 3429,
            "VillageName": "عثمان بن عفان * "
          },
          {
            "Id": 3430,
            "VillageName": "الثامنة بذور * "
          },
          {
            "Id": 3431,
            "VillageName": "دواجن 6 * "
          },
          {
            "Id": 3432,
            "VillageName": "الرابعة بذور * "
          },
          {
            "Id": 3433,
            "VillageName": "لحوم 18 ، 19 ، 20 *"
          },
          {
            "Id": 3434,
            "VillageName": "صابر رياض * "
          },
          {
            "Id": 3435,
            "VillageName": "النبوى المهندس * "
          },
          {
            "Id": 3436,
            "VillageName": "عثمان محرم * "
          },
          {
            "Id": 3437,
            "VillageName": "مصطفى كامل * "
          },
          {
            "Id": 3438,
            "VillageName": "الـشـــيــخ* "
          },
          {
            "Id": 3439,
            "VillageName": "بـــــلال * "
          },
          {
            "Id": 3440,
            "VillageName": "حسين أبو اليسر * "
          },
          {
            "Id": 3441,
            "VillageName": "د / محمد عبدالوهاب *"
          },
          {
            "Id": 3442,
            "VillageName": "اّدم * "
          },
          {
            "Id": 3443,
            "VillageName": "سيدنا سليمان * "
          },
          {
            "Id": 3444,
            "VillageName": "أحمد بـــدوى * "
          },
          {
            "Id": 3445,
            "VillageName": "محمد عزام * "
          },
          {
            "Id": 3446,
            "VillageName": "المصنع * "
          },
          {
            "Id": 3447,
            "VillageName": "المستثمرين "
          },
          {
            "Id": 3448,
            "VillageName": "العدل "
          },
          {
            "Id": 3449,
            "VillageName": "عبدالحليم محمود "
          },
          {
            "Id": 3450,
            "VillageName": "عبدالرقيب "
          },
          {
            "Id": 3451,
            "VillageName": "الشجاعة "
          },
          {
            "Id": 3452,
            "VillageName": "النــــــور "
          },
          {
            "Id": 3453,
            "VillageName": "سعد زغلول "
          },
          {
            "Id": 3454,
            "VillageName": "أحمد شوقى "
          },
          {
            "Id": 3455,
            "VillageName": "طة حسين "
          },
          {
            "Id": 3456,
            "VillageName": "أبو العطا "
          },
          {
            "Id": 3457,
            "VillageName": "الصديق الجديدة "
          },
          {
            "Id": 3458,
            "VillageName": "مدينة النوبارية الجديدة ** "
          }
        ],
        "name": "قسم غرب النوبارية"
      }
    ]
  },
  {
    "id": 19,
    "name": "الاسماعيلية",
    "centers": [
      {
        "id": 215,
        "villages": [
          {
            "Id": 3459,
            "VillageName": "مــكة "
          },
          {
            "Id": 3460,
            "VillageName": "العــباسى "
          },
          {
            "Id": 3461,
            "VillageName": "التــمساح "
          }
        ],
        "name": "قسم أول الاسماعيلي"
      },
      {
        "id": 216,
        "villages": [
          {
            "Id": 3462,
            "VillageName": "منشأةالشهداء(عرايشية العبيد سابقا) "
          },
          {
            "Id": 3463,
            "VillageName": "الســـلام ( الحكر ) "
          },
          {
            "Id": 3464,
            "VillageName": "العـــرايشة الــجديدة "
          }
        ],
        "name": "قسم ثان الاسماعيلية"
      },
      {
        "id": 217,
        "villages": [
          {
            "Id": 3465,
            "VillageName": "الحــــرفيين "
          },
          {
            "Id": 3466,
            "VillageName": "الـــطرق والــكبارى "
          },
          {
            "Id": 3467,
            "VillageName": "التــمليك "
          },
          {
            "Id": 3468,
            "VillageName": "الشــيخ زايد "
          }
        ],
        "name": "قسم ثالث الاسماعيلية"
      },
      {
        "id": 218,
        "villages": [
          {
            "Id": 3469,
            "VillageName": "الفردان الجديدة "
          },
          {
            "Id": 3470,
            "VillageName": "نفيشة "
          },
          {
            "Id": 3471,
            "VillageName": "عين غصين "
          },
          {
            "Id": 3472,
            "VillageName": "الضبعية "
          }
        ],
        "name": "مركز الاسماعيلية"
      },
      {
        "id": 219,
        "villages": [
          {
            "Id": 3473,
            "VillageName": "الروضة "
          },
          {
            "Id": 3474,
            "VillageName": "أبو طفيلة "
          },
          {
            "Id": 3475,
            "VillageName": "النصر "
          },
          {
            "Id": 3476,
            "VillageName": "أبو خليفة "
          },
          {
            "Id": 3477,
            "VillageName": "الفردان "
          },
          {
            "Id": 3478,
            "VillageName": "الرياح "
          },
          {
            "Id": 3479,
            "VillageName": "البياضية "
          },
          {
            "Id": 3480,
            "VillageName": "البناهوة "
          },
          {
            "Id": 3481,
            "VillageName": "الاخارسة "
          },
          {
            "Id": 3482,
            "VillageName": "مدينة القنطرة غرب "
          }
        ],
        "name": "مركز القنطرة غرب"
      },
      {
        "id": 220,
        "villages": [
          {
            "Id": 3483,
            "VillageName": "كتيبة الجيش * "
          },
          {
            "Id": 3484,
            "VillageName": "حوض أبو سعادة * "
          },
          {
            "Id": 3485,
            "VillageName": "جبل أم خشيب * "
          },
          {
            "Id": 3486,
            "VillageName": "بير مدكور * "
          },
          {
            "Id": 3487,
            "VillageName": "بير حبيطة * "
          },
          {
            "Id": 3488,
            "VillageName": "بير العروق * "
          },
          {
            "Id": 3489,
            "VillageName": "بوابة القنطرة(شرق الجمرك)* "
          },
          {
            "Id": 3490,
            "VillageName": "السلام الجديدة(تشمل البحيرات المرة)* "
          },
          {
            "Id": 3491,
            "VillageName": "العزبة* "
          },
          {
            "Id": 3492,
            "VillageName": "التل الأحمر* "
          },
          {
            "Id": 3493,
            "VillageName": "الإسماعيلية (شرق-رقم6سابقا )* "
          },
          {
            "Id": 3494,
            "VillageName": "الســـــلام "
          },
          {
            "Id": 3495,
            "VillageName": "ميت أبو الكوم الجديدة "
          },
          {
            "Id": 3496,
            "VillageName": "جلبانة "
          },
          {
            "Id": 3497,
            "VillageName": "التقدم "
          },
          {
            "Id": 3498,
            "VillageName": "الأبطال "
          },
          {
            "Id": 3499,
            "VillageName": "مدينة القنطرة شرق "
          }
        ],
        "name": "مركز القنطرة شرق"
      },
      {
        "id": 221,
        "villages": [
          {
            "Id": 3500,
            "VillageName": "هويس سرابيوم "
          },
          {
            "Id": 3501,
            "VillageName": "كسفريت "
          },
          {
            "Id": 3502,
            "VillageName": "فنارة "
          },
          {
            "Id": 3503,
            "VillageName": "سرابيوم "
          },
          {
            "Id": 3504,
            "VillageName": "أبو سلطان "
          },
          {
            "Id": 3505,
            "VillageName": "مدينة فايد "
          }
        ],
        "name": "مركز فايد"
      },
      {
        "id": 222,
        "villages": [
          {
            "Id": 3506,
            "VillageName": "المحسمة الجديدة "
          },
          {
            "Id": 3507,
            "VillageName": "المنايف "
          },
          {
            "Id": 3508,
            "VillageName": "السبع اّبار الغربية "
          },
          {
            "Id": 3509,
            "VillageName": "السبع اّبار الشرقية "
          },
          {
            "Id": 3510,
            "VillageName": "أبو صوير البلد "
          },
          {
            "Id": 3511,
            "VillageName": "مدينة أبو صوير المحطة "
          }
        ],
        "name": "مركز أبو صوير"
      },
      {
        "id": 223,
        "villages": [
          {
            "Id": 3512,
            "VillageName": "الملاك "
          },
          {
            "Id": 3513,
            "VillageName": "القصاصين القديمة "
          },
          {
            "Id": 3514,
            "VillageName": "الضاهرية "
          },
          {
            "Id": 3515,
            "VillageName": "الجزيرة الخضراء "
          },
          {
            "Id": 3516,
            "VillageName": "أبو عاشور "
          },
          {
            "Id": 3517,
            "VillageName": "مدينة التل الكبير "
          }
        ],
        "name": "مركز التل الكبير"
      },
      {
        "id": 224,
        "villages": [
          {
            "Id": 3518,
            "VillageName": "الشــروق "
          },
          {
            "Id": 3519,
            "VillageName": "الســـلام "
          },
          {
            "Id": 3520,
            "VillageName": "الــوادى الاخـــضر "
          },
          {
            "Id": 3521,
            "VillageName": "أم عـــزام "
          },
          {
            "Id": 3522,
            "VillageName": "المحسمة الــقديــمة "
          },
          {
            "Id": 3523,
            "VillageName": "مدينة القصاصين الجديدة "
          }
        ],
        "name": "مركز القصاصين الجديدة"
      }
    ]
  },
  {
    "id": 21,
    "name": "الجيزه",
    "centers": [
      {
        "id": 225,
        "villages": [
          {
            "Id": 3524,
            "VillageName": "تـــاج الدول "
          },
          {
            "Id": 3525,
            "VillageName": "جزيرة امبابة (وتضم سيدى اسماعيل) "
          },
          {
            "Id": 3526,
            "VillageName": "عبدالنعيم (عزبة الصعاية سابقا) "
          },
          {
            "Id": 3527,
            "VillageName": "ميت كردك "
          },
          {
            "Id": 3528,
            "VillageName": "كفر الشوام "
          },
          {
            "Id": 3529,
            "VillageName": "أرض الجمعية (6 أكتوبرسابقا) "
          },
          {
            "Id": 3530,
            "VillageName": "مدينة العمال والتحرير "
          },
          {
            "Id": 3531,
            "VillageName": "المنيرة الغربية (وتضم مطار امبابة) "
          },
          {
            "Id": 3532,
            "VillageName": "المنيرة الشرقية "
          }
        ],
        "name": "قسم أمبابة"
      },
      {
        "id": 226,
        "villages": [
          {
            "Id": 3533,
            "VillageName": "أرض اللـــواء "
          },
          {
            "Id": 3534,
            "VillageName": "المهندسين (جزيرة ميت عقبة) "
          },
          {
            "Id": 3535,
            "VillageName": "الاعلام (مدينة الاوقاف سابقا) "
          },
          {
            "Id": 3536,
            "VillageName": "ميت عقبة "
          },
          {
            "Id": 3537,
            "VillageName": "العجوزة "
          },
          {
            "Id": 3538,
            "VillageName": "الحوتية "
          }
        ],
        "name": "قسم العجوزة"
      },
      {
        "id": 227,
        "villages": [
          {
            "Id": 3539,
            "VillageName": "الأورمـــان (لايدخل ضمنها المساحة) "
          },
          {
            "Id": 3540,
            "VillageName": "بين السرايات "
          },
          {
            "Id": 3541,
            "VillageName": "عزبة أولاد علام "
          },
          {
            "Id": 3542,
            "VillageName": "داير الناحية "
          },
          {
            "Id": 3543,
            "VillageName": "مدينة الاوقاف "
          },
          {
            "Id": 3544,
            "VillageName": "سليمان جوهــر "
          }
        ],
        "name": "قسم الدقى"
      },
      {
        "id": 228,
        "villages": [
          {
            "Id": 3545,
            "VillageName": "جزيرة بين البحرين "
          },
          {
            "Id": 3546,
            "VillageName": "عزبة البكباشى "
          },
          {
            "Id": 3547,
            "VillageName": "عزبة والى "
          },
          {
            "Id": 3548,
            "VillageName": "القصبجى "
          },
          {
            "Id": 3549,
            "VillageName": "ساقية مكى "
          },
          {
            "Id": 3550,
            "VillageName": "رابعة "
          },
          {
            "Id": 3551,
            "VillageName": "ثالثة "
          },
          {
            "Id": 3552,
            "VillageName": "ثانية "
          },
          {
            "Id": 3553,
            "VillageName": "أولى "
          },
          {
            "Id": 3554,
            "VillageName": "جزيرة الدهب "
          },
          {
            "Id": 3555,
            "VillageName": "المنيب "
          }
        ],
        "name": "قسم الجيزة"
      },
      {
        "id": 229,
        "villages": [
          {
            "Id": 3556,
            "VillageName": "صفط اللبن "
          },
          {
            "Id": 3557,
            "VillageName": "شرق الطريق الدائري "
          },
          {
            "Id": 3558,
            "VillageName": "أرض اللواء و منشأة عليان "
          },
          {
            "Id": 3559,
            "VillageName": "كفرطهرمس "
          },
          {
            "Id": 3560,
            "VillageName": "زنين (وتشمل نزلة خلف ونزلة بهجت) "
          },
          {
            "Id": 3561,
            "VillageName": "بولاق الدكرور "
          },
          {
            "Id": 3562,
            "VillageName": "أبو قتادة- وتشمل نوفل الجديدة ونوفل القديمة ودلاور "
          }
        ],
        "name": "قسم بولاق الدكرور"
      },
      {
        "id": 230,
        "villages": [
          {
            "Id": 3563,
            "VillageName": "العمرانية الغربية "
          },
          {
            "Id": 3564,
            "VillageName": "العمرانية الشرقية "
          },
          {
            "Id": 3565,
            "VillageName": "شياخة أولــى "
          }
        ],
        "name": "قسم العمرانية"
      },
      {
        "id": 231,
        "villages": [
          {
            "Id": 3566,
            "VillageName": "الكنيسة "
          },
          {
            "Id": 3567,
            "VillageName": "الكوم الأخضر "
          },
          {
            "Id": 3568,
            "VillageName": "الطـــالبية "
          },
          {
            "Id": 3569,
            "VillageName": "شياخة أولــى "
          }
        ],
        "name": "قسم الطــالبية"
      },
      {
        "id": 232,
        "villages": [
          {
            "Id": 3570,
            "VillageName": "كفر غطاطي "
          },
          {
            "Id": 3571,
            "VillageName": "منشأة البكاري "
          },
          {
            "Id": 3572,
            "VillageName": "كفر كعبيش "
          },
          {
            "Id": 3573,
            "VillageName": "نزلة السمان والسيسى "
          },
          {
            "Id": 3574,
            "VillageName": "نزلة البطران "
          },
          {
            "Id": 3575,
            "VillageName": "كفرة نصار "
          },
          {
            "Id": 3576,
            "VillageName": "كفر الجبل "
          }
        ],
        "name": "قسم الأهرام"
      },
      {
        "id": 233,
        "villages": [
          {
            "Id": 3577,
            "VillageName": "بنى يوسف "
          },
          {
            "Id": 3578,
            "VillageName": "نزلة الأشطر "
          },
          {
            "Id": 3579,
            "VillageName": "ميت قادوس "
          },
          {
            "Id": 3580,
            "VillageName": "ميت شماس "
          },
          {
            "Id": 3581,
            "VillageName": "منيل شيحة "
          },
          {
            "Id": 3582,
            "VillageName": "طموه "
          },
          {
            "Id": 3583,
            "VillageName": "شبرامنت "
          },
          {
            "Id": 3584,
            "VillageName": "زاويةأبومسلم "
          },
          {
            "Id": 3585,
            "VillageName": "ترسا "
          },
          {
            "Id": 3586,
            "VillageName": "المناوات "
          },
          {
            "Id": 3587,
            "VillageName": "الحرانية "
          },
          {
            "Id": 3588,
            "VillageName": "مدينةأبوالنمرس "
          }
        ],
        "name": "مركز أبو النمرس (الجيزة سابقا )"
      },
      {
        "id": 234,
        "villages": [
          {
            "Id": 3589,
            "VillageName": "أم خنان "
          },
          {
            "Id": 3590,
            "VillageName": "الشيخ عتمان "
          },
          {
            "Id": 3591,
            "VillageName": "مدينةالحوامدية "
          }
        ],
        "name": "قسم الحوامدية"
      },
      {
        "id": 235,
        "villages": [
          {
            "Id": 3592,
            "VillageName": "نزلة الشوبك "
          },
          {
            "Id": 3593,
            "VillageName": "ميت رهينة "
          },
          {
            "Id": 3594,
            "VillageName": "منشأة كاسب "
          },
          {
            "Id": 3595,
            "VillageName": "منشأة دهشور "
          },
          {
            "Id": 3596,
            "VillageName": "مزغونة "
          },
          {
            "Id": 3597,
            "VillageName": "قلعة المرازيق "
          },
          {
            "Id": 3598,
            "VillageName": "سقارة "
          },
          {
            "Id": 3599,
            "VillageName": "كفر زهران "
          },
          {
            "Id": 3600,
            "VillageName": "زاوية دهشور "
          },
          {
            "Id": 3601,
            "VillageName": "دهشور "
          },
          {
            "Id": 3602,
            "VillageName": "المرازيق "
          },
          {
            "Id": 3603,
            "VillageName": "العزيزية "
          },
          {
            "Id": 3604,
            "VillageName": "الطرفاية "
          },
          {
            "Id": 3605,
            "VillageName": "الشوبك الغربى "
          },
          {
            "Id": 3606,
            "VillageName": "الشنباب "
          },
          {
            "Id": 3607,
            "VillageName": "أبوصير "
          },
          {
            "Id": 3608,
            "VillageName": "أبورجوان القبلى "
          },
          {
            "Id": 3609,
            "VillageName": "أبورجوان البحرى "
          },
          {
            "Id": 3610,
            "VillageName": "مدينة البدرشين "
          }
        ],
        "name": "مركز البدرشين"
      },
      {
        "id": 236,
        "villages": [
          {
            "Id": 3611,
            "VillageName": "العبسي (الهيبي ) "
          },
          {
            "Id": 3612,
            "VillageName": "ميت القاند "
          },
          {
            "Id": 3613,
            "VillageName": "منشية فاضل "
          },
          {
            "Id": 3614,
            "VillageName": "منشاة عبد السيد "
          },
          {
            "Id": 3615,
            "VillageName": "منشاة أبوالعباس "
          },
          {
            "Id": 3616,
            "VillageName": "كفر قاسم "
          },
          {
            "Id": 3617,
            "VillageName": "كفر عمار "
          },
          {
            "Id": 3618,
            "VillageName": "كفر شحاتة "
          },
          {
            "Id": 3619,
            "VillageName": "كفر حميد "
          },
          {
            "Id": 3620,
            "VillageName": "كفر جرزة "
          },
          {
            "Id": 3621,
            "VillageName": "كفر تركى "
          },
          {
            "Id": 3622,
            "VillageName": "كفر بركات "
          },
          {
            "Id": 3623,
            "VillageName": "كفر الضبعى "
          },
          {
            "Id": 3624,
            "VillageName": "كفر الرفاعى "
          },
          {
            "Id": 3625,
            "VillageName": "طهما "
          },
          {
            "Id": 3626,
            "VillageName": "زاوية أبوسويلم "
          },
          {
            "Id": 3627,
            "VillageName": "جرزة "
          },
          {
            "Id": 3628,
            "VillageName": "بيدف "
          },
          {
            "Id": 3629,
            "VillageName": "بهبيت "
          },
          {
            "Id": 3630,
            "VillageName": "بمها "
          },
          {
            "Id": 3631,
            "VillageName": "برنشت "
          },
          {
            "Id": 3632,
            "VillageName": "بدسة (بتسا) "
          },
          {
            "Id": 3633,
            "VillageName": "جزيرة السلام ( باجة الشيخ سابقا) "
          },
          {
            "Id": 3634,
            "VillageName": "الناصرية( المعرقب سابقا) "
          },
          {
            "Id": 3635,
            "VillageName": "المقاطفية "
          },
          {
            "Id": 3636,
            "VillageName": "المساندة "
          },
          {
            "Id": 3637,
            "VillageName": "المتانيا "
          },
          {
            "Id": 3638,
            "VillageName": "اللشت "
          },
          {
            "Id": 3639,
            "VillageName": "القطورى "
          },
          {
            "Id": 3640,
            "VillageName": "العطف "
          },
          {
            "Id": 3641,
            "VillageName": "العامرية(أبو فارسابقا) "
          },
          {
            "Id": 3642,
            "VillageName": "السعودية "
          },
          {
            "Id": 3643,
            "VillageName": "الرقة الغربية "
          },
          {
            "Id": 3644,
            "VillageName": "الدناوية "
          },
          {
            "Id": 3645,
            "VillageName": "الجملة "
          },
          {
            "Id": 3646,
            "VillageName": "البليدة "
          },
          {
            "Id": 3647,
            "VillageName": "البرغوتى "
          },
          {
            "Id": 3648,
            "VillageName": "أبو رويش "
          },
          {
            "Id": 3649,
            "VillageName": "أبوالعباس "
          },
          {
            "Id": 3650,
            "VillageName": "مدينة العياط "
          }
        ],
        "name": "مركز العياط"
      },
      {
        "id": 237,
        "villages": [
          {
            "Id": 3651,
            "VillageName": "المنشي "
          },
          {
            "Id": 3652,
            "VillageName": "عرب الحصار البحرية "
          },
          {
            "Id": 3653,
            "VillageName": "نزلة عليان "
          },
          {
            "Id": 3654,
            "VillageName": "نجوع العرب "
          },
          {
            "Id": 3655,
            "VillageName": "كفر طرخان "
          },
          {
            "Id": 3656,
            "VillageName": "غمازة الكبرى "
          },
          {
            "Id": 3657,
            "VillageName": "غمازة الصغرى "
          },
          {
            "Id": 3658,
            "VillageName": "عرب العبايدة "
          },
          {
            "Id": 3659,
            "VillageName": "عرب الحصار "
          },
          {
            "Id": 3660,
            "VillageName": "الودى "
          },
          {
            "Id": 3661,
            "VillageName": "المنيا "
          },
          {
            "Id": 3662,
            "VillageName": "الفهميين "
          },
          {
            "Id": 3663,
            "VillageName": "الشوبك الشرقى "
          },
          {
            "Id": 3664,
            "VillageName": "الشرفا والعطيات "
          },
          {
            "Id": 3665,
            "VillageName": "الديسمى "
          },
          {
            "Id": 3666,
            "VillageName": "الحى "
          },
          {
            "Id": 3667,
            "VillageName": "الجزيرةالشقراء "
          },
          {
            "Id": 3668,
            "VillageName": "الأقواز "
          },
          {
            "Id": 3669,
            "VillageName": "الأخصاص "
          },
          {
            "Id": 3670,
            "VillageName": "أسكر "
          },
          {
            "Id": 3671,
            "VillageName": "مدينةالصف "
          }
        ],
        "name": "مركز الصف"
      },
      {
        "id": 238,
        "villages": [
          {
            "Id": 3672,
            "VillageName": "نزلة ترجم "
          },
          {
            "Id": 3673,
            "VillageName": "منيل السلطان "
          },
          {
            "Id": 3674,
            "VillageName": "منية الرقة "
          },
          {
            "Id": 3675,
            "VillageName": "منشأة سليمان "
          },
          {
            "Id": 3676,
            "VillageName": "مسجدموسى "
          },
          {
            "Id": 3677,
            "VillageName": "كفر قنديل "
          },
          {
            "Id": 3678,
            "VillageName": "كفر حلاوة "
          },
          {
            "Id": 3679,
            "VillageName": "كفر الواصلين "
          },
          {
            "Id": 3680,
            "VillageName": "صول "
          },
          {
            "Id": 3681,
            "VillageName": "ديرالميمون "
          },
          {
            "Id": 3682,
            "VillageName": "جزيرة الكريمات "
          },
          {
            "Id": 3683,
            "VillageName": "بنى صالح "
          },
          {
            "Id": 3684,
            "VillageName": "الكريمات "
          },
          {
            "Id": 3685,
            "VillageName": "الكداية "
          },
          {
            "Id": 3686,
            "VillageName": "القبابات "
          },
          {
            "Id": 3687,
            "VillageName": "الصالحية "
          },
          {
            "Id": 3688,
            "VillageName": "الرقة القبلية "
          },
          {
            "Id": 3689,
            "VillageName": "الرقة البحرية "
          },
          {
            "Id": 3690,
            "VillageName": "الخرمان "
          },
          {
            "Id": 3691,
            "VillageName": "الحلف الغربى "
          },
          {
            "Id": 3692,
            "VillageName": "الحلف "
          },
          {
            "Id": 3693,
            "VillageName": "البرميل "
          },
          {
            "Id": 3694,
            "VillageName": "مدينة أطفيح "
          }
        ],
        "name": "مركز أطفيح"
      },
      {
        "id": 239,
        "villages": [
          {
            "Id": 3695,
            "VillageName": "المعتمدية "
          },
          {
            "Id": 3696,
            "VillageName": "كفر حكــيم "
          },
          {
            "Id": 3697,
            "VillageName": "كومــبرة "
          },
          {
            "Id": 3698,
            "VillageName": "بنى مجدول "
          },
          {
            "Id": 3699,
            "VillageName": "أبــو رواش "
          },
          {
            "Id": 3700,
            "VillageName": "برك الخيام "
          },
          {
            "Id": 3701,
            "VillageName": "نـاهـــيا "
          },
          {
            "Id": 3702,
            "VillageName": "مدينة كرداسة "
          }
        ],
        "name": "مركز كرداسة"
      },
      {
        "id": 240,
        "villages": [
          {
            "Id": 3703,
            "VillageName": "صيدا "
          },
          {
            "Id": 3704,
            "VillageName": "شنبارى "
          },
          {
            "Id": 3705,
            "VillageName": "سقيل "
          },
          {
            "Id": 3706,
            "VillageName": "زاويةثابت "
          },
          {
            "Id": 3707,
            "VillageName": "برطس "
          },
          {
            "Id": 3708,
            "VillageName": "الكوم الأحمر "
          },
          {
            "Id": 3709,
            "VillageName": "القيراطيين "
          },
          {
            "Id": 3710,
            "VillageName": "الزيدية "
          },
          {
            "Id": 3711,
            "VillageName": "البراجيل "
          },
          {
            "Id": 3712,
            "VillageName": "مدينةأوسيم "
          }
        ],
        "name": "مركز أوسيم"
      },
      {
        "id": 241,
        "villages": [
          {
            "Id": 3713,
            "VillageName": "طناش ونزلة الزمر "
          },
          {
            "Id": 3714,
            "VillageName": "بشتيل "
          },
          {
            "Id": 3715,
            "VillageName": "جزيرة محمد "
          },
          {
            "Id": 3717,
            "VillageName": "جزيرة وراق الحضر "
          },
          {
            "Id": 6375,
            "VillageName": "مــدينة الــوراق العرب وتشمل وراق العرب -وراق الحضر -امبوبة- ميت النصا"
          }
        ],
        "name": "قسم الوراق"
      },
      {
        "id": 242,
        "villages": [
          {
            "Id": 3718,
            "VillageName": "نكلا "
          },
          {
            "Id": 3719,
            "VillageName": "محمود عبد الصمد "
          },
          {
            "Id": 3720,
            "VillageName": "منشية رضوان "
          },
          {
            "Id": 3721,
            "VillageName": "أبو حديد "
          },
          {
            "Id": 3722,
            "VillageName": "كفر حجازى "
          },
          {
            "Id": 3723,
            "VillageName": "ذات الكوم "
          },
          {
            "Id": 3724,
            "VillageName": "الجزاية "
          },
          {
            "Id": 3725,
            "VillageName": "بهرمس "
          },
          {
            "Id": 3726,
            "VillageName": "بنى سلامه "
          },
          {
            "Id": 3727,
            "VillageName": "برقاش "
          },
          {
            "Id": 3728,
            "VillageName": "ام دينار "
          },
          {
            "Id": 3729,
            "VillageName": "المنصورية "
          },
          {
            "Id": 3730,
            "VillageName": "المناشى "
          },
          {
            "Id": 3731,
            "VillageName": "القطا "
          },
          {
            "Id": 3732,
            "VillageName": "السبيل "
          },
          {
            "Id": 3733,
            "VillageName": "الرهاوى "
          },
          {
            "Id": 3734,
            "VillageName": "الحسانيين "
          },
          {
            "Id": 3735,
            "VillageName": "الحاجر "
          },
          {
            "Id": 3736,
            "VillageName": "الجلاتمة "
          },
          {
            "Id": 3737,
            "VillageName": "الأخصاص "
          },
          {
            "Id": 3738,
            "VillageName": "أتريس "
          },
          {
            "Id": 3739,
            "VillageName": "أبو غالب "
          },
          {
            "Id": 3740,
            "VillageName": "مدينة منشية القناطر "
          },
          {
            "Id": 3741,
            "VillageName": "العقباوي "
          },
          {
            "Id": 3742,
            "VillageName": "وردان "
          }
        ],
        "name": "مركزمنشأة القناطر( امبابه سابقأ)"
      },
      {
        "id": 243,
        "villages": [
          {
            "Id": 3743,
            "VillageName": "مدينة الشيخ زايد * "
          }
        ],
        "name": "قسم الشيخ زايد"
      },
      {
        "id": 244,
        "villages": [
          {
            "Id": 3744,
            "VillageName": "شياخة االقري السياحية "
          },
          {
            "Id": 3745,
            "VillageName": "شياخة حي الخمانل "
          },
          {
            "Id": 3746,
            "VillageName": "شياخة دريم لاند "
          },
          {
            "Id": 3747,
            "VillageName": "شياخة الحي المتميز "
          },
          {
            "Id": 3748,
            "VillageName": "شياخة الحي االتاسع "
          },
          {
            "Id": 3749,
            "VillageName": "شياخة الحي االثامن "
          },
          {
            "Id": 3750,
            "VillageName": "شياخة الحي االسابع "
          },
          {
            "Id": 3751,
            "VillageName": "شياخة الحي االثالث "
          },
          {
            "Id": 3752,
            "VillageName": "شياخة الحي االثاني "
          },
          {
            "Id": 3753,
            "VillageName": "شياخة الحي الأول "
          }
        ],
        "name": "قسم أول 6 أكتوبر"
      },
      {
        "id": 245,
        "villages": [
          {
            "Id": 3754,
            "VillageName": "شياخة الحي الثاني عشر "
          },
          {
            "Id": 3755,
            "VillageName": "شياخة الحي الحادي عشر "
          },
          {
            "Id": 3756,
            "VillageName": "شياخة الحي العاشر "
          },
          {
            "Id": 3757,
            "VillageName": "شياخة الحي السادس "
          },
          {
            "Id": 3758,
            "VillageName": "شياخة الحي الخامس "
          },
          {
            "Id": 3759,
            "VillageName": "شياخة الحي الرابع "
          }
        ],
        "name": "قسم ثان 6 أكتوبر"
      },
      {
        "id": 246,
        "villages": [
          {
            "Id": 3760,
            "VillageName": "منديشة "
          },
          {
            "Id": 3761,
            "VillageName": "طبل أمون "
          },
          {
            "Id": 3762,
            "VillageName": "ريس "
          },
          {
            "Id": 3763,
            "VillageName": "عين العزة "
          },
          {
            "Id": 3764,
            "VillageName": "عزبة مارود "
          },
          {
            "Id": 3765,
            "VillageName": "عزبة عين القصير وتوابعها-القطاعات 5,4,3,2,1 "
          },
          {
            "Id": 3766,
            "VillageName": "الجزائر "
          },
          {
            "Id": 3767,
            "VillageName": "المناجم * "
          },
          {
            "Id": 3768,
            "VillageName": "القصر "
          },
          {
            "Id": 3769,
            "VillageName": "القبالة "
          },
          {
            "Id": 3770,
            "VillageName": "العجوز "
          },
          {
            "Id": 3771,
            "VillageName": "الغربية "
          },
          {
            "Id": 3772,
            "VillageName": "الزبو "
          },
          {
            "Id": 3773,
            "VillageName": "الحارة "
          },
          {
            "Id": 3774,
            "VillageName": "التبينة "
          },
          {
            "Id": 3775,
            "VillageName": "مدينة الباويطى "
          }
        ],
        "name": "قسم الواحات البحرية"
      },
      {
        "id": 247,
        "villages": [
          {
            "Id": 3776,
            "VillageName": "الشياخة العاشرة (المحاجر ) "
          },
          {
            "Id": 3777,
            "VillageName": "الشياخة التاسعة (أرض ملك هيئة المجتمعات العمرانية ) "
          },
          {
            "Id": 3778,
            "VillageName": "الشياخة الثامنة( المشروع القومة للاسكان)(حى المنتزة) "
          },
          {
            "Id": 3779,
            "VillageName": "الشياخه السابعه (ابنى بيتك الرابعة ) "
          },
          {
            "Id": 3780,
            "VillageName": "الشياخة السادسة (ابنى بيتك الخامسة ) "
          },
          {
            "Id": 3781,
            "VillageName": "الشياخة الخامسة (هرم سيتى . "
          },
          {
            "Id": 3782,
            "VillageName": "الشياخة الرابعة ( ابنى بيتك السابعة الجديدة) "
          },
          {
            "Id": 3783,
            "VillageName": "الشياخة الثالثة ( ابنى بيتك السابعة ديمة) "
          },
          {
            "Id": 3784,
            "VillageName": "الشياخة الثانيــة ( الأمل ) "
          },
          {
            "Id": 3785,
            "VillageName": "الشياخة الأولى "
          }
        ],
        "name": "قسم ثالث 6 أكتوبر"
      }
    ]
  },
  {
    "id": 22,
    "name": "بني سويف",
    "centers": [
      {
        "id": 248,
        "villages": [
          {
            "Id": 3786,
            "VillageName": "الجزيرة بحرى "
          },
          {
            "Id": 3787,
            "VillageName": "المرماح قبلى "
          },
          {
            "Id": 3788,
            "VillageName": "مولد النبى "
          },
          {
            "Id": 3789,
            "VillageName": "مقبل "
          },
          {
            "Id": 3790,
            "VillageName": "سوق الخضار "
          },
          {
            "Id": 3791,
            "VillageName": "بنى عطية "
          },
          {
            "Id": 3792,
            "VillageName": "المرماح بحرى "
          },
          {
            "Id": 3793,
            "VillageName": "الغمراوى "
          },
          {
            "Id": 3794,
            "VillageName": "الرحبة و الجبالى "
          },
          {
            "Id": 3795,
            "VillageName": "الجزيرة قبلى "
          }
        ],
        "name": "قسم بنى سويف"
      },
      {
        "id": 249,
        "villages": [
          {
            "Id": 3796,
            "VillageName": "تل ناروز "
          },
          {
            "Id": 3797,
            "VillageName": "الزرابى "
          },
          {
            "Id": 3798,
            "VillageName": "نعيم "
          },
          {
            "Id": 3799,
            "VillageName": "نزلة معارك "
          },
          {
            "Id": 3800,
            "VillageName": "نزلة السعادنة "
          },
          {
            "Id": 3801,
            "VillageName": "نزلة أبو سليم "
          },
          {
            "Id": 3802,
            "VillageName": "منقريش "
          },
          {
            "Id": 3803,
            "VillageName": "منشأةعاصم "
          },
          {
            "Id": 3804,
            "VillageName": "منشأة حيدر يكن "
          },
          {
            "Id": 3805,
            "VillageName": "شريف "
          },
          {
            "Id": 3806,
            "VillageName": "سنور "
          },
          {
            "Id": 6376,
            "VillageName": "أبشناوبنى موسى "
          },
          {
            "Id": 6377,
            "VillageName": "الحكامنة "
          },
          {
            "Id": 6378,
            "VillageName": "الحلابية "
          },
          {
            "Id": 6379,
            "VillageName": "الدوالطة "
          },
          {
            "Id": 6380,
            "VillageName": "الدوية "
          },
          {
            "Id": 6381,
            "VillageName": "الكوم الأحمر "
          },
          {
            "Id": 6382,
            "VillageName": "أهناسيا الخضراء "
          },
          {
            "Id": 6383,
            "VillageName": "أهوه "
          },
          {
            "Id": 6384,
            "VillageName": "باروط "
          },
          {
            "Id": 6385,
            "VillageName": "باهـا العجوز "
          },
          {
            "Id": 6386,
            "VillageName": "بلفيا "
          },
          {
            "Id": 6387,
            "VillageName": "بنى بخيت "
          },
          {
            "Id": 6388,
            "VillageName": "بنى حمد "
          },
          {
            "Id": 6389,
            "VillageName": "بنى رضوان "
          },
          {
            "Id": 6390,
            "VillageName": "بنى سليمان الشرقية "
          },
          {
            "Id": 6391,
            "VillageName": "بنى عضان "
          },
          {
            "Id": 6392,
            "VillageName": "بنى هارون "
          },
          {
            "Id": 6393,
            "VillageName": "بياض العرب "
          },
          {
            "Id": 6394,
            "VillageName": "تزمنت الشرقية "
          },
          {
            "Id": 6395,
            "VillageName": "تزمنت الغربية "
          },
          {
            "Id": 6396,
            "VillageName": "حاجر بنى سليمان "
          },
          {
            "Id": 6397,
            "VillageName": "دموشيا "
          },
          {
            "Id": 6398,
            "VillageName": "رياض "
          }
        ],
        "name": "مركز بنى سويف"
      },
      {
        "id": 250,
        "villages": [
          {
            "Id": 3807,
            "VillageName": "مدينة بنى سويف الجديدة * "
          }
        ],
        "name": "قسم مدينة بنى سويف الجديدة"
      },
      {
        "id": 251,
        "villages": [
          {
            "Id": 3808,
            "VillageName": "منشاة طاهر "
          },
          {
            "Id": 3809,
            "VillageName": "الأنصار لشباب الخريجين "
          },
          {
            "Id": 3810,
            "VillageName": "ننا وبهننا "
          },
          {
            "Id": 3811,
            "VillageName": "نزلة شاويش "
          },
          {
            "Id": 3812,
            "VillageName": "نزلة خلف "
          },
          {
            "Id": 3813,
            "VillageName": "نزلة المماليك "
          },
          {
            "Id": 3814,
            "VillageName": "نزلة المشارقة "
          },
          {
            "Id": 3815,
            "VillageName": "ميانه "
          },
          {
            "Id": 3816,
            "VillageName": "منيل هانى "
          },
          {
            "Id": 3817,
            "VillageName": "منيل غيضان "
          },
          {
            "Id": 3818,
            "VillageName": "منهرو "
          },
          {
            "Id": 3819,
            "VillageName": "منهرة "
          },
          {
            "Id": 3820,
            "VillageName": "منشاة كساب "
          },
          {
            "Id": 3821,
            "VillageName": "منشاة عبدالصمد "
          },
          {
            "Id": 3822,
            "VillageName": "منشاة الحاج "
          },
          {
            "Id": 3823,
            "VillageName": "منشاة البدينى "
          },
          {
            "Id": 3824,
            "VillageName": "منشاة الأمراء "
          },
          {
            "Id": 3825,
            "VillageName": "معصرة نعسان "
          },
          {
            "Id": 3826,
            "VillageName": "كوم الرمل البحرى "
          },
          {
            "Id": 3827,
            "VillageName": "كفر أبو شهبه "
          },
          {
            "Id": 3828,
            "VillageName": "قلها "
          },
          {
            "Id": 3829,
            "VillageName": "قله "
          },
          {
            "Id": 3830,
            "VillageName": "قاى "
          },
          {
            "Id": 3831,
            "VillageName": "طما فيوم "
          },
          {
            "Id": 3832,
            "VillageName": "شرهى "
          },
          {
            "Id": 6399,
            "VillageName": "مدينة أهناسيا "
          },
          {
            "Id": 6400,
            "VillageName": "ادراسية "
          },
          {
            "Id": 6401,
            "VillageName": "البهسمون "
          },
          {
            "Id": 6402,
            "VillageName": "الشوبك "
          },
          {
            "Id": 6403,
            "VillageName": "العواونة "
          },
          {
            "Id": 6404,
            "VillageName": "المسيد الأبيض "
          },
          {
            "Id": 6405,
            "VillageName": "النويرة "
          },
          {
            "Id": 6406,
            "VillageName": "براوه الوقف "
          },
          {
            "Id": 6407,
            "VillageName": "بنى هانى "
          },
          {
            "Id": 6408,
            "VillageName": "بهنموه "
          },
          {
            "Id": 6409,
            "VillageName": "دير براوه "
          },
          {
            "Id": 6410,
            "VillageName": "سدمنت الجبل "
          }
        ],
        "name": "مركز أهناسيا"
      },
      {
        "id": 252,
        "villages": [
          {
            "Id": 3833,
            "VillageName": "هلـــيه "
          },
          {
            "Id": 3834,
            "VillageName": "جزيرة الفقاعى "
          },
          {
            "Id": 3835,
            "VillageName": "جبل النور "
          },
          {
            "Id": 3836,
            "VillageName": "بنى هاشم "
          },
          {
            "Id": 3837,
            "VillageName": "بنى مؤمنة "
          },
          {
            "Id": 3838,
            "VillageName": "بنى محمد الشرقية "
          },
          {
            "Id": 3839,
            "VillageName": "بنى ماضى "
          },
          {
            "Id": 3840,
            "VillageName": "بنى قاسم "
          },
          {
            "Id": 3841,
            "VillageName": "بنى عوض "
          },
          {
            "Id": 3842,
            "VillageName": "بنى عقبة "
          },
          {
            "Id": 3843,
            "VillageName": "بنى خليل "
          },
          {
            "Id": 3844,
            "VillageName": "بنى أحمد "
          },
          {
            "Id": 3845,
            "VillageName": "الشهيد حسن علام "
          },
          {
            "Id": 3846,
            "VillageName": "أم الجنازير "
          },
          {
            "Id": 3847,
            "VillageName": "الملاحيةالبحرية "
          },
          {
            "Id": 3848,
            "VillageName": "الملاحية "
          },
          {
            "Id": 3849,
            "VillageName": "الفقاعى "
          },
          {
            "Id": 3850,
            "VillageName": "الضباعنة "
          },
          {
            "Id": 3851,
            "VillageName": "السلطانى "
          },
          {
            "Id": 3852,
            "VillageName": "الجزيرة الشرقية "
          },
          {
            "Id": 3853,
            "VillageName": "البكرية "
          },
          {
            "Id": 3854,
            "VillageName": "البرانقة "
          },
          {
            "Id": 3855,
            "VillageName": "أبو شريان "
          },
          {
            "Id": 3856,
            "VillageName": "مدينة ببا "
          },
          {
            "Id": 3857,
            "VillageName": "هربشنت "
          },
          {
            "Id": 3858,
            "VillageName": "نزلة على كيلانى "
          },
          {
            "Id": 3859,
            "VillageName": "نزلة الشريف "
          },
          {
            "Id": 3860,
            "VillageName": "نزلة الزاوية "
          },
          {
            "Id": 3861,
            "VillageName": "منيل موسى "
          },
          {
            "Id": 3862,
            "VillageName": "منية الجيد "
          },
          {
            "Id": 3863,
            "VillageName": "منشاة أبو دخان "
          },
          {
            "Id": 3864,
            "VillageName": "كفر ناصر "
          },
          {
            "Id": 3865,
            "VillageName": "كفر منصور "
          },
          {
            "Id": 3866,
            "VillageName": "كفر جمعه "
          },
          {
            "Id": 3867,
            "VillageName": "قنبش الحمراء "
          },
          {
            "Id": 3868,
            "VillageName": "فزارة "
          },
          {
            "Id": 3869,
            "VillageName": "غياضة الغربية "
          },
          {
            "Id": 3870,
            "VillageName": "غياضة الشرقية "
          },
          {
            "Id": 3871,
            "VillageName": "طوه "
          },
          {
            "Id": 3872,
            "VillageName": "طنسا بنى مالو "
          },
          {
            "Id": 3873,
            "VillageName": "طرشوب "
          },
          {
            "Id": 3874,
            "VillageName": "طحا البيشة "
          },
          {
            "Id": 3875,
            "VillageName": "صفط راشين "
          },
          {
            "Id": 3876,
            "VillageName": "سدس الامراء "
          },
          {
            "Id": 3877,
            "VillageName": "زاوية الناوية "
          },
          {
            "Id": 3878,
            "VillageName": "رزقة المشارقة "
          },
          {
            "Id": 3879,
            "VillageName": "جزيرة ببا "
          }
        ],
        "name": "مركز ببا"
      },
      {
        "id": 253,
        "villages": [
          {
            "Id": 3880,
            "VillageName": "نزلة سعيد "
          },
          {
            "Id": 3881,
            "VillageName": "نزلة الديب "
          },
          {
            "Id": 3882,
            "VillageName": "منشاة سليمان "
          },
          {
            "Id": 3883,
            "VillageName": "منشاة أبو مليح "
          },
          {
            "Id": 3884,
            "VillageName": "مـــازورة "
          },
          {
            "Id": 3885,
            "VillageName": "كوم النور "
          },
          {
            "Id": 3886,
            "VillageName": "كوم الرملى القبلى "
          },
          {
            "Id": 3887,
            "VillageName": "كفر بنى على "
          },
          {
            "Id": 3888,
            "VillageName": "كفر الشيخ عابد "
          },
          {
            "Id": 3889,
            "VillageName": "عزبة قفطان "
          },
          {
            "Id": 3890,
            "VillageName": "عزبة الشنطور "
          },
          {
            "Id": 3891,
            "VillageName": "سربو "
          },
          {
            "Id": 3892,
            "VillageName": "دشطوط "
          },
          {
            "Id": 3893,
            "VillageName": "دشاشة "
          },
          {
            "Id": 3894,
            "VillageName": "بنى محمد راشد "
          },
          {
            "Id": 3895,
            "VillageName": "بنى حلة "
          },
          {
            "Id": 3896,
            "VillageName": "بدهل "
          },
          {
            "Id": 3897,
            "VillageName": "المحمودية "
          },
          {
            "Id": 3898,
            "VillageName": "القصبة "
          },
          {
            "Id": 3899,
            "VillageName": "العساكرة "
          },
          {
            "Id": 3900,
            "VillageName": "الشنطور "
          },
          {
            "Id": 3901,
            "VillageName": "مدينة سمسطا "
          },
          {
            "Id": 3902,
            "VillageName": "التضامن "
          },
          {
            "Id": 3903,
            "VillageName": "الأمــانى "
          }
        ],
        "name": "مركز سمسطا"
      },
      {
        "id": 254,
        "villages": [
          {
            "Id": 3904,
            "VillageName": "قرى استصلاح ( الحرية )* "
          },
          {
            "Id": 3905,
            "VillageName": "نزلة حنا "
          },
          {
            "Id": 3906,
            "VillageName": "نزلة البرقى "
          },
          {
            "Id": 3907,
            "VillageName": "نزلة أقفهص "
          },
          {
            "Id": 3908,
            "VillageName": "منشأةالسادات "
          },
          {
            "Id": 3909,
            "VillageName": "منشأةعمرو "
          },
          {
            "Id": 3910,
            "VillageName": "كفر منسابة "
          },
          {
            "Id": 3911,
            "VillageName": "كفر درويش "
          },
          {
            "Id": 3912,
            "VillageName": "عزبة تلت "
          },
          {
            "Id": 3913,
            "VillageName": "طلا "
          },
          {
            "Id": 3914,
            "VillageName": "صفط النور "
          },
          {
            "Id": 3915,
            "VillageName": "صفط العرفا "
          },
          {
            "Id": 3916,
            "VillageName": "صفط الخرسة "
          },
          {
            "Id": 3917,
            "VillageName": "صالح "
          },
          {
            "Id": 3918,
            "VillageName": "شنرى "
          },
          {
            "Id": 3919,
            "VillageName": "دلهانس "
          },
          {
            "Id": 3920,
            "VillageName": "جزيرة الوكلية "
          },
          {
            "Id": 3921,
            "VillageName": "تلت "
          },
          {
            "Id": 3922,
            "VillageName": "بنى منين "
          },
          {
            "Id": 3923,
            "VillageName": "بنى صالح "
          },
          {
            "Id": 3924,
            "VillageName": "بسفا "
          },
          {
            "Id": 3925,
            "VillageName": "الكنيسة "
          },
          {
            "Id": 3926,
            "VillageName": "القليعة "
          },
          {
            "Id": 3927,
            "VillageName": "القضابى "
          },
          {
            "Id": 3928,
            "VillageName": "الفنت الغربية(عزبةالفنت سابقا) "
          },
          {
            "Id": 3929,
            "VillageName": "الفنت الشرقية "
          },
          {
            "Id": 3930,
            "VillageName": "الشـقر (عزبة الشقرسابقا) "
          },
          {
            "Id": 3931,
            "VillageName": "الزاوية الخضراء "
          },
          {
            "Id": 3932,
            "VillageName": "الحيبة "
          },
          {
            "Id": 3933,
            "VillageName": "الجمهود "
          },
          {
            "Id": 3934,
            "VillageName": "الجفادون "
          },
          {
            "Id": 3935,
            "VillageName": "البرقى "
          },
          {
            "Id": 3936,
            "VillageName": "اقفهص "
          },
          {
            "Id": 3937,
            "VillageName": "أبسوج "
          },
          {
            "Id": 3938,
            "VillageName": "مدينة الفشن "
          }
        ],
        "name": "مركز الفشن"
      },
      {
        "id": 255,
        "villages": [
          {
            "Id": 3939,
            "VillageName": "ونا القس "
          },
          {
            "Id": 3940,
            "VillageName": "نزلة الجنيدى "
          },
          {
            "Id": 3941,
            "VillageName": "ميدوم "
          },
          {
            "Id": 3942,
            "VillageName": "منشأة أبو صير "
          },
          {
            "Id": 3943,
            "VillageName": "معصرة أبو صير "
          },
          {
            "Id": 3944,
            "VillageName": "كوم أدريجة "
          },
          {
            "Id": 3945,
            "VillageName": "كوم أبو راضى "
          },
          {
            "Id": 3946,
            "VillageName": "كفر بنى عثمان "
          },
          {
            "Id": 3947,
            "VillageName": "كفر أبجيج "
          },
          {
            "Id": 3948,
            "VillageName": "قمن العروس "
          },
          {
            "Id": 3949,
            "VillageName": "عطف أفوه "
          },
          {
            "Id": 3950,
            "VillageName": "صفط الغربية "
          },
          {
            "Id": 3951,
            "VillageName": "صفط الشرقية "
          },
          {
            "Id": 3952,
            "VillageName": "زاوية المصلوب "
          },
          {
            "Id": 3953,
            "VillageName": "جزيرة النور "
          },
          {
            "Id": 3954,
            "VillageName": "جزيرة المساعدة "
          },
          {
            "Id": 3955,
            "VillageName": "بنى نصير "
          },
          {
            "Id": 3956,
            "VillageName": "بنى محمد البحرية "
          },
          {
            "Id": 3957,
            "VillageName": "بنى غنيم "
          },
          {
            "Id": 3958,
            "VillageName": "بنى سليمان البحرية "
          },
          {
            "Id": 3959,
            "VillageName": "بنى حدير "
          },
          {
            "Id": 3960,
            "VillageName": "أنفسط "
          },
          {
            "Id": 3961,
            "VillageName": "الهرم "
          },
          {
            "Id": 3962,
            "VillageName": "النواميس "
          },
          {
            "Id": 3963,
            "VillageName": "الميمون "
          },
          {
            "Id": 3964,
            "VillageName": "الديابية "
          },
          {
            "Id": 3965,
            "VillageName": "الحومة "
          },
          {
            "Id": 3966,
            "VillageName": "أفوه "
          },
          {
            "Id": 3967,
            "VillageName": "أطواب "
          },
          {
            "Id": 3968,
            "VillageName": "أبويط "
          },
          {
            "Id": 3969,
            "VillageName": "أبو صير الملق "
          },
          {
            "Id": 3970,
            "VillageName": "مدينة الواسطى "
          },
          {
            "Id": 3971,
            "VillageName": "المصلوب "
          }
        ],
        "name": "مركز الواسطى"
      },
      {
        "id": 256,
        "villages": [
          {
            "Id": 3972,
            "VillageName": "منشأة هديب "
          },
          {
            "Id": 3973,
            "VillageName": "منشأة الشركة "
          },
          {
            "Id": 3974,
            "VillageName": "كوم أبو خلاد "
          },
          {
            "Id": 3975,
            "VillageName": "كفر الجزيرة "
          },
          {
            "Id": 3976,
            "VillageName": "غيط البحارى "
          },
          {
            "Id": 3977,
            "VillageName": "طنسا الملق "
          },
          {
            "Id": 3978,
            "VillageName": "طحا بوش "
          },
          {
            "Id": 3979,
            "VillageName": "دنديل "
          },
          {
            "Id": 3980,
            "VillageName": "دلاص "
          },
          {
            "Id": 3981,
            "VillageName": "جزيرة أبو صالح "
          },
          {
            "Id": 3982,
            "VillageName": "بهبشين "
          },
          {
            "Id": 3983,
            "VillageName": "بنى عدى "
          },
          {
            "Id": 3984,
            "VillageName": "بنى خليفة "
          },
          {
            "Id": 3985,
            "VillageName": "المنصورة "
          },
          {
            "Id": 3986,
            "VillageName": "الزيتون "
          },
          {
            "Id": 3987,
            "VillageName": "الرياض "
          },
          {
            "Id": 3988,
            "VillageName": "الحمام "
          },
          {
            "Id": 3989,
            "VillageName": "الحرجة "
          },
          {
            "Id": 3990,
            "VillageName": "البرج "
          },
          {
            "Id": 3991,
            "VillageName": "أشمنت "
          },
          {
            "Id": 3992,
            "VillageName": "مدينة ناصر "
          }
        ],
        "name": "مركز ناصر (بوش سابقا)"
      }
    ]
  },
  {
    "id": 23,
    "name": "الفيوم",
    "centers": [
      {
        "id": 257,
        "villages": [
          {
            "Id": 3993,
            "VillageName": "قحافة "
          },
          {
            "Id": 3994,
            "VillageName": "دار الرماد "
          },
          {
            "Id": 3995,
            "VillageName": "قسم ثان( درب الطباخين ) "
          },
          {
            "Id": 3996,
            "VillageName": "قسم أول ( النجارين )"
          }
        ],
        "name": "قسم أول الفيوم"
      },
      {
        "id": 258,
        "villages": [
          {
            "Id": 3997,
            "VillageName": "حي الزهور "
          },
          {
            "Id": 3998,
            "VillageName": "هوارة عدلان "
          },
          {
            "Id": 3999,
            "VillageName": "هوارة المقطع "
          },
          {
            "Id": 4000,
            "VillageName": "نزلة بشير "
          },
          {
            "Id": 4001,
            "VillageName": "نزلة الحريشى "
          },
          {
            "Id": 4002,
            "VillageName": "منشية سكران "
          },
          {
            "Id": 4003,
            "VillageName": "منشاة كمال "
          },
          {
            "Id": 4004,
            "VillageName": "منشاة فتيح "
          },
          {
            "Id": 4005,
            "VillageName": "منشاة عبدالله "
          },
          {
            "Id": 4006,
            "VillageName": "منشاة دمو "
          },
          {
            "Id": 4007,
            "VillageName": "منشاة بغدادى "
          },
          {
            "Id": 4008,
            "VillageName": "منشاة العشيرى "
          },
          {
            "Id": 4009,
            "VillageName": "منشاة الجزائر ( منشأة الملك فيصل سابقا ) "
          },
          {
            "Id": 4010,
            "VillageName": "مناشى الخطيب "
          },
          {
            "Id": 4011,
            "VillageName": "كفور النيل "
          },
          {
            "Id": 4012,
            "VillageName": "كفور الشيخ فضل "
          },
          {
            "Id": 4013,
            "VillageName": "العامرية "
          },
          {
            "Id": 4014,
            "VillageName": "سيلا "
          },
          {
            "Id": 4015,
            "VillageName": "سنوفر "
          },
          {
            "Id": 4016,
            "VillageName": "زاويةالكرداسة "
          },
          {
            "Id": 4017,
            "VillageName": "دمو "
          },
          {
            "Id": 4018,
            "VillageName": "دمشقين "
          },
          {
            "Id": 4019,
            "VillageName": "دسيا "
          },
          {
            "Id": 4020,
            "VillageName": "تلات "
          },
          {
            "Id": 4021,
            "VillageName": "بنى صالح "
          },
          {
            "Id": 4022,
            "VillageName": "الناصرية "
          },
          {
            "Id": 4023,
            "VillageName": "اللاهون "
          },
          {
            "Id": 4024,
            "VillageName": "المندرة "
          },
          {
            "Id": 4025,
            "VillageName": "العزب "
          },
          {
            "Id": 4026,
            "VillageName": "العدوة "
          },
          {
            "Id": 4027,
            "VillageName": "الصالحية "
          },
          {
            "Id": 4028,
            "VillageName": "السنباط "
          },
          {
            "Id": 4029,
            "VillageName": "الحميدية الجديدة "
          },
          {
            "Id": 4030,
            "VillageName": "الحادقة "
          },
          {
            "Id": 4031,
            "VillageName": "البسيونية "
          },
          {
            "Id": 4032,
            "VillageName": "الأعلام "
          },
          {
            "Id": 4033,
            "VillageName": "أبو السعود "
          },
          {
            "Id": 4034,
            "VillageName": "أبجيج "
          },
          {
            "Id": 4035,
            "VillageName": "منشاة الفيوم "
          }
        ],
        "name": "مركز الفيوم"
      },
      {
        "id": 259,
        "villages": [
          {
            "Id": 4036,
            "VillageName": "زين (هوجمين ) "
          },
          {
            "Id": 4037,
            "VillageName": "منشاة الدكتور الجمال"
          },
          {
            "Id": 4038,
            "VillageName": "معصرة صاوى "
          },
          {
            "Id": 4039,
            "VillageName": "كفر محفوظ "
          },
          {
            "Id": 4040,
            "VillageName": "كفر عميره "
          },
          {
            "Id": 4041,
            "VillageName": "قصر رشوان "
          },
          {
            "Id": 4042,
            "VillageName": "فرقص "
          },
          {
            "Id": 4043,
            "VillageName": "فانوس "
          },
          {
            "Id": 4044,
            "VillageName": "سرسنا "
          },
          {
            "Id": 4045,
            "VillageName": "دارالسلام "
          },
          {
            "Id": 4046,
            "VillageName": "المقاتلة "
          },
          {
            "Id": 4047,
            "VillageName": "المظاطلى "
          },
          {
            "Id": 4048,
            "VillageName": "الكومى "
          },
          {
            "Id": 4049,
            "VillageName": "الفهمية "
          },
          {
            "Id": 4050,
            "VillageName": "العزيزية "
          },
          {
            "Id": 4051,
            "VillageName": "الروضة "
          },
          {
            "Id": 4052,
            "VillageName": "الروبيات "
          },
          {
            "Id": 4053,
            "VillageName": "الجمهورية "
          },
          {
            "Id": 4054,
            "VillageName": "البرانى "
          },
          {
            "Id": 4055,
            "VillageName": "ابو طالب "
          },
          {
            "Id": 4056,
            "VillageName": "مدينة طامية "
          }
        ],
        "name": "مركز طامية"
      },
      {
        "id": 260,
        "villages": [
          {
            "Id": 4057,
            "VillageName": "منشاة عطيفة "
          },
          {
            "Id": 4058,
            "VillageName": "منشاة طنطاوى "
          },
          {
            "Id": 4059,
            "VillageName": "منشاة سنورس "
          },
          {
            "Id": 4060,
            "VillageName": "منشاة بنى عثمان "
          },
          {
            "Id": 4061,
            "VillageName": "منشاة السادات "
          },
          {
            "Id": 4062,
            "VillageName": "منشاة الدكم "
          },
          {
            "Id": 4063,
            "VillageName": "مطر طارس "
          },
          {
            "Id": 4064,
            "VillageName": "كفر فزارة "
          },
          {
            "Id": 4065,
            "VillageName": "فديمين "
          },
          {
            "Id": 4066,
            "VillageName": "سنهور البحرية "
          },
          {
            "Id": 4067,
            "VillageName": "سنهور القبلية "
          },
          {
            "Id": 4068,
            "VillageName": "جرفس "
          },
          {
            "Id": 4069,
            "VillageName": "جبله "
          },
          {
            "Id": 4070,
            "VillageName": "نقاليفه "
          },
          {
            "Id": 4071,
            "VillageName": "ترسا "
          },
          {
            "Id": 4072,
            "VillageName": "بهمو "
          },
          {
            "Id": 4073,
            "VillageName": "الكعابى القديمة "
          },
          {
            "Id": 4074,
            "VillageName": "الكعابى الجديدة "
          },
          {
            "Id": 4075,
            "VillageName": "السيليين "
          },
          {
            "Id": 4076,
            "VillageName": "السعيدية "
          },
          {
            "Id": 4077,
            "VillageName": "الزاوية الخضراء "
          },
          {
            "Id": 4078,
            "VillageName": "التوفيقية "
          },
          {
            "Id": 4079,
            "VillageName": "الأخصاص "
          },
          {
            "Id": 4080,
            "VillageName": "أبهيت الحجر "
          },
          {
            "Id": 4081,
            "VillageName": "مدينة سنورس "
          }
        ],
        "name": "مركز سنورس"
      },
      {
        "id": 261,
        "villages": [
          {
            "Id": 4082,
            "VillageName": "أبو شنب "
          },
          {
            "Id": 4083,
            "VillageName": "منشاة هويدى "
          },
          {
            "Id": 4084,
            "VillageName": "كفر عبود "
          },
          {
            "Id": 4085,
            "VillageName": "قصر بياض "
          },
          {
            "Id": 4086,
            "VillageName": "طحاوى "
          },
          {
            "Id": 4087,
            "VillageName": "طبهار "
          },
          {
            "Id": 4088,
            "VillageName": "شكشوك "
          },
          {
            "Id": 4089,
            "VillageName": "سنرو البحرية "
          },
          {
            "Id": 4090,
            "VillageName": "سنرو القبلية "
          },
          {
            "Id": 4091,
            "VillageName": "زيد "
          },
          {
            "Id": 4092,
            "VillageName": "النصارية "
          },
          {
            "Id": 4093,
            "VillageName": "العلوية "
          },
          {
            "Id": 4094,
            "VillageName": "العجميين "
          },
          {
            "Id": 4095,
            "VillageName": "الخالدية "
          },
          {
            "Id": 4096,
            "VillageName": "الجيلانى "
          },
          {
            "Id": 4097,
            "VillageName": "أبو كساه "
          },
          {
            "Id": 4098,
            "VillageName": "أبو دنقاش "
          },
          {
            "Id": 4099,
            "VillageName": "مدينة أبشواى "
          }
        ],
        "name": "مركز ابشواى"
      },
      {
        "id": 262,
        "villages": [
          {
            "Id": 4100,
            "VillageName": "أهريت (أهريت الغربية ) "
          },
          {
            "Id": 4101,
            "VillageName": "نوارة "
          },
          {
            "Id": 4102,
            "VillageName": "منشاة فيصل "
          },
          {
            "Id": 4103,
            "VillageName": "منشاة علوى "
          },
          {
            "Id": 4104,
            "VillageName": "منشاة عبد المجيد "
          },
          {
            "Id": 4105,
            "VillageName": "منشاة ظافر "
          },
          {
            "Id": 4106,
            "VillageName": "منشاة صبرى "
          },
          {
            "Id": 4107,
            "VillageName": "منشاة سيف النصر "
          },
          {
            "Id": 4108,
            "VillageName": "منشاة رمزى "
          },
          {
            "Id": 4109,
            "VillageName": "منشاة رحمى "
          },
          {
            "Id": 4110,
            "VillageName": "منشاة ربيع "
          },
          {
            "Id": 4111,
            "VillageName": "منشاة حلفه "
          },
          {
            "Id": 4112,
            "VillageName": "منشاة الامير ( محمد فهمى ) "
          },
          {
            "Id": 4113,
            "VillageName": "معصرة عرفه "
          },
          {
            "Id": 4114,
            "VillageName": "معجون "
          },
          {
            "Id": 4115,
            "VillageName": "مطول "
          },
          {
            "Id": 4116,
            "VillageName": "كفور حشمت "
          },
          {
            "Id": 4117,
            "VillageName": "كفر الزعفرانى "
          },
          {
            "Id": 4118,
            "VillageName": "قلهانه "
          },
          {
            "Id": 4119,
            "VillageName": "قلمشاه "
          },
          {
            "Id": 4120,
            "VillageName": "قصر الباسل "
          },
          {
            "Id": 4121,
            "VillageName": "عنك "
          },
          {
            "Id": 4122,
            "VillageName": "عزبة قلمشاة "
          },
          {
            "Id": 4123,
            "VillageName": "شدموة "
          },
          {
            "Id": 4124,
            "VillageName": "دانيال "
          },
          {
            "Id": 4125,
            "VillageName": "خلف "
          },
          {
            "Id": 4126,
            "VillageName": "جردو "
          },
          {
            "Id": 4127,
            "VillageName": "تطون "
          },
          {
            "Id": 4128,
            "VillageName": "بحر أبو المير "
          },
          {
            "Id": 4129,
            "VillageName": "الونايسة "
          },
          {
            "Id": 4130,
            "VillageName": "منية الحيط "
          },
          {
            "Id": 4131,
            "VillageName": "المحمودية "
          },
          {
            "Id": 4132,
            "VillageName": "القاسمية "
          },
          {
            "Id": 4133,
            "VillageName": "الغرق القبلى "
          },
          {
            "Id": 4134,
            "VillageName": "الغرق "
          },
          {
            "Id": 4135,
            "VillageName": "الغابه "
          },
          {
            "Id": 4136,
            "VillageName": "العوفى "
          },
          {
            "Id": 4137,
            "VillageName": "عتامنة المزارعة "
          },
          {
            "Id": 4138,
            "VillageName": "السعدة "
          },
          {
            "Id": 4139,
            "VillageName": "الحسينية "
          },
          {
            "Id": 4140,
            "VillageName": "الحجر "
          },
          {
            "Id": 4141,
            "VillageName": "الحامدية "
          },
          {
            "Id": 4142,
            "VillageName": "الجعافرة "
          },
          {
            "Id": 4143,
            "VillageName": "أبو صير دفنو "
          },
          {
            "Id": 4144,
            "VillageName": "أبو دفية "
          },
          {
            "Id": 4145,
            "VillageName": "أبو جندير "
          },
          {
            "Id": 4146,
            "VillageName": "مدينة اطسا وتشمل: دفنو - عتامنه الجعافرة - الصوافنة "
          }
        ],
        "name": "مركز أطسا"
      },
      {
        "id": 263,
        "villages": [
          {
            "Id": 4147,
            "VillageName": "سيدنا الخضر "
          },
          {
            "Id": 4148,
            "VillageName": "علي باشا الروبي "
          },
          {
            "Id": 4149,
            "VillageName": "موسي ميزار "
          },
          {
            "Id": 4150,
            "VillageName": "وادي الريان "
          },
          {
            "Id": 4151,
            "VillageName": "قارون "
          },
          {
            "Id": 4152,
            "VillageName": "شعلان "
          },
          {
            "Id": 4153,
            "VillageName": "رواق "
          },
          {
            "Id": 4154,
            "VillageName": "المقراني "
          },
          {
            "Id": 4155,
            "VillageName": "الحامولى "
          },
          {
            "Id": 4156,
            "VillageName": "مدينة يوسف الصديق "
          }
        ],
        "name": "مركز يوسف الصديق"
      },
      {
        "id": 264,
        "villages": [
          {
            "Id": 4157,
            "VillageName": "مدينة الفيوم الجديدة"
          }
        ],
        "name": "مدينة الفيوم الجديدة *"
      },
      {
        "id": 265,
        "villages": [
          {
            "Id": 4158,
            "VillageName": "كحك "
          },
          {
            "Id": 4159,
            "VillageName": "قصر الجبالى "
          },
          {
            "Id": 4160,
            "VillageName": "قصر أبو لطيعه باسل "
          },
          {
            "Id": 4161,
            "VillageName": "بطن اهريت ( الخواجات سابقا) "
          },
          {
            "Id": 4162,
            "VillageName": "النزلة "
          },
          {
            "Id": 4163,
            "VillageName": "المشرك قبلى "
          },
          {
            "Id": 4164,
            "VillageName": "غيضان بحرى "
          },
          {
            "Id": 4165,
            "VillageName": "الصعايدة القبلية "
          },
          {
            "Id": 4166,
            "VillageName": "الشواشنة "
          }
        ],
        "name": "مركز الشواشنة"
      },
      {
        "id": 266,
        "villages": [
          {
            "Id": 4167,
            "VillageName": "شياخة قسم رابع "
          },
          {
            "Id": 4168,
            "VillageName": "شياخة قسم ثالث "
          }
        ],
        "name": "قسم ثان الفيوم"
      }
    ]
  },
  {
    "id": 24,
    "name": "المنيا",
    "centers": [
      {
        "id": 267,
        "villages": [
          {
            "Id": 4169,
            "VillageName": "ميشيل وهبة "
          },
          {
            "Id": 4170,
            "VillageName": "خاطر على "
          },
          {
            "Id": 4171,
            "VillageName": "سليمان على "
          },
          {
            "Id": 4172,
            "VillageName": "سيد جلال "
          },
          {
            "Id": 4173,
            "VillageName": "الأخصاص "
          }
        ],
        "name": "قسم أول المنيا"
      },
      {
        "id": 268,
        "villages": [
          {
            "Id": 4174,
            "VillageName": "عمار حسين ( حي طه السبع ) "
          },
          {
            "Id": 4175,
            "VillageName": "على عبدالمطلب "
          },
          {
            "Id": 4176,
            "VillageName": "محمد يوسف "
          },
          {
            "Id": 4177,
            "VillageName": "كفر المنصورة "
          },
          {
            "Id": 4178,
            "VillageName": "شاكر سيحة "
          },
          {
            "Id": 6411,
            "VillageName": "قسم ثان العريش ويتبعة المناطق السكنية والتجارية والمصالح الحكومية "
          }
        ],
        "name": "قسم ثان المنيا"
      },
      {
        "id": 269,
        "villages": [
          {
            "Id": 4179,
            "VillageName": "محمود شادى "
          },
          {
            "Id": 4180,
            "VillageName": "سيد عثمان "
          },
          {
            "Id": 4181,
            "VillageName": "عمار حسين "
          }
        ],
        "name": "قسم ثالث المنيا"
      },
      {
        "id": 270,
        "villages": [
          {
            "Id": 4182,
            "VillageName": "مدينة المنيا الجديدة"
          }
        ],
        "name": "قسم المنيا الجديدة *"
      },
      {
        "id": 271,
        "villages": [
          {
            "Id": 4183,
            "VillageName": "قرية الأمل "
          },
          {
            "Id": 4184,
            "VillageName": "قرية الكمال "
          },
          {
            "Id": 4185,
            "VillageName": "ههيا "
          },
          {
            "Id": 4186,
            "VillageName": "نزلة فرج الله متى "
          },
          {
            "Id": 4187,
            "VillageName": "نزلة عبيد "
          },
          {
            "Id": 4188,
            "VillageName": "نزلة حسين على "
          },
          {
            "Id": 4189,
            "VillageName": "نزلة الفلاحين "
          },
          {
            "Id": 4190,
            "VillageName": "مهدية "
          },
          {
            "Id": 4191,
            "VillageName": "منشأة الدهب القبلية ( العبيد ) "
          },
          {
            "Id": 4192,
            "VillageName": "منشأة الدهب البحرية "
          },
          {
            "Id": 4193,
            "VillageName": "منشأة الحواصلية "
          },
          {
            "Id": 4194,
            "VillageName": "ماقوسه "
          },
          {
            "Id": 4195,
            "VillageName": "طوه "
          },
          {
            "Id": 4196,
            "VillageName": "طوخ الخيل "
          },
          {
            "Id": 4197,
            "VillageName": "طهنشا "
          },
          {
            "Id": 4198,
            "VillageName": "طهنا الجبل "
          },
          {
            "Id": 4199,
            "VillageName": "صفط اللبن "
          },
          {
            "Id": 4200,
            "VillageName": "صفط الخمار الغربية "
          },
          {
            "Id": 4201,
            "VillageName": "صفط الخمار الشرقية "
          },
          {
            "Id": 4202,
            "VillageName": "صفط الخمار الأصلية "
          },
          {
            "Id": 4203,
            "VillageName": "سواده "
          },
          {
            "Id": 4204,
            "VillageName": "زهره "
          },
          {
            "Id": 4205,
            "VillageName": "زاوية سلطان "
          },
          {
            "Id": 4206,
            "VillageName": "ريده "
          },
          {
            "Id": 4207,
            "VillageName": "دير عطية "
          },
          {
            "Id": 4208,
            "VillageName": "دمشير "
          },
          {
            "Id": 4209,
            "VillageName": "دمشا وهاشم "
          },
          {
            "Id": 4210,
            "VillageName": "دماريس "
          },
          {
            "Id": 4211,
            "VillageName": "تلة "
          },
          {
            "Id": 4212,
            "VillageName": "بهدال "
          },
          {
            "Id": 4213,
            "VillageName": "بنى مهدى ( نزلة مهدى سابقا ) "
          },
          {
            "Id": 4214,
            "VillageName": "بنى محمد سلطان "
          },
          {
            "Id": 4215,
            "VillageName": "بنى قمجر "
          },
          {
            "Id": 4216,
            "VillageName": "بنى حماد "
          },
          {
            "Id": 4217,
            "VillageName": "بنى حسن الأشراف "
          },
          {
            "Id": 4218,
            "VillageName": "بنى أحمد الغربية "
          },
          {
            "Id": 4219,
            "VillageName": "المطاهرة البحرية "
          },
          {
            "Id": 4220,
            "VillageName": "الداوودية "
          },
          {
            "Id": 4221,
            "VillageName": "الحواصلية "
          },
          {
            "Id": 4222,
            "VillageName": "الحوارتة "
          },
          {
            "Id": 4223,
            "VillageName": "البرجاية "
          },
          {
            "Id": 4224,
            "VillageName": "الإسماعيلية "
          },
          {
            "Id": 4225,
            "VillageName": "أدمو "
          }
        ],
        "name": "مركز المنيا"
      },
      {
        "id": 272,
        "villages": [
          {
            "Id": 4226,
            "VillageName": "نزلة مكين "
          },
          {
            "Id": 4227,
            "VillageName": "نزلة حرز "
          },
          {
            "Id": 4228,
            "VillageName": "نزلة جريس "
          },
          {
            "Id": 4229,
            "VillageName": "نزلة أولاد جويد "
          },
          {
            "Id": 4230,
            "VillageName": "نزلة السرو "
          },
          {
            "Id": 4231,
            "VillageName": "نزلة أسمنت "
          },
          {
            "Id": 4232,
            "VillageName": "منهرى "
          },
          {
            "Id": 4233,
            "VillageName": "منشأة زعفرانة "
          },
          {
            "Id": 4234,
            "VillageName": "منشاة دعبس "
          },
          {
            "Id": 4235,
            "VillageName": "منشاة النصر "
          },
          {
            "Id": 4236,
            "VillageName": "منسفيس "
          },
          {
            "Id": 4237,
            "VillageName": "منتوت "
          },
          {
            "Id": 4238,
            "VillageName": "كوم المحرص "
          },
          {
            "Id": 4239,
            "VillageName": "كوم الزهير "
          },
          {
            "Id": 4240,
            "VillageName": "كفر لبس "
          },
          {
            "Id": 4241,
            "VillageName": "كفر الفيلة "
          },
          {
            "Id": 4242,
            "VillageName": "صنيم "
          },
          {
            "Id": 4243,
            "VillageName": "شرارة "
          },
          {
            "Id": 4244,
            "VillageName": "سفاى "
          },
          {
            "Id": 4245,
            "VillageName": "ساقية موسى "
          },
          {
            "Id": 4246,
            "VillageName": "زعفرانة "
          },
          {
            "Id": 4247,
            "VillageName": "زاوية حاتم "
          },
          {
            "Id": 4248,
            "VillageName": "ريحانة "
          },
          {
            "Id": 4249,
            "VillageName": "جزيرة شيبة "
          },
          {
            "Id": 4250,
            "VillageName": "جريس "
          },
          {
            "Id": 4251,
            "VillageName": "بنى موسى "
          },
          {
            "Id": 4252,
            "VillageName": "بنى محمد شعراوى "
          },
          {
            "Id": 4253,
            "VillageName": "بنى عبيد "
          },
          {
            "Id": 4254,
            "VillageName": "بنى سعيد "
          },
          {
            "Id": 4255,
            "VillageName": "بنى خيار "
          },
          {
            "Id": 4256,
            "VillageName": "بنى حسن الشروق "
          },
          {
            "Id": 4257,
            "VillageName": "بلنصورة "
          },
          {
            "Id": 4258,
            "VillageName": "النحال "
          },
          {
            "Id": 4259,
            "VillageName": "المطاهرة القبلية "
          },
          {
            "Id": 4260,
            "VillageName": "الكرم "
          },
          {
            "Id": 4261,
            "VillageName": "الفقاعى "
          },
          {
            "Id": 4262,
            "VillageName": "الشيخ تمى "
          },
          {
            "Id": 4263,
            "VillageName": "السنبلاوين "
          },
          {
            "Id": 4264,
            "VillageName": "السلطان حسن "
          },
          {
            "Id": 4265,
            "VillageName": "السحالة "
          },
          {
            "Id": 4266,
            "VillageName": "الحساينة "
          },
          {
            "Id": 4267,
            "VillageName": "البربا "
          },
          {
            "Id": 4268,
            "VillageName": "أسمنت "
          },
          {
            "Id": 4269,
            "VillageName": "أتليدم "
          },
          {
            "Id": 4270,
            "VillageName": "أبيوها "
          },
          {
            "Id": 4271,
            "VillageName": "أبو قرقاص البلد "
          },
          {
            "Id": 4272,
            "VillageName": "أبو الصفا "
          },
          {
            "Id": 4273,
            "VillageName": "مدينة الفكرية : تشمل منشأة الفكرية "
          }
        ],
        "name": "مركز أبو قرقاص"
      },
      {
        "id": 273,
        "villages": [
          {
            "Id": 4274,
            "VillageName": "قسم رابع "
          },
          {
            "Id": 4275,
            "VillageName": "قسم ثالث "
          },
          {
            "Id": 4276,
            "VillageName": "قسم ثان "
          },
          {
            "Id": 4277,
            "VillageName": "قسم أول "
          }
        ],
        "name": "قسم ملوى*"
      },
      {
        "id": 274,
        "villages": [
          {
            "Id": 4278,
            "VillageName": "هـــور "
          },
          {
            "Id": 4279,
            "VillageName": "نــواى "
          },
          {
            "Id": 4280,
            "VillageName": "نـزلة شرموخ "
          },
          {
            "Id": 4281,
            "VillageName": "نزلة حمزاوى "
          },
          {
            "Id": 4282,
            "VillageName": "نزلة تونه "
          },
          {
            "Id": 4283,
            "VillageName": "نزلة تنده "
          },
          {
            "Id": 4284,
            "VillageName": "نزلة العرين قبلى "
          },
          {
            "Id": 4285,
            "VillageName": "نجع مركب "
          },
          {
            "Id": 4286,
            "VillageName": "منشاة سيف الغربية "
          },
          {
            "Id": 4287,
            "VillageName": "منشاة سيف النصر الشرقية "
          },
          {
            "Id": 4288,
            "VillageName": "منشاة المغالقة "
          },
          {
            "Id": 4289,
            "VillageName": "قلندول "
          },
          {
            "Id": 4290,
            "VillageName": "قلبا "
          },
          {
            "Id": 4291,
            "VillageName": "قصر هور "
          },
          {
            "Id": 4292,
            "VillageName": "عزبة مصطفى حمدى "
          },
          {
            "Id": 4293,
            "VillageName": "منشأة جلال الغربية "
          },
          {
            "Id": 4294,
            "VillageName": "شعراوى "
          },
          {
            "Id": 4295,
            "VillageName": "سنجرج "
          },
          {
            "Id": 4296,
            "VillageName": "ديروط أم نخله "
          },
          {
            "Id": 4297,
            "VillageName": "دير البرشا "
          },
          {
            "Id": 4298,
            "VillageName": "دير أبو حنس "
          },
          {
            "Id": 4299,
            "VillageName": "دروه "
          },
          {
            "Id": 4300,
            "VillageName": "جلال الشرقية "
          },
          {
            "Id": 4301,
            "VillageName": "تونه الجبل "
          },
          {
            "Id": 4302,
            "VillageName": "تنده "
          },
          {
            "Id": 4303,
            "VillageName": "بنى روح "
          },
          {
            "Id": 4304,
            "VillageName": "بنى خالد "
          },
          {
            "Id": 4305,
            "VillageName": "بنى حافظ "
          },
          {
            "Id": 4306,
            "VillageName": "أم قمص "
          },
          {
            "Id": 4307,
            "VillageName": "المعصرة بحرى "
          },
          {
            "Id": 4308,
            "VillageName": "المحرص "
          },
          {
            "Id": 4309,
            "VillageName": "العرين قبلى "
          },
          {
            "Id": 4310,
            "VillageName": "العرين بحرى "
          },
          {
            "Id": 4311,
            "VillageName": "الشيخ عباده "
          },
          {
            "Id": 4312,
            "VillageName": "الشيخ شبيكه "
          },
          {
            "Id": 4313,
            "VillageName": "الشيخ حسين "
          },
          {
            "Id": 4314,
            "VillageName": "السواهجه "
          },
          {
            "Id": 4315,
            "VillageName": "الريرمون "
          },
          {
            "Id": 4316,
            "VillageName": "الحرية (إبراهيم عوض ) "
          },
          {
            "Id": 4317,
            "VillageName": "الروضة "
          },
          {
            "Id": 4318,
            "VillageName": "البياضيه "
          },
          {
            "Id": 4319,
            "VillageName": "البركه "
          },
          {
            "Id": 4320,
            "VillageName": "البرشا "
          },
          {
            "Id": 4321,
            "VillageName": "البراجيل "
          },
          {
            "Id": 4322,
            "VillageName": "الاشمونين "
          },
          {
            "Id": 4323,
            "VillageName": "الادارة "
          },
          {
            "Id": 4324,
            "VillageName": "أتقا "
          },
          {
            "Id": 4325,
            "VillageName": "أبو قلته "
          },
          {
            "Id": 4326,
            "VillageName": "أبشادات "
          }
        ],
        "name": "مركز ملوى"
      },
      {
        "id": 275,
        "villages": [
          {
            "Id": 4327,
            "VillageName": "نزلة محمود "
          },
          {
            "Id": 4328,
            "VillageName": "نزلة محمد سمهان "
          },
          {
            "Id": 4329,
            "VillageName": "نزلة عبد المسيح "
          },
          {
            "Id": 4330,
            "VillageName": "نزلة سعيد "
          },
          {
            "Id": 4331,
            "VillageName": "نزلة أولاد مرجان "
          },
          {
            "Id": 4332,
            "VillageName": "نزلة الحسايبة "
          },
          {
            "Id": 4333,
            "VillageName": "نزلة البدرمان "
          },
          {
            "Id": 4334,
            "VillageName": "منشاة سمهان "
          },
          {
            "Id": 4335,
            "VillageName": "منشاة خزام الغربية "
          },
          {
            "Id": 4336,
            "VillageName": "كفر خزام "
          },
          {
            "Id": 4337,
            "VillageName": "تل العمارنة الغربى "
          },
          {
            "Id": 4338,
            "VillageName": "طوخ "
          },
          {
            "Id": 4339,
            "VillageName": "زعبرة "
          },
          {
            "Id": 4340,
            "VillageName": "دلجا "
          },
          {
            "Id": 4341,
            "VillageName": "جزيرة تل بنى عمران "
          },
          {
            "Id": 4342,
            "VillageName": "تل بنى عمران "
          },
          {
            "Id": 4343,
            "VillageName": "تانوف "
          },
          {
            "Id": 4344,
            "VillageName": "بنى عمران "
          },
          {
            "Id": 4345,
            "VillageName": "بنى سالم "
          },
          {
            "Id": 4346,
            "VillageName": "بنى حرام "
          },
          {
            "Id": 4347,
            "VillageName": "الناصرية "
          },
          {
            "Id": 4348,
            "VillageName": "العمارية الشرقية "
          },
          {
            "Id": 4349,
            "VillageName": "العمارية الغربية "
          },
          {
            "Id": 4350,
            "VillageName": "السوالم "
          },
          {
            "Id": 4351,
            "VillageName": "الرحمانية "
          },
          {
            "Id": 4352,
            "VillageName": "الحاج قنديل "
          },
          {
            "Id": 4353,
            "VillageName": "البدرمان "
          },
          {
            "Id": 4354,
            "VillageName": "أسمو العروس "
          },
          {
            "Id": 4355,
            "VillageName": "أبو خلقه "
          },
          {
            "Id": 4356,
            "VillageName": "مدينة دير مواس "
          }
        ],
        "name": "مركز دير مواس"
      },
      {
        "id": 276,
        "villages": [
          {
            "Id": 4357,
            "VillageName": "أطسا المحطة "
          },
          {
            "Id": 4358,
            "VillageName": "قلوصنا "
          },
          {
            "Id": 4359,
            "VillageName": "دير جبل الطير "
          },
          {
            "Id": 4360,
            "VillageName": "جبل الطير "
          },
          {
            "Id": 4361,
            "VillageName": "بني خالد "
          },
          {
            "Id": 4362,
            "VillageName": "العوايسة "
          },
          {
            "Id": 4363,
            "VillageName": "الشعراوية "
          },
          {
            "Id": 4364,
            "VillageName": "الشراينة "
          },
          {
            "Id": 4365,
            "VillageName": "السرارية "
          },
          {
            "Id": 4366,
            "VillageName": "الخمايشة "
          },
          {
            "Id": 4367,
            "VillageName": "الحتاحته "
          },
          {
            "Id": 4368,
            "VillageName": "الجلاء "
          },
          {
            "Id": 4369,
            "VillageName": "الجزائر "
          },
          {
            "Id": 4370,
            "VillageName": "التوفيقية "
          },
          {
            "Id": 4371,
            "VillageName": "البيهو "
          },
          {
            "Id": 4372,
            "VillageName": "أطسا البلد "
          },
          {
            "Id": 4373,
            "VillageName": "مدينة سمالوط "
          }
        ],
        "name": "مركز سمالوط شرق"
      },
      {
        "id": 277,
        "villages": [
          {
            "Id": 4374,
            "VillageName": "طرفا القبلية "
          },
          {
            "Id": 4375,
            "VillageName": "العلا "
          },
          {
            "Id": 4376,
            "VillageName": "الرخاء "
          },
          {
            "Id": 4377,
            "VillageName": "الاعتزاز "
          },
          {
            "Id": 4378,
            "VillageName": "الوفاء "
          },
          {
            "Id": 4379,
            "VillageName": "مبارك العزيمة "
          },
          {
            "Id": 4380,
            "VillageName": "نزلة شادى "
          },
          {
            "Id": 4381,
            "VillageName": "نزلة العمودين "
          },
          {
            "Id": 4382,
            "VillageName": "نزلة طما "
          },
          {
            "Id": 4383,
            "VillageName": "منقطين "
          },
          {
            "Id": 4384,
            "VillageName": "منشأة الشريعى "
          },
          {
            "Id": 4385,
            "VillageName": "منشأة منقطين "
          },
          {
            "Id": 4386,
            "VillageName": "منشأة بدينى "
          },
          {
            "Id": 4387,
            "VillageName": "كوم اللوفى "
          },
          {
            "Id": 4388,
            "VillageName": "كوم الروبى(الراهب سابقا) "
          },
          {
            "Id": 4389,
            "VillageName": "عزبة القمادير "
          },
          {
            "Id": 4390,
            "VillageName": "طرفا البحرية "
          },
          {
            "Id": 4391,
            "VillageName": "طحا الأعمدة "
          },
          {
            "Id": 4392,
            "VillageName": "شوشة "
          },
          {
            "Id": 4393,
            "VillageName": "ساقية داقوف "
          },
          {
            "Id": 4394,
            "VillageName": "دير سمالوط "
          },
          {
            "Id": 4395,
            "VillageName": "دلقام "
          },
          {
            "Id": 4396,
            "VillageName": "دفش "
          },
          {
            "Id": 4397,
            "VillageName": "داقوف "
          },
          {
            "Id": 4398,
            "VillageName": "حسن باشا "
          },
          {
            "Id": 4399,
            "VillageName": "بوجه "
          },
          {
            "Id": 4400,
            "VillageName": "بنى غنى "
          },
          {
            "Id": 4401,
            "VillageName": "بنى سمرج "
          },
          {
            "Id": 4402,
            "VillageName": "بنى حكم "
          },
          {
            "Id": 4403,
            "VillageName": "القمادير "
          },
          {
            "Id": 4404,
            "VillageName": "القطوشة "
          },
          {
            "Id": 4405,
            "VillageName": "الغرباوى "
          },
          {
            "Id": 4406,
            "VillageName": "الطيبة "
          },
          {
            "Id": 4407,
            "VillageName": "الشيخ عبداللاه "
          },
          {
            "Id": 4408,
            "VillageName": "السلام "
          },
          {
            "Id": 4409,
            "VillageName": "الروضة "
          },
          {
            "Id": 4410,
            "VillageName": "الحلمية "
          },
          {
            "Id": 4411,
            "VillageName": "أسطال "
          },
          {
            "Id": 4412,
            "VillageName": "ابو سيدهم "
          },
          {
            "Id": 4413,
            "VillageName": "ابراهيم باشا "
          }
        ],
        "name": "مركز سمالوط غرب"
      },
      {
        "id": 278,
        "villages": [
          {
            "Id": 4414,
            "VillageName": "الهمة رقم 1 "
          },
          {
            "Id": 4415,
            "VillageName": "نزلة أولاد الشيخ على"
          },
          {
            "Id": 4416,
            "VillageName": "منشية منبال "
          },
          {
            "Id": 4417,
            "VillageName": "منشاة لطف الله "
          },
          {
            "Id": 4418,
            "VillageName": "منبال "
          },
          {
            "Id": 4419,
            "VillageName": "مرزوق "
          },
          {
            "Id": 4420,
            "VillageName": "كوم والى "
          },
          {
            "Id": 4421,
            "VillageName": "كوم مطاى "
          },
          {
            "Id": 4422,
            "VillageName": "كفور الصولية "
          },
          {
            "Id": 4423,
            "VillageName": "كفر الكوادى "
          },
          {
            "Id": 4424,
            "VillageName": "هواره "
          },
          {
            "Id": 4425,
            "VillageName": "سيلة الغربية "
          },
          {
            "Id": 4426,
            "VillageName": "سيلة الشرقية "
          },
          {
            "Id": 4427,
            "VillageName": "حلوه "
          },
          {
            "Id": 4428,
            "VillageName": "جوادة "
          },
          {
            "Id": 4429,
            "VillageName": "بنى عمار "
          },
          {
            "Id": 4430,
            "VillageName": "برد نوها "
          },
          {
            "Id": 4431,
            "VillageName": "الشيخ حسن "
          },
          {
            "Id": 4432,
            "VillageName": "الروضة "
          },
          {
            "Id": 4433,
            "VillageName": "الاتلات "
          },
          {
            "Id": 4434,
            "VillageName": "أدقاق المسك "
          },
          {
            "Id": 4435,
            "VillageName": "أبو عزيز "
          },
          {
            "Id": 4436,
            "VillageName": "أبو شحاته "
          },
          {
            "Id": 4437,
            "VillageName": "أبو حسيبة "
          },
          {
            "Id": 4438,
            "VillageName": "أبوان "
          },
          {
            "Id": 4439,
            "VillageName": "ابجاج الحطب "
          },
          {
            "Id": 4440,
            "VillageName": "مدينة مطاى "
          }
        ],
        "name": "مركز مطاى"
      },
      {
        "id": 279,
        "villages": [
          {
            "Id": 4441,
            "VillageName": "السلام "
          },
          {
            "Id": 4442,
            "VillageName": "السعدية "
          },
          {
            "Id": 4443,
            "VillageName": "الحسينية "
          },
          {
            "Id": 4444,
            "VillageName": "الجندية "
          },
          {
            "Id": 4445,
            "VillageName": "الجرنوس "
          },
          {
            "Id": 4446,
            "VillageName": "البهنسا "
          },
          {
            "Id": 4447,
            "VillageName": "أعطو الوقف "
          },
          {
            "Id": 4448,
            "VillageName": "أشروبة "
          },
          {
            "Id": 4449,
            "VillageName": "أبو جرج "
          },
          {
            "Id": 4450,
            "VillageName": "أبو العباس "
          },
          {
            "Id": 4451,
            "VillageName": "أبطوجه "
          },
          {
            "Id": 4452,
            "VillageName": "أبشاق الغزال "
          },
          {
            "Id": 4453,
            "VillageName": "مدينة بنى مزار "
          },
          {
            "Id": 4454,
            "VillageName": "عزبة الخليل إبراهيم (متوشلح سابقا) "
          },
          {
            "Id": 4455,
            "VillageName": "نزلة عمرو "
          },
          {
            "Id": 4456,
            "VillageName": "نزلة خلف "
          },
          {
            "Id": 4457,
            "VillageName": "نزلة الدليل "
          },
          {
            "Id": 4458,
            "VillageName": "منشاة جلال "
          },
          {
            "Id": 4459,
            "VillageName": "منشاة بكير "
          },
          {
            "Id": 4460,
            "VillageName": "منشاة اليوسفى "
          },
          {
            "Id": 4461,
            "VillageName": "منشاة القيس "
          },
          {
            "Id": 4462,
            "VillageName": "منشاة الشيخ فضل "
          },
          {
            "Id": 4463,
            "VillageName": "منشاة أبو عزيز "
          },
          {
            "Id": 4464,
            "VillageName": "معصرة حجاج "
          },
          {
            "Id": 4465,
            "VillageName": "كفر الشيخ إبراهيم "
          },
          {
            "Id": 4466,
            "VillageName": "كفر أبو العودين "
          },
          {
            "Id": 4467,
            "VillageName": "طمبو "
          },
          {
            "Id": 4468,
            "VillageName": "صندفا الفار "
          },
          {
            "Id": 4469,
            "VillageName": "صفط أبو جرج "
          },
          {
            "Id": 4470,
            "VillageName": "شلقام "
          },
          {
            "Id": 4471,
            "VillageName": "ساقولا "
          },
          {
            "Id": 4472,
            "VillageName": "دير السنقورية "
          },
          {
            "Id": 4473,
            "VillageName": "حماضة "
          },
          {
            "Id": 4474,
            "VillageName": "بنى على "
          },
          {
            "Id": 4475,
            "VillageName": "بنى صامت "
          },
          {
            "Id": 4476,
            "VillageName": "بلة المستجدة "
          },
          {
            "Id": 4477,
            "VillageName": "بردونة الأشراف "
          },
          {
            "Id": 4478,
            "VillageName": "أم الساس "
          },
          {
            "Id": 4479,
            "VillageName": "النجاح "
          },
          {
            "Id": 4480,
            "VillageName": "الناصرية (الجرابيع سابقا) "
          },
          {
            "Id": 4481,
            "VillageName": "الموده "
          },
          {
            "Id": 4482,
            "VillageName": "القيس "
          },
          {
            "Id": 4483,
            "VillageName": "الشيخ فضل "
          },
          {
            "Id": 4484,
            "VillageName": "الشيخ عطا "
          },
          {
            "Id": 4485,
            "VillageName": "السنارية "
          }
        ],
        "name": "مركز بنى مزار"
      },
      {
        "id": 280,
        "villages": [
          {
            "Id": 4486,
            "VillageName": "قرية 7 - التوفيق "
          },
          {
            "Id": 4487,
            "VillageName": "نزلة شيحه "
          },
          {
            "Id": 4488,
            "VillageName": "نزلة دهروط "
          },
          {
            "Id": 4489,
            "VillageName": "نزلة بنى خلف "
          },
          {
            "Id": 4490,
            "VillageName": "نزلة بلهاسة "
          },
          {
            "Id": 4491,
            "VillageName": "نزلة أولاد الشيخ "
          },
          {
            "Id": 4492,
            "VillageName": "نزلة أحمد يونس "
          },
          {
            "Id": 4493,
            "VillageName": "ميانة الوقف "
          },
          {
            "Id": 4494,
            "VillageName": "منشاة نيازى "
          },
          {
            "Id": 4495,
            "VillageName": "منشاة لملوم "
          },
          {
            "Id": 4496,
            "VillageName": "ملاطية "
          },
          {
            "Id": 4497,
            "VillageName": "كوم الحاصل "
          },
          {
            "Id": 4498,
            "VillageName": "كفر المداور "
          },
          {
            "Id": 4499,
            "VillageName": "كفر الصالحين "
          },
          {
            "Id": 4500,
            "VillageName": "قفاده "
          },
          {
            "Id": 4501,
            "VillageName": "عباد شارونة "
          },
          {
            "Id": 4502,
            "VillageName": "طمبدى "
          },
          {
            "Id": 4503,
            "VillageName": "شم البصل القبلية "
          },
          {
            "Id": 4504,
            "VillageName": "شم البصل البحرية "
          },
          {
            "Id": 4505,
            "VillageName": "شارونة "
          },
          {
            "Id": 4506,
            "VillageName": "زاوية الجدامى "
          },
          {
            "Id": 4507,
            "VillageName": "دير الجرنوس "
          },
          {
            "Id": 4508,
            "VillageName": "دهمرو "
          },
          {
            "Id": 4509,
            "VillageName": "دهروط "
          },
          {
            "Id": 4510,
            "VillageName": "حميدة الجندى "
          },
          {
            "Id": 4511,
            "VillageName": "جزيرة شارونة "
          },
          {
            "Id": 4512,
            "VillageName": "بنى واللمس "
          },
          {
            "Id": 4513,
            "VillageName": "بنى خلف "
          },
          {
            "Id": 4514,
            "VillageName": "بنى خالد "
          },
          {
            "Id": 4515,
            "VillageName": "بلهاسة "
          },
          {
            "Id": 4516,
            "VillageName": "برطباط الجبل "
          },
          {
            "Id": 4517,
            "VillageName": "الكوم الأخضر "
          },
          {
            "Id": 4518,
            "VillageName": "العباسية الجديدة "
          },
          {
            "Id": 4519,
            "VillageName": "الشيخ زياد "
          },
          {
            "Id": 4520,
            "VillageName": "الزورة "
          },
          {
            "Id": 4521,
            "VillageName": "التحرير "
          },
          {
            "Id": 4522,
            "VillageName": "البلاعزتين "
          },
          {
            "Id": 4523,
            "VillageName": "أطنيه "
          },
          {
            "Id": 4524,
            "VillageName": "أشنين النصارى "
          },
          {
            "Id": 4525,
            "VillageName": "أبو بشت "
          },
          {
            "Id": 4526,
            "VillageName": "أبا الوقف "
          },
          {
            "Id": 4527,
            "VillageName": "مدينة مغاغة "
          }
        ],
        "name": "مركز مغاغة"
      },
      {
        "id": 281,
        "villages": [
          {
            "Id": 4528,
            "VillageName": "النصر رقم 6 "
          },
          {
            "Id": 4529,
            "VillageName": "الأقدام رقم 5 "
          },
          {
            "Id": 4530,
            "VillageName": "الجهاد رقم 4 "
          },
          {
            "Id": 4531,
            "VillageName": "نزلة رمضان "
          },
          {
            "Id": 4532,
            "VillageName": "منشاة عبدالله لملوم "
          },
          {
            "Id": 4533,
            "VillageName": "منشاة حلفا "
          },
          {
            "Id": 4534,
            "VillageName": "منشاة الساوى "
          },
          {
            "Id": 4535,
            "VillageName": "نزلة الأزهرى (منشأة الازهرى ) "
          },
          {
            "Id": 4536,
            "VillageName": "مفوز طيبه "
          },
          {
            "Id": 4537,
            "VillageName": "كفر مهدى "
          },
          {
            "Id": 4538,
            "VillageName": "كفر عبد الخالق "
          },
          {
            "Id": 4539,
            "VillageName": "كفر المغربى "
          },
          {
            "Id": 4540,
            "VillageName": "عطف حيدر "
          },
          {
            "Id": 4541,
            "VillageName": "صفانية "
          },
          {
            "Id": 4542,
            "VillageName": "سلاقوس "
          },
          {
            "Id": 4543,
            "VillageName": "زاوية برمشا "
          },
          {
            "Id": 4544,
            "VillageName": "بنى وركان "
          },
          {
            "Id": 4545,
            "VillageName": "بنى عامر "
          },
          {
            "Id": 4546,
            "VillageName": "برمشا "
          },
          {
            "Id": 4547,
            "VillageName": "بان العلم "
          },
          {
            "Id": 4548,
            "VillageName": "المسيد "
          },
          {
            "Id": 4549,
            "VillageName": "القايات "
          },
          {
            "Id": 4550,
            "VillageName": "العقلية "
          },
          {
            "Id": 4551,
            "VillageName": "الشيخ مسعود "
          },
          {
            "Id": 4552,
            "VillageName": "البسقلون "
          },
          {
            "Id": 4553,
            "VillageName": "البهجور "
          },
          {
            "Id": 4554,
            "VillageName": "مدينة العدوة "
          }
        ],
        "name": "مركز العدوة"
      }
    ]
  },
  {
    "id": 25,
    "name": "اسيوط",
    "centers": [
      {
        "id": 282,
        "villages": [
          {
            "Id": 4555,
            "VillageName": "البيسرى "
          },
          {
            "Id": 4556,
            "VillageName": "المدابغ وجبانة المسلمين "
          },
          {
            "Id": 4557,
            "VillageName": "الشركات "
          },
          {
            "Id": 4558,
            "VillageName": "السادسة "
          },
          {
            "Id": 4559,
            "VillageName": "الخامسة "
          },
          {
            "Id": 4560,
            "VillageName": "الرابعة "
          },
          {
            "Id": 4561,
            "VillageName": "الثالثة "
          },
          {
            "Id": 4562,
            "VillageName": "الثانية "
          },
          {
            "Id": 4563,
            "VillageName": "الأولى "
          }
        ],
        "name": "قسم أول أسيوط"
      },
      {
        "id": 283,
        "villages": [
          {
            "Id": 4564,
            "VillageName": "الشياخة السابعة "
          },
          {
            "Id": 4565,
            "VillageName": "الوليدية القبلية(محمد مصطفى) "
          },
          {
            "Id": 4566,
            "VillageName": "الوليدية الوسطانية( محمد حسانين) "
          },
          {
            "Id": 4567,
            "VillageName": "الوليدية البحرية (رجب محمد عمار ) "
          },
          {
            "Id": 4568,
            "VillageName": "الحمراء الثانية "
          },
          {
            "Id": 4569,
            "VillageName": "الحمراء الأولى "
          }
        ],
        "name": "قسم ثان أسيوط"
      },
      {
        "id": 284,
        "villages": [
          {
            "Id": 4570,
            "VillageName": "نزلة عبد اللاه "
          },
          {
            "Id": 4571,
            "VillageName": "نجوع بنى حسين "
          },
          {
            "Id": 4572,
            "VillageName": "نجع عبد الرسول "
          },
          {
            "Id": 4573,
            "VillageName": "نجع سبع "
          },
          {
            "Id": 4574,
            "VillageName": "نجع العيساوية "
          },
          {
            "Id": 4575,
            "VillageName": "موشا "
          },
          {
            "Id": 4576,
            "VillageName": "منقباد "
          },
          {
            "Id": 4577,
            "VillageName": "مسرع "
          },
          {
            "Id": 4578,
            "VillageName": "قرقارص "
          },
          {
            "Id": 4579,
            "VillageName": "علوان "
          },
          {
            "Id": 4580,
            "VillageName": "شطب "
          },
          {
            "Id": 4581,
            "VillageName": "سلام "
          },
          {
            "Id": 4582,
            "VillageName": "ريفا "
          },
          {
            "Id": 4583,
            "VillageName": "دير درنكة "
          },
          {
            "Id": 4584,
            "VillageName": "درنكة "
          },
          {
            "Id": 4585,
            "VillageName": "بهيج "
          },
          {
            "Id": 4586,
            "VillageName": "بنى غالب "
          },
          {
            "Id": 4587,
            "VillageName": "بنى حسين "
          },
          {
            "Id": 4588,
            "VillageName": "أولاد على "
          },
          {
            "Id": 4589,
            "VillageName": "أولاد رايق "
          },
          {
            "Id": 4590,
            "VillageName": "أولاد ابراهيم "
          },
          {
            "Id": 4591,
            "VillageName": "الهدايا "
          },
          {
            "Id": 4592,
            "VillageName": "النمايسة "
          },
          {
            "Id": 4593,
            "VillageName": "المطيعة "
          },
          {
            "Id": 4594,
            "VillageName": "العدر "
          },
          {
            "Id": 4595,
            "VillageName": "الشغبة "
          },
          {
            "Id": 4596,
            "VillageName": "الزاوية "
          },
          {
            "Id": 4597,
            "VillageName": "الحسانى "
          },
          {
            "Id": 4598,
            "VillageName": "البورة "
          }
        ],
        "name": "مركز أسيوط"
      },
      {
        "id": 285,
        "villages": [
          {
            "Id": 4599,
            "VillageName": "عنتر عطيفى فرغلى "
          },
          {
            "Id": 4600,
            "VillageName": "بخيت على احمد "
          },
          {
            "Id": 4601,
            "VillageName": "احمد بخيت عبدالسيد "
          },
          {
            "Id": 4602,
            "VillageName": "احمد أبوزيد وكيلانى عزوز "
          },
          {
            "Id": 4603,
            "VillageName": "حنا داود جندى "
          },
          {
            "Id": 4604,
            "VillageName": "عبدالمنعم حسن خليفة "
          },
          {
            "Id": 4605,
            "VillageName": "عبدالرحيم عبدالوهاب بيوض "
          },
          {
            "Id": 4606,
            "VillageName": "عبدالعظيم عبدالحميد سيد "
          },
          {
            "Id": 4607,
            "VillageName": "عمران عبدالوارث ابوعقرب "
          }
        ],
        "name": "قسم أبو تيج"
      },
      {
        "id": 286,
        "villages": [
          {
            "Id": 4608,
            "VillageName": "نزلة باقور "
          },
          {
            "Id": 4609,
            "VillageName": "دوينة "
          },
          {
            "Id": 4610,
            "VillageName": "دكران "
          },
          {
            "Id": 4611,
            "VillageName": "بنى سميع "
          },
          {
            "Id": 4612,
            "VillageName": "باقور "
          },
          {
            "Id": 4613,
            "VillageName": "النخيلة "
          },
          {
            "Id": 4614,
            "VillageName": "المسعودى "
          },
          {
            "Id": 4615,
            "VillageName": "الزيرة "
          },
          {
            "Id": 4616,
            "VillageName": "الزرابى "
          },
          {
            "Id": 4617,
            "VillageName": "البلايزة "
          },
          {
            "Id": 4618,
            "VillageName": "الأقادمة "
          },
          {
            "Id": 4619,
            "VillageName": "أبو خرص "
          }
        ],
        "name": "مركز أبو تيج"
      },
      {
        "id": 287,
        "villages": [
          {
            "Id": 4620,
            "VillageName": "نزلة أولاد محمد "
          },
          {
            "Id": 4621,
            "VillageName": "نزلة القديم "
          },
          {
            "Id": 4622,
            "VillageName": "دير الجنادلة "
          },
          {
            "Id": 4623,
            "VillageName": "المشايعة قبلى "
          },
          {
            "Id": 4624,
            "VillageName": "المشايعة بحرى "
          },
          {
            "Id": 4625,
            "VillageName": "العزايزة "
          },
          {
            "Id": 4626,
            "VillageName": "العامرى "
          },
          {
            "Id": 4627,
            "VillageName": "مدينة الغنايم "
          }
        ],
        "name": "مركز الغنايم"
      },
      {
        "id": 288,
        "villages": [
          {
            "Id": 4628,
            "VillageName": "نجوع الصدادرة "
          },
          {
            "Id": 4629,
            "VillageName": "مجريس "
          },
          {
            "Id": 4630,
            "VillageName": "كيمان سعيد الشرقى وطما "
          },
          {
            "Id": 4631,
            "VillageName": "كوم سعيد الغربى "
          },
          {
            "Id": 4632,
            "VillageName": "كوم أسفحت "
          },
          {
            "Id": 4633,
            "VillageName": "كوم أبو حجر "
          },
          {
            "Id": 4634,
            "VillageName": "كردوس "
          },
          {
            "Id": 4635,
            "VillageName": "بنى فيز "
          },
          {
            "Id": 4636,
            "VillageName": "أولاد الياس "
          },
          {
            "Id": 4637,
            "VillageName": "الوعاضلة "
          },
          {
            "Id": 4638,
            "VillageName": "الكوردى "
          },
          {
            "Id": 4639,
            "VillageName": "الشناينة "
          },
          {
            "Id": 4640,
            "VillageName": "الدوير "
          },
          {
            "Id": 4641,
            "VillageName": "البربا "
          },
          {
            "Id": 4642,
            "VillageName": "البارود غرب "
          },
          {
            "Id": 4643,
            "VillageName": "البارود شرق "
          },
          {
            "Id": 4644,
            "VillageName": "الأبلق "
          },
          {
            "Id": 4645,
            "VillageName": "مدينة صدفا "
          }
        ],
        "name": "مركز صدفا"
      },
      {
        "id": 289,
        "villages": [
          {
            "Id": 4646,
            "VillageName": "نزة قرار "
          },
          {
            "Id": 4647,
            "VillageName": "نزلة رميح "
          },
          {
            "Id": 4648,
            "VillageName": "كوم بوها قبلى "
          },
          {
            "Id": 4649,
            "VillageName": "كوم الشهيد "
          },
          {
            "Id": 4650,
            "VillageName": "عرب العمايم "
          },
          {
            "Id": 4651,
            "VillageName": "سكرة "
          },
          {
            "Id": 4652,
            "VillageName": "سراوة "
          },
          {
            "Id": 4653,
            "VillageName": "دمنهور "
          },
          {
            "Id": 4654,
            "VillageName": "جزيرة المعابدة "
          },
          {
            "Id": 4655,
            "VillageName": "جحدم "
          },
          {
            "Id": 4656,
            "VillageName": "بنى مجد "
          },
          {
            "Id": 4657,
            "VillageName": "بنى عديات "
          },
          {
            "Id": 4658,
            "VillageName": "بنى شقير "
          },
          {
            "Id": 4659,
            "VillageName": "بنى شعران "
          },
          {
            "Id": 4660,
            "VillageName": "بنى سند "
          },
          {
            "Id": 4661,
            "VillageName": "بنى رافع "
          },
          {
            "Id": 4662,
            "VillageName": "أم القصور "
          },
          {
            "Id": 4663,
            "VillageName": "المندرة قبلى "
          },
          {
            "Id": 4664,
            "VillageName": "المدور "
          },
          {
            "Id": 4665,
            "VillageName": "العزبة "
          },
          {
            "Id": 4666,
            "VillageName": "العتامنة "
          },
          {
            "Id": 4667,
            "VillageName": "السهريج "
          },
          {
            "Id": 4668,
            "VillageName": "الحواتكة "
          },
          {
            "Id": 4669,
            "VillageName": "الجاولى "
          },
          {
            "Id": 4670,
            "VillageName": "مدينة منفلوط "
          }
        ],
        "name": "مركز منفلوط"
      },
      {
        "id": 290,
        "villages": [
          {
            "Id": 4671,
            "VillageName": "نزالى جنوب "
          },
          {
            "Id": 4672,
            "VillageName": "مير "
          },
          {
            "Id": 4673,
            "VillageName": "منشاة خشبة "
          },
          {
            "Id": 4674,
            "VillageName": "قصر العمارنة "
          },
          {
            "Id": 4675,
            "VillageName": "فزارة "
          },
          {
            "Id": 4676,
            "VillageName": "عنك "
          },
          {
            "Id": 4677,
            "VillageName": "عرب الجهمة "
          },
          {
            "Id": 4678,
            "VillageName": "عرامية الديوان "
          },
          {
            "Id": 4679,
            "VillageName": "رزقة الدير المحرق "
          },
          {
            "Id": 4680,
            "VillageName": "ديرالقصر "
          },
          {
            "Id": 4681,
            "VillageName": "تناغة "
          },
          {
            "Id": 4682,
            "VillageName": "بوق "
          },
          {
            "Id": 4683,
            "VillageName": "بنى يحيى قبلى "
          },
          {
            "Id": 4684,
            "VillageName": "بنى هلال "
          },
          {
            "Id": 4685,
            "VillageName": "بنى قرة "
          },
          {
            "Id": 4686,
            "VillageName": "بنى صالح "
          },
          {
            "Id": 4687,
            "VillageName": "بنى زيد بوق "
          },
          {
            "Id": 4688,
            "VillageName": "بنى إدريس "
          },
          {
            "Id": 4689,
            "VillageName": "بلوط "
          },
          {
            "Id": 4690,
            "VillageName": "المنشأة الكبرى "
          },
          {
            "Id": 4691,
            "VillageName": "المنشأة الصغرى "
          },
          {
            "Id": 4692,
            "VillageName": "الصبحة "
          },
          {
            "Id": 4693,
            "VillageName": "الشيخ عون الله "
          },
          {
            "Id": 4694,
            "VillageName": "الشيخ داود "
          },
          {
            "Id": 4695,
            "VillageName": "السراقنا "
          },
          {
            "Id": 4696,
            "VillageName": "الحردانة "
          },
          {
            "Id": 4697,
            "VillageName": "الحبالصة "
          },
          {
            "Id": 4698,
            "VillageName": "التمساحية "
          },
          {
            "Id": 4699,
            "VillageName": "التتالية "
          },
          {
            "Id": 4700,
            "VillageName": "الأنصار "
          },
          {
            "Id": 4701,
            "VillageName": "أبو خليل "
          },
          {
            "Id": 4702,
            "VillageName": "مدينة القوصية "
          }
        ],
        "name": "مركز القوصية"
      },
      {
        "id": 291,
        "villages": [
          {
            "Id": 4703,
            "VillageName": "نزلة مصطفى عبدالحليم"
          },
          {
            "Id": 4704,
            "VillageName": "نزلة فرج محمود "
          },
          {
            "Id": 4705,
            "VillageName": "نزلة عبد اللاه "
          },
          {
            "Id": 4706,
            "VillageName": "نزلة طاهر "
          },
          {
            "Id": 4707,
            "VillageName": "نزلة سرقنا "
          },
          {
            "Id": 4708,
            "VillageName": "نزلة ساو "
          },
          {
            "Id": 4709,
            "VillageName": "نزلة بدوى "
          },
          {
            "Id": 4710,
            "VillageName": "نزلة العوامر "
          },
          {
            "Id": 4711,
            "VillageName": "نجع خضر "
          },
          {
            "Id": 4712,
            "VillageName": "مسارة "
          },
          {
            "Id": 4713,
            "VillageName": "مزينة "
          },
          {
            "Id": 4714,
            "VillageName": "كوم بوها بحرى "
          },
          {
            "Id": 4715,
            "VillageName": "كوم انجاشة "
          },
          {
            "Id": 4716,
            "VillageName": "كودية مبارك "
          },
          {
            "Id": 4717,
            "VillageName": "قصر حيدر "
          },
          {
            "Id": 4718,
            "VillageName": "عواجة "
          },
          {
            "Id": 4719,
            "VillageName": "عرامية الخضيرى "
          },
          {
            "Id": 4720,
            "VillageName": "صنبو "
          },
          {
            "Id": 4721,
            "VillageName": "شلش "
          },
          {
            "Id": 4722,
            "VillageName": "سرقنا "
          },
          {
            "Id": 4723,
            "VillageName": "ساو "
          },
          {
            "Id": 4724,
            "VillageName": "زاوية هارون "
          },
          {
            "Id": 4725,
            "VillageName": "ديروط الشريف "
          },
          {
            "Id": 4726,
            "VillageName": "دشلوط "
          },
          {
            "Id": 4727,
            "VillageName": "خرفة "
          },
          {
            "Id": 4728,
            "VillageName": "جرف سرحان "
          },
          {
            "Id": 4729,
            "VillageName": "بنى يحيى "
          },
          {
            "Id": 4730,
            "VillageName": "ببلاو "
          },
          {
            "Id": 4731,
            "VillageName": "باويط "
          },
          {
            "Id": 4732,
            "VillageName": "بانوب ظهر الجمل "
          },
          {
            "Id": 4733,
            "VillageName": "أمشول "
          },
          {
            "Id": 4734,
            "VillageName": "النهاية "
          },
          {
            "Id": 4735,
            "VillageName": "المندرة بحرى "
          },
          {
            "Id": 4736,
            "VillageName": "المناشى "
          },
          {
            "Id": 4737,
            "VillageName": "المطاوعة "
          },
          {
            "Id": 4738,
            "VillageName": "المحمودية "
          },
          {
            "Id": 4739,
            "VillageName": "الرياض "
          },
          {
            "Id": 4740,
            "VillageName": "الحوطا الغربية "
          },
          {
            "Id": 4741,
            "VillageName": "الحوطا الشرقية "
          },
          {
            "Id": 4742,
            "VillageName": "أبو كريم "
          },
          {
            "Id": 4743,
            "VillageName": "أبو الهدر "
          },
          {
            "Id": 4744,
            "VillageName": "مدينة ديروط "
          }
        ],
        "name": "تابع مركز ديروط"
      },
      {
        "id": 292,
        "villages": [
          {
            "Id": 4745,
            "VillageName": "نزلة القداديح "
          },
          {
            "Id": 4746,
            "VillageName": "كوم المنصورة "
          },
          {
            "Id": 4747,
            "VillageName": "كوم أبو شيل "
          },
          {
            "Id": 4748,
            "VillageName": "عرب العطيات البحرية "
          },
          {
            "Id": 4749,
            "VillageName": "عرب الشنابلة "
          },
          {
            "Id": 4750,
            "VillageName": "شقلقيل "
          },
          {
            "Id": 4751,
            "VillageName": "دير شو "
          },
          {
            "Id": 4752,
            "VillageName": "دير الجبراوى "
          },
          {
            "Id": 4753,
            "VillageName": "جزيرة بهيج "
          },
          {
            "Id": 4754,
            "VillageName": "بنى محمديات "
          },
          {
            "Id": 4755,
            "VillageName": "بنى ابراهيم "
          },
          {
            "Id": 4756,
            "VillageName": "المعابدة الغربية "
          },
          {
            "Id": 4757,
            "VillageName": "المعابدة الشرقية "
          },
          {
            "Id": 4758,
            "VillageName": "العوامر "
          },
          {
            "Id": 4759,
            "VillageName": "السوالم البحرية "
          },
          {
            "Id": 4760,
            "VillageName": "الحمام "
          },
          {
            "Id": 4761,
            "VillageName": "مدينة ابنوب "
          }
        ],
        "name": "مركز أبنوب"
      },
      {
        "id": 293,
        "villages": [
          {
            "Id": 4762,
            "VillageName": "منشأة المعصرة "
          },
          {
            "Id": 4763,
            "VillageName": "عرب مطير "
          },
          {
            "Id": 4764,
            "VillageName": "عرب الأطاولة "
          },
          {
            "Id": 4765,
            "VillageName": "دير بصره "
          },
          {
            "Id": 4766,
            "VillageName": "جزيرة الأكراد "
          },
          {
            "Id": 4767,
            "VillageName": "تل أولاد سراج "
          },
          {
            "Id": 4768,
            "VillageName": "بنى مر "
          },
          {
            "Id": 4769,
            "VillageName": "بنى عليج "
          },
          {
            "Id": 4770,
            "VillageName": "بنى طالب "
          },
          {
            "Id": 4771,
            "VillageName": "بنى زيد "
          },
          {
            "Id": 4772,
            "VillageName": "بصرة "
          },
          {
            "Id": 4773,
            "VillageName": "أولاد سراج "
          },
          {
            "Id": 4774,
            "VillageName": "أولاد بدر "
          },
          {
            "Id": 4775,
            "VillageName": "الواسطى "
          },
          {
            "Id": 4776,
            "VillageName": "العطيات القبلية "
          },
          {
            "Id": 4777,
            "VillageName": "عرب الكلابات "
          },
          {
            "Id": 4778,
            "VillageName": "المعصرة "
          },
          {
            "Id": 4779,
            "VillageName": "القوطا "
          },
          {
            "Id": 4780,
            "VillageName": "القصر "
          },
          {
            "Id": 4781,
            "VillageName": "الفيما "
          },
          {
            "Id": 4782,
            "VillageName": "الطوابية "
          },
          {
            "Id": 4783,
            "VillageName": "الأكراد "
          },
          {
            "Id": 4784,
            "VillageName": "مدينة الفتح-تشمل الناصرية "
          },
          {
            "Id": 4785,
            "VillageName": "العصارة (نزلة العصارة) "
          }
        ],
        "name": "تابع مركز الفتح"
      },
      {
        "id": 294,
        "villages": [
          {
            "Id": 4786,
            "VillageName": "نزلة باخوم "
          },
          {
            "Id": 4787,
            "VillageName": "نزلة الملك "
          },
          {
            "Id": 4788,
            "VillageName": "نزلة الشيخ شحاتة "
          },
          {
            "Id": 4789,
            "VillageName": "دير تاسا "
          },
          {
            "Id": 4790,
            "VillageName": "تاسا "
          },
          {
            "Id": 4791,
            "VillageName": "بويط "
          },
          {
            "Id": 4792,
            "VillageName": "وادى صلاح الدين (النزلة المستجدة) "
          },
          {
            "Id": 4793,
            "VillageName": "المطمر "
          },
          {
            "Id": 4794,
            "VillageName": "اللوقا "
          },
          {
            "Id": 4795,
            "VillageName": "الغريب "
          },
          {
            "Id": 4796,
            "VillageName": "العونة "
          },
          {
            "Id": 4797,
            "VillageName": "العفادرة "
          },
          {
            "Id": 4798,
            "VillageName": "الشامية "
          },
          {
            "Id": 4799,
            "VillageName": "الرويجات "
          },
          {
            "Id": 4800,
            "VillageName": "الخوالد "
          },
          {
            "Id": 4801,
            "VillageName": "التنـاغـــا "
          },
          {
            "Id": 4802,
            "VillageName": "مدينة ساحل سليم "
          }
        ],
        "name": "مركز ساحل سليم"
      },
      {
        "id": 295,
        "villages": [
          {
            "Id": 4803,
            "VillageName": "نجو ع المعادى "
          },
          {
            "Id": 4804,
            "VillageName": "نجع زريق "
          },
          {
            "Id": 4805,
            "VillageName": "نجع جزيرة قاو "
          },
          {
            "Id": 4806,
            "VillageName": "منشاة همام "
          },
          {
            "Id": 4807,
            "VillageName": "منشاة العقال "
          },
          {
            "Id": 4808,
            "VillageName": "منشاة البدارى "
          },
          {
            "Id": 4809,
            "VillageName": "كوم سعده "
          },
          {
            "Id": 4810,
            "VillageName": "عزبة الأقباط "
          },
          {
            "Id": 4811,
            "VillageName": "طعمه "
          },
          {
            "Id": 4812,
            "VillageName": "الهمامية "
          },
          {
            "Id": 4813,
            "VillageName": "النواورة "
          },
          {
            "Id": 4814,
            "VillageName": "النواميس "
          },
          {
            "Id": 4815,
            "VillageName": "المراونة "
          },
          {
            "Id": 4816,
            "VillageName": "الكوم الاحمر "
          },
          {
            "Id": 4817,
            "VillageName": "العقال قبلى "
          },
          {
            "Id": 4818,
            "VillageName": "العقال بحرى "
          },
          {
            "Id": 4819,
            "VillageName": "العتمانية "
          },
          {
            "Id": 4820,
            "VillageName": "الشيخ عثمان "
          },
          {
            "Id": 4821,
            "VillageName": "البياضية "
          },
          {
            "Id": 4822,
            "VillageName": "مدينة البدارى "
          }
        ],
        "name": "مركز البدارى"
      },
      {
        "id": 296,
        "villages": [
          {
            "Id": 4823,
            "VillageName": "مدينة أسيوط الجديدة "
          }
        ],
        "name": "مدينة أسيوط الجديدة*"
      }
    ]
  },
  {
    "id": 26,
    "name": "سوهاج",
    "centers": [
      {
        "id": 297,
        "villages": [
          {
            "Id": 4824,
            "VillageName": "مازن "
          },
          {
            "Id": 4825,
            "VillageName": "محمد صالح (صالح) "
          },
          {
            "Id": 4826,
            "VillageName": "الشريف "
          },
          {
            "Id": 4827,
            "VillageName": "الخولى "
          },
          {
            "Id": 4828,
            "VillageName": "فراج (ابراهيم فراج) "
          }
        ],
        "name": "قسم أول سوهاج"
      },
      {
        "id": 298,
        "villages": [
          {
            "Id": 4829,
            "VillageName": "ناصر "
          },
          {
            "Id": 4830,
            "VillageName": "الكبش "
          }
        ],
        "name": "قسم ثان سوهاج"
      },
      {
        "id": 299,
        "villages": [
          {
            "Id": 4831,
            "VillageName": "ونينة الغربية "
          },
          {
            "Id": 4832,
            "VillageName": "ونينة الشرقية "
          },
          {
            "Id": 4833,
            "VillageName": "نجع تمام "
          },
          {
            "Id": 4834,
            "VillageName": "نجع النجار "
          },
          {
            "Id": 4835,
            "VillageName": "قلفاو "
          },
          {
            "Id": 4836,
            "VillageName": "عرابة أبو دهب "
          },
          {
            "Id": 4837,
            "VillageName": "سعد الله "
          },
          {
            "Id": 4838,
            "VillageName": "روافع القصير "
          },
          {
            "Id": 4839,
            "VillageName": "دمنو "
          },
          {
            "Id": 4840,
            "VillageName": "جزيرة شندويل "
          },
          {
            "Id": 4841,
            "VillageName": "تونس "
          },
          {
            "Id": 4842,
            "VillageName": "بنى زار "
          },
          {
            "Id": 4843,
            "VillageName": "بندار الكرمانية "
          },
          {
            "Id": 4844,
            "VillageName": "بلصفورة "
          },
          {
            "Id": 4845,
            "VillageName": "باجا "
          },
          {
            "Id": 4846,
            "VillageName": "أولاد نصير "
          },
          {
            "Id": 4847,
            "VillageName": "أولاد مامن "
          },
          {
            "Id": 4848,
            "VillageName": "أولاد غريب "
          },
          {
            "Id": 4849,
            "VillageName": "أولاد عزاز "
          },
          {
            "Id": 4850,
            "VillageName": "أولاد شلول "
          },
          {
            "Id": 4851,
            "VillageName": "الهجارسة "
          },
          {
            "Id": 4852,
            "VillageName": "المزالوة "
          },
          {
            "Id": 4853,
            "VillageName": "المحامدة البحرية( خص البوص سابقا) "
          },
          {
            "Id": 4854,
            "VillageName": "المحامدة "
          },
          {
            "Id": 4855,
            "VillageName": "الكوامل بحرى "
          },
          {
            "Id": 4856,
            "VillageName": "القرامطة غرب "
          },
          {
            "Id": 4857,
            "VillageName": "العرابة الشرقية( نجع الفار سابقا) "
          },
          {
            "Id": 4858,
            "VillageName": "الصلعا "
          },
          {
            "Id": 4859,
            "VillageName": "الشيخ مكرم "
          },
          {
            "Id": 4860,
            "VillageName": "الحمادية "
          },
          {
            "Id": 4861,
            "VillageName": "البخايتة "
          },
          {
            "Id": 4862,
            "VillageName": "أدفا "
          }
        ],
        "name": "مركز سوهاج"
      },
      {
        "id": 300,
        "villages": [
          {
            "Id": 4863,
            "VillageName": "نجع طايع "
          },
          {
            "Id": 4864,
            "VillageName": "فزارة بالقرية "
          },
          {
            "Id": 4865,
            "VillageName": "عامر "
          },
          {
            "Id": 4866,
            "VillageName": "شندويل "
          },
          {
            "Id": 4867,
            "VillageName": "جزيرة الشورانية "
          },
          {
            "Id": 4868,
            "VillageName": "بهتة "
          },
          {
            "Id": 4869,
            "VillageName": "بهاليل الجزيرة "
          },
          {
            "Id": 4870,
            "VillageName": "بنى وشاح "
          },
          {
            "Id": 4871,
            "VillageName": "بنى هلال "
          },
          {
            "Id": 4872,
            "VillageName": "بناويط "
          },
          {
            "Id": 4873,
            "VillageName": "باصونة "
          },
          {
            "Id": 4874,
            "VillageName": "أولاد اسماعيل "
          },
          {
            "Id": 4875,
            "VillageName": "الوقدة "
          },
          {
            "Id": 4876,
            "VillageName": "الغريزات "
          },
          {
            "Id": 4877,
            "VillageName": "العمور "
          },
          {
            "Id": 4878,
            "VillageName": "الشيخ يوسف "
          },
          {
            "Id": 4879,
            "VillageName": "الشيخ شبل "
          },
          {
            "Id": 4880,
            "VillageName": "السمارنة "
          },
          {
            "Id": 4881,
            "VillageName": "الحريدية "
          },
          {
            "Id": 4882,
            "VillageName": "الجزازرة "
          },
          {
            "Id": 4883,
            "VillageName": "البطاخ "
          },
          {
            "Id": 4884,
            "VillageName": "أقصاص "
          },
          {
            "Id": 4885,
            "VillageName": "أبو عزيز "
          },
          {
            "Id": 4886,
            "VillageName": "مدينة المراغة "
          }
        ],
        "name": "مركز المراغة"
      },
      {
        "id": 301,
        "villages": [
          {
            "Id": 4887,
            "VillageName": "نزلة على "
          },
          {
            "Id": 4888,
            "VillageName": "نزة المحزمين "
          },
          {
            "Id": 4889,
            "VillageName": "نزة الحاجر "
          },
          {
            "Id": 4890,
            "VillageName": "نزة الدقشيه ( نزة) "
          },
          {
            "Id": 4891,
            "VillageName": "عنيبس "
          },
          {
            "Id": 4892,
            "VillageName": "عمر بن الخطاب "
          },
          {
            "Id": 4893,
            "VillageName": "على بن أبى طالب "
          },
          {
            "Id": 4894,
            "VillageName": "عثمان بن عفان "
          },
          {
            "Id": 4895,
            "VillageName": "جهينة الشرقية "
          },
          {
            "Id": 4896,
            "VillageName": "النزة البحرية( نجوع البوص سابقا) "
          },
          {
            "Id": 4897,
            "VillageName": "الطليحات "
          },
          {
            "Id": 4898,
            "VillageName": "الشهيد عبد المنعم رياض "
          },
          {
            "Id": 4899,
            "VillageName": "الحرافشة "
          },
          {
            "Id": 4900,
            "VillageName": "أبو بكر الصديق "
          },
          {
            "Id": 4901,
            "VillageName": "مدينة جهينة "
          }
        ],
        "name": "مركز جهينة"
      },
      {
        "id": 302,
        "villages": [
          {
            "Id": 4902,
            "VillageName": "ساحل طهطا "
          },
          {
            "Id": 4903,
            "VillageName": "مدينة طهطا وتشمل :نجعى الزرابى وحموده "
          }
        ],
        "name": "قسم طهطا"
      },
      {
        "id": 303,
        "villages": [
          {
            "Id": 4904,
            "VillageName": "نزلة عمارة "
          },
          {
            "Id": 4905,
            "VillageName": "نزلة القاضى "
          },
          {
            "Id": 4906,
            "VillageName": "نجوع الصوامعة غرب "
          },
          {
            "Id": 4907,
            "VillageName": "نجع حمد "
          },
          {
            "Id": 4908,
            "VillageName": "كوم بدر "
          },
          {
            "Id": 4909,
            "VillageName": "عرب بخواج "
          },
          {
            "Id": 4910,
            "VillageName": "شطورة "
          },
          {
            "Id": 4911,
            "VillageName": "داود "
          },
          {
            "Id": 4912,
            "VillageName": "حاجر مشطا "
          },
          {
            "Id": 4913,
            "VillageName": "جزيرة الخزندارية "
          },
          {
            "Id": 4914,
            "VillageName": "بنى عمار "
          },
          {
            "Id": 4915,
            "VillageName": "بنى حرب "
          },
          {
            "Id": 4916,
            "VillageName": "بنهو "
          },
          {
            "Id": 4917,
            "VillageName": "بنجا "
          },
          {
            "Id": 4918,
            "VillageName": "الكوم الاصفر "
          },
          {
            "Id": 4919,
            "VillageName": "القبيصات "
          },
          {
            "Id": 4920,
            "VillageName": "الصوامعة غرب "
          },
          {
            "Id": 4921,
            "VillageName": "الصوالح "
          },
          {
            "Id": 4922,
            "VillageName": "الصفيحة "
          },
          {
            "Id": 4923,
            "VillageName": "الشيخ مسعود "
          },
          {
            "Id": 4924,
            "VillageName": "الشيخ زين الدين "
          },
          {
            "Id": 4925,
            "VillageName": "الشيخ رحومة "
          },
          {
            "Id": 4926,
            "VillageName": "السوالم "
          },
          {
            "Id": 4927,
            "VillageName": "الخزنداريه "
          },
          {
            "Id": 4928,
            "VillageName": "الحريدية القبلية "
          },
          {
            "Id": 4929,
            "VillageName": "الحريدية البحرية "
          },
          {
            "Id": 4930,
            "VillageName": "الجريدات "
          },
          {
            "Id": 4931,
            "VillageName": "الجبيرات "
          }
        ],
        "name": "مركز طهطا"
      },
      {
        "id": 304,
        "villages": [
          {
            "Id": 4932,
            "VillageName": "نزلة عبدالله "
          },
          {
            "Id": 4933,
            "VillageName": "نزلة الدويك "
          },
          {
            "Id": 4934,
            "VillageName": "مشطا "
          },
          {
            "Id": 4935,
            "VillageName": "كوم غريب "
          },
          {
            "Id": 4936,
            "VillageName": "كوم العرب "
          },
          {
            "Id": 4937,
            "VillageName": "كوم أشقاو "
          },
          {
            "Id": 4938,
            "VillageName": "قاو غرب "
          },
          {
            "Id": 4939,
            "VillageName": "عزبة القاوية "
          },
          {
            "Id": 4940,
            "VillageName": "سليم "
          },
          {
            "Id": 4941,
            "VillageName": "سلامون "
          },
          {
            "Id": 4942,
            "VillageName": "جزيرة طما "
          },
          {
            "Id": 4943,
            "VillageName": "تل الزوكى "
          },
          {
            "Id": 4944,
            "VillageName": "أم دومة "
          },
          {
            "Id": 4945,
            "VillageName": "الواقات "
          },
          {
            "Id": 4946,
            "VillageName": "الهيشة "
          },
          {
            "Id": 4947,
            "VillageName": "المواطين "
          },
          {
            "Id": 4948,
            "VillageName": "المدمر "
          },
          {
            "Id": 4949,
            "VillageName": "القطنة "
          },
          {
            "Id": 4950,
            "VillageName": "القرية بالدوير "
          },
          {
            "Id": 4951,
            "VillageName": "العزبة المستجدة "
          },
          {
            "Id": 4952,
            "VillageName": "العتامنة "
          },
          {
            "Id": 4953,
            "VillageName": "الشيخ عمار "
          },
          {
            "Id": 4954,
            "VillageName": "الشوكة "
          },
          {
            "Id": 4955,
            "VillageName": "السعادة ( كوم السعادة ) "
          },
          {
            "Id": 4956,
            "VillageName": "السكساكة "
          },
          {
            "Id": 4957,
            "VillageName": "الريانيه المعلق "
          },
          {
            "Id": 4958,
            "VillageName": "الحما "
          },
          {
            "Id": 4959,
            "VillageName": "الحلاقى "
          },
          {
            "Id": 4960,
            "VillageName": "الحسنة "
          },
          {
            "Id": 4961,
            "VillageName": "الحسامدة "
          },
          {
            "Id": 4962,
            "VillageName": "الحديقة "
          },
          {
            "Id": 4963,
            "VillageName": "الجباب "
          },
          {
            "Id": 4964,
            "VillageName": "التحرير(عزبة الصباغ سابقا) "
          },
          {
            "Id": 4965,
            "VillageName": "الاغانة "
          },
          {
            "Id": 4966,
            "VillageName": "مدينة طما "
          }
        ],
        "name": "مركز طما"
      },
      {
        "id": 305,
        "villages": [
          {
            "Id": 4967,
            "VillageName": "كوم بدار "
          },
          {
            "Id": 4968,
            "VillageName": "روافع العيساوية "
          },
          {
            "Id": 4969,
            "VillageName": "خارفة المنشاة "
          },
          {
            "Id": 4970,
            "VillageName": "جزيرة المنتصر "
          },
          {
            "Id": 4971,
            "VillageName": "أولاد على "
          },
          {
            "Id": 4972,
            "VillageName": "أولاد سلامة "
          },
          {
            "Id": 4973,
            "VillageName": "الهماص "
          },
          {
            "Id": 4974,
            "VillageName": "الكوامل قبلى "
          },
          {
            "Id": 4975,
            "VillageName": "العنبرية "
          },
          {
            "Id": 4976,
            "VillageName": "العمايدة "
          },
          {
            "Id": 4977,
            "VillageName": "الشواولة "
          },
          {
            "Id": 4978,
            "VillageName": "السقرية "
          },
          {
            "Id": 4979,
            "VillageName": "الزوك الغربية "
          },
          {
            "Id": 4980,
            "VillageName": "الزوك الشرقية "
          },
          {
            "Id": 4981,
            "VillageName": "الزارة "
          },
          {
            "Id": 4982,
            "VillageName": "الرويهب "
          },
          {
            "Id": 4983,
            "VillageName": "الدويرات "
          },
          {
            "Id": 4984,
            "VillageName": "الدناقلة "
          },
          {
            "Id": 4985,
            "VillageName": "الخنانسة غرب "
          },
          {
            "Id": 4986,
            "VillageName": "الخنانسة شرق "
          },
          {
            "Id": 4987,
            "VillageName": "الحريزات الغربية "
          },
          {
            "Id": 4988,
            "VillageName": "الحريزات الشرقية "
          },
          {
            "Id": 4989,
            "VillageName": "البياضية بالناظر "
          },
          {
            "Id": 4990,
            "VillageName": "البواريك "
          },
          {
            "Id": 4991,
            "VillageName": "الباجية بالشيخ يوسف "
          },
          {
            "Id": 4992,
            "VillageName": "مدينة المنشاة "
          }
        ],
        "name": "مركز المنشأة"
      },
      {
        "id": 306,
        "villages": [
          {
            "Id": 4993,
            "VillageName": "عوامر العسيرات "
          },
          {
            "Id": 4994,
            "VillageName": "جزيرة أولاد حمزة "
          },
          {
            "Id": 4995,
            "VillageName": "أولاد جباره "
          },
          {
            "Id": 4996,
            "VillageName": "أولاد بهيج "
          },
          {
            "Id": 4997,
            "VillageName": "النويرات "
          },
          {
            "Id": 4998,
            "VillageName": "المساعيد "
          },
          {
            "Id": 4999,
            "VillageName": "الشهداء "
          },
          {
            "Id": 5000,
            "VillageName": "الرشايدة "
          },
          {
            "Id": 5001,
            "VillageName": "الأحايوه غرب "
          },
          {
            "Id": 5002,
            "VillageName": "أولاد حمزة - مقر المركز "
          }
        ],
        "name": "مركز العسيرات"
      },
      {
        "id": 307,
        "villages": [
          {
            "Id": 5003,
            "VillageName": "البياضى والقرية "
          },
          {
            "Id": 5004,
            "VillageName": "الشياخات المنضمة "
          },
          {
            "Id": 5005,
            "VillageName": "محمد محمود نوفل "
          },
          {
            "Id": 5006,
            "VillageName": "أبو الوفا المصرى "
          },
          {
            "Id": 5007,
            "VillageName": "ابراهيم اسماعيل جودة"
          },
          {
            "Id": 5008,
            "VillageName": "صليب ابراهيم "
          },
          {
            "Id": 5009,
            "VillageName": "راضى البارودى "
          },
          {
            "Id": 5010,
            "VillageName": "محمد سعيد جنيدى "
          }
        ],
        "name": "قسم جرجا"
      },
      {
        "id": 308,
        "villages": [
          {
            "Id": 5011,
            "VillageName": "نجوع بندار "
          },
          {
            "Id": 5012,
            "VillageName": "نجع الغباشى "
          },
          {
            "Id": 5013,
            "VillageName": "مزاتة والشيخ جبر "
          },
          {
            "Id": 5014,
            "VillageName": "كوم الصعايدة "
          },
          {
            "Id": 5015,
            "VillageName": "كوم أشكيلو "
          },
          {
            "Id": 5016,
            "VillageName": "خارفة جرجا "
          },
          {
            "Id": 5017,
            "VillageName": "بيت علام "
          },
          {
            "Id": 5018,
            "VillageName": "بيت داود "
          },
          {
            "Id": 5019,
            "VillageName": "بيت خلاف "
          },
          {
            "Id": 5020,
            "VillageName": "بيت الخريبى "
          },
          {
            "Id": 5021,
            "VillageName": "بنى عيش "
          },
          {
            "Id": 5022,
            "VillageName": "بندار الرملية "
          },
          {
            "Id": 5023,
            "VillageName": "بندار التبينات "
          },
          {
            "Id": 5024,
            "VillageName": "المشاودة "
          },
          {
            "Id": 5025,
            "VillageName": "المحاسنة "
          },
          {
            "Id": 5026,
            "VillageName": "المجابرة "
          },
          {
            "Id": 5027,
            "VillageName": "القرعان "
          },
          {
            "Id": 5028,
            "VillageName": "العوامر قبلى "
          },
          {
            "Id": 5029,
            "VillageName": "العوامر بحرى "
          },
          {
            "Id": 5030,
            "VillageName": "الزواتنة القبلية "
          },
          {
            "Id": 5031,
            "VillageName": "الزواتنة البحرية "
          },
          {
            "Id": 5032,
            "VillageName": "الزنقور "
          },
          {
            "Id": 5033,
            "VillageName": "الرقاقنة "
          },
          {
            "Id": 5034,
            "VillageName": "الخلافية "
          },
          {
            "Id": 5035,
            "VillageName": "الجواهين "
          },
          {
            "Id": 5036,
            "VillageName": "البربا "
          }
        ],
        "name": "مركز جرجا"
      },
      {
        "id": 309,
        "villages": [
          {
            "Id": 5037,
            "VillageName": "يعقوب "
          },
          {
            "Id": 5038,
            "VillageName": "نجوع برديس "
          },
          {
            "Id": 5039,
            "VillageName": "نجع مازن غرب "
          },
          {
            "Id": 5040,
            "VillageName": "منشاة برديس "
          },
          {
            "Id": 5041,
            "VillageName": "عرابة ابيدوس "
          },
          {
            "Id": 5042,
            "VillageName": "بنى منصور "
          },
          {
            "Id": 5043,
            "VillageName": "بنى حميل "
          },
          {
            "Id": 5044,
            "VillageName": "برديس "
          },
          {
            "Id": 5045,
            "VillageName": "برخيل "
          },
          {
            "Id": 5046,
            "VillageName": "أولاد عليو "
          },
          {
            "Id": 5047,
            "VillageName": "الغنيمية "
          },
          {
            "Id": 5048,
            "VillageName": "الغابات "
          },
          {
            "Id": 5049,
            "VillageName": "العوكلية "
          },
          {
            "Id": 5050,
            "VillageName": "العساكرة "
          },
          {
            "Id": 5051,
            "VillageName": "الشيخ مرزوق "
          },
          {
            "Id": 5052,
            "VillageName": "الشيخ بركة "
          },
          {
            "Id": 5053,
            "VillageName": "السمطا "
          },
          {
            "Id": 5054,
            "VillageName": "السلمانى "
          },
          {
            "Id": 5055,
            "VillageName": "الساحل قبلى "
          },
          {
            "Id": 5056,
            "VillageName": "الساحل بحرى "
          },
          {
            "Id": 5057,
            "VillageName": "الحلافى "
          },
          {
            "Id": 5058,
            "VillageName": "الحرجة قبلى "
          },
          {
            "Id": 5059,
            "VillageName": "الحرجة بحرى "
          },
          {
            "Id": 5060,
            "VillageName": "الحرجة بالقرعان "
          },
          {
            "Id": 5061,
            "VillageName": "الحجز "
          },
          {
            "Id": 5062,
            "VillageName": "الحبيل والشلولية "
          },
          {
            "Id": 5063,
            "VillageName": "التوادر "
          },
          {
            "Id": 5064,
            "VillageName": "الباسكية "
          },
          {
            "Id": 5065,
            "VillageName": "الاصلاح "
          },
          {
            "Id": 5066,
            "VillageName": "مدينة البلينا "
          }
        ],
        "name": "مركز البلينا"
      },
      {
        "id": 310,
        "villages": [
          {
            "Id": 5067,
            "VillageName": "نقنق "
          },
          {
            "Id": 5068,
            "VillageName": "نجوع مازن شرق "
          },
          {
            "Id": 5069,
            "VillageName": "مزاتة شرق "
          },
          {
            "Id": 5070,
            "VillageName": "أولاد يحيى قبلى "
          },
          {
            "Id": 5071,
            "VillageName": "أولاد يحيى بحرى "
          },
          {
            "Id": 5072,
            "VillageName": "أولاد طوق غرب "
          },
          {
            "Id": 5073,
            "VillageName": "أولاد سالم قبلى "
          },
          {
            "Id": 5074,
            "VillageName": "أولاد سالم بحرى "
          },
          {
            "Id": 5075,
            "VillageName": "أولاد خلف "
          },
          {
            "Id": 5076,
            "VillageName": "أولاد الشيخ "
          },
          {
            "Id": 5077,
            "VillageName": "النغاميش "
          },
          {
            "Id": 5078,
            "VillageName": "النصيرات "
          },
          {
            "Id": 5079,
            "VillageName": "الســلام (الكشح سابقا) "
          },
          {
            "Id": 5080,
            "VillageName": "العقارية "
          },
          {
            "Id": 5081,
            "VillageName": "الخيام "
          },
          {
            "Id": 5082,
            "VillageName": "الحاجر بأولاد يحيى "
          },
          {
            "Id": 5083,
            "VillageName": "البلابيش قبلى "
          },
          {
            "Id": 5084,
            "VillageName": "البلابيش بحرى "
          },
          {
            "Id": 5085,
            "VillageName": "البلابيش المستجدة "
          },
          {
            "Id": 5086,
            "VillageName": "مدينة دار السلام "
          }
        ],
        "name": "مركز دار السلام (أولاد طوق شرق سابقا)"
      },
      {
        "id": 311,
        "villages": [
          {
            "Id": 5087,
            "VillageName": "نيدة "
          },
          {
            "Id": 5088,
            "VillageName": "نجوع الصوامعة شرق "
          },
          {
            "Id": 5089,
            "VillageName": "عرب الأطاولة "
          },
          {
            "Id": 5090,
            "VillageName": "جزيرة محروس "
          },
          {
            "Id": 5091,
            "VillageName": "الكولة "
          },
          {
            "Id": 5092,
            "VillageName": "العيساوية شرق "
          },
          {
            "Id": 5093,
            "VillageName": "العزبة والعرب "
          },
          {
            "Id": 5094,
            "VillageName": "الصوامعة شرق "
          },
          {
            "Id": 5095,
            "VillageName": "السلامونى "
          },
          {
            "Id": 5096,
            "VillageName": "الديابات "
          },
          {
            "Id": 5097,
            "VillageName": "الحواويش "
          },
          {
            "Id": 5098,
            "VillageName": "الأحايوة شرق "
          },
          {
            "Id": 5099,
            "VillageName": "اّبار الوقف "
          },
          {
            "Id": 5100,
            "VillageName": "اّبار الملك "
          },
          {
            "Id": 5101,
            "VillageName": "مدينة أخميم "
          }
        ],
        "name": "مركز أخميم"
      },
      {
        "id": 312,
        "villages": [
          {
            "Id": 5102,
            "VillageName": "نجوع بنى واصل "
          },
          {
            "Id": 5103,
            "VillageName": "نجوع الريانية "
          },
          {
            "Id": 5104,
            "VillageName": "فاوجلى "
          },
          {
            "Id": 5105,
            "VillageName": "سفلاق "
          },
          {
            "Id": 5106,
            "VillageName": "بنى واصل "
          },
          {
            "Id": 5107,
            "VillageName": "القرامطة شرق "
          },
          {
            "Id": 5108,
            "VillageName": "الفراسية "
          },
          {
            "Id": 5109,
            "VillageName": "العوامية "
          },
          {
            "Id": 5110,
            "VillageName": "الطوايل الغربية "
          },
          {
            "Id": 5111,
            "VillageName": "الطوايل الشرقية "
          },
          {
            "Id": 5112,
            "VillageName": "الريانية بالكتكاتة "
          },
          {
            "Id": 5113,
            "VillageName": "الريانية بالحاجر "
          },
          {
            "Id": 5114,
            "VillageName": "الحرادنة "
          },
          {
            "Id": 5115,
            "VillageName": "الجلاوية "
          },
          {
            "Id": 5116,
            "VillageName": "مدينة ساقلته "
          }
        ],
        "name": "مركز ساقلتة"
      },
      {
        "id": 313,
        "villages": [
          {
            "Id": 5117,
            "VillageName": "حى الكوثر "
          }
        ],
        "name": "قسم الكوثر"
      },
      {
        "id": 314,
        "villages": [
          {
            "Id": 5118,
            "VillageName": "مدينة أخميم الجديدة "
          }
        ],
        "name": "مدينة أخميم الجديدة *"
      },
      {
        "id": 315,
        "villages": [
          {
            "Id": 5119,
            "VillageName": "مدينة سوهاج الجديدة "
          }
        ],
        "name": "مدينة سوهاج الجديدة *"
      }
    ]
  },
  {
    "id": 27,
    "name": "قنا",
    "centers": [
      {
        "id": 316,
        "villages": [
          {
            "Id": 5120,
            "VillageName": "حاجــر قنا "
          },
          {
            "Id": 5121,
            "VillageName": "قسم ثالث "
          },
          {
            "Id": 5122,
            "VillageName": "قسم ثان "
          },
          {
            "Id": 5123,
            "VillageName": "قسم أول "
          },
          {
            "Id": 5124,
            "VillageName": "الحميدات "
          }
        ],
        "name": "قسم قــنا"
      },
      {
        "id": 317,
        "villages": [
          {
            "Id": 5125,
            "VillageName": "كرم عمران "
          },
          {
            "Id": 5126,
            "VillageName": "دندره "
          },
          {
            "Id": 5127,
            "VillageName": "جزيرة الطوابية "
          },
          {
            "Id": 5128,
            "VillageName": "أولاد عمرو "
          },
          {
            "Id": 5129,
            "VillageName": "المخادمة "
          },
          {
            "Id": 5130,
            "VillageName": "المحروسة( البلاص سابقا) "
          },
          {
            "Id": 5131,
            "VillageName": "الكلاحين "
          },
          {
            "Id": 5132,
            "VillageName": "القناوية "
          },
          {
            "Id": 5133,
            "VillageName": "الغوصة "
          },
          {
            "Id": 5134,
            "VillageName": "العسلية "
          },
          {
            "Id": 5135,
            "VillageName": "الطويرات "
          },
          {
            "Id": 5136,
            "VillageName": "الطوابية "
          },
          {
            "Id": 5137,
            "VillageName": "الصالحية "
          },
          {
            "Id": 5138,
            "VillageName": "الشيخ عيسى "
          },
          {
            "Id": 5139,
            "VillageName": "الدير الشرقى "
          },
          {
            "Id": 5140,
            "VillageName": "الدير الغربى "
          },
          {
            "Id": 5141,
            "VillageName": "الحجيرات "
          },
          {
            "Id": 5142,
            "VillageName": "الجبلاو "
          },
          {
            "Id": 5143,
            "VillageName": "الترامسة "
          },
          {
            "Id": 5144,
            "VillageName": "الاشراف القبلية "
          },
          {
            "Id": 5145,
            "VillageName": "الاشراف الغربية "
          },
          {
            "Id": 5146,
            "VillageName": "الاشراف الشرقية "
          },
          {
            "Id": 5147,
            "VillageName": "الاشراف البحرية "
          },
          {
            "Id": 5148,
            "VillageName": "أبنــــود "
          }
        ],
        "name": "مركز قــنا"
      },
      {
        "id": 318,
        "villages": [
          {
            "Id": 5149,
            "VillageName": "نجع عزوز "
          },
          {
            "Id": 5150,
            "VillageName": "نجع سعيد "
          },
          {
            "Id": 5151,
            "VillageName": "نجع الشيخ على ( الشيخ على شرق ) "
          },
          {
            "Id": 5152,
            "VillageName": "فاو قبلى "
          },
          {
            "Id": 5153,
            "VillageName": "فاو غرب "
          },
          {
            "Id": 5154,
            "VillageName": "فاو بحرى "
          },
          {
            "Id": 5155,
            "VillageName": "العطيات "
          },
          {
            "Id": 5156,
            "VillageName": "العزب "
          },
          {
            "Id": 5157,
            "VillageName": "الصبريات "
          },
          {
            "Id": 5158,
            "VillageName": "السمطا قبلى "
          },
          {
            "Id": 5159,
            "VillageName": "السمطا بحرى "
          },
          {
            "Id": 5160,
            "VillageName": "أبو مناع قبلى "
          },
          {
            "Id": 5161,
            "VillageName": "أبو مناع غرب "
          },
          {
            "Id": 5162,
            "VillageName": "أبو مناع شرق "
          },
          {
            "Id": 5163,
            "VillageName": "أبو مناع بحرى "
          },
          {
            "Id": 5164,
            "VillageName": "أبو دياب غرب "
          },
          {
            "Id": 5165,
            "VillageName": "أبو دياب شرق "
          },
          {
            "Id": 5166,
            "VillageName": "مدينة دشنا "
          }
        ],
        "name": "مركز دشنا"
      },
      {
        "id": 319,
        "villages": [
          {
            "Id": 5167,
            "VillageName": "جزيرة الحمودى "
          },
          {
            "Id": 5168,
            "VillageName": "المراشدة "
          },
          {
            "Id": 5169,
            "VillageName": "القلمينا "
          },
          {
            "Id": 5170,
            "VillageName": "مدينة الوقف "
          }
        ],
        "name": "مركز الوقف"
      },
      {
        "id": 320,
        "villages": [
          {
            "Id": 5171,
            "VillageName": "هــــو "
          },
          {
            "Id": 5172,
            "VillageName": "عزبة البوصة "
          },
          {
            "Id": 5173,
            "VillageName": "حمرة دوم "
          },
          {
            "Id": 5174,
            "VillageName": "بهجورة "
          },
          {
            "Id": 5175,
            "VillageName": "أولاد نجم بهجورة "
          },
          {
            "Id": 5176,
            "VillageName": "أولاد نجم القبلية "
          },
          {
            "Id": 5177,
            "VillageName": "أولاد نجم التمه "
          },
          {
            "Id": 5178,
            "VillageName": "الهيشة "
          },
          {
            "Id": 5179,
            "VillageName": "المصالحة "
          },
          {
            "Id": 5180,
            "VillageName": "القناوية البحرية "
          },
          {
            "Id": 5181,
            "VillageName": "القمانة "
          },
          {
            "Id": 5182,
            "VillageName": "القصر "
          },
          {
            "Id": 5183,
            "VillageName": "الغربى بهجورة "
          },
          {
            "Id": 5184,
            "VillageName": "الغربى بالسلامية "
          },
          {
            "Id": 5185,
            "VillageName": "الصياد "
          },
          {
            "Id": 5186,
            "VillageName": "الشعانية "
          },
          {
            "Id": 5187,
            "VillageName": "الشرقى بهجورة "
          },
          {
            "Id": 5188,
            "VillageName": "الشاوريه "
          },
          {
            "Id": 5189,
            "VillageName": "السماينه "
          },
          {
            "Id": 5190,
            "VillageName": "السلامية "
          },
          {
            "Id": 5191,
            "VillageName": "الرحمانية قبلى "
          },
          {
            "Id": 5192,
            "VillageName": "الرئيسية "
          },
          {
            "Id": 5193,
            "VillageName": "الدرب "
          },
          {
            "Id": 5194,
            "VillageName": "الحلفاية قبلى "
          },
          {
            "Id": 5195,
            "VillageName": "الحلفاية بحرى "
          },
          {
            "Id": 5196,
            "VillageName": "الحفناوية "
          },
          {
            "Id": 5197,
            "VillageName": "أبو عمورى "
          },
          {
            "Id": 5198,
            "VillageName": "أبو حزام "
          },
          {
            "Id": 5199,
            "VillageName": "مدينة نجع حمادى "
          }
        ],
        "name": "مركز نجع حمادى"
      },
      {
        "id": 321,
        "villages": [
          {
            "Id": 5200,
            "VillageName": "نجع الحاج سلام "
          },
          {
            "Id": 5201,
            "VillageName": "كوم البيجا "
          },
          {
            "Id": 5202,
            "VillageName": "رفاعة "
          },
          {
            "Id": 5203,
            "VillageName": "النجوع "
          },
          {
            "Id": 5204,
            "VillageName": "الكوم الأحمر "
          },
          {
            "Id": 5205,
            "VillageName": "القبيبة "
          },
          {
            "Id": 5206,
            "VillageName": "العسيرات "
          },
          {
            "Id": 5207,
            "VillageName": "العركى "
          },
          {
            "Id": 5208,
            "VillageName": "الدهسة "
          },
          {
            "Id": 5209,
            "VillageName": "مدينة فرشوط "
          }
        ],
        "name": "مركز فرشوط"
      },
      {
        "id": 322,
        "villages": [
          {
            "Id": 5210,
            "VillageName": "كوم يعقوب "
          },
          {
            "Id": 5211,
            "VillageName": "كوم جابر "
          },
          {
            "Id": 5212,
            "VillageName": "قصير بخانس "
          },
          {
            "Id": 5213,
            "VillageName": "عزبة البوصة "
          },
          {
            "Id": 5214,
            "VillageName": "سمهود "
          },
          {
            "Id": 5215,
            "VillageName": "جزيرة الدوم "
          },
          {
            "Id": 5216,
            "VillageName": "بلاد المال قبلى "
          },
          {
            "Id": 5217,
            "VillageName": "بلاد المال بحرى "
          },
          {
            "Id": 5218,
            "VillageName": "بخانس "
          },
          {
            "Id": 5219,
            "VillageName": "النجمة والحمران "
          },
          {
            "Id": 5220,
            "VillageName": "المحارزة "
          },
          {
            "Id": 5221,
            "VillageName": "الكرنك "
          },
          {
            "Id": 5222,
            "VillageName": "القلعية "
          },
          {
            "Id": 5223,
            "VillageName": "القبلى سمهود "
          },
          {
            "Id": 5224,
            "VillageName": "القارة "
          },
          {
            "Id": 5225,
            "VillageName": "العوامر وبنى برزه "
          },
          {
            "Id": 5226,
            "VillageName": "العوامر الغربية "
          },
          {
            "Id": 5227,
            "VillageName": "العمرة "
          },
          {
            "Id": 5228,
            "VillageName": "الشقيفى "
          },
          {
            "Id": 5229,
            "VillageName": "الشرقى سمهود "
          },
          {
            "Id": 5230,
            "VillageName": "السليمات "
          },
          {
            "Id": 5231,
            "VillageName": "الزرايب "
          },
          {
            "Id": 5232,
            "VillageName": "الرواتب "
          },
          {
            "Id": 5233,
            "VillageName": "الرفشة "
          },
          {
            "Id": 5234,
            "VillageName": "الرزقة "
          },
          {
            "Id": 5235,
            "VillageName": "الخوالد "
          },
          {
            "Id": 5236,
            "VillageName": "الحسينات "
          },
          {
            "Id": 5237,
            "VillageName": "الحبيلات الغربية "
          },
          {
            "Id": 5238,
            "VillageName": "الحبيلات الشرقية "
          },
          {
            "Id": 5239,
            "VillageName": "البحرى سمهود "
          },
          {
            "Id": 5240,
            "VillageName": "الأوسط سمهود "
          },
          {
            "Id": 5241,
            "VillageName": "الأميرية "
          },
          {
            "Id": 5242,
            "VillageName": "أبو شوشة "
          },
          {
            "Id": 5243,
            "VillageName": "مدينة أبو تشت "
          }
        ],
        "name": "مركز أبو تشت"
      },
      {
        "id": 323,
        "villages": [
          {
            "Id": 5244,
            "VillageName": "بير عنبر "
          },
          {
            "Id": 5245,
            "VillageName": "اللقيطة "
          },
          {
            "Id": 5246,
            "VillageName": "الكلاحين "
          },
          {
            "Id": 5247,
            "VillageName": "القلعة "
          },
          {
            "Id": 5248,
            "VillageName": "العويضات "
          },
          {
            "Id": 5249,
            "VillageName": "الظافرية "
          },
          {
            "Id": 5250,
            "VillageName": "الشيخية "
          },
          {
            "Id": 5251,
            "VillageName": "البراهمة "
          },
          {
            "Id": 5252,
            "VillageName": "مدينة قفط "
          }
        ],
        "name": "مركز قفط"
      },
      {
        "id": 324,
        "villages": [
          {
            "Id": 5253,
            "VillageName": "عباسة "
          },
          {
            "Id": 5254,
            "VillageName": "شنهور "
          },
          {
            "Id": 5255,
            "VillageName": "خزام "
          },
          {
            "Id": 5256,
            "VillageName": "حجازة بحرى "
          },
          {
            "Id": 5257,
            "VillageName": "حجازة قبلى "
          },
          {
            "Id": 5258,
            "VillageName": "جزيرة مطيرة "
          },
          {
            "Id": 5259,
            "VillageName": "جراجوس "
          },
          {
            "Id": 5260,
            "VillageName": "المقربيه "
          },
          {
            "Id": 5261,
            "VillageName": "المقارين "
          },
          {
            "Id": 5262,
            "VillageName": "المفرجية "
          },
          {
            "Id": 5263,
            "VillageName": "المعرى "
          },
          {
            "Id": 5264,
            "VillageName": "المسيد "
          },
          {
            "Id": 5265,
            "VillageName": "المخزن "
          },
          {
            "Id": 5266,
            "VillageName": "الكلالسة "
          },
          {
            "Id": 5267,
            "VillageName": "الكراتية "
          },
          {
            "Id": 5268,
            "VillageName": "العيايشة "
          },
          {
            "Id": 5269,
            "VillageName": "العليقات "
          },
          {
            "Id": 5270,
            "VillageName": "العقب "
          },
          {
            "Id": 5271,
            "VillageName": "الشعرانى "
          },
          {
            "Id": 5272,
            "VillageName": "الخرانقه "
          },
          {
            "Id": 5273,
            "VillageName": "الحمر والجعافر ة "
          },
          {
            "Id": 5274,
            "VillageName": "الحلة "
          },
          {
            "Id": 5275,
            "VillageName": "الحراجية "
          },
          {
            "Id": 5276,
            "VillageName": "الجمالية "
          },
          {
            "Id": 5277,
            "VillageName": "مدينة قوص "
          }
        ],
        "name": "مركز قوص"
      },
      {
        "id": 325,
        "villages": [
          {
            "Id": 5278,
            "VillageName": "طوخ "
          },
          {
            "Id": 5279,
            "VillageName": "دنفيق "
          },
          {
            "Id": 5280,
            "VillageName": "الزوايدة "
          },
          {
            "Id": 5281,
            "VillageName": "الخطارة "
          },
          {
            "Id": 5282,
            "VillageName": "البحرى قمولا "
          },
          {
            "Id": 5283,
            "VillageName": "الأوسط قمولا "
          },
          {
            "Id": 5284,
            "VillageName": "مدينة نقادة "
          }
        ],
        "name": "مركز نقادة"
      },
      {
        "id": 326,
        "villages": [
          {
            "Id": 5285,
            "VillageName": "مدينة قنا الجديدة "
          }
        ],
        "name": "مدينة قنا الجديدة *"
      }
    ]
  },
  {
    "id": 28,
    "name": "اسوان",
    "centers": [
      {
        "id": 327,
        "villages": [
          {
            "Id": 5286,
            "VillageName": "الشلال (السد العالى شرق) "
          },
          {
            "Id": 5287,
            "VillageName": "جبل تقوق "
          },
          {
            "Id": 5288,
            "VillageName": "الخزان غرب "
          },
          {
            "Id": 5289,
            "VillageName": "الخزان شرق "
          },
          {
            "Id": 5290,
            "VillageName": "نجع المحطة "
          },
          {
            "Id": 5291,
            "VillageName": "جزر عواض "
          },
          {
            "Id": 5292,
            "VillageName": "جزيرة أسوان(على عثمان) "
          },
          {
            "Id": 5293,
            "VillageName": "نجم الدين "
          },
          {
            "Id": 5294,
            "VillageName": "شريف سليمان "
          },
          {
            "Id": 5295,
            "VillageName": "عبدالحفيظ أبو قديس "
          },
          {
            "Id": 5296,
            "VillageName": "عثمان أحمد ابراهيم "
          },
          {
            "Id": 5297,
            "VillageName": "عبدالعظيم حسن "
          },
          {
            "Id": 5298,
            "VillageName": "صالح جاهين "
          }
        ],
        "name": "قسم أول أسوان"
      },
      {
        "id": 328,
        "villages": [
          {
            "Id": 5299,
            "VillageName": "كيما "
          },
          {
            "Id": 5300,
            "VillageName": "النجوع المنضمة "
          },
          {
            "Id": 5301,
            "VillageName": "بدر الدين "
          },
          {
            "Id": 5302,
            "VillageName": "مكى حسون "
          }
        ],
        "name": "قسم ثان أســــوان **"
      },
      {
        "id": 329,
        "villages": [
          {
            "Id": 5303,
            "VillageName": "خور أبو صبيرة * "
          },
          {
            "Id": 5304,
            "VillageName": "بحيرة ناصر * "
          },
          {
            "Id": 5305,
            "VillageName": "منطقة حدود أسوان * "
          },
          {
            "Id": 5306,
            "VillageName": "منطقة السد العالى * "
          },
          {
            "Id": 5307,
            "VillageName": "منطقة الحديد والصلب * "
          },
          {
            "Id": 5308,
            "VillageName": "مطار أسوان * "
          },
          {
            "Id": 5309,
            "VillageName": "صحارى سيتى * "
          },
          {
            "Id": 5310,
            "VillageName": "شاتورمة * "
          },
          {
            "Id": 5311,
            "VillageName": "المالكى * "
          },
          {
            "Id": 5312,
            "VillageName": "السنقارى * "
          },
          {
            "Id": 5313,
            "VillageName": "السبوع * "
          },
          {
            "Id": 5314,
            "VillageName": "العلاقى(وادى أم عشيرة)* "
          },
          {
            "Id": 5315,
            "VillageName": "وادى كركر "
          },
          {
            "Id": 5316,
            "VillageName": "غرب أسوان "
          },
          {
            "Id": 5317,
            "VillageName": "جزيرة بهريف "
          },
          {
            "Id": 5318,
            "VillageName": "الكوبانية "
          },
          {
            "Id": 5319,
            "VillageName": "الأعقاب "
          },
          {
            "Id": 5320,
            "VillageName": "أبو الريش قبلى "
          },
          {
            "Id": 5321,
            "VillageName": "أبو الريش بحرى "
          }
        ],
        "name": "مركز أســـوان"
      },
      {
        "id": 330,
        "villages": [
          {
            "Id": 5322,
            "VillageName": "مدينة أسوان الجديدة "
          }
        ],
        "name": "مدينة أسوان الجديدة *"
      },
      {
        "id": 331,
        "villages": [
          {
            "Id": 5323,
            "VillageName": "منطقة مناجم الفوسفات ** "
          },
          {
            "Id": 5324,
            "VillageName": "وادى الصعايدة "
          },
          {
            "Id": 5325,
            "VillageName": "وادى الرديسيه "
          },
          {
            "Id": 5326,
            "VillageName": "هلال "
          },
          {
            "Id": 5327,
            "VillageName": "المحاميد "
          },
          {
            "Id": 5328,
            "VillageName": "الحمام "
          },
          {
            "Id": 5329,
            "VillageName": "أبو النصر "
          },
          {
            "Id": 5330,
            "VillageName": "الزنيقة "
          },
          {
            "Id": 5331,
            "VillageName": "المفالسة "
          },
          {
            "Id": 5332,
            "VillageName": "الدومارية "
          },
          {
            "Id": 5333,
            "VillageName": "الدقاديق "
          },
          {
            "Id": 5334,
            "VillageName": "النصراب "
          },
          {
            "Id": 5335,
            "VillageName": "وادى عبادى-3 ( الرضوانية ) "
          },
          {
            "Id": 5336,
            "VillageName": "وادى عبادى-2 ( الزهراء ) "
          },
          {
            "Id": 5337,
            "VillageName": "وادى عبادى-1 ( الشاذلية ) "
          },
          {
            "Id": 5338,
            "VillageName": "وادى عبادى "
          },
          {
            "Id": 5339,
            "VillageName": "النضال "
          },
          {
            "Id": 5340,
            "VillageName": "المروة "
          },
          {
            "Id": 5341,
            "VillageName": "الكرامة "
          },
          {
            "Id": 5342,
            "VillageName": "الشهادة "
          },
          {
            "Id": 5343,
            "VillageName": "الإيمان "
          },
          {
            "Id": 5344,
            "VillageName": "الأشراف "
          },
          {
            "Id": 5345,
            "VillageName": "الأحرار "
          },
          {
            "Id": 5346,
            "VillageName": "الجهاد "
          },
          {
            "Id": 5347,
            "VillageName": "عمرو بن العاص (المركزية) "
          },
          {
            "Id": 5348,
            "VillageName": "الرئيسية "
          },
          {
            "Id": 5349,
            "VillageName": "الكلح غرب "
          },
          {
            "Id": 5350,
            "VillageName": "الكلح شرق "
          },
          {
            "Id": 5351,
            "VillageName": "القنان "
          },
          {
            "Id": 5352,
            "VillageName": "الطوناب "
          },
          {
            "Id": 5353,
            "VillageName": "الصعايدة "
          },
          {
            "Id": 5354,
            "VillageName": "الشراونة "
          },
          {
            "Id": 5355,
            "VillageName": "الرمادى قبلى "
          },
          {
            "Id": 5356,
            "VillageName": "الرمادى بحرى "
          },
          {
            "Id": 5357,
            "VillageName": "الرديسية بحرى "
          },
          {
            "Id": 5358,
            "VillageName": "الحجز قبلى "
          },
          {
            "Id": 5359,
            "VillageName": "الحجز بحــرى "
          },
          {
            "Id": 5360,
            "VillageName": "البصيلية قبلى "
          },
          {
            "Id": 5361,
            "VillageName": "البصيلية الوسطى "
          },
          {
            "Id": 5362,
            "VillageName": "أدفو قبلى "
          },
          {
            "Id": 5363,
            "VillageName": "مدينة الرديسية قبلى "
          },
          {
            "Id": 5364,
            "VillageName": "مدينة البصيلية بحرى "
          },
          {
            "Id": 5365,
            "VillageName": "مدينة السباعية غرب "
          },
          {
            "Id": 5366,
            "VillageName": "مدينة أدفو "
          }
        ],
        "name": "مركز إدفـــو"
      },
      {
        "id": 332,
        "villages": [
          {
            "Id": 5367,
            "VillageName": "الشبيــكــة "
          },
          {
            "Id": 5368,
            "VillageName": "العـــــرب "
          },
          {
            "Id": 5369,
            "VillageName": "البصـــالـــى "
          },
          {
            "Id": 5370,
            "VillageName": "سبيل العرب "
          },
          {
            "Id": 5371,
            "VillageName": "الأحمــــدية "
          },
          {
            "Id": 5372,
            "VillageName": "سبيل أبو تاجى "
          },
          {
            "Id": 5373,
            "VillageName": "سبيل مكى "
          },
          {
            "Id": 5374,
            "VillageName": "السبيل بحرى "
          },
          {
            "Id": 5375,
            "VillageName": "الحريـــــة "
          },
          {
            "Id": 5376,
            "VillageName": "الضمــــا "
          },
          {
            "Id": 5377,
            "VillageName": "الرغامة شرق "
          },
          {
            "Id": 5378,
            "VillageName": "حجـــــازة "
          },
          {
            "Id": 5379,
            "VillageName": "سبعة قبلى "
          },
          {
            "Id": 5380,
            "VillageName": "سبعة بحرى "
          },
          {
            "Id": 5381,
            "VillageName": "منشية الرغامة "
          },
          {
            "Id": 5382,
            "VillageName": "مليحة "
          },
          {
            "Id": 5383,
            "VillageName": "كفور كوم أمبو "
          },
          {
            "Id": 5384,
            "VillageName": "فطيرة "
          },
          {
            "Id": 5385,
            "VillageName": "فارس "
          },
          {
            "Id": 5386,
            "VillageName": "سلوا قبلى "
          },
          {
            "Id": 5387,
            "VillageName": "سلوا بحرى "
          },
          {
            "Id": 5388,
            "VillageName": "المنشية الجديدة "
          },
          {
            "Id": 5389,
            "VillageName": "الكاجوج "
          },
          {
            "Id": 5390,
            "VillageName": "العتمور قبلى "
          },
          {
            "Id": 5391,
            "VillageName": "العباسية "
          },
          {
            "Id": 5392,
            "VillageName": "السبيل "
          },
          {
            "Id": 5393,
            "VillageName": "أقليت "
          },
          {
            "Id": 5394,
            "VillageName": "مدينة كوم أمبو "
          }
        ],
        "name": "مركز كوم أمبــو"
      },
      {
        "id": 333,
        "villages": [
          {
            "Id": 5395,
            "VillageName": "قورته ثالث "
          },
          {
            "Id": 5396,
            "VillageName": "قورته أول "
          },
          {
            "Id": 5397,
            "VillageName": "الآمال "
          },
          {
            "Id": 5398,
            "VillageName": "الكرامة "
          },
          {
            "Id": 5399,
            "VillageName": "المنار "
          },
          {
            "Id": 5400,
            "VillageName": "البراعم "
          },
          {
            "Id": 5401,
            "VillageName": "الحكمة "
          },
          {
            "Id": 5402,
            "VillageName": "وادى النقرة "
          },
          {
            "Id": 5403,
            "VillageName": "وادى خريت (خريت 1) "
          },
          {
            "Id": 5404,
            "VillageName": "وادى العرب "
          },
          {
            "Id": 5405,
            "VillageName": "مصمص "
          },
          {
            "Id": 5406,
            "VillageName": "مرواو "
          },
          {
            "Id": 5407,
            "VillageName": "محرقة "
          },
          {
            "Id": 5408,
            "VillageName": "ماريا "
          },
          {
            "Id": 5409,
            "VillageName": "كشتمنة غرب "
          },
          {
            "Id": 5410,
            "VillageName": "كشتمنة شرق "
          },
          {
            "Id": 5411,
            "VillageName": "قورته (قورته ثان ) "
          },
          {
            "Id": 5412,
            "VillageName": "قسطل "
          },
          {
            "Id": 5413,
            "VillageName": "قرشة "
          },
          {
            "Id": 5414,
            "VillageName": "عنيبة "
          },
          {
            "Id": 5415,
            "VillageName": "شاترمة "
          },
          {
            "Id": 5416,
            "VillageName": "سيالة "
          },
          {
            "Id": 5417,
            "VillageName": "دهميت "
          },
          {
            "Id": 5418,
            "VillageName": "دار السلام "
          },
          {
            "Id": 5419,
            "VillageName": "دابود "
          },
          {
            "Id": 5420,
            "VillageName": "جرف حسين "
          },
          {
            "Id": 5421,
            "VillageName": "توماس وعافيه "
          },
          {
            "Id": 5422,
            "VillageName": "توشكى غرب "
          },
          {
            "Id": 5423,
            "VillageName": "توشكى شرق "
          },
          {
            "Id": 5424,
            "VillageName": "بلانة "
          },
          {
            "Id": 5425,
            "VillageName": "المضيق "
          },
          {
            "Id": 5426,
            "VillageName": "المالكى "
          },
          {
            "Id": 5427,
            "VillageName": "العلاقى "
          },
          {
            "Id": 5428,
            "VillageName": "السنقارى "
          },
          {
            "Id": 5429,
            "VillageName": "السبوع "
          },
          {
            "Id": 5430,
            "VillageName": "الدكة "
          },
          {
            "Id": 5431,
            "VillageName": "الجنينة والشباك "
          },
          {
            "Id": 5432,
            "VillageName": "الأميركاب "
          },
          {
            "Id": 5433,
            "VillageName": "ارمنا "
          },
          {
            "Id": 5434,
            "VillageName": "ادندان "
          },
          {
            "Id": 5435,
            "VillageName": "أبو هور "
          },
          {
            "Id": 5436,
            "VillageName": "أبو سمبل "
          },
          {
            "Id": 5437,
            "VillageName": "ابريم "
          },
          {
            "Id": 5438,
            "VillageName": "مدينة كلابشة "
          },
          {
            "Id": 5439,
            "VillageName": "مدينة نصر النوبة "
          }
        ],
        "name": "مركز نصــر النوبة"
      },
      {
        "id": 334,
        "villages": [
          {
            "Id": 5440,
            "VillageName": "مساكن دراو * "
          },
          {
            "Id": 5441,
            "VillageName": "الشطب "
          },
          {
            "Id": 5442,
            "VillageName": "بنبان قبلى "
          },
          {
            "Id": 5443,
            "VillageName": "بنبان بحرى "
          },
          {
            "Id": 5444,
            "VillageName": "المنصورية "
          },
          {
            "Id": 5445,
            "VillageName": "الطويسة "
          },
          {
            "Id": 5446,
            "VillageName": "الرقبة "
          },
          {
            "Id": 5447,
            "VillageName": "الجعافرة "
          },
          {
            "Id": 5448,
            "VillageName": "مدينة دراو "
          }
        ],
        "name": "مركز دراو"
      },
      {
        "id": 335,
        "villages": [
          {
            "Id": 5449,
            "VillageName": "أبو سمبل السياحية "
          },
          {
            "Id": 5450,
            "VillageName": "الرى "
          },
          {
            "Id": 5451,
            "VillageName": "الصيادين "
          },
          {
            "Id": 5452,
            "VillageName": "المستقبل "
          },
          {
            "Id": 5453,
            "VillageName": "الشهداء "
          },
          {
            "Id": 5454,
            "VillageName": "العبابدة "
          },
          {
            "Id": 5455,
            "VillageName": "عبد القادر "
          },
          {
            "Id": 5456,
            "VillageName": "السلام "
          },
          {
            "Id": 5457,
            "VillageName": "نلوا و الزهور "
          },
          {
            "Id": 5458,
            "VillageName": "الفراعنة "
          },
          {
            "Id": 5459,
            "VillageName": "قرية أدندان "
          },
          {
            "Id": 5460,
            "VillageName": "قرية قسطل "
          },
          {
            "Id": 6412,
            "VillageName": "مدينة أبو سنبل السياحية وأحيائها الخمسة-حى رمسيس- حى العاشر من رمضان- "
          }
        ],
        "name": "مركز أبو سمبل"
      },
      {
        "id": 336,
        "villages": [
          {
            "Id": 5462,
            "VillageName": "مدينة توشكا الجديدة "
          }
        ],
        "name": "مدينة توشكا الجديدة *"
      }
    ]
  },
  {
    "id": 29,
    "name": "الاقصر",
    "centers": [
      {
        "id": 337,
        "villages": [
          {
            "Id": 5463,
            "VillageName": "منشأة العمارى "
          },
          {
            "Id": 5464,
            "VillageName": "العوامــية "
          },
          {
            "Id": 5465,
            "VillageName": "الكرنك الجديدة "
          },
          {
            "Id": 5466,
            "VillageName": "الكرنك القديم "
          },
          {
            "Id": 5467,
            "VillageName": "مدينة الأقصـــر "
          }
        ],
        "name": "قسم الأقصــــر"
      },
      {
        "id": 338,
        "villages": [
          {
            "Id": 5468,
            "VillageName": "الروافعة الغربية "
          },
          {
            "Id": 5469,
            "VillageName": "منشية النوبة "
          },
          {
            "Id": 5470,
            "VillageName": "الطود غرب "
          },
          {
            "Id": 5471,
            "VillageName": "العديسات قبلى "
          },
          {
            "Id": 5472,
            "VillageName": "العديسات بحرى "
          },
          {
            "Id": 5473,
            "VillageName": "البغدادى "
          },
          {
            "Id": 5474,
            "VillageName": "الحبيل "
          },
          {
            "Id": 5475,
            "VillageName": "مدينة الطـــود "
          },
          {
            "Id": 5476,
            "VillageName": "مدينة البياضية "
          }
        ],
        "name": "مركز الأقصر"
      },
      {
        "id": 339,
        "villages": [
          {
            "Id": 5477,
            "VillageName": "المدامود بحرى "
          },
          {
            "Id": 5478,
            "VillageName": "الصعـــايدة "
          },
          {
            "Id": 5479,
            "VillageName": "المدامـــود قبلى "
          },
          {
            "Id": 5480,
            "VillageName": "الزينية بحــرى "
          },
          {
            "Id": 5481,
            "VillageName": "العشـــى "
          },
          {
            "Id": 5482,
            "VillageName": "مدينة الزينية قبلى "
          },
          {
            "Id": 5483,
            "VillageName": "مدينة طيبة الجديدة * "
          }
        ],
        "name": "مركز طيبــــة"
      },
      {
        "id": 340,
        "villages": [
          {
            "Id": 5484,
            "VillageName": "الشيخ عامر "
          },
          {
            "Id": 5485,
            "VillageName": "الملاحة (الملاحى والزمامى والحبشى سابقا) "
          },
          {
            "Id": 5486,
            "VillageName": "سوزان مبارك "
          },
          {
            "Id": 5487,
            "VillageName": "المريـس( وتشمل جزيرة أرمنت) "
          },
          {
            "Id": 5488,
            "VillageName": "الضبعية "
          },
          {
            "Id": 5489,
            "VillageName": "الأقالتة "
          },
          {
            "Id": 5490,
            "VillageName": "البعيرات "
          },
          {
            "Id": 5491,
            "VillageName": "الغربى قامولا "
          },
          {
            "Id": 5492,
            "VillageName": "القبلى قامولا "
          },
          {
            "Id": 5493,
            "VillageName": "مدينة القرنة الجديدة"
          }
        ],
        "name": "مركـز القرنة"
      },
      {
        "id": 341,
        "villages": [
          {
            "Id": 5494,
            "VillageName": "السلام (الفرز ) "
          },
          {
            "Id": 5495,
            "VillageName": "المحاميد قبلى "
          },
          {
            "Id": 5496,
            "VillageName": "المحاميد بحرى "
          },
          {
            "Id": 5497,
            "VillageName": "الريانية "
          },
          {
            "Id": 5498,
            "VillageName": "الرزيقات قبلى "
          },
          {
            "Id": 5499,
            "VillageName": "الرزيقات بحرى "
          },
          {
            "Id": 5500,
            "VillageName": "الديمقراط "
          },
          {
            "Id": 5501,
            "VillageName": "مدينة أرمنت "
          }
        ],
        "name": "مركز أرمنت"
      },
      {
        "id": 342,
        "villages": [
          {
            "Id": 5502,
            "VillageName": "وبورات المطاعنة "
          },
          {
            "Id": 5503,
            "VillageName": "توماس3 ( القرية 3 حلفا ) "
          },
          {
            "Id": 5504,
            "VillageName": "الواسطى "
          },
          {
            "Id": 5505,
            "VillageName": "القرية 2 "
          },
          {
            "Id": 5506,
            "VillageName": "القرية 1 "
          },
          {
            "Id": 5507,
            "VillageName": "توماس وعافية "
          },
          {
            "Id": 5508,
            "VillageName": "كيمان المطاعنه "
          },
          {
            "Id": 5509,
            "VillageName": "كومير "
          },
          {
            "Id": 5510,
            "VillageName": "طفنيس "
          },
          {
            "Id": 5511,
            "VillageName": "زرنيخ "
          },
          {
            "Id": 5512,
            "VillageName": "جزيرة راجح(جزيرة الريقية سابقا) "
          },
          {
            "Id": 5513,
            "VillageName": "الهنادى "
          },
          {
            "Id": 5514,
            "VillageName": "النمسا "
          },
          {
            "Id": 5515,
            "VillageName": "النجوع قبلى "
          },
          {
            "Id": 5516,
            "VillageName": "النجوع بحرى "
          },
          {
            "Id": 5517,
            "VillageName": "المعلا "
          },
          {
            "Id": 5518,
            "VillageName": "المساوية "
          },
          {
            "Id": 5519,
            "VillageName": "الكلابية "
          },
          {
            "Id": 5520,
            "VillageName": "القرايا "
          },
          {
            "Id": 5521,
            "VillageName": "الغريرة "
          },
          {
            "Id": 5522,
            "VillageName": "العضايمة "
          },
          {
            "Id": 5523,
            "VillageName": "الشغب (العلواني سابقا ) "
          },
          {
            "Id": 5524,
            "VillageName": "الدير "
          },
          {
            "Id": 5525,
            "VillageName": "الديابيه "
          },
          {
            "Id": 5526,
            "VillageName": "الحميدات "
          },
          {
            "Id": 5527,
            "VillageName": "الحله "
          },
          {
            "Id": 5528,
            "VillageName": "الترعة (ترعة ناصر) "
          },
          {
            "Id": 5529,
            "VillageName": "أصفون "
          },
          {
            "Id": 5530,
            "VillageName": "مدينة إسنا "
          }
        ],
        "name": "مركز إسنا"
      }
    ]
  },
  {
    "id": 31,
    "name": "البحر الاحمر",
    "centers": [
      {
        "id": 343,
        "villages": [
          {
            "Id": 5531,
            "VillageName": "القرى السياحية "
          },
          {
            "Id": 5532,
            "VillageName": "الهضبة "
          },
          {
            "Id": 5533,
            "VillageName": "المنطقة الصناعية "
          },
          {
            "Id": 5534,
            "VillageName": "الميناء "
          },
          {
            "Id": 5535,
            "VillageName": "السقالة "
          }
        ],
        "name": "قسم أول الغــردقة"
      },
      {
        "id": 344,
        "villages": [
          {
            "Id": 5536,
            "VillageName": "جمشة "
          },
          {
            "Id": 5537,
            "VillageName": "الأحياء "
          },
          {
            "Id": 5538,
            "VillageName": "الهلال "
          },
          {
            "Id": 5539,
            "VillageName": "العرب "
          },
          {
            "Id": 5540,
            "VillageName": "الدهار "
          }
        ],
        "name": "قسم ثان الغــردقة"
      },
      {
        "id": 345,
        "villages": [
          {
            "Id": 5541,
            "VillageName": "قرية وادى دارا "
          },
          {
            "Id": 5542,
            "VillageName": "الزعفرانة وتشمل الأديرة "
          },
          {
            "Id": 5543,
            "VillageName": "مدينة رأس غارب "
          }
        ],
        "name": "قسم رأس غارب"
      },
      {
        "id": 346,
        "villages": [
          {
            "Id": 5544,
            "VillageName": "النصر- الكيلو 85 طريق سفاجا / قنا "
          },
          {
            "Id": 5545,
            "VillageName": "أم الحويطات والجواسيس "
          },
          {
            "Id": 5546,
            "VillageName": "مدينة سفاجا "
          }
        ],
        "name": "قسم ســفاجا"
      },
      {
        "id": 347,
        "villages": [
          {
            "Id": 5547,
            "VillageName": "النخيل * "
          },
          {
            "Id": 5548,
            "VillageName": "القصدير * "
          },
          {
            "Id": 5549,
            "VillageName": "القرع * "
          },
          {
            "Id": 5550,
            "VillageName": "العطشانة العوينة * "
          },
          {
            "Id": 5551,
            "VillageName": "العدوة * "
          },
          {
            "Id": 5552,
            "VillageName": "أبو تندب * "
          },
          {
            "Id": 5553,
            "VillageName": "البيضـــــا * "
          },
          {
            "Id": 5554,
            "VillageName": "منجم أم غيج * "
          },
          {
            "Id": 5555,
            "VillageName": "منجم الفواخير * "
          },
          {
            "Id": 5556,
            "VillageName": "وادى كريم والدباح * "
          },
          {
            "Id": 5557,
            "VillageName": "العوينـــة * "
          },
          {
            "Id": 5558,
            "VillageName": "الحمراوين "
          },
          {
            "Id": 5559,
            "VillageName": "مدينة القصير "
          }
        ],
        "name": "قسم القصيـــر"
      },
      {
        "id": 348,
        "villages": [
          {
            "Id": 5560,
            "VillageName": "منجم أم سمويكى * "
          },
          {
            "Id": 5561,
            "VillageName": "منجم حماطة * "
          },
          {
            "Id": 5562,
            "VillageName": "أبو غصون "
          },
          {
            "Id": 5563,
            "VillageName": "قرية برنيس "
          },
          {
            "Id": 5564,
            "VillageName": "قرية الشيخ الشاذلى "
          },
          {
            "Id": 5565,
            "VillageName": "مدينة مرسى علم "
          }
        ],
        "name": "قسم مرســى علم"
      },
      {
        "id": 349,
        "villages": [
          {
            "Id": 5566,
            "VillageName": "منجم الدرهيب * "
          },
          {
            "Id": 5567,
            "VillageName": "قرية مرسى حميرة "
          },
          {
            "Id": 5568,
            "VillageName": "قرية أبرق "
          },
          {
            "Id": 5569,
            "VillageName": "مدينة الشلاتين "
          }
        ],
        "name": "قسم الشلاتين"
      },
      {
        "id": 350,
        "villages": [
          {
            "Id": 5570,
            "VillageName": "قرية رأس حدربة "
          },
          {
            "Id": 5571,
            "VillageName": "قرية أبو رمــاد "
          },
          {
            "Id": 5572,
            "VillageName": "مــدينة حـــــلايب "
          }
        ],
        "name": "قسم حــلايب"
      }
    ]
  },
  {
    "id": 32,
    "name": "الوادى الجديد",
    "centers": [
      {
        "id": 351,
        "villages": [
          {
            "Id": 5573,
            "VillageName": "الكويت "
          },
          {
            "Id": 5574,
            "VillageName": "فلسطين "
          },
          {
            "Id": 5575,
            "VillageName": "قصر الزيان "
          },
          {
            "Id": 5576,
            "VillageName": "جناح 7 "
          },
          {
            "Id": 5577,
            "VillageName": "جناح 3 "
          },
          {
            "Id": 5578,
            "VillageName": "جناح 1 "
          },
          {
            "Id": 5579,
            "VillageName": "الشركة 8 "
          },
          {
            "Id": 5580,
            "VillageName": "الشركة 17 "
          },
          {
            "Id": 5581,
            "VillageName": "الشركة 53 "
          },
          {
            "Id": 5582,
            "VillageName": "ناصر الثورة "
          },
          {
            "Id": 5583,
            "VillageName": "عبد السلام عارف (شرق بولاق) "
          },
          {
            "Id": 5584,
            "VillageName": "صنعاء "
          },
          {
            "Id": 5585,
            "VillageName": "جناح (بورسعيد ) "
          },
          {
            "Id": 5586,
            "VillageName": "بولاق "
          },
          {
            "Id": 5587,
            "VillageName": "المنـيـرة ( المحاريق سابقا) "
          },
          {
            "Id": 5588,
            "VillageName": "الشركة 55 "
          },
          {
            "Id": 5589,
            "VillageName": "مدينة الخارجة "
          }
        ],
        "name": "قسم الخارجة"
      },
      {
        "id": 352,
        "villages": [
          {
            "Id": 5590,
            "VillageName": "بـــدران "
          },
          {
            "Id": 5591,
            "VillageName": "الفاخورة "
          },
          {
            "Id": 5592,
            "VillageName": "عين الضبع "
          },
          {
            "Id": 5593,
            "VillageName": "الطرفاية الغربية "
          },
          {
            "Id": 5594,
            "VillageName": "الطرفاية الشرقية "
          },
          {
            "Id": 5595,
            "VillageName": "القصــر القبلى "
          },
          {
            "Id": 5596,
            "VillageName": "عـــدن "
          },
          {
            "Id": 5597,
            "VillageName": "جورمشين / 7 "
          },
          {
            "Id": 5598,
            "VillageName": "جـــــدة "
          },
          {
            "Id": 5599,
            "VillageName": "درب الأربعين الرابعة"
          },
          {
            "Id": 5600,
            "VillageName": "درب الأربعين الثالثة"
          },
          {
            "Id": 5601,
            "VillageName": "المرحلة الثانية بدرب الاربعين "
          },
          {
            "Id": 5602,
            "VillageName": "المرحلة الاولى بدرب الاربعين "
          },
          {
            "Id": 5603,
            "VillageName": "المكس القبلى "
          },
          {
            "Id": 5604,
            "VillageName": "بغداد "
          },
          {
            "Id": 5605,
            "VillageName": "مدينة باريس "
          }
        ],
        "name": "مركز باريس"
      },
      {
        "id": 353,
        "villages": [
          {
            "Id": 5606,
            "VillageName": "الخـــوافة "
          },
          {
            "Id": 5607,
            "VillageName": "بئــر / 3 "
          },
          {
            "Id": 5608,
            "VillageName": "بئــر / 2 "
          },
          {
            "Id": 5609,
            "VillageName": "أبوخزام "
          },
          {
            "Id": 5610,
            "VillageName": "عبدالنبى "
          },
          {
            "Id": 5611,
            "VillageName": "محمد نصر "
          },
          {
            "Id": 5612,
            "VillageName": "الجديدة "
          },
          {
            "Id": 5613,
            "VillageName": "القديمة "
          },
          {
            "Id": 5614,
            "VillageName": "الزيات "
          },
          {
            "Id": 5615,
            "VillageName": "تنــيدة "
          },
          {
            "Id": 5616,
            "VillageName": "الحــاجر "
          },
          {
            "Id": 5617,
            "VillageName": "عــلوان "
          },
          {
            "Id": 5618,
            "VillageName": "البرابخ "
          },
          {
            "Id": 5619,
            "VillageName": "العوينة "
          },
          {
            "Id": 5620,
            "VillageName": "قســطل "
          },
          {
            "Id": 5621,
            "VillageName": "أولاد عبداللة "
          },
          {
            "Id": 5622,
            "VillageName": "البشندى "
          },
          {
            "Id": 5623,
            "VillageName": "شمـــس "
          },
          {
            "Id": 5624,
            "VillageName": "ذخـــيرة "
          },
          {
            "Id": 5625,
            "VillageName": "الصفراء "
          },
          {
            "Id": 5626,
            "VillageName": "مرزوق "
          },
          {
            "Id": 5627,
            "VillageName": "عين عيش "
          },
          {
            "Id": 5628,
            "VillageName": "مدينة بــلاط "
          }
        ],
        "name": "مركز بلاط"
      },
      {
        "id": 354,
        "villages": [
          {
            "Id": 5629,
            "VillageName": "حطية الشيخ مرزوق "
          },
          {
            "Id": 5630,
            "VillageName": "عثمان بن عفان "
          },
          {
            "Id": 5631,
            "VillageName": "واحــة الأمل "
          },
          {
            "Id": 5632,
            "VillageName": "عائشة عبدالرحمن "
          },
          {
            "Id": 5633,
            "VillageName": "أبو الهول وأبو بكر الصديق "
          },
          {
            "Id": 5634,
            "VillageName": "جمعية الوادى الجديد(الرواد ) "
          },
          {
            "Id": 5635,
            "VillageName": "اللواء صبيح "
          },
          {
            "Id": 5636,
            "VillageName": "ابو هريرة "
          },
          {
            "Id": 5637,
            "VillageName": "على بن أبى طالب "
          },
          {
            "Id": 5638,
            "VillageName": "جمعية الأمل "
          },
          {
            "Id": 5639,
            "VillageName": "زراعة (10) "
          },
          {
            "Id": 5640,
            "VillageName": "الشيخ مرزوق الجديدة "
          },
          {
            "Id": 5641,
            "VillageName": "الشيخ مرزوق "
          },
          {
            "Id": 5642,
            "VillageName": "الخير والنماء "
          },
          {
            "Id": 5643,
            "VillageName": "زراعة (14 ) "
          },
          {
            "Id": 5644,
            "VillageName": "زراعة (16 ) "
          },
          {
            "Id": 5645,
            "VillageName": "عمر بن الخطاب "
          },
          {
            "Id": 5646,
            "VillageName": "بئر (6 ) "
          },
          {
            "Id": 5647,
            "VillageName": "بئر ( 4 ) "
          },
          {
            "Id": 5648,
            "VillageName": "بئر ( 7 ) "
          },
          {
            "Id": 5649,
            "VillageName": "بئر ( 5 ) "
          },
          {
            "Id": 5650,
            "VillageName": "طلعت ضرغام "
          },
          {
            "Id": 5651,
            "VillageName": "أبو منقار "
          },
          {
            "Id": 5652,
            "VillageName": "النـــهــضة(عبدالمجيد الجفيل ) "
          },
          {
            "Id": 5653,
            "VillageName": "الكفاح "
          },
          {
            "Id": 5654,
            "VillageName": "مدينة الفرافرة "
          }
        ],
        "name": "مركز الفرافرة"
      },
      {
        "id": 355,
        "villages": [
          {
            "Id": 5655,
            "VillageName": "بئــر 13 "
          },
          {
            "Id": 5656,
            "VillageName": "بئــــر 9 "
          },
          {
            "Id": 5657,
            "VillageName": "العـــروبة "
          },
          {
            "Id": 5658,
            "VillageName": "بئــــر 5 "
          },
          {
            "Id": 5659,
            "VillageName": "الآمـــان "
          },
          {
            "Id": 5660,
            "VillageName": "الجهـــــاد "
          },
          {
            "Id": 5661,
            "VillageName": "الصحـــوة "
          },
          {
            "Id": 5662,
            "VillageName": "الجديدة "
          },
          {
            "Id": 5663,
            "VillageName": "المــــوهوب "
          },
          {
            "Id": 5664,
            "VillageName": "غـــرب الموهوب "
          },
          {
            "Id": 5665,
            "VillageName": "شرق العوينات (العين)"
          },
          {
            "Id": 5666,
            "VillageName": "الشيخ مفتاح "
          },
          {
            "Id": 5667,
            "VillageName": "أسمنت "
          },
          {
            "Id": 5668,
            "VillageName": "الشيخ والــى "
          },
          {
            "Id": 5669,
            "VillageName": "المعصرة "
          },
          {
            "Id": 5670,
            "VillageName": "الجيزة "
          },
          {
            "Id": 5671,
            "VillageName": "عين أم الصغير "
          },
          {
            "Id": 5672,
            "VillageName": "برباية الغربية "
          },
          {
            "Id": 5673,
            "VillageName": "برباية الشرقية "
          },
          {
            "Id": 5674,
            "VillageName": "أفطيمة القبلية "
          },
          {
            "Id": 5675,
            "VillageName": "أفطيمة الشرقية "
          },
          {
            "Id": 5676,
            "VillageName": "عــــزب القــــصر "
          },
          {
            "Id": 5677,
            "VillageName": "القــصر "
          },
          {
            "Id": 5678,
            "VillageName": "بئر العبيــد "
          },
          {
            "Id": 5679,
            "VillageName": "الشيخ زايد "
          },
          {
            "Id": 5680,
            "VillageName": "البئر الوسطانى "
          },
          {
            "Id": 5681,
            "VillageName": "عزبة عبدالقادر "
          },
          {
            "Id": 5682,
            "VillageName": "عزبة الرخــا "
          },
          {
            "Id": 5683,
            "VillageName": "عزبة القضــا "
          },
          {
            "Id": 5684,
            "VillageName": "القلمــون "
          },
          {
            "Id": 5685,
            "VillageName": "عزبة منطقة بئر /1 الموشية "
          },
          {
            "Id": 5686,
            "VillageName": "عزبة عين الولى "
          },
          {
            "Id": 5687,
            "VillageName": "عزبة عين القرشى "
          },
          {
            "Id": 5688,
            "VillageName": "عين السنطة الغربية "
          },
          {
            "Id": 5689,
            "VillageName": "عين السنطة الشرقية "
          },
          {
            "Id": 5690,
            "VillageName": "المــوشية "
          },
          {
            "Id": 5691,
            "VillageName": "قرية عزبة عمر بن الخطاب "
          },
          {
            "Id": 5692,
            "VillageName": "قرية عزبة الشيخ عبدالله الجهينى "
          },
          {
            "Id": 5693,
            "VillageName": "العوينـــة "
          },
          {
            "Id": 5694,
            "VillageName": "الهــنداو "
          },
          {
            "Id": 5695,
            "VillageName": "عزبة العرب بالشيخ عمران "
          },
          {
            "Id": 5696,
            "VillageName": "عزبة عين الشرقية "
          },
          {
            "Id": 5697,
            "VillageName": "عزبة المنصــورة "
          },
          {
            "Id": 5698,
            "VillageName": "بدخلو "
          },
          {
            "Id": 5699,
            "VillageName": "الراشدة "
          },
          {
            "Id": 5700,
            "VillageName": "مدينة مــوط "
          },
          {
            "Id": 5701,
            "VillageName": "المعسكــــر "
          }
        ],
        "name": "مركز الداخلة"
      },
      {
        "id": 356,
        "villages": [
          {
            "Id": 5702,
            "VillageName": "منطقة شرق العوينات "
          }
        ],
        "name": "شرق العوينات *"
      }
    ]
  },
  {
    "id": 33,
    "name": "مطروح",
    "centers": [
      {
        "id": 357,
        "villages": [
          {
            "Id": 5703,
            "VillageName": "كشوك عميرة "
          },
          {
            "Id": 5704,
            "VillageName": "سيدى حنيش "
          },
          {
            "Id": 5705,
            "VillageName": "حلازين "
          },
          {
            "Id": 5706,
            "VillageName": "الجراولة "
          },
          {
            "Id": 5707,
            "VillageName": "أولاد مرعى "
          },
          {
            "Id": 5708,
            "VillageName": "علوش "
          },
          {
            "Id": 5709,
            "VillageName": "النصر "
          },
          {
            "Id": 5710,
            "VillageName": "راس الحكمة ( ابوحجاج ) "
          },
          {
            "Id": 5711,
            "VillageName": "القواسم "
          },
          {
            "Id": 5712,
            "VillageName": "القصر "
          },
          {
            "Id": 5713,
            "VillageName": "السوينات "
          },
          {
            "Id": 5714,
            "VillageName": "الداخلة "
          },
          {
            "Id": 5715,
            "VillageName": "أم الرخم "
          },
          {
            "Id": 5716,
            "VillageName": "أطنوح "
          },
          {
            "Id": 5717,
            "VillageName": "أبو لهو الجنوبي "
          },
          {
            "Id": 5718,
            "VillageName": "ابو لهو البحري "
          },
          {
            "Id": 5719,
            "VillageName": "أبو مرقيق "
          },
          {
            "Id": 5720,
            "VillageName": "الزيـات "
          },
          {
            "Id": 5721,
            "VillageName": "مدينة مرسى مطروح "
          }
        ],
        "name": "قسم مرسى مطروح"
      },
      {
        "id": 358,
        "villages": [
          {
            "Id": 5722,
            "VillageName": "الزغيرات "
          },
          {
            "Id": 5723,
            "VillageName": "المثانى "
          },
          {
            "Id": 5724,
            "VillageName": "مدينة النجيلة "
          }
        ],
        "name": "قسم النجيلة"
      },
      {
        "id": 359,
        "villages": [
          {
            "Id": 5725,
            "VillageName": "شماس "
          },
          {
            "Id": 5726,
            "VillageName": "القطرانى "
          },
          {
            "Id": 5727,
            "VillageName": "الفاخرى "
          },
          {
            "Id": 5728,
            "VillageName": "العمدة نجم الدين الظافر (الظافر سابقا ) "
          },
          {
            "Id": 5729,
            "VillageName": "الزوايدة "
          },
          {
            "Id": 5730,
            "VillageName": "أبو مزهود "
          },
          {
            "Id": 5731,
            "VillageName": "أبو مرزوق "
          },
          {
            "Id": 5732,
            "VillageName": "أبوسطيل "
          },
          {
            "Id": 5733,
            "VillageName": "مدينة سيدى برانى "
          }
        ],
        "name": "قسم سيدى برانى"
      },
      {
        "id": 360,
        "villages": [
          {
            "Id": 5734,
            "VillageName": "بقبق "
          },
          {
            "Id": 5735,
            "VillageName": "أبو زريبة "
          },
          {
            "Id": 5736,
            "VillageName": "مدينة السلوم "
          }
        ],
        "name": "قسم السلوم"
      },
      {
        "id": 361,
        "villages": [
          {
            "Id": 5737,
            "VillageName": "صحراء الضبعة * "
          },
          {
            "Id": 5738,
            "VillageName": "فوكة "
          },
          {
            "Id": 5739,
            "VillageName": "غزال "
          },
          {
            "Id": 5740,
            "VillageName": "سيدى شبيب "
          },
          {
            "Id": 5741,
            "VillageName": "سوانى سمالوس "
          },
          {
            "Id": 5742,
            "VillageName": "سوانى جابر "
          },
          {
            "Id": 5743,
            "VillageName": "زاوية العوامة "
          },
          {
            "Id": 5744,
            "VillageName": "جميمة "
          },
          {
            "Id": 5745,
            "VillageName": "جلالة "
          },
          {
            "Id": 5746,
            "VillageName": "أولاد علوانى "
          },
          {
            "Id": 5747,
            "VillageName": "الشرنبية "
          },
          {
            "Id": 5748,
            "VillageName": "الزيتون "
          },
          {
            "Id": 5749,
            "VillageName": "الجفيرة "
          },
          {
            "Id": 5750,
            "VillageName": "الحرابى "
          },
          {
            "Id": 5751,
            "VillageName": "مدينة الضبعة "
          }
        ],
        "name": "قسم الضبعة"
      },
      {
        "id": 362,
        "villages": [
          {
            "Id": 5752,
            "VillageName": "سيدى عبدالرحمن "
          },
          {
            "Id": 5753,
            "VillageName": "تل العيس "
          },
          {
            "Id": 5754,
            "VillageName": "مدينة العلمين "
          }
        ],
        "name": "قسم العلمين"
      },
      {
        "id": 363,
        "villages": [
          {
            "Id": 5755,
            "VillageName": "ماربيلا السياحية ** "
          },
          {
            "Id": 5756,
            "VillageName": "25 يناير السياحية **"
          },
          {
            "Id": 5757,
            "VillageName": "مارينا العلمين السياحية ** "
          }
        ],
        "name": "قسم مارينا العلمين السياحية"
      },
      {
        "id": 364,
        "villages": [
          {
            "Id": 5758,
            "VillageName": "13-قرية29(عمروبن العاص )* "
          },
          {
            "Id": 5759,
            "VillageName": "12-قرية 28(طارق بن زياد )* "
          },
          {
            "Id": 5760,
            "VillageName": "11-قرية 27(سيدناشعيب علية السلام)* "
          },
          {
            "Id": 5761,
            "VillageName": "10-قرية 26(سيدنا هودعلية السلام)* "
          },
          {
            "Id": 5762,
            "VillageName": "9- قرية 25(سيدنا ادريس علية السلام)* "
          },
          {
            "Id": 5763,
            "VillageName": "8-قرية 24(سيدنا يونس علية السلام)* "
          },
          {
            "Id": 5764,
            "VillageName": "7-قرية 23(أبوالأنبياء ابراهيم علية السلام)* "
          },
          {
            "Id": 5765,
            "VillageName": "6- قرية 22(سيدنا صالح علية السلام)* "
          },
          {
            "Id": 5766,
            "VillageName": "5-قرية 21 (سيدنا لقمان)* "
          },
          {
            "Id": 5767,
            "VillageName": "4- الرويسات * "
          },
          {
            "Id": 5768,
            "VillageName": "3-سيد درويش* "
          },
          {
            "Id": 5769,
            "VillageName": "2- سلامة حجازى * "
          },
          {
            "Id": 5770,
            "VillageName": "1- الزهـــور* "
          },
          {
            "Id": 5771,
            "VillageName": "ساحل العميد "
          },
          {
            "Id": 5772,
            "VillageName": "أولاد مسعود "
          },
          {
            "Id": 5773,
            "VillageName": "أولاد جبريل "
          },
          {
            "Id": 5774,
            "VillageName": "العميد "
          },
          {
            "Id": 5775,
            "VillageName": "الشمامة "
          },
          {
            "Id": 5776,
            "VillageName": "السلام "
          },
          {
            "Id": 5777,
            "VillageName": "مدينة الحمام وضواحيها "
          }
        ],
        "name": "قسم الحمام"
      },
      {
        "id": 365,
        "villages": [
          {
            "Id": 5778,
            "VillageName": "أم الصغير "
          },
          {
            "Id": 5779,
            "VillageName": "بهى الدين "
          },
          {
            "Id": 5780,
            "VillageName": "المراقى "
          },
          {
            "Id": 5781,
            "VillageName": "أغورمى "
          },
          {
            "Id": 5782,
            "VillageName": "أبو شروف (الكفراوى )"
          },
          {
            "Id": 5783,
            "VillageName": "مدينة سيوة "
          }
        ],
        "name": "قسم سيوة"
      },
      {
        "id": 366,
        "villages": [
          {
            "Id": 5784,
            "VillageName": "منطقة الساحل الشمالى"
          }
        ],
        "name": "الساحل الشمالى (جزء)*"
      }
    ]
  },
  {
    "id": 34,
    "name": "شمال سيناء",
    "centers": [
      {
        "id": 367,
        "villages": [
          {
            "Id": 5785,
            "VillageName": "الشريف "
          },
          {
            "Id": 5786,
            "VillageName": "المالح "
          },
          {
            "Id": 5787,
            "VillageName": "الحلفاء "
          },
          {
            "Id": 5788,
            "VillageName": "الحجاب "
          },
          {
            "Id": 5789,
            "VillageName": "الستة "
          },
          {
            "Id": 5790,
            "VillageName": "الملالحة "
          },
          {
            "Id": 5791,
            "VillageName": "البكاروة وادى النيل "
          },
          {
            "Id": 5792,
            "VillageName": "بنى مطارقة "
          },
          {
            "Id": 5793,
            "VillageName": "السلامين سواركة "
          },
          {
            "Id": 5794,
            "VillageName": "حوض وادى العريش بأجمعة "
          },
          {
            "Id": 5795,
            "VillageName": "بئر لحفن "
          },
          {
            "Id": 5796,
            "VillageName": "المزرعــة "
          },
          {
            "Id": 5797,
            "VillageName": "العبــور "
          },
          {
            "Id": 5798,
            "VillageName": "عاطف السادات "
          },
          {
            "Id": 5799,
            "VillageName": "أبو صقل "
          },
          {
            "Id": 5800,
            "VillageName": "الريسة "
          },
          {
            "Id": 5801,
            "VillageName": "قطاع الضاحية "
          },
          {
            "Id": 5802,
            "VillageName": "الطويل "
          },
          {
            "Id": 5803,
            "VillageName": "السكاسكة "
          }
        ],
        "name": "قسم أول العريش"
      },
      {
        "id": 368,
        "villages": [
          {
            "Id": 5804,
            "VillageName": "البيك "
          },
          {
            "Id": 5805,
            "VillageName": "أولاد جبريل "
          },
          {
            "Id": 5806,
            "VillageName": "أولاد سليمان الأهتم "
          },
          {
            "Id": 5807,
            "VillageName": "أولاد سليمان "
          }
        ],
        "name": "قسم ثان العريش"
      },
      {
        "id": 369,
        "villages": [
          {
            "Id": 5809,
            "VillageName": "أولاد حمودة فواخرية "
          },
          {
            "Id": 5810,
            "VillageName": "أولاد عبدالرحمن "
          },
          {
            "Id": 5811,
            "VillageName": "أولاد على فواخرية "
          },
          {
            "Id": 5812,
            "VillageName": "الفواخرية "
          },
          {
            "Id": 5813,
            "VillageName": "الزهــور "
          },
          {
            "Id": 5814,
            "VillageName": "المساعيد "
          }
        ],
        "name": "قسم ثالث العريش"
      },
      {
        "id": 370,
        "villages": [
          {
            "Id": 5815,
            "VillageName": "القويدر "
          },
          {
            "Id": 5816,
            "VillageName": "الشرابجة "
          },
          {
            "Id": 5817,
            "VillageName": "العرارجة "
          },
          {
            "Id": 5818,
            "VillageName": "السواركة جريرات "
          },
          {
            "Id": 5819,
            "VillageName": "الحجاوى "
          },
          {
            "Id": 5820,
            "VillageName": "الكاشف "
          },
          {
            "Id": 5821,
            "VillageName": "السلايمة الحمام "
          },
          {
            "Id": 5822,
            "VillageName": "الصفــــا "
          },
          {
            "Id": 5823,
            "VillageName": "الكتلة السكنية داخل حدود قسم رابع العريش "
          },
          {
            "Id": 5824,
            "VillageName": "الميدان "
          },
          {
            "Id": 5825,
            "VillageName": "السبيل "
          }
        ],
        "name": "قسم رابع العريش"
      },
      {
        "id": 371,
        "villages": [
          {
            "Id": 5826,
            "VillageName": "الدواغــرة مصابحة "
          },
          {
            "Id": 5827,
            "VillageName": "الاحاميد الشليبين "
          },
          {
            "Id": 5828,
            "VillageName": "بلى مقابلة "
          },
          {
            "Id": 5829,
            "VillageName": "الدواغرة سعادات "
          },
          {
            "Id": 5830,
            "VillageName": "العمر النجاروة الصابحة "
          },
          {
            "Id": 5831,
            "VillageName": "المحاسنة والعطاونة "
          },
          {
            "Id": 5832,
            "VillageName": "السواركة جريرات "
          },
          {
            "Id": 5833,
            "VillageName": "دواغرة محافيظ "
          },
          {
            "Id": 5834,
            "VillageName": "المرازقة بياضية "
          },
          {
            "Id": 5835,
            "VillageName": "دواغرة حليات "
          },
          {
            "Id": 5836,
            "VillageName": "البياضية السموح "
          },
          {
            "Id": 5837,
            "VillageName": "البياضية ربايعة "
          },
          {
            "Id": 5838,
            "VillageName": "العوايضة والسلايمة "
          },
          {
            "Id": 5839,
            "VillageName": "البياضة زوايدة "
          },
          {
            "Id": 5840,
            "VillageName": "النجاح "
          },
          {
            "Id": 5841,
            "VillageName": "النصر "
          },
          {
            "Id": 5842,
            "VillageName": "السادات "
          },
          {
            "Id": 5843,
            "VillageName": "التلول "
          },
          {
            "Id": 5844,
            "VillageName": "الروضة "
          },
          {
            "Id": 5845,
            "VillageName": "سالمانة "
          },
          {
            "Id": 5846,
            "VillageName": "الخربة ( أبوسعدان ) "
          },
          {
            "Id": 5847,
            "VillageName": "مدينة بئر العبد "
          }
        ],
        "name": "قسم بئر العبد"
      },
      {
        "id": 372,
        "villages": [
          {
            "Id": 5848,
            "VillageName": "الأخارسة المناسوة "
          },
          {
            "Id": 5849,
            "VillageName": "العواصية "
          },
          {
            "Id": 5850,
            "VillageName": "الأخارسة "
          },
          {
            "Id": 5851,
            "VillageName": "العواليل "
          },
          {
            "Id": 5852,
            "VillageName": "الأخارسة خوالدة "
          },
          {
            "Id": 5853,
            "VillageName": "البياضية حفيشات "
          },
          {
            "Id": 5854,
            "VillageName": "الأحرار "
          },
          {
            "Id": 5855,
            "VillageName": "المرابين موالكة "
          },
          {
            "Id": 5856,
            "VillageName": "الأخارسة عطلات "
          },
          {
            "Id": 5857,
            "VillageName": "الدراهسة الرفايعة "
          },
          {
            "Id": 5858,
            "VillageName": "الحساسنة الشبانات "
          },
          {
            "Id": 5859,
            "VillageName": "الاحفيشيات بياضية "
          },
          {
            "Id": 5860,
            "VillageName": "العمامرة الجوافلة "
          },
          {
            "Id": 5861,
            "VillageName": "سماعنة زقازقة "
          },
          {
            "Id": 5862,
            "VillageName": "الهروش "
          },
          {
            "Id": 5863,
            "VillageName": "الأخارسة زغاونة "
          },
          {
            "Id": 5864,
            "VillageName": "الملاعبة سعديين "
          },
          {
            "Id": 5865,
            "VillageName": "العلوية أبوجبين "
          },
          {
            "Id": 5866,
            "VillageName": "البياضية كرامات "
          },
          {
            "Id": 5867,
            "VillageName": "البياضية توابتة "
          },
          {
            "Id": 5868,
            "VillageName": "الأخارسة عطيات "
          },
          {
            "Id": 5869,
            "VillageName": "الأبايضة بياضية "
          },
          {
            "Id": 5870,
            "VillageName": "الموالكة بياضية "
          },
          {
            "Id": 5871,
            "VillageName": "العقايلة كرامة "
          },
          {
            "Id": 5872,
            "VillageName": "السماعنة حوامدة "
          },
          {
            "Id": 5873,
            "VillageName": "العقايلة الشرفاء "
          },
          {
            "Id": 5874,
            "VillageName": "العقايلة "
          },
          {
            "Id": 5875,
            "VillageName": "أم عقبة "
          },
          {
            "Id": 5876,
            "VillageName": " قرية الأحرار "
          },
          {
            "Id": 5877,
            "VillageName": "الشيخ زايد (المدخل سابقا) "
          },
          {
            "Id": 5878,
            "VillageName": "الكرامة "
          },
          {
            "Id": 5879,
            "VillageName": "الجناين "
          },
          {
            "Id": 5880,
            "VillageName": "المريح "
          },
          {
            "Id": 5881,
            "VillageName": "أقطية "
          },
          {
            "Id": 5882,
            "VillageName": "الشوحط "
          },
          {
            "Id": 5883,
            "VillageName": "السلام "
          },
          {
            "Id": 5884,
            "VillageName": "الشهداء "
          },
          {
            "Id": 5885,
            "VillageName": "6 اكتوبر "
          },
          {
            "Id": 5886,
            "VillageName": "قاطية "
          },
          {
            "Id": 5887,
            "VillageName": "بالوظة "
          },
          {
            "Id": 5888,
            "VillageName": "نجيلة "
          },
          {
            "Id": 5889,
            "VillageName": "رابعة "
          },
          {
            "Id": 5890,
            "VillageName": "رمانة "
          },
          {
            "Id": 5891,
            "VillageName": "القطاوية "
          }
        ],
        "name": "قسم رمانة"
      },
      {
        "id": 373,
        "villages": [
          {
            "Id": 5892,
            "VillageName": "الحجوج صفايحة "
          },
          {
            "Id": 5893,
            "VillageName": "العيايدة "
          },
          {
            "Id": 5894,
            "VillageName": "السحابين ترابين "
          },
          {
            "Id": 5895,
            "VillageName": "الأحــيوات صفايحة "
          },
          {
            "Id": 5896,
            "VillageName": "الوقيات بالجفجافة "
          },
          {
            "Id": 5897,
            "VillageName": "الحويطات عبيات "
          },
          {
            "Id": 5898,
            "VillageName": "النيافات "
          },
          {
            "Id": 5899,
            "VillageName": "الترابين حسابلة "
          },
          {
            "Id": 5900,
            "VillageName": "الترابين دلالة "
          },
          {
            "Id": 5901,
            "VillageName": "عرب بلى "
          },
          {
            "Id": 5902,
            "VillageName": "الجدى "
          },
          {
            "Id": 5903,
            "VillageName": "الكيلو 64 "
          },
          {
            "Id": 5904,
            "VillageName": "وادى المليز "
          },
          {
            "Id": 5905,
            "VillageName": "(قرية ) "
          },
          {
            "Id": 5906,
            "VillageName": "المنجم "
          },
          {
            "Id": 5907,
            "VillageName": "المفارق "
          },
          {
            "Id": 5908,
            "VillageName": "الغرقدة "
          },
          {
            "Id": 5909,
            "VillageName": "الريسان "
          },
          {
            "Id": 5910,
            "VillageName": "الحمة "
          },
          {
            "Id": 5911,
            "VillageName": "المغارة "
          },
          {
            "Id": 5912,
            "VillageName": "بغداد "
          },
          {
            "Id": 5913,
            "VillageName": "الجفجافة "
          },
          {
            "Id": 5914,
            "VillageName": "مدينة الحسنة "
          }
        ],
        "name": "قسم الحسنة"
      },
      {
        "id": 374,
        "villages": [
          {
            "Id": 5915,
            "VillageName": "النخالوة "
          },
          {
            "Id": 5916,
            "VillageName": "الأحيوات نجمات "
          },
          {
            "Id": 5917,
            "VillageName": "المصابحة والنثور "
          },
          {
            "Id": 5918,
            "VillageName": "الأحيوات حناطلة "
          },
          {
            "Id": 5919,
            "VillageName": "النغامشة تياها "
          },
          {
            "Id": 5920,
            "VillageName": "الأحيوات أولاد غنيم "
          },
          {
            "Id": 5921,
            "VillageName": "أولاد معلى حميدات "
          },
          {
            "Id": 5922,
            "VillageName": "الــــريد "
          },
          {
            "Id": 5923,
            "VillageName": "وادى الحاج "
          },
          {
            "Id": 5924,
            "VillageName": "سدر الحيطان (جبل حسن ) "
          },
          {
            "Id": 5925,
            "VillageName": "النثيلة (الفتيلة ) "
          },
          {
            "Id": 5926,
            "VillageName": "السلام ( الغبية ) "
          },
          {
            "Id": 5927,
            "VillageName": "الخفجة "
          },
          {
            "Id": 5928,
            "VillageName": "البروك "
          },
          {
            "Id": 5929,
            "VillageName": "الكنتيلا "
          },
          {
            "Id": 5930,
            "VillageName": "رأس النقب "
          },
          {
            "Id": 5931,
            "VillageName": "التمد "
          },
          {
            "Id": 5932,
            "VillageName": "بئر جريد "
          },
          {
            "Id": 5933,
            "VillageName": "مدينة نخل "
          }
        ],
        "name": "قسم نخل"
      },
      {
        "id": 375,
        "villages": [
          {
            "Id": 5934,
            "VillageName": "التياها بريكات "
          },
          {
            "Id": 5935,
            "VillageName": "النديات ترابين "
          },
          {
            "Id": 5936,
            "VillageName": "الشنوب ترابين "
          },
          {
            "Id": 5937,
            "VillageName": "الدلوح "
          },
          {
            "Id": 5938,
            "VillageName": "ترابين بن جرمى "
          },
          {
            "Id": 5939,
            "VillageName": "النوافعة شتيات "
          },
          {
            "Id": 5940,
            "VillageName": "الترابين جهامات "
          },
          {
            "Id": 5941,
            "VillageName": "الفوايدة "
          },
          {
            "Id": 5942,
            "VillageName": "البنايات تياها "
          },
          {
            "Id": 5943,
            "VillageName": "وادى العمرو "
          },
          {
            "Id": 5944,
            "VillageName": "بئر بــدا "
          },
          {
            "Id": 5945,
            "VillageName": "أم شيحان "
          },
          {
            "Id": 5946,
            "VillageName": "أم قطف "
          },
          {
            "Id": 5947,
            "VillageName": "المنبطح "
          },
          {
            "Id": 5948,
            "VillageName": "المقضبة "
          },
          {
            "Id": 5949,
            "VillageName": "المغفر "
          },
          {
            "Id": 5950,
            "VillageName": "القسيمة "
          }
        ],
        "name": "قسم القسيمة"
      },
      {
        "id": 376,
        "villages": [
          {
            "Id": 5951,
            "VillageName": "الزيود سواركة "
          },
          {
            "Id": 5952,
            "VillageName": "الوحش "
          },
          {
            "Id": 5953,
            "VillageName": "الخلفات سواركة "
          },
          {
            "Id": 5954,
            "VillageName": "الزوارعة الجورة "
          },
          {
            "Id": 5955,
            "VillageName": "الطوايلة رياشات "
          },
          {
            "Id": 5956,
            "VillageName": "المعنية "
          },
          {
            "Id": 5957,
            "VillageName": "الهشة "
          },
          {
            "Id": 5958,
            "VillageName": "الملالحة "
          },
          {
            "Id": 5959,
            "VillageName": "الملاحيس "
          },
          {
            "Id": 5960,
            "VillageName": "الجهينة "
          },
          {
            "Id": 5961,
            "VillageName": "البخايتة رياشات "
          },
          {
            "Id": 5962,
            "VillageName": "الدهيمات أبو الفرج "
          },
          {
            "Id": 5963,
            "VillageName": "الحمايدة نصايرة "
          },
          {
            "Id": 5964,
            "VillageName": "السواركة مقاطعة "
          },
          {
            "Id": 5965,
            "VillageName": "السواركة لافيتات "
          },
          {
            "Id": 5966,
            "VillageName": "المنصورين سواركة "
          },
          {
            "Id": 5967,
            "VillageName": "الدهيمات أبو مسعود "
          },
          {
            "Id": 5968,
            "VillageName": "الزواتين دهمات "
          },
          {
            "Id": 5969,
            "VillageName": "الجبالية "
          },
          {
            "Id": 5970,
            "VillageName": "العرارجة بالظهير "
          },
          {
            "Id": 5971,
            "VillageName": "الرياشات "
          },
          {
            "Id": 5972,
            "VillageName": "القوادرة "
          },
          {
            "Id": 5973,
            "VillageName": "العرادات سواركة "
          },
          {
            "Id": 5974,
            "VillageName": "أبو الفيتة (الكيلو 8سابقا ) "
          },
          {
            "Id": 5975,
            "VillageName": "قبر عمير "
          },
          {
            "Id": 5976,
            "VillageName": "المقاطعة "
          },
          {
            "Id": 5977,
            "VillageName": "العكــور "
          },
          {
            "Id": 5978,
            "VillageName": "السكادرة "
          },
          {
            "Id": 5979,
            "VillageName": "الزوارعة "
          },
          {
            "Id": 5980,
            "VillageName": "التــومة "
          },
          {
            "Id": 5981,
            "VillageName": "أبو العراج "
          },
          {
            "Id": 5982,
            "VillageName": "القريعة "
          },
          {
            "Id": 5983,
            "VillageName": "الخروبة "
          },
          {
            "Id": 5984,
            "VillageName": "الشلاق "
          },
          {
            "Id": 5985,
            "VillageName": "الظهير "
          },
          {
            "Id": 5986,
            "VillageName": "الجـورة "
          },
          {
            "Id": 5987,
            "VillageName": "أبو طويلة "
          },
          {
            "Id": 5988,
            "VillageName": "مدينة الشيخ زويد "
          }
        ],
        "name": "قسم الشيخ زويد"
      },
      {
        "id": 377,
        "villages": [
          {
            "Id": 5989,
            "VillageName": "السلايمة "
          },
          {
            "Id": 5990,
            "VillageName": "الرميلات شرطيين "
          },
          {
            "Id": 5991,
            "VillageName": "المعاييف أبو صبيع "
          },
          {
            "Id": 5992,
            "VillageName": "الجرادات "
          },
          {
            "Id": 5993,
            "VillageName": "البراهمة "
          },
          {
            "Id": 5994,
            "VillageName": "الترابين قصار "
          },
          {
            "Id": 5995,
            "VillageName": "السمرة "
          },
          {
            "Id": 5996,
            "VillageName": "الحارة الغوانمة "
          },
          {
            "Id": 5997,
            "VillageName": "أبو فراج أبو فرية "
          },
          {
            "Id": 5998,
            "VillageName": "أبو حلو "
          },
          {
            "Id": 5999,
            "VillageName": "أبو شيخة الصباح "
          },
          {
            "Id": 6000,
            "VillageName": "أبوقطيفان "
          },
          {
            "Id": 6001,
            "VillageName": "المنايعة "
          },
          {
            "Id": 6002,
            "VillageName": "أولاد سلام البعيرة "
          },
          {
            "Id": 6003,
            "VillageName": "السننة أبو عياد "
          },
          {
            "Id": 6004,
            "VillageName": "الرقيبة "
          },
          {
            "Id": 6005,
            "VillageName": "الخرفيين بالرسم "
          },
          {
            "Id": 6006,
            "VillageName": "البعيرة والرسم "
          },
          {
            "Id": 6007,
            "VillageName": "القمبز الشاعر "
          },
          {
            "Id": 6008,
            "VillageName": "القصاقصة "
          },
          {
            "Id": 6009,
            "VillageName": "الترابين نبيعات "
          },
          {
            "Id": 6010,
            "VillageName": "المحاميد "
          },
          {
            "Id": 6011,
            "VillageName": "الترابين قصار (ابو النقيز) "
          },
          {
            "Id": 6012,
            "VillageName": "البوم أرميلات "
          },
          {
            "Id": 6013,
            "VillageName": "الفريحات أرميلات "
          },
          {
            "Id": 6014,
            "VillageName": "السليمات "
          },
          {
            "Id": 6015,
            "VillageName": "العجالين أرميلات "
          },
          {
            "Id": 6016,
            "VillageName": "الشلالفة "
          },
          {
            "Id": 6017,
            "VillageName": "أرميلات ربايعة "
          },
          {
            "Id": 6018,
            "VillageName": "أبو التوم المعانقة "
          },
          {
            "Id": 6019,
            "VillageName": "الجبور "
          },
          {
            "Id": 6020,
            "VillageName": "العوابدة "
          },
          {
            "Id": 6021,
            "VillageName": "الكيلو 21 "
          },
          {
            "Id": 6022,
            "VillageName": "المهدية "
          },
          {
            "Id": 6023,
            "VillageName": "الطايرة "
          },
          {
            "Id": 6024,
            "VillageName": "الخرافين "
          },
          {
            "Id": 6025,
            "VillageName": "الحسينات "
          },
          {
            "Id": 6026,
            "VillageName": "أبو شنار "
          },
          {
            "Id": 6027,
            "VillageName": "شيبانة "
          },
          {
            "Id": 6028,
            "VillageName": "جوز أبو رعد "
          },
          {
            "Id": 6029,
            "VillageName": "الوفاق "
          },
          {
            "Id": 6030,
            "VillageName": "المطلة "
          },
          {
            "Id": 6031,
            "VillageName": "البرث "
          },
          {
            "Id": 6032,
            "VillageName": "مدينة رفح "
          }
        ],
        "name": "قسم رفح"
      }
    ]
  },
  {
    "id": 35,
    "name": "جنوب سيناء",
    "centers": [
      {
        "id": 378,
        "villages": [
          {
            "Id": 6033,
            "VillageName": "وادى حفرة "
          },
          {
            "Id": 6034,
            "VillageName": "رأس رايا "
          },
          {
            "Id": 6035,
            "VillageName": "ميعـــر "
          },
          {
            "Id": 6036,
            "VillageName": "وادي تمان "
          },
          {
            "Id": 6037,
            "VillageName": "عــلو الوادى "
          },
          {
            "Id": 6038,
            "VillageName": "حبران "
          },
          {
            "Id": 6039,
            "VillageName": "عريق "
          },
          {
            "Id": 6040,
            "VillageName": "سهل القاع "
          },
          {
            "Id": 6041,
            "VillageName": "رأس جارة "
          },
          {
            "Id": 6042,
            "VillageName": "ثغرة "
          },
          {
            "Id": 6043,
            "VillageName": "شيخ موسى "
          },
          {
            "Id": 6044,
            "VillageName": "أبو قدر "
          },
          {
            "Id": 6045,
            "VillageName": "أبو حجاب "
          },
          {
            "Id": 6046,
            "VillageName": "وادى اسلا "
          },
          {
            "Id": 6047,
            "VillageName": "وادى حبران "
          },
          {
            "Id": 6048,
            "VillageName": "وادى سيل ميعر "
          },
          {
            "Id": 6049,
            "VillageName": "وادى مصيعد "
          },
          {
            "Id": 6050,
            "VillageName": "قرية الجبيل ( الصيادين ) "
          },
          {
            "Id": 6051,
            "VillageName": "قرية وادى الطور "
          },
          {
            "Id": 6052,
            "VillageName": "مدينة طــور سيناء "
          }
        ],
        "name": "قسم الطــور"
      },
      {
        "id": 379,
        "villages": [
          {
            "Id": 6053,
            "VillageName": "اللــودعة "
          },
          {
            "Id": 6054,
            "VillageName": "راتمة "
          },
          {
            "Id": 6055,
            "VillageName": "البدرة "
          },
          {
            "Id": 6056,
            "VillageName": "ام تميمة "
          },
          {
            "Id": 6057,
            "VillageName": "سيل ام جراف "
          },
          {
            "Id": 6058,
            "VillageName": "اللبوة "
          },
          {
            "Id": 6059,
            "VillageName": "الحقنة "
          },
          {
            "Id": 6060,
            "VillageName": "الحينك "
          },
          {
            "Id": 6061,
            "VillageName": "السمراء "
          },
          {
            "Id": 6062,
            "VillageName": "ام قصور "
          },
          {
            "Id": 6063,
            "VillageName": "العش "
          },
          {
            "Id": 6064,
            "VillageName": "سيل ام تميرات "
          },
          {
            "Id": 6065,
            "VillageName": "ام رويس "
          },
          {
            "Id": 6066,
            "VillageName": "ام هريرة "
          },
          {
            "Id": 6067,
            "VillageName": "الجلابية "
          },
          {
            "Id": 6068,
            "VillageName": "المطهر "
          },
          {
            "Id": 6069,
            "VillageName": "العروجية "
          },
          {
            "Id": 6070,
            "VillageName": "متاة عمير "
          },
          {
            "Id": 6071,
            "VillageName": "سليف الأعلي "
          },
          {
            "Id": 6072,
            "VillageName": "ام ضالة العلوي "
          },
          {
            "Id": 6073,
            "VillageName": "الأبار "
          },
          {
            "Id": 6074,
            "VillageName": "ام ضالة السفلي "
          },
          {
            "Id": 6075,
            "VillageName": "خوشة ام حسن "
          },
          {
            "Id": 6076,
            "VillageName": "وادي سلاف "
          },
          {
            "Id": 6077,
            "VillageName": "أم عوشزة "
          },
          {
            "Id": 6078,
            "VillageName": "المرير "
          },
          {
            "Id": 6079,
            "VillageName": "الجوفة البيضاء "
          },
          {
            "Id": 6080,
            "VillageName": "الجوفة السمراء "
          },
          {
            "Id": 6081,
            "VillageName": "الأخضر "
          },
          {
            "Id": 6082,
            "VillageName": "صياح "
          },
          {
            "Id": 6083,
            "VillageName": "سيل صياح "
          },
          {
            "Id": 6084,
            "VillageName": "أخبار "
          },
          {
            "Id": 6085,
            "VillageName": "خبير "
          },
          {
            "Id": 6086,
            "VillageName": "الفرعة "
          },
          {
            "Id": 6087,
            "VillageName": "ريع صافية "
          },
          {
            "Id": 6088,
            "VillageName": "ريع ابو حربي "
          },
          {
            "Id": 6089,
            "VillageName": "البريجة "
          },
          {
            "Id": 6090,
            "VillageName": "ريع زيوت "
          },
          {
            "Id": 6091,
            "VillageName": "ريع مبارك "
          },
          {
            "Id": 6092,
            "VillageName": "سيل عليات "
          },
          {
            "Id": 6093,
            "VillageName": "تمارا "
          },
          {
            "Id": 6094,
            "VillageName": "أم خربة "
          },
          {
            "Id": 6095,
            "VillageName": "سيل أجلا "
          },
          {
            "Id": 6096,
            "VillageName": "الحسوة "
          },
          {
            "Id": 6097,
            "VillageName": "اليانس "
          },
          {
            "Id": 6098,
            "VillageName": "ثبيت "
          },
          {
            "Id": 6099,
            "VillageName": "بديري "
          },
          {
            "Id": 6100,
            "VillageName": "الشوبكية "
          },
          {
            "Id": 6101,
            "VillageName": "الدبة "
          },
          {
            "Id": 6102,
            "VillageName": "الكريم "
          },
          {
            "Id": 6103,
            "VillageName": "سيل نفوس "
          },
          {
            "Id": 6104,
            "VillageName": "السواعدية "
          },
          {
            "Id": 6105,
            "VillageName": "الردة "
          },
          {
            "Id": 6106,
            "VillageName": "حجر الخطاطين "
          },
          {
            "Id": 6107,
            "VillageName": "جباري "
          },
          {
            "Id": 6108,
            "VillageName": "الطر "
          },
          {
            "Id": 6109,
            "VillageName": "العقير "
          },
          {
            "Id": 6110,
            "VillageName": "النهبان "
          },
          {
            "Id": 6111,
            "VillageName": "الندية السمراء "
          },
          {
            "Id": 6112,
            "VillageName": "نسرين "
          },
          {
            "Id": 6113,
            "VillageName": "سيل برك "
          },
          {
            "Id": 6114,
            "VillageName": "بيوت "
          },
          {
            "Id": 6115,
            "VillageName": "وادي سدرة "
          },
          {
            "Id": 6116,
            "VillageName": "أبو غراقد "
          },
          {
            "Id": 6117,
            "VillageName": "مكتب "
          },
          {
            "Id": 6118,
            "VillageName": "أم ضبعة "
          },
          {
            "Id": 6119,
            "VillageName": "قرية فيران "
          },
          {
            "Id": 6120,
            "VillageName": "مدينة أبو رديس "
          }
        ],
        "name": "قسم أبو رديس"
      },
      {
        "id": 380,
        "villages": [
          {
            "Id": 6121,
            "VillageName": "السلفيا "
          },
          {
            "Id": 6122,
            "VillageName": "المبلد "
          },
          {
            "Id": 6123,
            "VillageName": "الأغييدرة "
          },
          {
            "Id": 6124,
            "VillageName": "الشيخ عمر "
          },
          {
            "Id": 6125,
            "VillageName": "البيل "
          },
          {
            "Id": 6126,
            "VillageName": "أبوجراد "
          },
          {
            "Id": 6127,
            "VillageName": "أبونسيلة "
          },
          {
            "Id": 6128,
            "VillageName": "السحيمى "
          },
          {
            "Id": 6129,
            "VillageName": "الحمة "
          },
          {
            "Id": 6130,
            "VillageName": "مدخل أبو جعدة "
          },
          {
            "Id": 6131,
            "VillageName": "العبـــــــــور "
          },
          {
            "Id": 6132,
            "VillageName": "الزينة "
          },
          {
            "Id": 6133,
            "VillageName": "الحيليقيا "
          },
          {
            "Id": 6134,
            "VillageName": "عين سدر "
          },
          {
            "Id": 6135,
            "VillageName": "الباغة "
          },
          {
            "Id": 6136,
            "VillageName": "النهايات "
          },
          {
            "Id": 6137,
            "VillageName": "أبو جعدة "
          },
          {
            "Id": 6138,
            "VillageName": "رأس مسلة "
          },
          {
            "Id": 6139,
            "VillageName": "المالحة "
          },
          {
            "Id": 6140,
            "VillageName": "أبو صويرة "
          },
          {
            "Id": 6141,
            "VillageName": "مدينة رأس سدر "
          }
        ],
        "name": "قسم رأس سدر"
      },
      {
        "id": 381,
        "villages": [
          {
            "Id": 6142,
            "VillageName": "الأسقف "
          },
          {
            "Id": 6143,
            "VillageName": "المخلفة 2 "
          },
          {
            "Id": 6144,
            "VillageName": "المخلفة 1 "
          },
          {
            "Id": 6145,
            "VillageName": "وادى الأربعين "
          },
          {
            "Id": 6146,
            "VillageName": "السباعية سفلى "
          },
          {
            "Id": 6147,
            "VillageName": "المعاداة 2 "
          },
          {
            "Id": 6148,
            "VillageName": "المعاداة 1 "
          },
          {
            "Id": 6149,
            "VillageName": "الشجيرات "
          },
          {
            "Id": 6150,
            "VillageName": "العريقات "
          },
          {
            "Id": 6151,
            "VillageName": "العراضة "
          },
          {
            "Id": 6152,
            "VillageName": "المروة "
          },
          {
            "Id": 6153,
            "VillageName": "وادى الحمامى "
          },
          {
            "Id": 6154,
            "VillageName": "الرمثى 2 "
          },
          {
            "Id": 6155,
            "VillageName": "الرمثى 1 "
          },
          {
            "Id": 6156,
            "VillageName": "وادى الخرازين "
          },
          {
            "Id": 6157,
            "VillageName": "وادى النعامة "
          },
          {
            "Id": 6158,
            "VillageName": "وادى الرقص الأصفر "
          },
          {
            "Id": 6159,
            "VillageName": "وادى الغربة السدود "
          },
          {
            "Id": 6160,
            "VillageName": "النصرة "
          },
          {
            "Id": 6161,
            "VillageName": "وادى أبو ماض "
          },
          {
            "Id": 6162,
            "VillageName": "الرصيص "
          },
          {
            "Id": 6163,
            "VillageName": "حسب اللة "
          },
          {
            "Id": 6164,
            "VillageName": "البيرق "
          },
          {
            "Id": 6165,
            "VillageName": "عرب هويشل "
          },
          {
            "Id": 6166,
            "VillageName": "عرب جمعة "
          },
          {
            "Id": 6167,
            "VillageName": "علو العجرمية "
          },
          {
            "Id": 6168,
            "VillageName": "أم المغيرات "
          },
          {
            "Id": 6169,
            "VillageName": "المريد "
          },
          {
            "Id": 6170,
            "VillageName": "أم عليديات "
          },
          {
            "Id": 6171,
            "VillageName": "وادى الزيتونة "
          },
          {
            "Id": 6172,
            "VillageName": "الشيخ عــواد 2 "
          },
          {
            "Id": 6173,
            "VillageName": "الشيخ عــواد 1 "
          },
          {
            "Id": 6174,
            "VillageName": "المظل والزرانيق "
          },
          {
            "Id": 6175,
            "VillageName": "الوادى الاخضر "
          },
          {
            "Id": 6176,
            "VillageName": "سهب "
          },
          {
            "Id": 6177,
            "VillageName": "وادى الاضباعية "
          },
          {
            "Id": 6178,
            "VillageName": "وادى النصب 2 "
          },
          {
            "Id": 6179,
            "VillageName": "وادى النصب 1 "
          },
          {
            "Id": 6180,
            "VillageName": "الفرنجة "
          },
          {
            "Id": 6181,
            "VillageName": "أم حصاة 2 "
          },
          {
            "Id": 6182,
            "VillageName": "أم حصاة "
          },
          {
            "Id": 6183,
            "VillageName": "الرحبة "
          },
          {
            "Id": 6184,
            "VillageName": "وادى الشيخ محسن "
          },
          {
            "Id": 6185,
            "VillageName": "النبى صالح "
          },
          {
            "Id": 6186,
            "VillageName": "بئر هارون "
          },
          {
            "Id": 6187,
            "VillageName": "وادى الراحة "
          },
          {
            "Id": 6188,
            "VillageName": "أبو سيلة "
          },
          {
            "Id": 6189,
            "VillageName": "وادى الملقاة "
          },
          {
            "Id": 6190,
            "VillageName": "الطــرفة "
          },
          {
            "Id": 6191,
            "VillageName": "مدينة سانت كاترين "
          }
        ],
        "name": "قسم سانت كاترين"
      },
      {
        "id": 382,
        "villages": [
          {
            "Id": 6192,
            "VillageName": "سعال "
          },
          {
            "Id": 6193,
            "VillageName": "وادى المجرح 2 "
          },
          {
            "Id": 6194,
            "VillageName": "المجرح "
          },
          {
            "Id": 6195,
            "VillageName": "رأس الصاعدة "
          },
          {
            "Id": 6196,
            "VillageName": "العدوة أم رعث "
          },
          {
            "Id": 6197,
            "VillageName": "بئر الصوان "
          },
          {
            "Id": 6198,
            "VillageName": "بئر صورة "
          },
          {
            "Id": 6199,
            "VillageName": "وادى البدن "
          },
          {
            "Id": 6200,
            "VillageName": "وادى أبو عرفان "
          },
          {
            "Id": 6201,
            "VillageName": "وادى الحماسن الأدنى "
          },
          {
            "Id": 6202,
            "VillageName": "وادى المقرح "
          },
          {
            "Id": 6203,
            "VillageName": "وادى الرمثا "
          },
          {
            "Id": 6204,
            "VillageName": "وادى كحيل "
          },
          {
            "Id": 6205,
            "VillageName": "وادى البطن "
          },
          {
            "Id": 6206,
            "VillageName": "وادى سبا أبوعلافة "
          },
          {
            "Id": 6207,
            "VillageName": "وادى سعدى "
          },
          {
            "Id": 6208,
            "VillageName": "وادى عراضة "
          },
          {
            "Id": 6209,
            "VillageName": "وادى نخيل "
          },
          {
            "Id": 6210,
            "VillageName": "وادى الهجيج "
          },
          {
            "Id": 6211,
            "VillageName": "وادى الحميد "
          },
          {
            "Id": 6212,
            "VillageName": "وادى جريع / وادى الحوانة "
          },
          {
            "Id": 6213,
            "VillageName": "وادى أبو سلمة "
          },
          {
            "Id": 6214,
            "VillageName": "وادى حديرة "
          },
          {
            "Id": 6215,
            "VillageName": "وادى أم ثلة "
          },
          {
            "Id": 6216,
            "VillageName": "وادى الشغنة "
          },
          {
            "Id": 6217,
            "VillageName": "وادى أم نتش "
          },
          {
            "Id": 6218,
            "VillageName": "أم المالحة الادنى "
          },
          {
            "Id": 6219,
            "VillageName": "وادى أم مريخة "
          },
          {
            "Id": 6220,
            "VillageName": "وادى الرغو ى "
          },
          {
            "Id": 6221,
            "VillageName": "وادى سرطبة "
          },
          {
            "Id": 6222,
            "VillageName": "وادى شفلح "
          },
          {
            "Id": 6223,
            "VillageName": "وادى الابيض "
          },
          {
            "Id": 6224,
            "VillageName": "وادى شاسة "
          },
          {
            "Id": 6225,
            "VillageName": "وادى حويط "
          },
          {
            "Id": 6226,
            "VillageName": "وادى المالحة الرويانة "
          },
          {
            "Id": 6227,
            "VillageName": "وادى الحميراء "
          },
          {
            "Id": 6228,
            "VillageName": "وادى صعيد "
          },
          {
            "Id": 6229,
            "VillageName": "وادى الحواس "
          },
          {
            "Id": 6230,
            "VillageName": "وادى حبيق "
          },
          {
            "Id": 6231,
            "VillageName": "وادى الثورة "
          },
          {
            "Id": 6232,
            "VillageName": "وادى المجرح "
          },
          {
            "Id": 6233,
            "VillageName": "وادى المحاش "
          },
          {
            "Id": 6234,
            "VillageName": "وادى أم رحلة "
          },
          {
            "Id": 6235,
            "VillageName": "وادى شيسحة "
          },
          {
            "Id": 6236,
            "VillageName": "وادى الملحة "
          },
          {
            "Id": 6237,
            "VillageName": "وادى غزالة "
          },
          {
            "Id": 6238,
            "VillageName": "عين حضرة "
          },
          {
            "Id": 6239,
            "VillageName": "وادى الصوان "
          },
          {
            "Id": 6240,
            "VillageName": "بئر مقبلة "
          },
          {
            "Id": 6241,
            "VillageName": "وادى الرهبية "
          },
          {
            "Id": 6242,
            "VillageName": "عين أم أحمد "
          },
          {
            "Id": 6243,
            "VillageName": "وادى حمص "
          },
          {
            "Id": 6244,
            "VillageName": "بئر زغير "
          },
          {
            "Id": 6245,
            "VillageName": "وادى صمغى "
          },
          {
            "Id": 6246,
            "VillageName": "عين قرطاجا "
          },
          {
            "Id": 6247,
            "VillageName": "وادى الصاعدة "
          },
          {
            "Id": 6248,
            "VillageName": "نويبع الترابين "
          },
          {
            "Id": 6249,
            "VillageName": "المزينة "
          },
          {
            "Id": 6250,
            "VillageName": "الشيخ عطية "
          },
          {
            "Id": 6251,
            "VillageName": "واسط "
          },
          {
            "Id": 6252,
            "VillageName": "مدينة نويبع "
          }
        ],
        "name": "قسم نويبع"
      },
      {
        "id": 383,
        "villages": [
          {
            "Id": 6253,
            "VillageName": "وادى صوير "
          },
          {
            "Id": 6254,
            "VillageName": "وادى مزاريق "
          },
          {
            "Id": 6255,
            "VillageName": "وادى طابا "
          },
          {
            "Id": 6256,
            "VillageName": "المحاش "
          },
          {
            "Id": 6257,
            "VillageName": "الشاطىء الوردى "
          },
          {
            "Id": 6258,
            "VillageName": "ميراج "
          },
          {
            "Id": 6259,
            "VillageName": "طوبية "
          },
          {
            "Id": 6260,
            "VillageName": "مدينة طـــابا "
          }
        ],
        "name": "قسم طــابــا"
      },
      {
        "id": 384,
        "villages": [
          {
            "Id": 6261,
            "VillageName": "وادى جبل الحب "
          },
          {
            "Id": 6262,
            "VillageName": "وادى أم صطيف "
          },
          {
            "Id": 6263,
            "VillageName": "وادى أم سميرة "
          },
          {
            "Id": 6264,
            "VillageName": "وادى الشضملى "
          },
          {
            "Id": 6265,
            "VillageName": "وادى كونكشن "
          },
          {
            "Id": 6266,
            "VillageName": "وادى الطبيق "
          },
          {
            "Id": 6267,
            "VillageName": "وادى الرحينى "
          },
          {
            "Id": 6268,
            "VillageName": "وادى أبو جالوم "
          },
          {
            "Id": 6269,
            "VillageName": "وادى زغرة "
          },
          {
            "Id": 6270,
            "VillageName": "وادى مجيرح "
          },
          {
            "Id": 6271,
            "VillageName": "العقد "
          },
          {
            "Id": 6272,
            "VillageName": "وادى زهرة "
          },
          {
            "Id": 6273,
            "VillageName": "الشيخ على "
          },
          {
            "Id": 6274,
            "VillageName": "وادى العيش "
          },
          {
            "Id": 6275,
            "VillageName": "وادى قتى "
          },
          {
            "Id": 6276,
            "VillageName": "الميبط "
          },
          {
            "Id": 6277,
            "VillageName": "المجيرح "
          },
          {
            "Id": 6278,
            "VillageName": "الفنار "
          },
          {
            "Id": 6279,
            "VillageName": "المسلسل "
          },
          {
            "Id": 6280,
            "VillageName": "العصلة "
          },
          {
            "Id": 6281,
            "VillageName": "مدينة دهب وتشمل المشربة "
          }
        ],
        "name": "قسم دهب"
      },
      {
        "id": 385,
        "villages": [
          {
            "Id": 6282,
            "VillageName": "تجمع وادى الكيد "
          },
          {
            "Id": 6283,
            "VillageName": "تجمع وادى مسدوس "
          },
          {
            "Id": 6284,
            "VillageName": "تجمع وادى خشبة "
          },
          {
            "Id": 6285,
            "VillageName": "تجمع وادى النهيج "
          },
          {
            "Id": 6286,
            "VillageName": "تجمع وادى الخناصير "
          },
          {
            "Id": 6287,
            "VillageName": "تجمع وادى جدلة "
          },
          {
            "Id": 6288,
            "VillageName": "تجمع وادى الخروم "
          },
          {
            "Id": 6289,
            "VillageName": "تجمع وادى عواجة "
          },
          {
            "Id": 6290,
            "VillageName": "تجمع وادى العاط "
          },
          {
            "Id": 6291,
            "VillageName": "وادى الرويسات "
          },
          {
            "Id": 6292,
            "VillageName": "وادى السلك "
          },
          {
            "Id": 6293,
            "VillageName": "منطقة المرخاة "
          },
          {
            "Id": 6294,
            "VillageName": "منطقة شمال نعمة "
          },
          {
            "Id": 6295,
            "VillageName": "منطقة خليج نعمة "
          },
          {
            "Id": 6296,
            "VillageName": "منطقة حى النور "
          },
          {
            "Id": 6297,
            "VillageName": "منطقة شرم المية "
          },
          {
            "Id": 6298,
            "VillageName": "منطقة أم سيــد "
          },
          {
            "Id": 6299,
            "VillageName": "مدينة شرم الشيخ "
          }
        ],
        "name": "قسم أول شرم الشيخ"
      },
      {
        "id": 386,
        "villages": [
          {
            "Id": 6300,
            "VillageName": "وادى مرسى بريكه "
          },
          {
            "Id": 6301,
            "VillageName": "جزيرة تيران "
          },
          {
            "Id": 6302,
            "VillageName": "جزيرة صنافير "
          },
          {
            "Id": 6303,
            "VillageName": "منحر الناقة "
          },
          {
            "Id": 6304,
            "VillageName": "البطليحات "
          },
          {
            "Id": 6305,
            "VillageName": "خريزة "
          },
          {
            "Id": 6306,
            "VillageName": "الغرقانة "
          },
          {
            "Id": 6307,
            "VillageName": "الشرفا الغربية "
          },
          {
            "Id": 6308,
            "VillageName": "الشرفا الشرقية "
          },
          {
            "Id": 6309,
            "VillageName": "وادى مندر "
          },
          {
            "Id": 6310,
            "VillageName": "سبيتة "
          },
          {
            "Id": 6311,
            "VillageName": "منطقة المنتزة * "
          },
          {
            "Id": 6312,
            "VillageName": "كمين دهب * "
          },
          {
            "Id": 6313,
            "VillageName": "منطقة نبق * "
          },
          {
            "Id": 6314,
            "VillageName": "مطار شرم الشيخ * "
          },
          {
            "Id": 6315,
            "VillageName": "قرية رأس نصرانى "
          }
        ],
        "name": "قسم ثان شرم الشيخ"
      },
      {
        "id": 387,
        "villages": [
          {
            "Id": 6316,
            "VillageName": "رأس ملعب "
          },
          {
            "Id": 6317,
            "VillageName": "حمام فرعون "
          },
          {
            "Id": 6318,
            "VillageName": "بن سكر وأبورجم "
          },
          {
            "Id": 6319,
            "VillageName": "وادى وسيط "
          },
          {
            "Id": 6320,
            "VillageName": "المداخلة "
          },
          {
            "Id": 6321,
            "VillageName": "وادى تال "
          },
          {
            "Id": 6322,
            "VillageName": "وادى غرندل "
          },
          {
            "Id": 6323,
            "VillageName": "قــرية غرندل "
          },
          {
            "Id": 6324,
            "VillageName": "شيجر "
          },
          {
            "Id": 6325,
            "VillageName": "أم طرفاة "
          },
          {
            "Id": 6326,
            "VillageName": "مليح "
          },
          {
            "Id": 6327,
            "VillageName": "خشم الفردة "
          },
          {
            "Id": 6328,
            "VillageName": "وادى المعين "
          },
          {
            "Id": 6329,
            "VillageName": "جرجور "
          },
          {
            "Id": 6330,
            "VillageName": "أم بجمة "
          },
          {
            "Id": 6331,
            "VillageName": "الزحلوقة "
          },
          {
            "Id": 6332,
            "VillageName": "الحسينية "
          },
          {
            "Id": 6333,
            "VillageName": "الصهو العلوى "
          },
          {
            "Id": 6334,
            "VillageName": "بعلة "
          },
          {
            "Id": 6335,
            "VillageName": "حبوس "
          },
          {
            "Id": 6336,
            "VillageName": "الهرابة "
          },
          {
            "Id": 6337,
            "VillageName": "الدرة "
          },
          {
            "Id": 6338,
            "VillageName": "دبة الجرى "
          },
          {
            "Id": 6339,
            "VillageName": "السمرة "
          },
          {
            "Id": 6340,
            "VillageName": "الكيلو 45 "
          },
          {
            "Id": 6341,
            "VillageName": "الرويكنة "
          },
          {
            "Id": 6342,
            "VillageName": "الحمر "
          },
          {
            "Id": 6343,
            "VillageName": "الزبير "
          },
          {
            "Id": 6344,
            "VillageName": "الدبيبات "
          },
          {
            "Id": 6345,
            "VillageName": "سرابيط الخادم "
          },
          {
            "Id": 6346,
            "VillageName": "أم رديم "
          },
          {
            "Id": 6347,
            "VillageName": "النصب "
          },
          {
            "Id": 6348,
            "VillageName": "المعين "
          },
          {
            "Id": 6349,
            "VillageName": "السيح "
          },
          {
            "Id": 6350,
            "VillageName": "اللحيان "
          },
          {
            "Id": 6351,
            "VillageName": "الصهو "
          },
          {
            "Id": 6352,
            "VillageName": "الرمثة "
          },
          {
            "Id": 6353,
            "VillageName": "الحويش "
          },
          {
            "Id": 6354,
            "VillageName": "البدع "
          },
          {
            "Id": 6355,
            "VillageName": "القرية البدوية "
          },
          {
            "Id": 6356,
            "VillageName": "قرية الرمله "
          },
          {
            "Id": 6357,
            "VillageName": "مدينة أبو زنيمة "
          }
        ],
        "name": "قسم أبو زنيمة"
      }
    ]
  },
  {
    "id": 99,
    "name": "خارج ج م ع",
    "centers": []
  }
]',true);

    \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
    \App\Models\Neighborhood::truncate();
    \App\Models\City::truncate();
    \App\Models\State::truncate();
    \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

    foreach ($request as $item) {
        $state = \App\Models\State::query()->updateOrCreate([
            'name' => [
                'ar' => $item['name'],
            ]
        ]);
        foreach ($item['centers'] as $citys) {
            $city = \App\Models\City::updateOrCreate([
                'name' => [
                    'ar' => $citys  ['name'],
                ],
                'state_id' => $state->id
            ]);
            foreach ($citys ['villages'] as $neighborhood) {

                \App\Models\Neighborhood::updateOrCreate([
                    'name' => [
                        'ar' => $neighborhood['VillageName'],
                    ],
                    'city_id' => $city->id,
                    'state_id' => $state->id,
                ]);
            }
        }
    }
    return view('welcome');
});
