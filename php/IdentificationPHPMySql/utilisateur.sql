CREATE DATABASE Utilisateurs;
Use Utilisateurs;
CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL,
  `motDePass` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
