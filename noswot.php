<?php
require('matrixCCS.php');

$Ajc = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 182, 184, 186, 188, 190, 192, 194, 196, 198, 200, 202, 204, 206, 208, 210, 212, 214, 216, 218, 220, 222, 224, 226, 228, 230, 232, 234, 236, 238, 240, 242, 244, 246, 248, 250, 252, 254, 256, 258, 260, 262, 264, 266, 268, 270, 272, 274, 276, 278, 280, 287, 297, 304, 314, 321, 331, 338, 348, 355, 365, 372, 383, 390, 401, 408, 419, 426, 437, 444, 455, 462, 472, 479, 489, 496, 506, 513, 523, 530, 540, 547, 557, 564, 574, 581, 591, 598, 608, 615, 625, 632, 642, 649, 659, 666, 676, 683, 693, 700, 710, 719, 728, 737, 746, 755, 764, 773, 782, 791, 800, 809, 818, 827, 836, 845, 854, 863, 872, 881, 890, 899, 908, 917, 926, 935, 936, 937, 940, 941, 942, 943, 944, 945, 946, 947, 948, 949, 950, 951, 952, 953, 954, 955, 956, 957, 958, 959, 960, 961, 962, 963, 964, 965];
$Air = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 147, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 1, 6, 7, 17, 27, 37, 47, 0, 1, 6, 7, 17, 27, 37, 47, 56, 182, 2, 8, 9, 19, 29, 39, 49, 0, 2, 8, 9, 19, 29, 39, 49, 56, 183, 3, 10, 11, 21, 31, 41, 51, 0, 3, 10, 11, 21, 31, 41, 51, 56, 184, 4, 12, 13, 23, 33, 43, 53, 0, 4, 12, 13, 23, 33, 43, 53, 56, 185, 5, 14, 15, 25, 35, 45, 55, 0, 5, 14, 15, 25, 35, 45, 55, 56, 186, 16, 57, 62, 63, 73, 83, 93, 0, 16, 57, 62, 63, 73, 83, 93, 102, 103, 187, 18, 58, 64, 65, 75, 85, 95, 0, 18, 58, 64, 65, 75, 85, 95, 102, 103, 188, 20, 59, 66, 67, 77, 87, 97, 0, 20, 59, 66, 67, 77, 87, 97, 102, 103, 189, 22, 60, 68, 69, 79, 89, 99, 0, 22, 60, 68, 69, 79, 89, 99, 102, 103, 190, 24, 61, 70, 71, 81, 91, 101, 0, 24, 61, 70, 71, 81, 91, 101, 102, 103, 191, 26, 72, 104, 109, 110, 120, 130, 0, 26, 72, 104, 109, 110, 120, 130, 139, 192, 28, 74, 105, 111, 112, 122, 132, 0, 28, 74, 105, 111, 112, 122, 132, 139, 193, 30, 76, 106, 113, 114, 124, 134, 0, 30, 76, 106, 113, 114, 124, 134, 139, 194, 32, 78, 107, 115, 116, 126, 136, 0, 32, 78, 107, 115, 116, 126, 136, 139, 195, 34, 80, 108, 117, 118, 128, 138, 0, 34, 80, 108, 117, 118, 128, 138, 139, 196, 36, 82, 119, 140, 145, 146, 156, 0, 36, 82, 119, 140, 145, 146, 156, 165, 197, 38, 84, 121, 141, 147, 148, 158, 0, 38, 84, 121, 141, 147, 148, 158, 165, 198, 40, 86, 123, 142, 149, 150, 160, 0, 40, 86, 123, 142, 149, 150, 160, 165, 199, 42, 88, 125, 143, 151, 152, 162, 0, 42, 88, 125, 143, 151, 152, 162, 165, 200, 44, 90, 127, 144, 153, 154, 164, 0, 44, 90, 127, 144, 153, 154, 164, 165, 201, 46, 92, 129, 155, 166, 171, 172, 0, 46, 92, 129, 155, 166, 171, 172, 181, 202, 48, 94, 131, 157, 167, 173, 174, 0, 48, 94, 131, 157, 167, 173, 174, 181, 203, 50, 96, 133, 159, 168, 175, 176, 0, 50, 96, 133, 159, 168, 175, 176, 181, 204, 52, 98, 135, 161, 169, 177, 178, 0, 52, 98, 135, 161, 169, 177, 178, 181, 205, 54, 100, 137, 163, 170, 179, 180, 0, 54, 100, 137, 163, 170, 179, 180, 181, 206, 1, 16, 17, 26, 27, 36, 37, 46, 47, 2, 18, 19, 28, 29, 38, 39, 48, 49, 3, 20, 21, 30, 31, 40, 41, 50, 51, 4, 22, 23, 32, 33, 42, 43, 52, 53, 5, 24, 25, 34, 35, 44, 45, 54, 55, 16, 17, 57, 72, 73, 82, 83, 92, 93, 18, 19, 58, 74, 75, 84, 85, 94, 95, 20, 21, 59, 76, 77, 86, 87, 96, 97, 22, 23, 60, 78, 79, 88, 89, 98, 99, 24, 25, 61, 80, 81, 90, 91, 100, 101, 26, 27, 72, 73, 104, 119, 120, 129, 130, 28, 29, 74, 75, 105, 121, 122, 131, 132, 30, 31, 76, 77, 106, 123, 124, 133, 134, 32, 33, 78, 79, 107, 125, 126, 135, 136, 34, 35, 80, 81, 108, 127, 128, 137, 138, 36, 37, 82, 83, 119, 120, 140, 155, 156, 38, 39, 84, 85, 121, 122, 141, 157, 158, 40, 41, 86, 87, 123, 124, 142, 159, 160, 42, 43, 88, 89, 125, 126, 143, 161, 162, 44, 45, 90, 91, 127, 128, 144, 163, 164, 46, 47, 92, 93, 129, 130, 155, 156, 166, 48, 49, 94, 95, 131, 132, 157, 158, 167, 50, 51, 96, 97, 133, 134, 159, 160, 168, 52, 53, 98, 99, 135, 136, 161, 162, 169, 54, 55, 100, 101, 137, 138, 163, 164, 170, 148, 146, 150, 152, 154, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206];
$Apr = [1, 1, 1, 1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 1, 1, -1, -1, -1, 1, -1, 1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, 21, -21, -20, -1, -9.6000004, -0.75, -0.6667, -0.25, -0.25, 1, 2.0833001, 1, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 1, 1, -20, -1, -9.6000004, -0.75, -0.6667, -0.25, -0.25, 1, 2.0833001, 1, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 1, 1, -20, -1, -9.6000004, -0.75, -0.6667, -0.25, -0.25, 1, 2.0833001, 1, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 1, 1, -20, -1, -9.6000004, -0.75, -0.6667, -0.25, -0.25, 1, 2.0833001, 1, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 1, 1, -16, -1, -7.6799998, -0.75, -0.6667, -0.25, -0.25, 1, 2.0833001, 1, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 1, 1, -0.6667, -20, -1, -6.7199998, -0.6667, -0.6667, -0.6667, 1, -2.9762001, 2.9762001, 1, 1, -2.9762001, -2.9762001, -2.9762001, 1, 1, 1, -0.6667, -20, -1, -6.7199998, -0.6667, -0.6667, -0.6667, 1, -2.9762001, 2.9762001, 1, 1, -2.9762001, -2.9762001, -2.9762001, 1, 1, 1, -0.6667, -20, -1, -6.7199998, -0.6667, -0.6667, -0.6667, 1, -2.9762001, 2.9762001, 1, 1, -2.9762001, -2.9762001, -2.9762001, 1, 1, 1, -0.6667, -20, -1, -6.7199998, -0.6667, -0.6667, -0.6667, 1, -2.9762001, 2.9762001, 1, 1, -2.9762001, -2.9762001, -2.9762001, 1, 1, 1, -0.6667, -16, -1, -5.3759999, -0.6667, -0.6667, -0.6667, 1, -2.9762001, 2.9762001, 1, 1, -2.9762001, -2.9762001, -2.9762001, 1, 1, 1, -0.6667, -0.75, -20, -1, -5.7600002, -0.6667, -0.6667, 1, -3.4721999, -3.4721999, 3.4721999, 1, 1, -3.4721999, -3.4721999, 1, 1, -0.6667, -0.75, -20, -1, -5.7600002, -0.6667, -0.6667, 1, -3.4721999, -3.4721999, 3.4721999, 1, 1, -3.4721999, -3.4721999, 1, 1, -0.6667, -0.75, -20, -1, -5.7600002, -0.6667, -0.6667, 1, -3.4721999, -3.4721999, 3.4721999, 1, 1, -3.4721999, -3.4721999, 1, 1, -0.6667, -0.75, -20, -1, -5.7600002, -0.6667, -0.6667, 1, -3.4721999, -3.4721999, 3.4721999, 1, 1, -3.4721999, -3.4721999, 1, 1, -0.6667, -0.75, -16, -1, -4.6079998, -0.6667, -0.6667, 1, -3.4721999, -3.4721999, 3.4721999, 1, 1, -3.4721999, -3.4721999, 1, 1, -0.25, -0.75, -0.6667, -20, -1, -8.9280005, -0.25, 1, -2.2400999, -2.2400999, -2.2400999, 2.2400999, 1, 1, -2.2400999, 1, 1, -0.25, -0.75, -0.6667, -20, -1, -8.9280005, -0.25, 1, -2.2400999, -2.2400999, -2.2400999, 2.2400999, 1, 1, -2.2400999, 1, 1, -0.25, -0.75, -0.6667, -20, -1, -8.9280005, -0.25, 1, -2.2400999, -2.2400999, -2.2400999, 2.2400999, 1, 1, -2.2400999, 1, 1, -0.25, -0.75, -0.6667, -20, -1, -8.9280005, -0.25, 1, -2.2400999, -2.2400999, -2.2400999, 2.2400999, 1, 1, -2.2400999, 1, 1, -0.25, -0.75, -0.6667, -16, -1, -7.1423998, -0.25, 1, -2.2400999, -2.2400999, -2.2400999, 2.2400999, 1, 1, -2.2400999, 1, 1, -0.6667, -0.75, -0.6667, -0.6667, -20, -1, -9.6000004, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 2.0833001, 1, 1, 1, 1, -0.6667, -0.75, -0.6667, -0.6667, -20, -1, -9.6000004, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 2.0833001, 1, 1, 1, 1, -0.6667, -0.75, -0.6667, -0.6667, -20, -1, -9.6000004, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 2.0833001, 1, 1, 1, 1, -0.6667, -0.75, -0.6667, -0.6667, -20, -1, -9.6000004, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 2.0833001, 1, 1, 1, 1, -0.6667, -0.75, -0.6667, -0.6667, -16, -1, -7.6799998, 1, -2.0833001, -2.0833001, -2.0833001, -2.0833001, 2.0833001, 1, 1, 1, 1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, -1, 1, -1, 1, -1, 1, -1, -1, 1, 1, 1, -1, 1, -1, 1, -1, -1, 1, 1, 1, -1, 1, -1, 1, -1, -1, 1, 1, 1, -1, 1, -1, 1, -1, -1, 1, 1, 1, -1, 1, -1, 1, -1, -1, 1, 1, 1, -1, 1, -1, 1, -1, -1, 1, -1, 1, 1, 1, -1, 1, -1, -1, 1, -1, 1, 1, 1, -1, 1, -1, -1, 1, -1, 1, 1, 1, -1, 1, -1, -1, 1, -1, 1, 1, 1, -1, 1, -1, -1, 1, -1, 1, 1, 1, -1, 1, -1, -1, 1, -1, 1, -1, 1, 1, 1, -1, -1, 1, -1, 1, -1, 1, 1, 1, -1, -1, 1, -1, 1, -1, 1, 1, 1, -1, -1, 1, -1, 1, -1, 1, 1, 1, -1, -1, 1, -1, 1, -1, 1, 1, 1, -1, -1, 1, -1, 1, -1, 1, -1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, -1, 1, -1, 1, -1, 1, -1, 1, 1, 1, 1, 2, 3, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];

