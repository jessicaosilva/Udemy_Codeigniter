CREATE TABLE `t_transacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(1) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `datahora_cadastro` datetime DEFAULT NULL,
  `datahora_ultimaalteracao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
);