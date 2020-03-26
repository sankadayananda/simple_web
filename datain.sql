CREATE TABLE family_members (
  id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  member_name CHAR(100),
  dob VARCHAR(11),
  details VARCHAR(4000)
);


INSERT INTO family_members (member_name, dob, details) VALUES ('AAAA DDDD', '2001/10/02', 'Father');
INSERT INTO family_members (member_name, dob, details) VALUES ('NNNN PPPP', '2002/02/04', 'Mother');
INSERT INTO family_members (member_name, dob, details) VALUES ('DDDD DDDD', '2003/08/01', 'Son');
INSERT INTO family_members (member_name, dob, details) VALUES ('SSSS DDDD', '2004/07/04', 'Daughter');