$aMatrix = new matrixCCS();
$aMatrix->jc = $Ajc;
$aMatrix->ir = $Air;
$aMatrix->values = $Apr;

$Gjc = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238, 239, 240, 241, 242, 243, 244, 245, 246, 247, 248, 249, 250, 251, 252, 253, 254, 255, 256, 257, 258, 259, 260, 261, 262, 263, 264, 265, 266, 267, 268, 269, 270, 271, 272, 273, 274, 275, 276, 277, 278, 279, 280, 281, 282, 283, 284, 285, 286, 287, 288, 289, 290, 291, 292, 293, 294, 295, 296, 297, 298, 299, 300, 301, 302, 303, 304, 305, 306, 307, 308];
$Gir = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238, 239, 240, 241, 242, 243, 244, 245, 246, 247, 248, 249, 250, 251, 252, 253, 254, 255, 256, 257, 258, 259, 260, 261, 262, 263, 264, 265, 266, 267, 268, 269, 270, 271, 272, 273, 274, 275, 276, 277, 278, 279, 280, 281, 282, 283, 284, 285, 286, 287, 288, 289, 290, 291, 292, 293, 294, 295, 296, 297, 298, 299, 300, 301, 302, 303, 304, 305, 306, 307];
$Gpr = [-1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0, -1.0];

$gMatrix = new matrixCCS();
$gMatrix->jc = $Gjc;
$gMatrix->ir = $Gir;
$gMatrix->values = $Gpr;