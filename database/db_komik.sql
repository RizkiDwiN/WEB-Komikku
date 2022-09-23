/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : db_komik

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 23/09/2022 11:25:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gambar
-- ----------------------------
DROP TABLE IF EXISTS `gambar`;
CREATE TABLE `gambar`  (
  `id_gambar` int NOT NULL AUTO_INCREMENT,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_gambar`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gambar
-- ----------------------------
INSERT INTO `gambar` VALUES (2, 'ep1.jpg');

-- ----------------------------
-- Table structure for tb_episode
-- ----------------------------
DROP TABLE IF EXISTS `tb_episode`;
CREATE TABLE `tb_episode`  (
  `id_episode` int NOT NULL AUTO_INCREMENT,
  `judul_episode` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `episode` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `id_komik` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_episode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_episode
-- ----------------------------
INSERT INTO `tb_episode` VALUES (1, '[EP1] - Wajah Gila!', 'ep1.jpg', '1', 1);
INSERT INTO `tb_episode` VALUES (2, '[EP-2] - Mantap!', 'ep1.jpg', '2', 1);
INSERT INTO `tb_episode` VALUES (3, '[EP3] - Mengancam maut!', 'ep3.jpg', '3', 1);
INSERT INTO `tb_episode` VALUES (4, '[EP4]-Penjahat mantap!', 'ep4.jpg', '4', 1);

-- ----------------------------
-- Table structure for tb_komik
-- ----------------------------
DROP TABLE IF EXISTS `tb_komik`;
CREATE TABLE `tb_komik`  (
  `id_komik` int NOT NULL AUTO_INCREMENT,
  `nama_komik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ket` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_upload` datetime NULL DEFAULT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_komik`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_komik
-- ----------------------------
INSERT INTO `tb_komik` VALUES (1, 'Komik Ilham', 'Komik yang sangat penuh action', '2022-09-18 22:30:18', 'c1.png');
INSERT INTO `tb_komik` VALUES (2, 'Komik Baru!', 'Komik menegangkan', '2022-09-18 22:54:51', 'c1.png');
INSERT INTO `tb_komik` VALUES (3, 'In The Office', 'ini adalah komik ofice', '2022-09-19 00:00:00', 'pexels-pixabay-260689.jpg');
INSERT INTO `tb_komik` VALUES (4, 'Komik Boruto!', 'Boruto Terbaik', '2022-09-19 00:00:00', 'c1.png');
INSERT INTO `tb_komik` VALUES (5, 'Vave Komik', 'Ini adalah komik dahsyat', '2022-09-19 00:00:00', 'Capture.JPG');

SET FOREIGN_KEY_CHECKS = 1;
