<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2023-06-11 00:00:04 --> Config Class Initialized
INFO - 2023-06-11 00:00:04 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:00:04 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:00:04 --> Utf8 Class Initialized
INFO - 2023-06-11 00:00:04 --> URI Class Initialized
INFO - 2023-06-11 00:00:04 --> Router Class Initialized
INFO - 2023-06-11 00:00:04 --> Output Class Initialized
INFO - 2023-06-11 00:00:04 --> Security Class Initialized
DEBUG - 2023-06-11 00:00:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:00:04 --> Input Class Initialized
INFO - 2023-06-11 00:00:04 --> Language Class Initialized
INFO - 2023-06-11 00:00:04 --> Loader Class Initialized
INFO - 2023-06-11 00:00:04 --> Helper loaded: url_helper
INFO - 2023-06-11 00:00:04 --> Helper loaded: security_helper
INFO - 2023-06-11 00:00:04 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:00:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:00:04 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:00:04 --> Helper loaded: form_helper
INFO - 2023-06-11 00:00:04 --> Form Validation Class Initialized
INFO - 2023-06-11 00:00:04 --> Database Driver Class Initialized
INFO - 2023-06-11 00:00:04 --> Model "Master_model" initialized
INFO - 2023-06-11 00:00:04 --> Model "Alert" initialized
INFO - 2023-06-11 00:00:04 --> Controller Class Initialized
INFO - 2023-06-11 00:00:04 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:00:04 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:00:04 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:00:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:00:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:00:04 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:00:04 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:00:04 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:00:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:00:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:00:04 --> Final output sent to browser
DEBUG - 2023-06-11 00:00:04 --> Total execution time: 0.2335
INFO - 2023-06-11 00:00:05 --> Config Class Initialized
INFO - 2023-06-11 00:00:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:00:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:00:05 --> Utf8 Class Initialized
INFO - 2023-06-11 00:00:05 --> URI Class Initialized
INFO - 2023-06-11 00:00:05 --> Router Class Initialized
INFO - 2023-06-11 00:00:05 --> Output Class Initialized
INFO - 2023-06-11 00:00:05 --> Security Class Initialized
DEBUG - 2023-06-11 00:00:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:00:05 --> Input Class Initialized
INFO - 2023-06-11 00:00:05 --> Language Class Initialized
INFO - 2023-06-11 00:00:05 --> Loader Class Initialized
INFO - 2023-06-11 00:00:05 --> Helper loaded: url_helper
INFO - 2023-06-11 00:00:05 --> Helper loaded: security_helper
INFO - 2023-06-11 00:00:05 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:00:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:00:05 --> Helper loaded: form_helper
INFO - 2023-06-11 00:00:05 --> Form Validation Class Initialized
INFO - 2023-06-11 00:00:05 --> Database Driver Class Initialized
INFO - 2023-06-11 00:00:06 --> Model "Master_model" initialized
INFO - 2023-06-11 00:00:06 --> Model "Alert" initialized
INFO - 2023-06-11 00:00:06 --> Controller Class Initialized
INFO - 2023-06-11 00:00:06 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:00:06 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 00:00:07 --> Query error: Duplicate column name 'nim' - Invalid query: SELECT COUNT(*) FROM (SELECT *
FROM `v_mahasiswa`
JOIN `mahasiswa_dosen_wali` ON `mahasiswa_dosen_wali`.`nim`=`v_mahasiswa`.`nim`
JOIN `pegawai` ON `mahasiswa_dosen_wali`.`id_dosen`=`pegawai`.`id`
WHERE `email` = 'arif@rosma.ac.id'
AND  `status_mahasiswa` LIKE '%AKTIF%' ESCAPE '!'
AND  `id_periode_masuk` LIKE '%%' ESCAPE '!') SqueryAux
INFO - 2023-06-11 00:00:07 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 00:00:11 --> Config Class Initialized
INFO - 2023-06-11 00:00:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:00:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:00:11 --> Utf8 Class Initialized
INFO - 2023-06-11 00:00:11 --> URI Class Initialized
INFO - 2023-06-11 00:00:11 --> Router Class Initialized
INFO - 2023-06-11 00:00:11 --> Output Class Initialized
INFO - 2023-06-11 00:00:11 --> Security Class Initialized
DEBUG - 2023-06-11 00:00:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:00:11 --> Input Class Initialized
INFO - 2023-06-11 00:00:11 --> Language Class Initialized
ERROR - 2023-06-11 00:00:11 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:00:11 --> Config Class Initialized
INFO - 2023-06-11 00:00:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:00:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:00:11 --> Utf8 Class Initialized
INFO - 2023-06-11 00:00:11 --> URI Class Initialized
INFO - 2023-06-11 00:00:11 --> Router Class Initialized
INFO - 2023-06-11 00:00:11 --> Output Class Initialized
INFO - 2023-06-11 00:00:11 --> Security Class Initialized
DEBUG - 2023-06-11 00:00:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:00:11 --> Input Class Initialized
INFO - 2023-06-11 00:00:11 --> Language Class Initialized
ERROR - 2023-06-11 00:00:11 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:00:15 --> Config Class Initialized
INFO - 2023-06-11 00:00:15 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:00:15 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:00:15 --> Utf8 Class Initialized
INFO - 2023-06-11 00:00:15 --> URI Class Initialized
INFO - 2023-06-11 00:00:15 --> Router Class Initialized
INFO - 2023-06-11 00:00:15 --> Output Class Initialized
INFO - 2023-06-11 00:00:15 --> Security Class Initialized
DEBUG - 2023-06-11 00:00:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:00:15 --> Input Class Initialized
INFO - 2023-06-11 00:00:15 --> Language Class Initialized
INFO - 2023-06-11 00:00:15 --> Loader Class Initialized
INFO - 2023-06-11 00:00:15 --> Helper loaded: url_helper
INFO - 2023-06-11 00:00:15 --> Helper loaded: security_helper
INFO - 2023-06-11 00:00:15 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:00:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:00:15 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:00:15 --> Helper loaded: form_helper
INFO - 2023-06-11 00:00:15 --> Form Validation Class Initialized
INFO - 2023-06-11 00:00:15 --> Database Driver Class Initialized
INFO - 2023-06-11 00:00:15 --> Model "Master_model" initialized
INFO - 2023-06-11 00:00:15 --> Model "Alert" initialized
INFO - 2023-06-11 00:00:15 --> Controller Class Initialized
INFO - 2023-06-11 00:00:15 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:00:15 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:00:15 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:00:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:00:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:00:15 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:00:15 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:00:15 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:00:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:00:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:00:15 --> Final output sent to browser
DEBUG - 2023-06-11 00:00:15 --> Total execution time: 0.2149
INFO - 2023-06-11 00:00:15 --> Config Class Initialized
INFO - 2023-06-11 00:00:15 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:00:15 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:00:15 --> Utf8 Class Initialized
INFO - 2023-06-11 00:00:15 --> URI Class Initialized
INFO - 2023-06-11 00:00:15 --> Router Class Initialized
INFO - 2023-06-11 00:00:15 --> Output Class Initialized
INFO - 2023-06-11 00:00:15 --> Security Class Initialized
DEBUG - 2023-06-11 00:00:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:00:15 --> Input Class Initialized
INFO - 2023-06-11 00:00:15 --> Language Class Initialized
ERROR - 2023-06-11 00:00:15 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:00:16 --> Config Class Initialized
INFO - 2023-06-11 00:00:16 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:00:16 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:00:16 --> Utf8 Class Initialized
INFO - 2023-06-11 00:00:16 --> URI Class Initialized
INFO - 2023-06-11 00:00:16 --> Router Class Initialized
INFO - 2023-06-11 00:00:16 --> Output Class Initialized
INFO - 2023-06-11 00:00:16 --> Security Class Initialized
DEBUG - 2023-06-11 00:00:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:00:16 --> Input Class Initialized
INFO - 2023-06-11 00:00:16 --> Language Class Initialized
INFO - 2023-06-11 00:00:16 --> Loader Class Initialized
INFO - 2023-06-11 00:00:16 --> Helper loaded: url_helper
INFO - 2023-06-11 00:00:16 --> Helper loaded: security_helper
INFO - 2023-06-11 00:00:16 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:00:16 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:00:16 --> Helper loaded: form_helper
INFO - 2023-06-11 00:00:16 --> Form Validation Class Initialized
INFO - 2023-06-11 00:00:16 --> Database Driver Class Initialized
INFO - 2023-06-11 00:00:16 --> Model "Master_model" initialized
INFO - 2023-06-11 00:00:16 --> Model "Alert" initialized
INFO - 2023-06-11 00:00:16 --> Controller Class Initialized
INFO - 2023-06-11 00:00:16 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:00:16 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 00:00:16 --> Query error: Duplicate column name 'nim' - Invalid query: SELECT COUNT(*) FROM (SELECT *
FROM `v_mahasiswa`
JOIN `mahasiswa_dosen_wali` ON `mahasiswa_dosen_wali`.`nim`=`v_mahasiswa`.`nim`
JOIN `pegawai` ON `mahasiswa_dosen_wali`.`id_dosen`=`pegawai`.`id`
WHERE `email` = 'arif@rosma.ac.id'
AND  `status_mahasiswa` LIKE '%AKTIF%' ESCAPE '!'
AND  `id_periode_masuk` LIKE '%%' ESCAPE '!') SqueryAux
INFO - 2023-06-11 00:00:16 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 00:00:16 --> Config Class Initialized
INFO - 2023-06-11 00:00:16 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:00:16 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:00:16 --> Utf8 Class Initialized
INFO - 2023-06-11 00:00:16 --> URI Class Initialized
INFO - 2023-06-11 00:00:16 --> Router Class Initialized
INFO - 2023-06-11 00:00:16 --> Output Class Initialized
INFO - 2023-06-11 00:00:16 --> Security Class Initialized
DEBUG - 2023-06-11 00:00:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:00:16 --> Input Class Initialized
INFO - 2023-06-11 00:00:16 --> Language Class Initialized
ERROR - 2023-06-11 00:00:16 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:00:33 --> Config Class Initialized
INFO - 2023-06-11 00:00:33 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:00:33 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:00:33 --> Utf8 Class Initialized
INFO - 2023-06-11 00:00:33 --> URI Class Initialized
INFO - 2023-06-11 00:00:33 --> Router Class Initialized
INFO - 2023-06-11 00:00:33 --> Output Class Initialized
INFO - 2023-06-11 00:00:33 --> Security Class Initialized
DEBUG - 2023-06-11 00:00:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:00:33 --> Input Class Initialized
INFO - 2023-06-11 00:00:33 --> Language Class Initialized
INFO - 2023-06-11 00:00:33 --> Loader Class Initialized
INFO - 2023-06-11 00:00:33 --> Helper loaded: url_helper
INFO - 2023-06-11 00:00:33 --> Helper loaded: security_helper
INFO - 2023-06-11 00:00:33 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:00:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:00:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:00:33 --> Helper loaded: form_helper
INFO - 2023-06-11 00:00:33 --> Form Validation Class Initialized
INFO - 2023-06-11 00:00:33 --> Database Driver Class Initialized
INFO - 2023-06-11 00:00:33 --> Model "Master_model" initialized
INFO - 2023-06-11 00:00:33 --> Model "Alert" initialized
INFO - 2023-06-11 00:00:33 --> Controller Class Initialized
INFO - 2023-06-11 00:00:33 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:00:33 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 00:00:33 --> Query error: Duplicate column name 'nim' - Invalid query: SELECT COUNT(*) FROM (SELECT *
FROM `v_mahasiswa`
JOIN `mahasiswa_dosen_wali` ON `mahasiswa_dosen_wali`.`nim`=`v_mahasiswa`.`nim`
JOIN `pegawai` ON `mahasiswa_dosen_wali`.`id_dosen`=`pegawai`.`id`
WHERE `email` = 'arif@rosma.ac.id'
AND  `status_mahasiswa` LIKE '%AKTIF%' ESCAPE '!'
AND  `id_periode_masuk` LIKE '%%' ESCAPE '!') SqueryAux
INFO - 2023-06-11 00:00:33 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 00:02:01 --> Config Class Initialized
INFO - 2023-06-11 00:02:01 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:02:01 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:02:01 --> Utf8 Class Initialized
INFO - 2023-06-11 00:02:01 --> URI Class Initialized
INFO - 2023-06-11 00:02:01 --> Router Class Initialized
INFO - 2023-06-11 00:02:01 --> Output Class Initialized
INFO - 2023-06-11 00:02:01 --> Security Class Initialized
DEBUG - 2023-06-11 00:02:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:02:01 --> Input Class Initialized
INFO - 2023-06-11 00:02:01 --> Language Class Initialized
INFO - 2023-06-11 00:02:01 --> Loader Class Initialized
INFO - 2023-06-11 00:02:01 --> Helper loaded: url_helper
INFO - 2023-06-11 00:02:01 --> Helper loaded: security_helper
INFO - 2023-06-11 00:02:01 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:02:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:02:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:02:02 --> Helper loaded: form_helper
INFO - 2023-06-11 00:02:02 --> Form Validation Class Initialized
INFO - 2023-06-11 00:02:02 --> Database Driver Class Initialized
INFO - 2023-06-11 00:02:02 --> Model "Master_model" initialized
INFO - 2023-06-11 00:02:02 --> Model "Alert" initialized
INFO - 2023-06-11 00:02:02 --> Controller Class Initialized
INFO - 2023-06-11 00:02:02 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:02:02 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:02:02 --> Model "Dosen_t" initialized
INFO - 2023-06-11 00:02:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:02:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:02:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:02:02 --> Final output sent to browser
DEBUG - 2023-06-11 00:02:02 --> Total execution time: 0.1686
INFO - 2023-06-11 00:02:02 --> Config Class Initialized
INFO - 2023-06-11 00:02:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:02:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:02:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:02:02 --> URI Class Initialized
INFO - 2023-06-11 00:02:02 --> Router Class Initialized
INFO - 2023-06-11 00:02:02 --> Output Class Initialized
INFO - 2023-06-11 00:02:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:02:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:02:02 --> Input Class Initialized
INFO - 2023-06-11 00:02:02 --> Language Class Initialized
ERROR - 2023-06-11 00:02:02 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:02:02 --> Config Class Initialized
INFO - 2023-06-11 00:02:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:02:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:02:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:02:02 --> URI Class Initialized
INFO - 2023-06-11 00:02:02 --> Router Class Initialized
INFO - 2023-06-11 00:02:02 --> Output Class Initialized
INFO - 2023-06-11 00:02:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:02:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:02:02 --> Input Class Initialized
INFO - 2023-06-11 00:02:02 --> Language Class Initialized
INFO - 2023-06-11 00:02:02 --> Loader Class Initialized
INFO - 2023-06-11 00:02:02 --> Helper loaded: url_helper
INFO - 2023-06-11 00:02:02 --> Helper loaded: security_helper
INFO - 2023-06-11 00:02:02 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:02:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:02:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:02:02 --> Helper loaded: form_helper
INFO - 2023-06-11 00:02:02 --> Form Validation Class Initialized
INFO - 2023-06-11 00:02:02 --> Database Driver Class Initialized
INFO - 2023-06-11 00:02:02 --> Model "Master_model" initialized
INFO - 2023-06-11 00:02:02 --> Model "Alert" initialized
INFO - 2023-06-11 00:02:02 --> Controller Class Initialized
INFO - 2023-06-11 00:02:02 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:02:02 --> Model "Baak_dt" initialized
DEBUG - 2023-06-11 00:02:02 --> Datatables class already loaded. Second attempt ignored.
INFO - 2023-06-11 00:02:02 --> Model "Dosen_dt" initialized
ERROR - 2023-06-11 00:02:03 --> Query error: Duplicate column name 'id_registrasi_mahasiswa' - Invalid query: SELECT COUNT(*) FROM (SELECT *
FROM `v_mahasiswa`
JOIN `v_frs_las` ON `v_frs_las`.`id_registrasi_mahasiswa`=`v_mahasiswa`.`id_registrasi_mahasiswa`
JOIN `mahasiswa_dosen_wali` ON `mahasiswa_dosen_wali`.`nim`=`v_mahasiswa`.`nim`
JOIN `pegawai` ON `mahasiswa_dosen_wali`.`id_dosen`=`pegawai`.`id`
WHERE `email` = 'arif@rosma.ac.id'
AND  `status_mahasiswa` LIKE '%AKTIF%' ESCAPE '!') SqueryAux
INFO - 2023-06-11 00:02:03 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 00:02:03 --> Config Class Initialized
INFO - 2023-06-11 00:02:03 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:02:03 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:02:03 --> Utf8 Class Initialized
INFO - 2023-06-11 00:02:03 --> URI Class Initialized
INFO - 2023-06-11 00:02:03 --> Router Class Initialized
INFO - 2023-06-11 00:02:03 --> Output Class Initialized
INFO - 2023-06-11 00:02:03 --> Security Class Initialized
DEBUG - 2023-06-11 00:02:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:02:03 --> Input Class Initialized
INFO - 2023-06-11 00:02:03 --> Language Class Initialized
ERROR - 2023-06-11 00:02:03 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:02:10 --> Config Class Initialized
INFO - 2023-06-11 00:02:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:02:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:02:10 --> Utf8 Class Initialized
INFO - 2023-06-11 00:02:10 --> URI Class Initialized
INFO - 2023-06-11 00:02:10 --> Router Class Initialized
INFO - 2023-06-11 00:02:10 --> Output Class Initialized
INFO - 2023-06-11 00:02:10 --> Security Class Initialized
DEBUG - 2023-06-11 00:02:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:02:10 --> Input Class Initialized
INFO - 2023-06-11 00:02:10 --> Language Class Initialized
INFO - 2023-06-11 00:02:10 --> Loader Class Initialized
INFO - 2023-06-11 00:02:10 --> Helper loaded: url_helper
INFO - 2023-06-11 00:02:10 --> Helper loaded: security_helper
INFO - 2023-06-11 00:02:10 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:02:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:02:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:02:10 --> Helper loaded: form_helper
INFO - 2023-06-11 00:02:10 --> Form Validation Class Initialized
INFO - 2023-06-11 00:02:10 --> Database Driver Class Initialized
INFO - 2023-06-11 00:02:10 --> Model "Master_model" initialized
INFO - 2023-06-11 00:02:10 --> Model "Alert" initialized
INFO - 2023-06-11 00:02:10 --> Controller Class Initialized
INFO - 2023-06-11 00:02:10 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:02:10 --> Model "Baak_dt" initialized
DEBUG - 2023-06-11 00:02:10 --> Datatables class already loaded. Second attempt ignored.
INFO - 2023-06-11 00:02:10 --> Model "Dosen_dt" initialized
ERROR - 2023-06-11 00:02:10 --> Query error: Duplicate column name 'id_registrasi_mahasiswa' - Invalid query: SELECT COUNT(*) FROM (SELECT *
FROM `v_mahasiswa`
JOIN `v_frs_las` ON `v_frs_las`.`id_registrasi_mahasiswa`=`v_mahasiswa`.`id_registrasi_mahasiswa`
JOIN `mahasiswa_dosen_wali` ON `mahasiswa_dosen_wali`.`nim`=`v_mahasiswa`.`nim`
JOIN `pegawai` ON `mahasiswa_dosen_wali`.`id_dosen`=`pegawai`.`id`
WHERE `email` = 'arif@rosma.ac.id'
AND  `status_mahasiswa` LIKE '%AKTIF%' ESCAPE '!') SqueryAux
INFO - 2023-06-11 00:02:10 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 00:03:04 --> Config Class Initialized
INFO - 2023-06-11 00:03:04 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:03:04 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:03:04 --> Utf8 Class Initialized
INFO - 2023-06-11 00:03:04 --> URI Class Initialized
INFO - 2023-06-11 00:03:04 --> Router Class Initialized
INFO - 2023-06-11 00:03:04 --> Output Class Initialized
INFO - 2023-06-11 00:03:04 --> Security Class Initialized
DEBUG - 2023-06-11 00:03:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:03:04 --> Input Class Initialized
INFO - 2023-06-11 00:03:04 --> Language Class Initialized
INFO - 2023-06-11 00:03:04 --> Loader Class Initialized
INFO - 2023-06-11 00:03:04 --> Helper loaded: url_helper
INFO - 2023-06-11 00:03:04 --> Helper loaded: security_helper
INFO - 2023-06-11 00:03:04 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:03:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:03:04 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:03:04 --> Helper loaded: form_helper
INFO - 2023-06-11 00:03:04 --> Form Validation Class Initialized
INFO - 2023-06-11 00:03:04 --> Database Driver Class Initialized
INFO - 2023-06-11 00:03:04 --> Model "Master_model" initialized
INFO - 2023-06-11 00:03:04 --> Model "Alert" initialized
INFO - 2023-06-11 00:03:04 --> Controller Class Initialized
INFO - 2023-06-11 00:03:04 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:03:04 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:03:04 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:03:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:03:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:03:04 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:03:04 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:03:04 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:03:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:03:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:03:04 --> Final output sent to browser
DEBUG - 2023-06-11 00:03:04 --> Total execution time: 0.1980
INFO - 2023-06-11 00:03:05 --> Config Class Initialized
INFO - 2023-06-11 00:03:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:03:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:03:05 --> Utf8 Class Initialized
INFO - 2023-06-11 00:03:05 --> URI Class Initialized
INFO - 2023-06-11 00:03:05 --> Router Class Initialized
INFO - 2023-06-11 00:03:05 --> Output Class Initialized
INFO - 2023-06-11 00:03:05 --> Security Class Initialized
DEBUG - 2023-06-11 00:03:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:03:05 --> Input Class Initialized
INFO - 2023-06-11 00:03:05 --> Language Class Initialized
ERROR - 2023-06-11 00:03:05 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:03:05 --> Config Class Initialized
INFO - 2023-06-11 00:03:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:03:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:03:05 --> Utf8 Class Initialized
INFO - 2023-06-11 00:03:05 --> URI Class Initialized
INFO - 2023-06-11 00:03:05 --> Router Class Initialized
INFO - 2023-06-11 00:03:05 --> Output Class Initialized
INFO - 2023-06-11 00:03:05 --> Security Class Initialized
DEBUG - 2023-06-11 00:03:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:03:05 --> Input Class Initialized
INFO - 2023-06-11 00:03:05 --> Language Class Initialized
INFO - 2023-06-11 00:03:05 --> Loader Class Initialized
INFO - 2023-06-11 00:03:05 --> Helper loaded: url_helper
INFO - 2023-06-11 00:03:05 --> Helper loaded: security_helper
INFO - 2023-06-11 00:03:05 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:03:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:03:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:03:05 --> Helper loaded: form_helper
INFO - 2023-06-11 00:03:05 --> Form Validation Class Initialized
INFO - 2023-06-11 00:03:05 --> Database Driver Class Initialized
INFO - 2023-06-11 00:03:05 --> Model "Master_model" initialized
INFO - 2023-06-11 00:03:05 --> Model "Alert" initialized
INFO - 2023-06-11 00:03:05 --> Controller Class Initialized
INFO - 2023-06-11 00:03:05 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:03:05 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 00:03:05 --> Query error: Duplicate column name 'nim' - Invalid query: SELECT COUNT(*) FROM (SELECT *
FROM `v_mahasiswa`
JOIN `mahasiswa_dosen_wali` ON `mahasiswa_dosen_wali`.`nim`=`v_mahasiswa`.`nim`
JOIN `pegawai` ON `mahasiswa_dosen_wali`.`id_dosen`=`pegawai`.`id`
WHERE `email` = 'arif@rosma.ac.id'
AND  `status_mahasiswa` LIKE '%AKTIF%' ESCAPE '!'
AND  `id_periode_masuk` LIKE '%%' ESCAPE '!') SqueryAux
INFO - 2023-06-11 00:03:05 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 00:03:06 --> Config Class Initialized
INFO - 2023-06-11 00:03:06 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:03:06 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:03:06 --> Utf8 Class Initialized
INFO - 2023-06-11 00:03:06 --> URI Class Initialized
INFO - 2023-06-11 00:03:06 --> Router Class Initialized
INFO - 2023-06-11 00:03:06 --> Output Class Initialized
INFO - 2023-06-11 00:03:06 --> Security Class Initialized
DEBUG - 2023-06-11 00:03:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:03:06 --> Input Class Initialized
INFO - 2023-06-11 00:03:06 --> Language Class Initialized
ERROR - 2023-06-11 00:03:06 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:03:14 --> Config Class Initialized
INFO - 2023-06-11 00:03:14 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:03:14 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:03:14 --> Utf8 Class Initialized
INFO - 2023-06-11 00:03:14 --> URI Class Initialized
INFO - 2023-06-11 00:03:14 --> Router Class Initialized
INFO - 2023-06-11 00:03:14 --> Output Class Initialized
INFO - 2023-06-11 00:03:14 --> Security Class Initialized
DEBUG - 2023-06-11 00:03:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:03:14 --> Input Class Initialized
INFO - 2023-06-11 00:03:14 --> Language Class Initialized
INFO - 2023-06-11 00:03:14 --> Loader Class Initialized
INFO - 2023-06-11 00:03:14 --> Helper loaded: url_helper
INFO - 2023-06-11 00:03:14 --> Helper loaded: security_helper
INFO - 2023-06-11 00:03:14 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:03:14 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:03:14 --> Helper loaded: form_helper
INFO - 2023-06-11 00:03:14 --> Form Validation Class Initialized
INFO - 2023-06-11 00:03:14 --> Database Driver Class Initialized
INFO - 2023-06-11 00:03:14 --> Model "Master_model" initialized
INFO - 2023-06-11 00:03:14 --> Model "Alert" initialized
INFO - 2023-06-11 00:03:14 --> Controller Class Initialized
INFO - 2023-06-11 00:03:14 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:03:14 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:03:14 --> Config Class Initialized
INFO - 2023-06-11 00:03:14 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:03:14 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:03:14 --> Utf8 Class Initialized
INFO - 2023-06-11 00:03:14 --> URI Class Initialized
INFO - 2023-06-11 00:03:14 --> Router Class Initialized
INFO - 2023-06-11 00:03:14 --> Output Class Initialized
INFO - 2023-06-11 00:03:14 --> Security Class Initialized
DEBUG - 2023-06-11 00:03:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:03:14 --> Input Class Initialized
INFO - 2023-06-11 00:03:14 --> Language Class Initialized
INFO - 2023-06-11 00:03:14 --> Loader Class Initialized
INFO - 2023-06-11 00:03:14 --> Helper loaded: url_helper
INFO - 2023-06-11 00:03:14 --> Helper loaded: security_helper
INFO - 2023-06-11 00:03:14 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:03:14 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:03:14 --> Helper loaded: form_helper
INFO - 2023-06-11 00:03:14 --> Form Validation Class Initialized
INFO - 2023-06-11 00:03:14 --> Database Driver Class Initialized
INFO - 2023-06-11 00:03:15 --> Model "Master_model" initialized
INFO - 2023-06-11 00:03:15 --> Model "Alert" initialized
INFO - 2023-06-11 00:03:15 --> Controller Class Initialized
INFO - 2023-06-11 00:03:15 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:03:15 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:03:15 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:03:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:03:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:03:15 --> Model "Baak_f" initialized
INFO - 2023-06-11 00:03:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:03:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:03:15 --> Final output sent to browser
DEBUG - 2023-06-11 00:03:15 --> Total execution time: 0.1565
INFO - 2023-06-11 00:03:15 --> Config Class Initialized
INFO - 2023-06-11 00:03:15 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:03:15 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:03:15 --> Utf8 Class Initialized
INFO - 2023-06-11 00:03:15 --> URI Class Initialized
INFO - 2023-06-11 00:03:15 --> Router Class Initialized
INFO - 2023-06-11 00:03:15 --> Output Class Initialized
INFO - 2023-06-11 00:03:15 --> Security Class Initialized
DEBUG - 2023-06-11 00:03:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:03:15 --> Input Class Initialized
INFO - 2023-06-11 00:03:15 --> Language Class Initialized
INFO - 2023-06-11 00:03:15 --> Loader Class Initialized
INFO - 2023-06-11 00:03:15 --> Helper loaded: url_helper
INFO - 2023-06-11 00:03:15 --> Helper loaded: security_helper
INFO - 2023-06-11 00:03:15 --> Database Driver Class Initialized
INFO - 2023-06-11 00:03:15 --> Config Class Initialized
INFO - 2023-06-11 00:03:15 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:03:15 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:03:15 --> Utf8 Class Initialized
INFO - 2023-06-11 00:03:15 --> URI Class Initialized
INFO - 2023-06-11 00:03:15 --> Router Class Initialized
INFO - 2023-06-11 00:03:15 --> Output Class Initialized
INFO - 2023-06-11 00:03:15 --> Security Class Initialized
DEBUG - 2023-06-11 00:03:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:03:15 --> Input Class Initialized
INFO - 2023-06-11 00:03:15 --> Language Class Initialized
ERROR - 2023-06-11 00:03:15 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:03:15 --> Config Class Initialized
INFO - 2023-06-11 00:03:15 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:03:15 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:03:15 --> Utf8 Class Initialized
INFO - 2023-06-11 00:03:15 --> URI Class Initialized
INFO - 2023-06-11 00:03:15 --> Router Class Initialized
INFO - 2023-06-11 00:03:15 --> Output Class Initialized
INFO - 2023-06-11 00:03:15 --> Security Class Initialized
DEBUG - 2023-06-11 00:03:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:03:15 --> Input Class Initialized
INFO - 2023-06-11 00:03:15 --> Language Class Initialized
ERROR - 2023-06-11 00:03:15 --> 404 Page Not Found: Assets/themplate
DEBUG - 2023-06-11 00:03:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:03:15 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:03:15 --> Helper loaded: form_helper
INFO - 2023-06-11 00:03:15 --> Form Validation Class Initialized
INFO - 2023-06-11 00:03:15 --> Database Driver Class Initialized
INFO - 2023-06-11 00:03:15 --> Model "Master_model" initialized
INFO - 2023-06-11 00:03:15 --> Model "Alert" initialized
INFO - 2023-06-11 00:03:15 --> Controller Class Initialized
INFO - 2023-06-11 00:03:15 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:03:15 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 00:03:16 --> Query error: Duplicate column name 'nim' - Invalid query: SELECT COUNT(*) FROM (SELECT *
FROM `v_mahasiswa`
JOIN `mahasiswa_dosen_wali` ON `mahasiswa_dosen_wali`.`nim`=`v_mahasiswa`.`nim`
JOIN `pegawai` ON `mahasiswa_dosen_wali`.`id_dosen`=`pegawai`.`id`
WHERE `email` = 'arif@rosma.ac.id'
AND  `id_periode_masuk` LIKE '%%' ESCAPE '!') SqueryAux
INFO - 2023-06-11 00:03:16 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 00:04:43 --> Config Class Initialized
INFO - 2023-06-11 00:04:43 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:43 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:43 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:43 --> URI Class Initialized
INFO - 2023-06-11 00:04:43 --> Router Class Initialized
INFO - 2023-06-11 00:04:43 --> Output Class Initialized
INFO - 2023-06-11 00:04:43 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:43 --> Input Class Initialized
INFO - 2023-06-11 00:04:43 --> Language Class Initialized
INFO - 2023-06-11 00:04:43 --> Loader Class Initialized
INFO - 2023-06-11 00:04:43 --> Helper loaded: url_helper
INFO - 2023-06-11 00:04:43 --> Helper loaded: security_helper
INFO - 2023-06-11 00:04:43 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:04:43 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:04:43 --> Helper loaded: form_helper
INFO - 2023-06-11 00:04:43 --> Form Validation Class Initialized
INFO - 2023-06-11 00:04:43 --> Database Driver Class Initialized
INFO - 2023-06-11 00:04:43 --> Model "Master_model" initialized
INFO - 2023-06-11 00:04:43 --> Model "Alert" initialized
INFO - 2023-06-11 00:04:43 --> Controller Class Initialized
INFO - 2023-06-11 00:04:43 --> Config Class Initialized
INFO - 2023-06-11 00:04:43 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:43 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:43 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:43 --> URI Class Initialized
DEBUG - 2023-06-11 00:04:43 --> No URI present. Default controller set.
INFO - 2023-06-11 00:04:43 --> Router Class Initialized
INFO - 2023-06-11 00:04:43 --> Output Class Initialized
INFO - 2023-06-11 00:04:43 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:43 --> Input Class Initialized
INFO - 2023-06-11 00:04:43 --> Language Class Initialized
INFO - 2023-06-11 00:04:43 --> Loader Class Initialized
INFO - 2023-06-11 00:04:43 --> Helper loaded: url_helper
INFO - 2023-06-11 00:04:43 --> Helper loaded: security_helper
INFO - 2023-06-11 00:04:43 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:04:43 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:04:43 --> Helper loaded: form_helper
INFO - 2023-06-11 00:04:43 --> Form Validation Class Initialized
INFO - 2023-06-11 00:04:43 --> Database Driver Class Initialized
INFO - 2023-06-11 00:04:44 --> Model "Master_model" initialized
INFO - 2023-06-11 00:04:44 --> Model "Alert" initialized
INFO - 2023-06-11 00:04:44 --> Controller Class Initialized
INFO - 2023-06-11 00:04:44 --> Config Class Initialized
INFO - 2023-06-11 00:04:44 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:44 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:44 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:44 --> URI Class Initialized
INFO - 2023-06-11 00:04:44 --> Router Class Initialized
INFO - 2023-06-11 00:04:44 --> Output Class Initialized
INFO - 2023-06-11 00:04:44 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:44 --> Input Class Initialized
INFO - 2023-06-11 00:04:44 --> Language Class Initialized
INFO - 2023-06-11 00:04:44 --> Loader Class Initialized
INFO - 2023-06-11 00:04:44 --> Helper loaded: url_helper
INFO - 2023-06-11 00:04:44 --> Helper loaded: security_helper
INFO - 2023-06-11 00:04:44 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:04:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:04:44 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:04:44 --> Helper loaded: form_helper
INFO - 2023-06-11 00:04:44 --> Form Validation Class Initialized
INFO - 2023-06-11 00:04:44 --> Database Driver Class Initialized
INFO - 2023-06-11 00:04:44 --> Model "Master_model" initialized
INFO - 2023-06-11 00:04:44 --> Model "Alert" initialized
INFO - 2023-06-11 00:04:44 --> Controller Class Initialized
INFO - 2023-06-11 00:04:44 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 00:04:44 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:04:44 --> Final output sent to browser
DEBUG - 2023-06-11 00:04:44 --> Total execution time: 0.2106
INFO - 2023-06-11 00:04:45 --> Config Class Initialized
INFO - 2023-06-11 00:04:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:45 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:45 --> URI Class Initialized
INFO - 2023-06-11 00:04:45 --> Router Class Initialized
INFO - 2023-06-11 00:04:45 --> Output Class Initialized
INFO - 2023-06-11 00:04:45 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:45 --> Input Class Initialized
INFO - 2023-06-11 00:04:45 --> Language Class Initialized
ERROR - 2023-06-11 00:04:45 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:04:45 --> Config Class Initialized
INFO - 2023-06-11 00:04:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:45 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:45 --> URI Class Initialized
INFO - 2023-06-11 00:04:45 --> Router Class Initialized
INFO - 2023-06-11 00:04:45 --> Output Class Initialized
INFO - 2023-06-11 00:04:45 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:45 --> Input Class Initialized
INFO - 2023-06-11 00:04:45 --> Language Class Initialized
ERROR - 2023-06-11 00:04:45 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:04:56 --> Config Class Initialized
INFO - 2023-06-11 00:04:56 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:56 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:56 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:56 --> URI Class Initialized
INFO - 2023-06-11 00:04:56 --> Router Class Initialized
INFO - 2023-06-11 00:04:56 --> Output Class Initialized
INFO - 2023-06-11 00:04:56 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:56 --> Input Class Initialized
INFO - 2023-06-11 00:04:56 --> Language Class Initialized
INFO - 2023-06-11 00:04:56 --> Loader Class Initialized
INFO - 2023-06-11 00:04:56 --> Helper loaded: url_helper
INFO - 2023-06-11 00:04:56 --> Helper loaded: security_helper
INFO - 2023-06-11 00:04:56 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:04:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:04:56 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:04:56 --> Helper loaded: form_helper
INFO - 2023-06-11 00:04:56 --> Form Validation Class Initialized
INFO - 2023-06-11 00:04:56 --> Database Driver Class Initialized
INFO - 2023-06-11 00:04:56 --> Model "Master_model" initialized
INFO - 2023-06-11 00:04:56 --> Model "Alert" initialized
INFO - 2023-06-11 00:04:56 --> Controller Class Initialized
INFO - 2023-06-11 00:04:56 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 00:04:56 --> Database Driver Class Initialized
INFO - 2023-06-11 00:04:56 --> Model "M_login" initialized
INFO - 2023-06-11 00:04:56 --> Final output sent to browser
DEBUG - 2023-06-11 00:04:56 --> Total execution time: 0.2404
INFO - 2023-06-11 00:04:56 --> Config Class Initialized
INFO - 2023-06-11 00:04:56 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:56 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:56 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:56 --> URI Class Initialized
INFO - 2023-06-11 00:04:56 --> Router Class Initialized
INFO - 2023-06-11 00:04:56 --> Output Class Initialized
INFO - 2023-06-11 00:04:56 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:56 --> Input Class Initialized
INFO - 2023-06-11 00:04:56 --> Language Class Initialized
INFO - 2023-06-11 00:04:56 --> Loader Class Initialized
INFO - 2023-06-11 00:04:56 --> Helper loaded: url_helper
INFO - 2023-06-11 00:04:56 --> Helper loaded: security_helper
INFO - 2023-06-11 00:04:56 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:04:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:04:57 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:04:57 --> Helper loaded: form_helper
INFO - 2023-06-11 00:04:57 --> Form Validation Class Initialized
INFO - 2023-06-11 00:04:57 --> Database Driver Class Initialized
INFO - 2023-06-11 00:04:57 --> Model "Master_model" initialized
INFO - 2023-06-11 00:04:57 --> Model "Alert" initialized
INFO - 2023-06-11 00:04:57 --> Controller Class Initialized
INFO - 2023-06-11 00:04:57 --> Config Class Initialized
INFO - 2023-06-11 00:04:57 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:57 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:57 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:57 --> URI Class Initialized
INFO - 2023-06-11 00:04:57 --> Router Class Initialized
INFO - 2023-06-11 00:04:57 --> Output Class Initialized
INFO - 2023-06-11 00:04:57 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:57 --> Input Class Initialized
INFO - 2023-06-11 00:04:57 --> Language Class Initialized
INFO - 2023-06-11 00:04:57 --> Loader Class Initialized
INFO - 2023-06-11 00:04:57 --> Helper loaded: url_helper
INFO - 2023-06-11 00:04:57 --> Helper loaded: security_helper
INFO - 2023-06-11 00:04:57 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:04:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:04:57 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:04:57 --> Helper loaded: form_helper
INFO - 2023-06-11 00:04:57 --> Form Validation Class Initialized
INFO - 2023-06-11 00:04:57 --> Database Driver Class Initialized
INFO - 2023-06-11 00:04:58 --> Model "Master_model" initialized
INFO - 2023-06-11 00:04:58 --> Model "Alert" initialized
INFO - 2023-06-11 00:04:58 --> Controller Class Initialized
INFO - 2023-06-11 00:04:58 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:04:58 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:04:58 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/dashboard.php
INFO - 2023-06-11 00:04:58 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:04:58 --> Final output sent to browser
DEBUG - 2023-06-11 00:04:58 --> Total execution time: 0.3123
INFO - 2023-06-11 00:04:58 --> Config Class Initialized
INFO - 2023-06-11 00:04:58 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:58 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:58 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:58 --> URI Class Initialized
INFO - 2023-06-11 00:04:58 --> Router Class Initialized
INFO - 2023-06-11 00:04:58 --> Output Class Initialized
INFO - 2023-06-11 00:04:58 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:58 --> Input Class Initialized
INFO - 2023-06-11 00:04:58 --> Language Class Initialized
ERROR - 2023-06-11 00:04:58 --> 404 Page Not Found: Assets/img_mahasiswa
INFO - 2023-06-11 00:04:59 --> Config Class Initialized
INFO - 2023-06-11 00:04:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:04:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:04:59 --> Utf8 Class Initialized
INFO - 2023-06-11 00:04:59 --> URI Class Initialized
INFO - 2023-06-11 00:04:59 --> Router Class Initialized
INFO - 2023-06-11 00:04:59 --> Output Class Initialized
INFO - 2023-06-11 00:04:59 --> Security Class Initialized
DEBUG - 2023-06-11 00:04:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:04:59 --> Input Class Initialized
INFO - 2023-06-11 00:04:59 --> Language Class Initialized
ERROR - 2023-06-11 00:04:59 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:01 --> Config Class Initialized
INFO - 2023-06-11 00:05:01 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:01 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:01 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:01 --> URI Class Initialized
INFO - 2023-06-11 00:05:01 --> Router Class Initialized
INFO - 2023-06-11 00:05:01 --> Output Class Initialized
INFO - 2023-06-11 00:05:01 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:01 --> Input Class Initialized
INFO - 2023-06-11 00:05:01 --> Language Class Initialized
INFO - 2023-06-11 00:05:01 --> Loader Class Initialized
INFO - 2023-06-11 00:05:01 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:01 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:01 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:01 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:01 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:01 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:01 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:01 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:01 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:01 --> Controller Class Initialized
INFO - 2023-06-11 00:05:01 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:05:01 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:05:01 --> Model "Dosen_t" initialized
INFO - 2023-06-11 00:05:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:05:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:05:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:05:01 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:01 --> Total execution time: 0.2234
INFO - 2023-06-11 00:05:02 --> Config Class Initialized
INFO - 2023-06-11 00:05:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:02 --> URI Class Initialized
INFO - 2023-06-11 00:05:02 --> Router Class Initialized
INFO - 2023-06-11 00:05:02 --> Output Class Initialized
INFO - 2023-06-11 00:05:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:02 --> Input Class Initialized
INFO - 2023-06-11 00:05:02 --> Language Class Initialized
ERROR - 2023-06-11 00:05:02 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:02 --> Config Class Initialized
INFO - 2023-06-11 00:05:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:02 --> URI Class Initialized
INFO - 2023-06-11 00:05:02 --> Router Class Initialized
INFO - 2023-06-11 00:05:02 --> Output Class Initialized
INFO - 2023-06-11 00:05:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:02 --> Input Class Initialized
INFO - 2023-06-11 00:05:02 --> Language Class Initialized
ERROR - 2023-06-11 00:05:02 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:02 --> Config Class Initialized
INFO - 2023-06-11 00:05:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:02 --> URI Class Initialized
INFO - 2023-06-11 00:05:02 --> Router Class Initialized
INFO - 2023-06-11 00:05:02 --> Output Class Initialized
INFO - 2023-06-11 00:05:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:02 --> Input Class Initialized
INFO - 2023-06-11 00:05:02 --> Language Class Initialized
INFO - 2023-06-11 00:05:02 --> Loader Class Initialized
INFO - 2023-06-11 00:05:02 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:02 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:02 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:02 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:02 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:02 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:03 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:03 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:03 --> Controller Class Initialized
INFO - 2023-06-11 00:05:03 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:05:03 --> Model "Baak_dt" initialized
DEBUG - 2023-06-11 00:05:03 --> Datatables class already loaded. Second attempt ignored.
INFO - 2023-06-11 00:05:03 --> Model "Dosen_dt" initialized
ERROR - 2023-06-11 00:05:03 --> Query error: Duplicate column name 'id_dosen' - Invalid query: SELECT COUNT(*) FROM (SELECT *
FROM `dikti_semester`
JOIN `mata_kuliah_jadwal` ON `mata_kuliah_jadwal`.`periode`=`dikti_semester`.`id_semester`
JOIN `pegawai` ON `pegawai`.`id`=`mata_kuliah_jadwal`.`id_dosen`
WHERE `pegawai`.`email` = 'arif@rosma.ac.id'
GROUP BY `dikti_semester`.`id_semester`) SqueryAux
INFO - 2023-06-11 00:05:03 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 00:05:08 --> Config Class Initialized
INFO - 2023-06-11 00:05:08 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:08 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:08 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:08 --> URI Class Initialized
INFO - 2023-06-11 00:05:08 --> Router Class Initialized
INFO - 2023-06-11 00:05:08 --> Output Class Initialized
INFO - 2023-06-11 00:05:08 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:08 --> Input Class Initialized
INFO - 2023-06-11 00:05:08 --> Language Class Initialized
INFO - 2023-06-11 00:05:08 --> Loader Class Initialized
INFO - 2023-06-11 00:05:08 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:08 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:08 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:09 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:09 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:09 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:09 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:09 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:09 --> Controller Class Initialized
INFO - 2023-06-11 00:05:09 --> Config Class Initialized
INFO - 2023-06-11 00:05:09 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:09 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:09 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:09 --> URI Class Initialized
DEBUG - 2023-06-11 00:05:09 --> No URI present. Default controller set.
INFO - 2023-06-11 00:05:09 --> Router Class Initialized
INFO - 2023-06-11 00:05:09 --> Output Class Initialized
INFO - 2023-06-11 00:05:09 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:09 --> Input Class Initialized
INFO - 2023-06-11 00:05:09 --> Language Class Initialized
INFO - 2023-06-11 00:05:09 --> Loader Class Initialized
INFO - 2023-06-11 00:05:09 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:09 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:09 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:10 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:10 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:10 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:10 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:10 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:10 --> Controller Class Initialized
INFO - 2023-06-11 00:05:10 --> Config Class Initialized
INFO - 2023-06-11 00:05:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:10 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:10 --> URI Class Initialized
INFO - 2023-06-11 00:05:10 --> Router Class Initialized
INFO - 2023-06-11 00:05:10 --> Output Class Initialized
INFO - 2023-06-11 00:05:10 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:10 --> Input Class Initialized
INFO - 2023-06-11 00:05:10 --> Language Class Initialized
INFO - 2023-06-11 00:05:10 --> Loader Class Initialized
INFO - 2023-06-11 00:05:10 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:10 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:10 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:10 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:10 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:10 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:10 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:10 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:10 --> Controller Class Initialized
INFO - 2023-06-11 00:05:10 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 00:05:10 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:05:10 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:10 --> Total execution time: 0.1709
INFO - 2023-06-11 00:05:11 --> Config Class Initialized
INFO - 2023-06-11 00:05:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:11 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:11 --> URI Class Initialized
INFO - 2023-06-11 00:05:11 --> Router Class Initialized
INFO - 2023-06-11 00:05:11 --> Output Class Initialized
INFO - 2023-06-11 00:05:11 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:11 --> Input Class Initialized
INFO - 2023-06-11 00:05:11 --> Language Class Initialized
ERROR - 2023-06-11 00:05:11 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:11 --> Config Class Initialized
INFO - 2023-06-11 00:05:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:11 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:11 --> URI Class Initialized
INFO - 2023-06-11 00:05:11 --> Router Class Initialized
INFO - 2023-06-11 00:05:11 --> Output Class Initialized
INFO - 2023-06-11 00:05:11 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:11 --> Input Class Initialized
INFO - 2023-06-11 00:05:11 --> Language Class Initialized
ERROR - 2023-06-11 00:05:11 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:16 --> Config Class Initialized
INFO - 2023-06-11 00:05:16 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:16 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:16 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:16 --> URI Class Initialized
INFO - 2023-06-11 00:05:16 --> Router Class Initialized
INFO - 2023-06-11 00:05:16 --> Output Class Initialized
INFO - 2023-06-11 00:05:16 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:16 --> Input Class Initialized
INFO - 2023-06-11 00:05:16 --> Language Class Initialized
INFO - 2023-06-11 00:05:16 --> Loader Class Initialized
INFO - 2023-06-11 00:05:16 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:16 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:16 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:17 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:17 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:17 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:17 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:17 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:17 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:17 --> Controller Class Initialized
INFO - 2023-06-11 00:05:17 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 00:05:17 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:17 --> Model "M_login" initialized
INFO - 2023-06-11 00:05:17 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:17 --> Total execution time: 1.2479
INFO - 2023-06-11 00:05:17 --> Config Class Initialized
INFO - 2023-06-11 00:05:17 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:17 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:17 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:17 --> URI Class Initialized
INFO - 2023-06-11 00:05:17 --> Router Class Initialized
INFO - 2023-06-11 00:05:17 --> Output Class Initialized
INFO - 2023-06-11 00:05:17 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:17 --> Input Class Initialized
INFO - 2023-06-11 00:05:17 --> Language Class Initialized
INFO - 2023-06-11 00:05:17 --> Loader Class Initialized
INFO - 2023-06-11 00:05:17 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:17 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:17 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:19 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:19 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:19 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:19 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:19 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:19 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:19 --> Controller Class Initialized
INFO - 2023-06-11 00:05:19 --> Config Class Initialized
INFO - 2023-06-11 00:05:19 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:19 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:19 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:19 --> URI Class Initialized
INFO - 2023-06-11 00:05:19 --> Router Class Initialized
INFO - 2023-06-11 00:05:19 --> Output Class Initialized
INFO - 2023-06-11 00:05:19 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:19 --> Input Class Initialized
INFO - 2023-06-11 00:05:19 --> Language Class Initialized
INFO - 2023-06-11 00:05:19 --> Loader Class Initialized
INFO - 2023-06-11 00:05:19 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:19 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:19 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:19 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:19 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:19 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:19 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:19 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:19 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:19 --> Controller Class Initialized
INFO - 2023-06-11 00:05:20 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:05:20 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/baak_dashboard.php
INFO - 2023-06-11 00:05:20 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:05:20 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:20 --> Total execution time: 0.6866
INFO - 2023-06-11 00:05:20 --> Config Class Initialized
INFO - 2023-06-11 00:05:20 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:20 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:20 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:20 --> URI Class Initialized
INFO - 2023-06-11 00:05:20 --> Router Class Initialized
INFO - 2023-06-11 00:05:20 --> Output Class Initialized
INFO - 2023-06-11 00:05:20 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:20 --> Input Class Initialized
INFO - 2023-06-11 00:05:20 --> Language Class Initialized
ERROR - 2023-06-11 00:05:20 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:20 --> Config Class Initialized
INFO - 2023-06-11 00:05:20 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:20 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:20 --> Config Class Initialized
INFO - 2023-06-11 00:05:20 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:20 --> Hooks Class Initialized
INFO - 2023-06-11 00:05:20 --> URI Class Initialized
DEBUG - 2023-06-11 00:05:20 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:20 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:20 --> Router Class Initialized
INFO - 2023-06-11 00:05:20 --> Output Class Initialized
INFO - 2023-06-11 00:05:20 --> URI Class Initialized
INFO - 2023-06-11 00:05:20 --> Security Class Initialized
INFO - 2023-06-11 00:05:20 --> Router Class Initialized
DEBUG - 2023-06-11 00:05:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:20 --> Input Class Initialized
INFO - 2023-06-11 00:05:20 --> Output Class Initialized
INFO - 2023-06-11 00:05:20 --> Language Class Initialized
INFO - 2023-06-11 00:05:20 --> Security Class Initialized
INFO - 2023-06-11 00:05:20 --> Loader Class Initialized
DEBUG - 2023-06-11 00:05:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:20 --> Input Class Initialized
INFO - 2023-06-11 00:05:20 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:20 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:20 --> Language Class Initialized
INFO - 2023-06-11 00:05:20 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:20 --> Loader Class Initialized
INFO - 2023-06-11 00:05:20 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:20 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:20 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-06-11 00:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:20 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:20 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:20 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:20 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:20 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:20 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:20 --> Controller Class Initialized
INFO - 2023-06-11 00:05:20 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:05:24 --> Config Class Initialized
INFO - 2023-06-11 00:05:24 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:24 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:24 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:24 --> URI Class Initialized
INFO - 2023-06-11 00:05:24 --> Router Class Initialized
INFO - 2023-06-11 00:05:24 --> Output Class Initialized
INFO - 2023-06-11 00:05:24 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:24 --> Input Class Initialized
INFO - 2023-06-11 00:05:24 --> Language Class Initialized
INFO - 2023-06-11 00:05:24 --> Loader Class Initialized
INFO - 2023-06-11 00:05:24 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:24 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:24 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:27 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:27 --> Total execution time: 7.1970
INFO - 2023-06-11 00:05:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:27 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:27 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:27 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:27 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:27 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:27 --> Controller Class Initialized
INFO - 2023-06-11 00:05:28 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:05:35 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:35 --> Total execution time: 14.3671
INFO - 2023-06-11 00:05:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:35 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:35 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:35 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:35 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:35 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:35 --> Controller Class Initialized
INFO - 2023-06-11 00:05:35 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:05:35 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:05:35 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\baak/informasi.php
INFO - 2023-06-11 00:05:35 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:05:35 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:35 --> Total execution time: 10.3809
INFO - 2023-06-11 00:05:35 --> Config Class Initialized
INFO - 2023-06-11 00:05:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:35 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:35 --> URI Class Initialized
INFO - 2023-06-11 00:05:35 --> Router Class Initialized
INFO - 2023-06-11 00:05:35 --> Output Class Initialized
INFO - 2023-06-11 00:05:35 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:35 --> Input Class Initialized
INFO - 2023-06-11 00:05:35 --> Language Class Initialized
ERROR - 2023-06-11 00:05:35 --> 404 Page Not Found: Asset/adminthem
INFO - 2023-06-11 00:05:35 --> Config Class Initialized
INFO - 2023-06-11 00:05:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:35 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:35 --> URI Class Initialized
INFO - 2023-06-11 00:05:35 --> Router Class Initialized
INFO - 2023-06-11 00:05:35 --> Output Class Initialized
INFO - 2023-06-11 00:05:35 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:35 --> Input Class Initialized
INFO - 2023-06-11 00:05:35 --> Language Class Initialized
ERROR - 2023-06-11 00:05:35 --> 404 Page Not Found: Asset/adminthem
INFO - 2023-06-11 00:05:35 --> Config Class Initialized
INFO - 2023-06-11 00:05:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:35 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:35 --> URI Class Initialized
INFO - 2023-06-11 00:05:35 --> Router Class Initialized
INFO - 2023-06-11 00:05:35 --> Output Class Initialized
INFO - 2023-06-11 00:05:35 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:35 --> Input Class Initialized
INFO - 2023-06-11 00:05:35 --> Language Class Initialized
ERROR - 2023-06-11 00:05:35 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:43 --> Config Class Initialized
INFO - 2023-06-11 00:05:43 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:43 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:43 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:43 --> URI Class Initialized
INFO - 2023-06-11 00:05:43 --> Router Class Initialized
INFO - 2023-06-11 00:05:43 --> Output Class Initialized
INFO - 2023-06-11 00:05:43 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:43 --> Input Class Initialized
INFO - 2023-06-11 00:05:43 --> Language Class Initialized
INFO - 2023-06-11 00:05:43 --> Loader Class Initialized
INFO - 2023-06-11 00:05:43 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:43 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:43 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:43 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:43 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:43 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:43 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:43 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:43 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:43 --> Controller Class Initialized
INFO - 2023-06-11 00:05:43 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:05:43 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:05:43 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:05:43 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:05:43 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:05:43 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 87
ERROR - 2023-06-11 00:05:43 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 87
INFO - 2023-06-11 00:05:43 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:05:43 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:05:43 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:43 --> Total execution time: 0.1635
INFO - 2023-06-11 00:05:44 --> Config Class Initialized
INFO - 2023-06-11 00:05:44 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:44 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:44 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:44 --> URI Class Initialized
INFO - 2023-06-11 00:05:44 --> Router Class Initialized
INFO - 2023-06-11 00:05:44 --> Output Class Initialized
INFO - 2023-06-11 00:05:44 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:44 --> Input Class Initialized
INFO - 2023-06-11 00:05:44 --> Language Class Initialized
ERROR - 2023-06-11 00:05:44 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:44 --> Config Class Initialized
INFO - 2023-06-11 00:05:44 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:44 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:44 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:44 --> URI Class Initialized
INFO - 2023-06-11 00:05:44 --> Router Class Initialized
INFO - 2023-06-11 00:05:44 --> Output Class Initialized
INFO - 2023-06-11 00:05:44 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:44 --> Input Class Initialized
INFO - 2023-06-11 00:05:44 --> Language Class Initialized
ERROR - 2023-06-11 00:05:44 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:44 --> Config Class Initialized
INFO - 2023-06-11 00:05:44 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:44 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:44 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:44 --> URI Class Initialized
INFO - 2023-06-11 00:05:44 --> Router Class Initialized
INFO - 2023-06-11 00:05:44 --> Output Class Initialized
INFO - 2023-06-11 00:05:44 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:44 --> Input Class Initialized
INFO - 2023-06-11 00:05:44 --> Language Class Initialized
INFO - 2023-06-11 00:05:44 --> Loader Class Initialized
INFO - 2023-06-11 00:05:44 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:44 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:44 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:44 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:44 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:44 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:44 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:44 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:44 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:44 --> Controller Class Initialized
INFO - 2023-06-11 00:05:44 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:05:44 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:05:45 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:45 --> Total execution time: 0.8592
INFO - 2023-06-11 00:05:48 --> Config Class Initialized
INFO - 2023-06-11 00:05:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:48 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:48 --> URI Class Initialized
INFO - 2023-06-11 00:05:48 --> Router Class Initialized
INFO - 2023-06-11 00:05:48 --> Output Class Initialized
INFO - 2023-06-11 00:05:48 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:48 --> Input Class Initialized
INFO - 2023-06-11 00:05:48 --> Language Class Initialized
INFO - 2023-06-11 00:05:48 --> Loader Class Initialized
INFO - 2023-06-11 00:05:48 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:48 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:48 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:05:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:49 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:49 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:49 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:49 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:49 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:49 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:49 --> Controller Class Initialized
INFO - 2023-06-11 00:05:49 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:05:49 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:05:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:05:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:05:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:05:49 --> Final output sent to browser
DEBUG - 2023-06-11 00:05:49 --> Total execution time: 0.2091
INFO - 2023-06-11 00:05:49 --> Config Class Initialized
INFO - 2023-06-11 00:05:49 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:49 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:49 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:49 --> URI Class Initialized
INFO - 2023-06-11 00:05:49 --> Router Class Initialized
INFO - 2023-06-11 00:05:49 --> Output Class Initialized
INFO - 2023-06-11 00:05:49 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:49 --> Input Class Initialized
INFO - 2023-06-11 00:05:49 --> Language Class Initialized
ERROR - 2023-06-11 00:05:49 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:05:49 --> Config Class Initialized
INFO - 2023-06-11 00:05:49 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:49 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:49 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:49 --> URI Class Initialized
INFO - 2023-06-11 00:05:49 --> Router Class Initialized
INFO - 2023-06-11 00:05:49 --> Output Class Initialized
INFO - 2023-06-11 00:05:49 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:49 --> Input Class Initialized
INFO - 2023-06-11 00:05:49 --> Language Class Initialized
INFO - 2023-06-11 00:05:49 --> Loader Class Initialized
INFO - 2023-06-11 00:05:49 --> Helper loaded: url_helper
INFO - 2023-06-11 00:05:49 --> Helper loaded: security_helper
INFO - 2023-06-11 00:05:49 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:49 --> Config Class Initialized
INFO - 2023-06-11 00:05:49 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:05:49 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:05:49 --> Utf8 Class Initialized
INFO - 2023-06-11 00:05:49 --> URI Class Initialized
INFO - 2023-06-11 00:05:49 --> Router Class Initialized
INFO - 2023-06-11 00:05:49 --> Output Class Initialized
INFO - 2023-06-11 00:05:49 --> Security Class Initialized
DEBUG - 2023-06-11 00:05:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:05:49 --> Input Class Initialized
INFO - 2023-06-11 00:05:49 --> Language Class Initialized
ERROR - 2023-06-11 00:05:49 --> 404 Page Not Found: Assets/themplate
DEBUG - 2023-06-11 00:05:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:05:49 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:05:49 --> Helper loaded: form_helper
INFO - 2023-06-11 00:05:49 --> Form Validation Class Initialized
INFO - 2023-06-11 00:05:49 --> Database Driver Class Initialized
INFO - 2023-06-11 00:05:50 --> Model "Master_model" initialized
INFO - 2023-06-11 00:05:50 --> Model "Alert" initialized
INFO - 2023-06-11 00:05:50 --> Controller Class Initialized
INFO - 2023-06-11 00:05:50 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:05:50 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 00:05:50 --> Query error: Duplicate column name 'id_kurikulum' - Invalid query: SELECT COUNT(*) FROM (SELECT *
FROM `v_kurikulum`
LEFT JOIN `mahasiswa` ON `mahasiswa`.`id_kurikulum`=`v_kurikulum`.`id_kurikulum`
GROUP BY `v_kurikulum`.`id_kurikulum`) SqueryAux
INFO - 2023-06-11 00:05:50 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 00:10:47 --> Config Class Initialized
INFO - 2023-06-11 00:10:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:10:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:10:47 --> Utf8 Class Initialized
INFO - 2023-06-11 00:10:47 --> URI Class Initialized
INFO - 2023-06-11 00:10:47 --> Router Class Initialized
INFO - 2023-06-11 00:10:47 --> Output Class Initialized
INFO - 2023-06-11 00:10:47 --> Security Class Initialized
DEBUG - 2023-06-11 00:10:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:10:47 --> Input Class Initialized
INFO - 2023-06-11 00:10:47 --> Language Class Initialized
INFO - 2023-06-11 00:10:47 --> Loader Class Initialized
INFO - 2023-06-11 00:10:47 --> Helper loaded: url_helper
INFO - 2023-06-11 00:10:47 --> Helper loaded: security_helper
INFO - 2023-06-11 00:10:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:10:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:10:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:10:47 --> Helper loaded: form_helper
INFO - 2023-06-11 00:10:47 --> Form Validation Class Initialized
INFO - 2023-06-11 00:10:47 --> Database Driver Class Initialized
INFO - 2023-06-11 00:10:47 --> Model "Master_model" initialized
INFO - 2023-06-11 00:10:47 --> Model "Alert" initialized
INFO - 2023-06-11 00:10:47 --> Controller Class Initialized
INFO - 2023-06-11 00:10:47 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:10:47 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:10:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:10:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:10:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:10:48 --> Final output sent to browser
DEBUG - 2023-06-11 00:10:48 --> Total execution time: 0.2053
INFO - 2023-06-11 00:10:48 --> Config Class Initialized
INFO - 2023-06-11 00:10:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:10:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:10:48 --> Utf8 Class Initialized
INFO - 2023-06-11 00:10:48 --> URI Class Initialized
INFO - 2023-06-11 00:10:48 --> Router Class Initialized
INFO - 2023-06-11 00:10:48 --> Output Class Initialized
INFO - 2023-06-11 00:10:48 --> Security Class Initialized
DEBUG - 2023-06-11 00:10:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:10:48 --> Input Class Initialized
INFO - 2023-06-11 00:10:48 --> Language Class Initialized
ERROR - 2023-06-11 00:10:48 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:10:48 --> Config Class Initialized
INFO - 2023-06-11 00:10:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:10:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:10:48 --> Utf8 Class Initialized
INFO - 2023-06-11 00:10:48 --> URI Class Initialized
INFO - 2023-06-11 00:10:48 --> Router Class Initialized
INFO - 2023-06-11 00:10:48 --> Output Class Initialized
INFO - 2023-06-11 00:10:48 --> Security Class Initialized
DEBUG - 2023-06-11 00:10:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:10:48 --> Input Class Initialized
INFO - 2023-06-11 00:10:48 --> Language Class Initialized
ERROR - 2023-06-11 00:10:48 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:10:48 --> Config Class Initialized
INFO - 2023-06-11 00:10:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:10:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:10:48 --> Utf8 Class Initialized
INFO - 2023-06-11 00:10:48 --> URI Class Initialized
INFO - 2023-06-11 00:10:48 --> Router Class Initialized
INFO - 2023-06-11 00:10:48 --> Output Class Initialized
INFO - 2023-06-11 00:10:48 --> Security Class Initialized
DEBUG - 2023-06-11 00:10:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:10:48 --> Input Class Initialized
INFO - 2023-06-11 00:10:48 --> Language Class Initialized
INFO - 2023-06-11 00:10:48 --> Loader Class Initialized
INFO - 2023-06-11 00:10:48 --> Helper loaded: url_helper
INFO - 2023-06-11 00:10:48 --> Helper loaded: security_helper
INFO - 2023-06-11 00:10:48 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:10:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:10:48 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:10:48 --> Helper loaded: form_helper
INFO - 2023-06-11 00:10:48 --> Form Validation Class Initialized
INFO - 2023-06-11 00:10:48 --> Database Driver Class Initialized
INFO - 2023-06-11 00:10:48 --> Model "Master_model" initialized
INFO - 2023-06-11 00:10:48 --> Model "Alert" initialized
INFO - 2023-06-11 00:10:48 --> Controller Class Initialized
INFO - 2023-06-11 00:10:48 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:10:48 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:10:48 --> Final output sent to browser
DEBUG - 2023-06-11 00:10:48 --> Total execution time: 0.3043
INFO - 2023-06-11 00:10:54 --> Config Class Initialized
INFO - 2023-06-11 00:10:54 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:10:54 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:10:54 --> Utf8 Class Initialized
INFO - 2023-06-11 00:10:54 --> URI Class Initialized
INFO - 2023-06-11 00:10:54 --> Router Class Initialized
INFO - 2023-06-11 00:10:54 --> Output Class Initialized
INFO - 2023-06-11 00:10:54 --> Security Class Initialized
DEBUG - 2023-06-11 00:10:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:10:54 --> Input Class Initialized
INFO - 2023-06-11 00:10:54 --> Language Class Initialized
INFO - 2023-06-11 00:10:54 --> Loader Class Initialized
INFO - 2023-06-11 00:10:54 --> Helper loaded: url_helper
INFO - 2023-06-11 00:10:54 --> Helper loaded: security_helper
INFO - 2023-06-11 00:10:54 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:10:54 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:10:54 --> Helper loaded: form_helper
INFO - 2023-06-11 00:10:54 --> Form Validation Class Initialized
INFO - 2023-06-11 00:10:54 --> Database Driver Class Initialized
INFO - 2023-06-11 00:10:54 --> Model "Master_model" initialized
INFO - 2023-06-11 00:10:54 --> Model "Alert" initialized
INFO - 2023-06-11 00:10:54 --> Controller Class Initialized
INFO - 2023-06-11 00:10:54 --> Config Class Initialized
INFO - 2023-06-11 00:10:54 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:10:54 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:10:54 --> Utf8 Class Initialized
INFO - 2023-06-11 00:10:54 --> URI Class Initialized
DEBUG - 2023-06-11 00:10:54 --> No URI present. Default controller set.
INFO - 2023-06-11 00:10:54 --> Router Class Initialized
INFO - 2023-06-11 00:10:54 --> Output Class Initialized
INFO - 2023-06-11 00:10:54 --> Security Class Initialized
DEBUG - 2023-06-11 00:10:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:10:54 --> Input Class Initialized
INFO - 2023-06-11 00:10:54 --> Language Class Initialized
INFO - 2023-06-11 00:10:54 --> Loader Class Initialized
INFO - 2023-06-11 00:10:54 --> Helper loaded: url_helper
INFO - 2023-06-11 00:10:54 --> Helper loaded: security_helper
INFO - 2023-06-11 00:10:54 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:10:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:10:55 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:10:55 --> Helper loaded: form_helper
INFO - 2023-06-11 00:10:55 --> Form Validation Class Initialized
INFO - 2023-06-11 00:10:55 --> Database Driver Class Initialized
INFO - 2023-06-11 00:10:55 --> Model "Master_model" initialized
INFO - 2023-06-11 00:10:55 --> Model "Alert" initialized
INFO - 2023-06-11 00:10:55 --> Controller Class Initialized
INFO - 2023-06-11 00:10:55 --> Config Class Initialized
INFO - 2023-06-11 00:10:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:10:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:10:55 --> Utf8 Class Initialized
INFO - 2023-06-11 00:10:55 --> URI Class Initialized
INFO - 2023-06-11 00:10:55 --> Router Class Initialized
INFO - 2023-06-11 00:10:55 --> Output Class Initialized
INFO - 2023-06-11 00:10:55 --> Security Class Initialized
DEBUG - 2023-06-11 00:10:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:10:55 --> Input Class Initialized
INFO - 2023-06-11 00:10:55 --> Language Class Initialized
INFO - 2023-06-11 00:10:55 --> Loader Class Initialized
INFO - 2023-06-11 00:10:55 --> Helper loaded: url_helper
INFO - 2023-06-11 00:10:55 --> Helper loaded: security_helper
INFO - 2023-06-11 00:10:55 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:10:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:10:55 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:10:55 --> Helper loaded: form_helper
INFO - 2023-06-11 00:10:55 --> Form Validation Class Initialized
INFO - 2023-06-11 00:10:55 --> Database Driver Class Initialized
INFO - 2023-06-11 00:10:55 --> Model "Master_model" initialized
INFO - 2023-06-11 00:10:55 --> Model "Alert" initialized
INFO - 2023-06-11 00:10:55 --> Controller Class Initialized
INFO - 2023-06-11 00:10:55 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 00:10:55 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:10:55 --> Final output sent to browser
DEBUG - 2023-06-11 00:10:55 --> Total execution time: 0.1720
INFO - 2023-06-11 00:10:55 --> Config Class Initialized
INFO - 2023-06-11 00:10:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:10:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:10:55 --> Utf8 Class Initialized
INFO - 2023-06-11 00:10:55 --> URI Class Initialized
INFO - 2023-06-11 00:10:55 --> Router Class Initialized
INFO - 2023-06-11 00:10:55 --> Output Class Initialized
INFO - 2023-06-11 00:10:55 --> Security Class Initialized
DEBUG - 2023-06-11 00:10:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:10:55 --> Input Class Initialized
INFO - 2023-06-11 00:10:55 --> Language Class Initialized
ERROR - 2023-06-11 00:10:55 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:10:55 --> Config Class Initialized
INFO - 2023-06-11 00:10:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:10:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:10:55 --> Utf8 Class Initialized
INFO - 2023-06-11 00:10:55 --> URI Class Initialized
INFO - 2023-06-11 00:10:55 --> Router Class Initialized
INFO - 2023-06-11 00:10:55 --> Output Class Initialized
INFO - 2023-06-11 00:10:55 --> Security Class Initialized
DEBUG - 2023-06-11 00:10:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:10:55 --> Input Class Initialized
INFO - 2023-06-11 00:10:55 --> Language Class Initialized
ERROR - 2023-06-11 00:10:55 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:11:02 --> Config Class Initialized
INFO - 2023-06-11 00:11:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:02 --> URI Class Initialized
INFO - 2023-06-11 00:11:02 --> Router Class Initialized
INFO - 2023-06-11 00:11:02 --> Output Class Initialized
INFO - 2023-06-11 00:11:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:02 --> Input Class Initialized
INFO - 2023-06-11 00:11:02 --> Language Class Initialized
INFO - 2023-06-11 00:11:02 --> Loader Class Initialized
INFO - 2023-06-11 00:11:02 --> Helper loaded: url_helper
INFO - 2023-06-11 00:11:02 --> Helper loaded: security_helper
INFO - 2023-06-11 00:11:02 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:11:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:11:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:11:02 --> Helper loaded: form_helper
INFO - 2023-06-11 00:11:02 --> Form Validation Class Initialized
INFO - 2023-06-11 00:11:02 --> Database Driver Class Initialized
INFO - 2023-06-11 00:11:03 --> Model "Master_model" initialized
INFO - 2023-06-11 00:11:03 --> Model "Alert" initialized
INFO - 2023-06-11 00:11:03 --> Controller Class Initialized
INFO - 2023-06-11 00:11:03 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 00:11:03 --> Database Driver Class Initialized
INFO - 2023-06-11 00:11:03 --> Model "M_login" initialized
INFO - 2023-06-11 00:11:03 --> Final output sent to browser
DEBUG - 2023-06-11 00:11:03 --> Total execution time: 0.2312
INFO - 2023-06-11 00:11:03 --> Config Class Initialized
INFO - 2023-06-11 00:11:03 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:03 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:03 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:03 --> URI Class Initialized
INFO - 2023-06-11 00:11:03 --> Router Class Initialized
INFO - 2023-06-11 00:11:03 --> Output Class Initialized
INFO - 2023-06-11 00:11:03 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:03 --> Input Class Initialized
INFO - 2023-06-11 00:11:03 --> Language Class Initialized
INFO - 2023-06-11 00:11:03 --> Loader Class Initialized
INFO - 2023-06-11 00:11:03 --> Helper loaded: url_helper
INFO - 2023-06-11 00:11:03 --> Helper loaded: security_helper
INFO - 2023-06-11 00:11:03 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:11:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:11:03 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:11:03 --> Helper loaded: form_helper
INFO - 2023-06-11 00:11:03 --> Form Validation Class Initialized
INFO - 2023-06-11 00:11:03 --> Database Driver Class Initialized
INFO - 2023-06-11 00:11:03 --> Model "Master_model" initialized
INFO - 2023-06-11 00:11:03 --> Model "Alert" initialized
INFO - 2023-06-11 00:11:03 --> Controller Class Initialized
INFO - 2023-06-11 00:11:03 --> Config Class Initialized
INFO - 2023-06-11 00:11:03 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:03 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:03 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:03 --> URI Class Initialized
INFO - 2023-06-11 00:11:03 --> Router Class Initialized
INFO - 2023-06-11 00:11:03 --> Output Class Initialized
INFO - 2023-06-11 00:11:03 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:03 --> Input Class Initialized
INFO - 2023-06-11 00:11:03 --> Language Class Initialized
INFO - 2023-06-11 00:11:03 --> Loader Class Initialized
INFO - 2023-06-11 00:11:03 --> Helper loaded: url_helper
INFO - 2023-06-11 00:11:03 --> Helper loaded: security_helper
INFO - 2023-06-11 00:11:03 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:11:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:11:03 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:11:03 --> Helper loaded: form_helper
INFO - 2023-06-11 00:11:03 --> Form Validation Class Initialized
INFO - 2023-06-11 00:11:03 --> Database Driver Class Initialized
INFO - 2023-06-11 00:11:03 --> Model "Master_model" initialized
INFO - 2023-06-11 00:11:03 --> Model "Alert" initialized
INFO - 2023-06-11 00:11:03 --> Controller Class Initialized
INFO - 2023-06-11 00:11:03 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:11:03 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:11:03 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/dashboard.php
INFO - 2023-06-11 00:11:03 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:11:03 --> Final output sent to browser
DEBUG - 2023-06-11 00:11:03 --> Total execution time: 0.2859
INFO - 2023-06-11 00:11:04 --> Config Class Initialized
INFO - 2023-06-11 00:11:04 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:04 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:04 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:04 --> URI Class Initialized
INFO - 2023-06-11 00:11:04 --> Router Class Initialized
INFO - 2023-06-11 00:11:04 --> Output Class Initialized
INFO - 2023-06-11 00:11:04 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:04 --> Input Class Initialized
INFO - 2023-06-11 00:11:04 --> Language Class Initialized
ERROR - 2023-06-11 00:11:04 --> 404 Page Not Found: Assets/img_mahasiswa
INFO - 2023-06-11 00:11:04 --> Config Class Initialized
INFO - 2023-06-11 00:11:04 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:04 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:04 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:04 --> URI Class Initialized
INFO - 2023-06-11 00:11:04 --> Router Class Initialized
INFO - 2023-06-11 00:11:04 --> Output Class Initialized
INFO - 2023-06-11 00:11:04 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:04 --> Input Class Initialized
INFO - 2023-06-11 00:11:04 --> Language Class Initialized
ERROR - 2023-06-11 00:11:04 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:11:06 --> Config Class Initialized
INFO - 2023-06-11 00:11:06 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:06 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:06 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:06 --> URI Class Initialized
INFO - 2023-06-11 00:11:06 --> Router Class Initialized
INFO - 2023-06-11 00:11:06 --> Output Class Initialized
INFO - 2023-06-11 00:11:06 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:06 --> Input Class Initialized
INFO - 2023-06-11 00:11:06 --> Language Class Initialized
INFO - 2023-06-11 00:11:06 --> Loader Class Initialized
INFO - 2023-06-11 00:11:06 --> Helper loaded: url_helper
INFO - 2023-06-11 00:11:06 --> Helper loaded: security_helper
INFO - 2023-06-11 00:11:06 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:11:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:11:06 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:11:06 --> Helper loaded: form_helper
INFO - 2023-06-11 00:11:06 --> Form Validation Class Initialized
INFO - 2023-06-11 00:11:06 --> Database Driver Class Initialized
INFO - 2023-06-11 00:11:06 --> Model "Master_model" initialized
INFO - 2023-06-11 00:11:06 --> Model "Alert" initialized
INFO - 2023-06-11 00:11:06 --> Controller Class Initialized
INFO - 2023-06-11 00:11:06 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:11:06 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:11:06 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:11:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:11:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:11:06 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:11:06 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:11:06 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:11:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:11:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:11:06 --> Final output sent to browser
DEBUG - 2023-06-11 00:11:06 --> Total execution time: 0.3407
INFO - 2023-06-11 00:11:06 --> Config Class Initialized
INFO - 2023-06-11 00:11:06 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:06 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:06 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:06 --> URI Class Initialized
INFO - 2023-06-11 00:11:06 --> Router Class Initialized
INFO - 2023-06-11 00:11:06 --> Output Class Initialized
INFO - 2023-06-11 00:11:06 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:06 --> Input Class Initialized
INFO - 2023-06-11 00:11:06 --> Language Class Initialized
ERROR - 2023-06-11 00:11:06 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:11:06 --> Config Class Initialized
INFO - 2023-06-11 00:11:06 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:06 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:06 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:06 --> URI Class Initialized
INFO - 2023-06-11 00:11:06 --> Router Class Initialized
INFO - 2023-06-11 00:11:06 --> Output Class Initialized
INFO - 2023-06-11 00:11:06 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:06 --> Input Class Initialized
INFO - 2023-06-11 00:11:06 --> Language Class Initialized
ERROR - 2023-06-11 00:11:06 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:11:06 --> Config Class Initialized
INFO - 2023-06-11 00:11:06 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:06 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:06 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:06 --> URI Class Initialized
INFO - 2023-06-11 00:11:06 --> Router Class Initialized
INFO - 2023-06-11 00:11:06 --> Output Class Initialized
INFO - 2023-06-11 00:11:06 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:06 --> Input Class Initialized
INFO - 2023-06-11 00:11:06 --> Language Class Initialized
INFO - 2023-06-11 00:11:06 --> Loader Class Initialized
INFO - 2023-06-11 00:11:06 --> Helper loaded: url_helper
INFO - 2023-06-11 00:11:06 --> Helper loaded: security_helper
INFO - 2023-06-11 00:11:06 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:11:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:11:07 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:11:07 --> Helper loaded: form_helper
INFO - 2023-06-11 00:11:07 --> Form Validation Class Initialized
INFO - 2023-06-11 00:11:07 --> Database Driver Class Initialized
INFO - 2023-06-11 00:11:07 --> Model "Master_model" initialized
INFO - 2023-06-11 00:11:07 --> Model "Alert" initialized
INFO - 2023-06-11 00:11:07 --> Controller Class Initialized
INFO - 2023-06-11 00:11:07 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:11:07 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:11:07 --> Final output sent to browser
DEBUG - 2023-06-11 00:11:07 --> Total execution time: 0.6505
INFO - 2023-06-11 00:11:36 --> Config Class Initialized
INFO - 2023-06-11 00:11:36 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:36 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:36 --> URI Class Initialized
INFO - 2023-06-11 00:11:36 --> Router Class Initialized
INFO - 2023-06-11 00:11:36 --> Output Class Initialized
INFO - 2023-06-11 00:11:36 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:36 --> Input Class Initialized
INFO - 2023-06-11 00:11:36 --> Language Class Initialized
INFO - 2023-06-11 00:11:36 --> Loader Class Initialized
INFO - 2023-06-11 00:11:36 --> Helper loaded: url_helper
INFO - 2023-06-11 00:11:36 --> Helper loaded: security_helper
INFO - 2023-06-11 00:11:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:11:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:11:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:11:36 --> Helper loaded: form_helper
INFO - 2023-06-11 00:11:36 --> Form Validation Class Initialized
INFO - 2023-06-11 00:11:36 --> Database Driver Class Initialized
INFO - 2023-06-11 00:11:36 --> Model "Master_model" initialized
INFO - 2023-06-11 00:11:36 --> Model "Alert" initialized
INFO - 2023-06-11 00:11:36 --> Controller Class Initialized
INFO - 2023-06-11 00:11:36 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:11:36 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:11:36 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:11:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:11:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:11:36 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:11:36 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:11:36 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:11:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:11:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:11:36 --> Final output sent to browser
DEBUG - 2023-06-11 00:11:36 --> Total execution time: 0.3332
INFO - 2023-06-11 00:11:36 --> Config Class Initialized
INFO - 2023-06-11 00:11:36 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:11:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:11:36 --> Utf8 Class Initialized
INFO - 2023-06-11 00:11:36 --> URI Class Initialized
INFO - 2023-06-11 00:11:36 --> Router Class Initialized
INFO - 2023-06-11 00:11:36 --> Output Class Initialized
INFO - 2023-06-11 00:11:36 --> Security Class Initialized
DEBUG - 2023-06-11 00:11:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:11:36 --> Input Class Initialized
INFO - 2023-06-11 00:11:36 --> Language Class Initialized
INFO - 2023-06-11 00:11:36 --> Loader Class Initialized
INFO - 2023-06-11 00:11:36 --> Helper loaded: url_helper
INFO - 2023-06-11 00:11:36 --> Helper loaded: security_helper
INFO - 2023-06-11 00:11:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:11:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:11:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:11:37 --> Helper loaded: form_helper
INFO - 2023-06-11 00:11:37 --> Form Validation Class Initialized
INFO - 2023-06-11 00:11:37 --> Database Driver Class Initialized
INFO - 2023-06-11 00:11:37 --> Model "Master_model" initialized
INFO - 2023-06-11 00:11:37 --> Model "Alert" initialized
INFO - 2023-06-11 00:11:37 --> Controller Class Initialized
INFO - 2023-06-11 00:11:37 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:11:37 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:11:37 --> Final output sent to browser
DEBUG - 2023-06-11 00:11:37 --> Total execution time: 0.7380
INFO - 2023-06-11 00:15:35 --> Config Class Initialized
INFO - 2023-06-11 00:15:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:35 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:35 --> URI Class Initialized
INFO - 2023-06-11 00:15:35 --> Router Class Initialized
INFO - 2023-06-11 00:15:35 --> Output Class Initialized
INFO - 2023-06-11 00:15:35 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:35 --> Input Class Initialized
INFO - 2023-06-11 00:15:35 --> Language Class Initialized
INFO - 2023-06-11 00:15:35 --> Loader Class Initialized
INFO - 2023-06-11 00:15:35 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:35 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:35 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:35 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:35 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:35 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:36 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:36 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:36 --> Controller Class Initialized
INFO - 2023-06-11 00:15:36 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:36 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:15:36 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:15:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:15:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:15:36 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:15:36 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:15:36 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:15:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:15:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:15:36 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:36 --> Total execution time: 0.4020
INFO - 2023-06-11 00:15:36 --> Config Class Initialized
INFO - 2023-06-11 00:15:36 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:36 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:36 --> URI Class Initialized
INFO - 2023-06-11 00:15:36 --> Router Class Initialized
INFO - 2023-06-11 00:15:36 --> Output Class Initialized
INFO - 2023-06-11 00:15:36 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:36 --> Input Class Initialized
INFO - 2023-06-11 00:15:36 --> Language Class Initialized
INFO - 2023-06-11 00:15:36 --> Loader Class Initialized
INFO - 2023-06-11 00:15:36 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:36 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:36 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:36 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:36 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:36 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:36 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:36 --> Controller Class Initialized
INFO - 2023-06-11 00:15:36 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:36 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:15:36 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:36 --> Total execution time: 0.2696
INFO - 2023-06-11 00:15:47 --> Config Class Initialized
INFO - 2023-06-11 00:15:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:47 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:47 --> URI Class Initialized
INFO - 2023-06-11 00:15:47 --> Router Class Initialized
INFO - 2023-06-11 00:15:47 --> Output Class Initialized
INFO - 2023-06-11 00:15:47 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:47 --> Input Class Initialized
INFO - 2023-06-11 00:15:47 --> Language Class Initialized
INFO - 2023-06-11 00:15:47 --> Loader Class Initialized
INFO - 2023-06-11 00:15:47 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:47 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:47 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:47 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:47 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:47 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:47 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:47 --> Controller Class Initialized
INFO - 2023-06-11 00:15:47 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:47 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:15:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:15:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:15:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:15:47 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:47 --> Total execution time: 0.2488
INFO - 2023-06-11 00:15:47 --> Config Class Initialized
INFO - 2023-06-11 00:15:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:47 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:47 --> URI Class Initialized
INFO - 2023-06-11 00:15:47 --> Router Class Initialized
INFO - 2023-06-11 00:15:47 --> Output Class Initialized
INFO - 2023-06-11 00:15:47 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:47 --> Input Class Initialized
INFO - 2023-06-11 00:15:47 --> Language Class Initialized
INFO - 2023-06-11 00:15:47 --> Loader Class Initialized
INFO - 2023-06-11 00:15:47 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:47 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:48 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:48 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:48 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:48 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:48 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:48 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:48 --> Controller Class Initialized
INFO - 2023-06-11 00:15:48 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:48 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:15:48 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:48 --> Total execution time: 0.3328
INFO - 2023-06-11 00:15:51 --> Config Class Initialized
INFO - 2023-06-11 00:15:51 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:51 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:51 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:51 --> URI Class Initialized
INFO - 2023-06-11 00:15:51 --> Router Class Initialized
INFO - 2023-06-11 00:15:51 --> Output Class Initialized
INFO - 2023-06-11 00:15:51 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:51 --> Input Class Initialized
INFO - 2023-06-11 00:15:51 --> Language Class Initialized
INFO - 2023-06-11 00:15:51 --> Loader Class Initialized
INFO - 2023-06-11 00:15:51 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:51 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:51 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:51 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:51 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:51 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:51 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:51 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:51 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:51 --> Controller Class Initialized
INFO - 2023-06-11 00:15:51 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:51 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:15:51 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:15:51 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:15:51 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:15:51 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:15:51 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:15:51 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:15:51 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:15:51 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:15:51 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:51 --> Total execution time: 0.2740
INFO - 2023-06-11 00:15:51 --> Config Class Initialized
INFO - 2023-06-11 00:15:51 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:51 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:51 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:51 --> URI Class Initialized
INFO - 2023-06-11 00:15:51 --> Router Class Initialized
INFO - 2023-06-11 00:15:51 --> Output Class Initialized
INFO - 2023-06-11 00:15:51 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:51 --> Input Class Initialized
INFO - 2023-06-11 00:15:51 --> Language Class Initialized
INFO - 2023-06-11 00:15:51 --> Loader Class Initialized
INFO - 2023-06-11 00:15:51 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:51 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:51 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:51 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:51 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:51 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:51 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:51 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:51 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:51 --> Controller Class Initialized
INFO - 2023-06-11 00:15:51 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:51 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:15:51 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:51 --> Total execution time: 0.3663
INFO - 2023-06-11 00:15:55 --> Config Class Initialized
INFO - 2023-06-11 00:15:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:55 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:55 --> URI Class Initialized
INFO - 2023-06-11 00:15:55 --> Router Class Initialized
INFO - 2023-06-11 00:15:55 --> Output Class Initialized
INFO - 2023-06-11 00:15:55 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:55 --> Input Class Initialized
INFO - 2023-06-11 00:15:55 --> Language Class Initialized
INFO - 2023-06-11 00:15:55 --> Loader Class Initialized
INFO - 2023-06-11 00:15:55 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:55 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:55 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:55 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:55 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:55 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:55 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:55 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:55 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:55 --> Controller Class Initialized
INFO - 2023-06-11 00:15:55 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:55 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:15:55 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:15:55 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:15:55 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:15:55 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:55 --> Total execution time: 0.2012
INFO - 2023-06-11 00:15:55 --> Config Class Initialized
INFO - 2023-06-11 00:15:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:55 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:55 --> URI Class Initialized
INFO - 2023-06-11 00:15:55 --> Router Class Initialized
INFO - 2023-06-11 00:15:55 --> Output Class Initialized
INFO - 2023-06-11 00:15:55 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:55 --> Input Class Initialized
INFO - 2023-06-11 00:15:55 --> Language Class Initialized
INFO - 2023-06-11 00:15:55 --> Loader Class Initialized
INFO - 2023-06-11 00:15:55 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:55 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:55 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:55 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:55 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:55 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:55 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:55 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:55 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:55 --> Controller Class Initialized
INFO - 2023-06-11 00:15:55 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:55 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:15:55 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:55 --> Total execution time: 0.2547
INFO - 2023-06-11 00:15:58 --> Config Class Initialized
INFO - 2023-06-11 00:15:58 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:58 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:58 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:58 --> URI Class Initialized
INFO - 2023-06-11 00:15:58 --> Router Class Initialized
INFO - 2023-06-11 00:15:58 --> Output Class Initialized
INFO - 2023-06-11 00:15:58 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:58 --> Input Class Initialized
INFO - 2023-06-11 00:15:58 --> Language Class Initialized
INFO - 2023-06-11 00:15:58 --> Loader Class Initialized
INFO - 2023-06-11 00:15:58 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:58 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:58 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:59 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:59 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:59 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:59 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:59 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:59 --> Controller Class Initialized
INFO - 2023-06-11 00:15:59 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:59 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:15:59 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:15:59 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:15:59 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:15:59 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:15:59 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:15:59 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:15:59 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:15:59 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:15:59 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:59 --> Total execution time: 0.3309
INFO - 2023-06-11 00:15:59 --> Config Class Initialized
INFO - 2023-06-11 00:15:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:15:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:15:59 --> Utf8 Class Initialized
INFO - 2023-06-11 00:15:59 --> URI Class Initialized
INFO - 2023-06-11 00:15:59 --> Router Class Initialized
INFO - 2023-06-11 00:15:59 --> Output Class Initialized
INFO - 2023-06-11 00:15:59 --> Security Class Initialized
DEBUG - 2023-06-11 00:15:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:15:59 --> Input Class Initialized
INFO - 2023-06-11 00:15:59 --> Language Class Initialized
INFO - 2023-06-11 00:15:59 --> Loader Class Initialized
INFO - 2023-06-11 00:15:59 --> Helper loaded: url_helper
INFO - 2023-06-11 00:15:59 --> Helper loaded: security_helper
INFO - 2023-06-11 00:15:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:15:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:15:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:15:59 --> Helper loaded: form_helper
INFO - 2023-06-11 00:15:59 --> Form Validation Class Initialized
INFO - 2023-06-11 00:15:59 --> Database Driver Class Initialized
INFO - 2023-06-11 00:15:59 --> Model "Master_model" initialized
INFO - 2023-06-11 00:15:59 --> Model "Alert" initialized
INFO - 2023-06-11 00:15:59 --> Controller Class Initialized
INFO - 2023-06-11 00:15:59 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:15:59 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:15:59 --> Final output sent to browser
DEBUG - 2023-06-11 00:15:59 --> Total execution time: 0.3127
INFO - 2023-06-11 00:16:47 --> Config Class Initialized
INFO - 2023-06-11 00:16:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:16:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:16:47 --> Utf8 Class Initialized
INFO - 2023-06-11 00:16:47 --> URI Class Initialized
INFO - 2023-06-11 00:16:47 --> Router Class Initialized
INFO - 2023-06-11 00:16:47 --> Output Class Initialized
INFO - 2023-06-11 00:16:47 --> Security Class Initialized
DEBUG - 2023-06-11 00:16:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:16:47 --> Input Class Initialized
INFO - 2023-06-11 00:16:47 --> Language Class Initialized
INFO - 2023-06-11 00:16:47 --> Loader Class Initialized
INFO - 2023-06-11 00:16:47 --> Helper loaded: url_helper
INFO - 2023-06-11 00:16:47 --> Helper loaded: security_helper
INFO - 2023-06-11 00:16:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:16:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:16:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:16:47 --> Helper loaded: form_helper
INFO - 2023-06-11 00:16:47 --> Form Validation Class Initialized
INFO - 2023-06-11 00:16:47 --> Database Driver Class Initialized
INFO - 2023-06-11 00:16:48 --> Model "Master_model" initialized
INFO - 2023-06-11 00:16:48 --> Model "Alert" initialized
INFO - 2023-06-11 00:16:48 --> Controller Class Initialized
INFO - 2023-06-11 00:16:48 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:16:48 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:16:48 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:16:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:16:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:16:48 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:16:48 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:16:48 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:16:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:16:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:16:48 --> Final output sent to browser
DEBUG - 2023-06-11 00:16:48 --> Total execution time: 0.2832
INFO - 2023-06-11 00:16:48 --> Config Class Initialized
INFO - 2023-06-11 00:16:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:16:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:16:48 --> Utf8 Class Initialized
INFO - 2023-06-11 00:16:48 --> URI Class Initialized
INFO - 2023-06-11 00:16:48 --> Router Class Initialized
INFO - 2023-06-11 00:16:48 --> Output Class Initialized
INFO - 2023-06-11 00:16:48 --> Security Class Initialized
DEBUG - 2023-06-11 00:16:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:16:48 --> Input Class Initialized
INFO - 2023-06-11 00:16:48 --> Language Class Initialized
INFO - 2023-06-11 00:16:48 --> Loader Class Initialized
INFO - 2023-06-11 00:16:48 --> Helper loaded: url_helper
INFO - 2023-06-11 00:16:48 --> Helper loaded: security_helper
INFO - 2023-06-11 00:16:48 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:16:48 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:16:48 --> Helper loaded: form_helper
INFO - 2023-06-11 00:16:48 --> Form Validation Class Initialized
INFO - 2023-06-11 00:16:48 --> Database Driver Class Initialized
INFO - 2023-06-11 00:16:48 --> Model "Master_model" initialized
INFO - 2023-06-11 00:16:48 --> Model "Alert" initialized
INFO - 2023-06-11 00:16:48 --> Controller Class Initialized
INFO - 2023-06-11 00:16:48 --> Model "Baak_model" initialized
ERROR - 2023-06-11 00:16:48 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF), expecting ')' E:\laragon\www\main_rosma\siakad\application\models\datatable\Baak_dt.php 334
INFO - 2023-06-11 00:16:51 --> Config Class Initialized
INFO - 2023-06-11 00:16:51 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:16:51 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:16:51 --> Utf8 Class Initialized
INFO - 2023-06-11 00:16:51 --> URI Class Initialized
INFO - 2023-06-11 00:16:51 --> Router Class Initialized
INFO - 2023-06-11 00:16:51 --> Output Class Initialized
INFO - 2023-06-11 00:16:51 --> Security Class Initialized
DEBUG - 2023-06-11 00:16:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:16:51 --> Input Class Initialized
INFO - 2023-06-11 00:16:51 --> Language Class Initialized
ERROR - 2023-06-11 00:16:51 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:16:51 --> Config Class Initialized
INFO - 2023-06-11 00:16:51 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:16:51 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:16:51 --> Utf8 Class Initialized
INFO - 2023-06-11 00:16:51 --> URI Class Initialized
INFO - 2023-06-11 00:16:51 --> Router Class Initialized
INFO - 2023-06-11 00:16:51 --> Output Class Initialized
INFO - 2023-06-11 00:16:51 --> Security Class Initialized
DEBUG - 2023-06-11 00:16:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:16:51 --> Input Class Initialized
INFO - 2023-06-11 00:16:51 --> Language Class Initialized
ERROR - 2023-06-11 00:16:51 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:16:54 --> Config Class Initialized
INFO - 2023-06-11 00:16:54 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:16:54 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:16:54 --> Utf8 Class Initialized
INFO - 2023-06-11 00:16:54 --> URI Class Initialized
INFO - 2023-06-11 00:16:54 --> Router Class Initialized
INFO - 2023-06-11 00:16:54 --> Output Class Initialized
INFO - 2023-06-11 00:16:54 --> Security Class Initialized
DEBUG - 2023-06-11 00:16:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:16:54 --> Input Class Initialized
INFO - 2023-06-11 00:16:54 --> Language Class Initialized
INFO - 2023-06-11 00:16:54 --> Loader Class Initialized
INFO - 2023-06-11 00:16:54 --> Helper loaded: url_helper
INFO - 2023-06-11 00:16:54 --> Helper loaded: security_helper
INFO - 2023-06-11 00:16:54 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:16:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:16:54 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:16:54 --> Helper loaded: form_helper
INFO - 2023-06-11 00:16:54 --> Form Validation Class Initialized
INFO - 2023-06-11 00:16:54 --> Database Driver Class Initialized
INFO - 2023-06-11 00:16:54 --> Model "Master_model" initialized
INFO - 2023-06-11 00:16:54 --> Model "Alert" initialized
INFO - 2023-06-11 00:16:54 --> Controller Class Initialized
INFO - 2023-06-11 00:16:54 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:16:54 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:16:54 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:16:54 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:16:54 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:16:54 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:16:54 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:16:54 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:16:54 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:16:54 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:16:54 --> Final output sent to browser
DEBUG - 2023-06-11 00:16:54 --> Total execution time: 0.2122
INFO - 2023-06-11 00:16:55 --> Config Class Initialized
INFO - 2023-06-11 00:16:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:16:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:16:55 --> Utf8 Class Initialized
INFO - 2023-06-11 00:16:55 --> URI Class Initialized
INFO - 2023-06-11 00:16:55 --> Router Class Initialized
INFO - 2023-06-11 00:16:55 --> Output Class Initialized
INFO - 2023-06-11 00:16:55 --> Security Class Initialized
DEBUG - 2023-06-11 00:16:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:16:55 --> Input Class Initialized
INFO - 2023-06-11 00:16:55 --> Language Class Initialized
ERROR - 2023-06-11 00:16:55 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:16:55 --> Config Class Initialized
INFO - 2023-06-11 00:16:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:16:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:16:55 --> Utf8 Class Initialized
INFO - 2023-06-11 00:16:55 --> URI Class Initialized
INFO - 2023-06-11 00:16:55 --> Router Class Initialized
INFO - 2023-06-11 00:16:55 --> Output Class Initialized
INFO - 2023-06-11 00:16:55 --> Security Class Initialized
DEBUG - 2023-06-11 00:16:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:16:55 --> Input Class Initialized
INFO - 2023-06-11 00:16:55 --> Language Class Initialized
ERROR - 2023-06-11 00:16:55 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:16:55 --> Config Class Initialized
INFO - 2023-06-11 00:16:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:16:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:16:55 --> Utf8 Class Initialized
INFO - 2023-06-11 00:16:55 --> URI Class Initialized
INFO - 2023-06-11 00:16:55 --> Router Class Initialized
INFO - 2023-06-11 00:16:55 --> Output Class Initialized
INFO - 2023-06-11 00:16:55 --> Security Class Initialized
DEBUG - 2023-06-11 00:16:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:16:55 --> Input Class Initialized
INFO - 2023-06-11 00:16:55 --> Language Class Initialized
INFO - 2023-06-11 00:16:55 --> Loader Class Initialized
INFO - 2023-06-11 00:16:55 --> Helper loaded: url_helper
INFO - 2023-06-11 00:16:55 --> Helper loaded: security_helper
INFO - 2023-06-11 00:16:55 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:16:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:16:55 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:16:55 --> Helper loaded: form_helper
INFO - 2023-06-11 00:16:55 --> Form Validation Class Initialized
INFO - 2023-06-11 00:16:55 --> Database Driver Class Initialized
INFO - 2023-06-11 00:16:55 --> Model "Master_model" initialized
INFO - 2023-06-11 00:16:55 --> Model "Alert" initialized
INFO - 2023-06-11 00:16:55 --> Controller Class Initialized
INFO - 2023-06-11 00:16:55 --> Model "Baak_model" initialized
ERROR - 2023-06-11 00:16:55 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF), expecting ')' E:\laragon\www\main_rosma\siakad\application\models\datatable\Baak_dt.php 334
INFO - 2023-06-11 00:17:00 --> Config Class Initialized
INFO - 2023-06-11 00:17:00 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:17:00 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:17:00 --> Utf8 Class Initialized
INFO - 2023-06-11 00:17:00 --> URI Class Initialized
INFO - 2023-06-11 00:17:00 --> Router Class Initialized
INFO - 2023-06-11 00:17:00 --> Output Class Initialized
INFO - 2023-06-11 00:17:00 --> Security Class Initialized
DEBUG - 2023-06-11 00:17:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:17:00 --> Input Class Initialized
INFO - 2023-06-11 00:17:00 --> Language Class Initialized
INFO - 2023-06-11 00:17:00 --> Loader Class Initialized
INFO - 2023-06-11 00:17:00 --> Helper loaded: url_helper
INFO - 2023-06-11 00:17:00 --> Helper loaded: security_helper
INFO - 2023-06-11 00:17:00 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:17:01 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:17:01 --> Helper loaded: form_helper
INFO - 2023-06-11 00:17:01 --> Form Validation Class Initialized
INFO - 2023-06-11 00:17:01 --> Database Driver Class Initialized
INFO - 2023-06-11 00:17:01 --> Model "Master_model" initialized
INFO - 2023-06-11 00:17:01 --> Model "Alert" initialized
INFO - 2023-06-11 00:17:01 --> Controller Class Initialized
INFO - 2023-06-11 00:17:01 --> Model "Baak_model" initialized
ERROR - 2023-06-11 00:17:01 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF), expecting ')' E:\laragon\www\main_rosma\siakad\application\models\datatable\Baak_dt.php 334
INFO - 2023-06-11 00:17:22 --> Config Class Initialized
INFO - 2023-06-11 00:17:22 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:17:22 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:17:22 --> Utf8 Class Initialized
INFO - 2023-06-11 00:17:22 --> URI Class Initialized
INFO - 2023-06-11 00:17:22 --> Router Class Initialized
INFO - 2023-06-11 00:17:22 --> Output Class Initialized
INFO - 2023-06-11 00:17:22 --> Security Class Initialized
DEBUG - 2023-06-11 00:17:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:17:22 --> Input Class Initialized
INFO - 2023-06-11 00:17:22 --> Language Class Initialized
INFO - 2023-06-11 00:17:22 --> Loader Class Initialized
INFO - 2023-06-11 00:17:22 --> Helper loaded: url_helper
INFO - 2023-06-11 00:17:22 --> Helper loaded: security_helper
INFO - 2023-06-11 00:17:22 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:17:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:17:22 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:17:22 --> Helper loaded: form_helper
INFO - 2023-06-11 00:17:22 --> Form Validation Class Initialized
INFO - 2023-06-11 00:17:22 --> Database Driver Class Initialized
INFO - 2023-06-11 00:17:22 --> Model "Master_model" initialized
INFO - 2023-06-11 00:17:22 --> Model "Alert" initialized
INFO - 2023-06-11 00:17:22 --> Controller Class Initialized
INFO - 2023-06-11 00:17:22 --> Model "Baak_model" initialized
ERROR - 2023-06-11 00:17:22 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF), expecting ')' E:\laragon\www\main_rosma\siakad\application\models\datatable\Baak_dt.php 334
INFO - 2023-06-11 00:18:49 --> Config Class Initialized
INFO - 2023-06-11 00:18:49 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:18:49 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:18:49 --> Utf8 Class Initialized
INFO - 2023-06-11 00:18:49 --> URI Class Initialized
INFO - 2023-06-11 00:18:49 --> Router Class Initialized
INFO - 2023-06-11 00:18:49 --> Output Class Initialized
INFO - 2023-06-11 00:18:49 --> Security Class Initialized
DEBUG - 2023-06-11 00:18:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:18:49 --> Input Class Initialized
INFO - 2023-06-11 00:18:49 --> Language Class Initialized
INFO - 2023-06-11 00:18:49 --> Loader Class Initialized
INFO - 2023-06-11 00:18:49 --> Helper loaded: url_helper
INFO - 2023-06-11 00:18:49 --> Helper loaded: security_helper
INFO - 2023-06-11 00:18:49 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:18:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:18:49 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:18:49 --> Helper loaded: form_helper
INFO - 2023-06-11 00:18:49 --> Form Validation Class Initialized
INFO - 2023-06-11 00:18:49 --> Database Driver Class Initialized
INFO - 2023-06-11 00:18:49 --> Model "Master_model" initialized
INFO - 2023-06-11 00:18:49 --> Model "Alert" initialized
INFO - 2023-06-11 00:18:49 --> Controller Class Initialized
INFO - 2023-06-11 00:18:49 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:18:49 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:18:49 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:18:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:18:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:18:49 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:18:49 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:18:49 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:18:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:18:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:18:49 --> Final output sent to browser
DEBUG - 2023-06-11 00:18:49 --> Total execution time: 0.2100
INFO - 2023-06-11 00:18:50 --> Config Class Initialized
INFO - 2023-06-11 00:18:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:18:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:18:50 --> Utf8 Class Initialized
INFO - 2023-06-11 00:18:50 --> URI Class Initialized
INFO - 2023-06-11 00:18:50 --> Router Class Initialized
INFO - 2023-06-11 00:18:50 --> Output Class Initialized
INFO - 2023-06-11 00:18:50 --> Security Class Initialized
DEBUG - 2023-06-11 00:18:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:18:50 --> Input Class Initialized
INFO - 2023-06-11 00:18:50 --> Language Class Initialized
ERROR - 2023-06-11 00:18:50 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:18:50 --> Config Class Initialized
INFO - 2023-06-11 00:18:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:18:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:18:50 --> Utf8 Class Initialized
INFO - 2023-06-11 00:18:50 --> URI Class Initialized
INFO - 2023-06-11 00:18:50 --> Router Class Initialized
INFO - 2023-06-11 00:18:50 --> Output Class Initialized
INFO - 2023-06-11 00:18:50 --> Security Class Initialized
DEBUG - 2023-06-11 00:18:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:18:50 --> Input Class Initialized
INFO - 2023-06-11 00:18:50 --> Language Class Initialized
ERROR - 2023-06-11 00:18:50 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:18:50 --> Config Class Initialized
INFO - 2023-06-11 00:18:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:18:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:18:50 --> Utf8 Class Initialized
INFO - 2023-06-11 00:18:50 --> URI Class Initialized
INFO - 2023-06-11 00:18:50 --> Router Class Initialized
INFO - 2023-06-11 00:18:50 --> Output Class Initialized
INFO - 2023-06-11 00:18:50 --> Security Class Initialized
DEBUG - 2023-06-11 00:18:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:18:50 --> Input Class Initialized
INFO - 2023-06-11 00:18:50 --> Language Class Initialized
INFO - 2023-06-11 00:18:50 --> Loader Class Initialized
INFO - 2023-06-11 00:18:50 --> Helper loaded: url_helper
INFO - 2023-06-11 00:18:50 --> Helper loaded: security_helper
INFO - 2023-06-11 00:18:50 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:18:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:18:50 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:18:50 --> Helper loaded: form_helper
INFO - 2023-06-11 00:18:50 --> Form Validation Class Initialized
INFO - 2023-06-11 00:18:50 --> Database Driver Class Initialized
INFO - 2023-06-11 00:18:51 --> Model "Master_model" initialized
INFO - 2023-06-11 00:18:51 --> Model "Alert" initialized
INFO - 2023-06-11 00:18:51 --> Controller Class Initialized
INFO - 2023-06-11 00:18:51 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:18:51 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:18:51 --> Final output sent to browser
DEBUG - 2023-06-11 00:18:51 --> Total execution time: 1.1381
INFO - 2023-06-11 00:20:10 --> Config Class Initialized
INFO - 2023-06-11 00:20:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:20:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:20:10 --> Utf8 Class Initialized
INFO - 2023-06-11 00:20:10 --> URI Class Initialized
INFO - 2023-06-11 00:20:10 --> Router Class Initialized
INFO - 2023-06-11 00:20:10 --> Output Class Initialized
INFO - 2023-06-11 00:20:10 --> Security Class Initialized
DEBUG - 2023-06-11 00:20:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:20:10 --> Input Class Initialized
INFO - 2023-06-11 00:20:10 --> Language Class Initialized
INFO - 2023-06-11 00:20:10 --> Loader Class Initialized
INFO - 2023-06-11 00:20:10 --> Helper loaded: url_helper
INFO - 2023-06-11 00:20:10 --> Helper loaded: security_helper
INFO - 2023-06-11 00:20:10 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:20:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:20:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:20:10 --> Helper loaded: form_helper
INFO - 2023-06-11 00:20:10 --> Form Validation Class Initialized
INFO - 2023-06-11 00:20:10 --> Database Driver Class Initialized
INFO - 2023-06-11 00:20:10 --> Model "Master_model" initialized
INFO - 2023-06-11 00:20:10 --> Model "Alert" initialized
INFO - 2023-06-11 00:20:10 --> Controller Class Initialized
INFO - 2023-06-11 00:20:10 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:20:10 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:20:10 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:20:10 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:20:10 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:20:10 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:20:10 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:20:10 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:20:10 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:20:10 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:20:10 --> Final output sent to browser
DEBUG - 2023-06-11 00:20:10 --> Total execution time: 0.3071
INFO - 2023-06-11 00:20:11 --> Config Class Initialized
INFO - 2023-06-11 00:20:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:20:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:20:11 --> Utf8 Class Initialized
INFO - 2023-06-11 00:20:11 --> URI Class Initialized
INFO - 2023-06-11 00:20:11 --> Router Class Initialized
INFO - 2023-06-11 00:20:11 --> Output Class Initialized
INFO - 2023-06-11 00:20:11 --> Security Class Initialized
DEBUG - 2023-06-11 00:20:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:20:11 --> Input Class Initialized
INFO - 2023-06-11 00:20:11 --> Language Class Initialized
ERROR - 2023-06-11 00:20:11 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:20:11 --> Config Class Initialized
INFO - 2023-06-11 00:20:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:20:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:20:11 --> Utf8 Class Initialized
INFO - 2023-06-11 00:20:11 --> URI Class Initialized
INFO - 2023-06-11 00:20:11 --> Router Class Initialized
INFO - 2023-06-11 00:20:11 --> Output Class Initialized
INFO - 2023-06-11 00:20:11 --> Security Class Initialized
DEBUG - 2023-06-11 00:20:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:20:11 --> Input Class Initialized
INFO - 2023-06-11 00:20:11 --> Language Class Initialized
ERROR - 2023-06-11 00:20:11 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:20:11 --> Config Class Initialized
INFO - 2023-06-11 00:20:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:20:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:20:11 --> Utf8 Class Initialized
INFO - 2023-06-11 00:20:11 --> URI Class Initialized
INFO - 2023-06-11 00:20:11 --> Router Class Initialized
INFO - 2023-06-11 00:20:11 --> Output Class Initialized
INFO - 2023-06-11 00:20:11 --> Security Class Initialized
DEBUG - 2023-06-11 00:20:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:20:11 --> Input Class Initialized
INFO - 2023-06-11 00:20:11 --> Language Class Initialized
INFO - 2023-06-11 00:20:11 --> Loader Class Initialized
INFO - 2023-06-11 00:20:11 --> Helper loaded: url_helper
INFO - 2023-06-11 00:20:11 --> Helper loaded: security_helper
INFO - 2023-06-11 00:20:11 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:20:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:20:11 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:20:11 --> Helper loaded: form_helper
INFO - 2023-06-11 00:20:11 --> Form Validation Class Initialized
INFO - 2023-06-11 00:20:11 --> Database Driver Class Initialized
INFO - 2023-06-11 00:20:11 --> Model "Master_model" initialized
INFO - 2023-06-11 00:20:11 --> Model "Alert" initialized
INFO - 2023-06-11 00:20:11 --> Controller Class Initialized
INFO - 2023-06-11 00:20:11 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:20:11 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:20:12 --> Final output sent to browser
DEBUG - 2023-06-11 00:20:12 --> Total execution time: 0.5059
INFO - 2023-06-11 00:20:49 --> Config Class Initialized
INFO - 2023-06-11 00:20:49 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:20:49 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:20:49 --> Utf8 Class Initialized
INFO - 2023-06-11 00:20:49 --> URI Class Initialized
INFO - 2023-06-11 00:20:49 --> Router Class Initialized
INFO - 2023-06-11 00:20:49 --> Output Class Initialized
INFO - 2023-06-11 00:20:49 --> Security Class Initialized
DEBUG - 2023-06-11 00:20:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:20:49 --> Input Class Initialized
INFO - 2023-06-11 00:20:49 --> Language Class Initialized
INFO - 2023-06-11 00:20:49 --> Loader Class Initialized
INFO - 2023-06-11 00:20:49 --> Helper loaded: url_helper
INFO - 2023-06-11 00:20:49 --> Helper loaded: security_helper
INFO - 2023-06-11 00:20:49 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:20:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:20:50 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:20:50 --> Helper loaded: form_helper
INFO - 2023-06-11 00:20:50 --> Form Validation Class Initialized
INFO - 2023-06-11 00:20:50 --> Database Driver Class Initialized
INFO - 2023-06-11 00:20:50 --> Model "Master_model" initialized
INFO - 2023-06-11 00:20:50 --> Model "Alert" initialized
INFO - 2023-06-11 00:20:50 --> Controller Class Initialized
INFO - 2023-06-11 00:20:50 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:20:50 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:20:50 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:20:50 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:20:50 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:20:50 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:20:50 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:20:50 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:20:50 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:20:50 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:20:50 --> Final output sent to browser
DEBUG - 2023-06-11 00:20:50 --> Total execution time: 0.4650
INFO - 2023-06-11 00:20:50 --> Config Class Initialized
INFO - 2023-06-11 00:20:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:20:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:20:50 --> Utf8 Class Initialized
INFO - 2023-06-11 00:20:50 --> URI Class Initialized
INFO - 2023-06-11 00:20:50 --> Router Class Initialized
INFO - 2023-06-11 00:20:50 --> Output Class Initialized
INFO - 2023-06-11 00:20:50 --> Security Class Initialized
DEBUG - 2023-06-11 00:20:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:20:50 --> Input Class Initialized
INFO - 2023-06-11 00:20:50 --> Language Class Initialized
ERROR - 2023-06-11 00:20:50 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:20:50 --> Config Class Initialized
INFO - 2023-06-11 00:20:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:20:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:20:50 --> Utf8 Class Initialized
INFO - 2023-06-11 00:20:50 --> URI Class Initialized
INFO - 2023-06-11 00:20:50 --> Router Class Initialized
INFO - 2023-06-11 00:20:50 --> Output Class Initialized
INFO - 2023-06-11 00:20:50 --> Security Class Initialized
DEBUG - 2023-06-11 00:20:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:20:50 --> Input Class Initialized
INFO - 2023-06-11 00:20:50 --> Language Class Initialized
ERROR - 2023-06-11 00:20:50 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:20:51 --> Config Class Initialized
INFO - 2023-06-11 00:20:51 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:20:51 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:20:51 --> Utf8 Class Initialized
INFO - 2023-06-11 00:20:51 --> URI Class Initialized
INFO - 2023-06-11 00:20:51 --> Router Class Initialized
INFO - 2023-06-11 00:20:51 --> Output Class Initialized
INFO - 2023-06-11 00:20:51 --> Security Class Initialized
DEBUG - 2023-06-11 00:20:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:20:51 --> Input Class Initialized
INFO - 2023-06-11 00:20:51 --> Language Class Initialized
INFO - 2023-06-11 00:20:51 --> Loader Class Initialized
INFO - 2023-06-11 00:20:51 --> Helper loaded: url_helper
INFO - 2023-06-11 00:20:51 --> Helper loaded: security_helper
INFO - 2023-06-11 00:20:51 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:20:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:20:51 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:20:51 --> Helper loaded: form_helper
INFO - 2023-06-11 00:20:51 --> Form Validation Class Initialized
INFO - 2023-06-11 00:20:51 --> Database Driver Class Initialized
INFO - 2023-06-11 00:20:51 --> Model "Master_model" initialized
INFO - 2023-06-11 00:20:51 --> Model "Alert" initialized
INFO - 2023-06-11 00:20:51 --> Controller Class Initialized
INFO - 2023-06-11 00:20:51 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:20:51 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:20:51 --> Final output sent to browser
DEBUG - 2023-06-11 00:20:51 --> Total execution time: 0.7505
INFO - 2023-06-11 00:22:15 --> Config Class Initialized
INFO - 2023-06-11 00:22:15 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:15 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:15 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:15 --> URI Class Initialized
INFO - 2023-06-11 00:22:15 --> Router Class Initialized
INFO - 2023-06-11 00:22:15 --> Output Class Initialized
INFO - 2023-06-11 00:22:15 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:15 --> Input Class Initialized
INFO - 2023-06-11 00:22:15 --> Language Class Initialized
INFO - 2023-06-11 00:22:15 --> Loader Class Initialized
INFO - 2023-06-11 00:22:15 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:15 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:15 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:15 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:15 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:15 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:15 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:15 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:15 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:15 --> Controller Class Initialized
INFO - 2023-06-11 00:22:15 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:22:15 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:22:15 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:22:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:22:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:22:15 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:22:15 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:22:15 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:22:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:22:15 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:22:15 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:15 --> Total execution time: 0.2513
INFO - 2023-06-11 00:22:16 --> Config Class Initialized
INFO - 2023-06-11 00:22:16 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:16 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:16 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:16 --> URI Class Initialized
INFO - 2023-06-11 00:22:16 --> Router Class Initialized
INFO - 2023-06-11 00:22:16 --> Output Class Initialized
INFO - 2023-06-11 00:22:16 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:16 --> Input Class Initialized
INFO - 2023-06-11 00:22:16 --> Language Class Initialized
ERROR - 2023-06-11 00:22:16 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:22:16 --> Config Class Initialized
INFO - 2023-06-11 00:22:16 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:16 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:16 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:16 --> URI Class Initialized
INFO - 2023-06-11 00:22:16 --> Router Class Initialized
INFO - 2023-06-11 00:22:16 --> Output Class Initialized
INFO - 2023-06-11 00:22:16 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:16 --> Input Class Initialized
INFO - 2023-06-11 00:22:16 --> Language Class Initialized
ERROR - 2023-06-11 00:22:16 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:22:16 --> Config Class Initialized
INFO - 2023-06-11 00:22:16 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:16 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:16 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:16 --> URI Class Initialized
INFO - 2023-06-11 00:22:16 --> Router Class Initialized
INFO - 2023-06-11 00:22:16 --> Output Class Initialized
INFO - 2023-06-11 00:22:16 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:16 --> Input Class Initialized
INFO - 2023-06-11 00:22:16 --> Language Class Initialized
INFO - 2023-06-11 00:22:16 --> Loader Class Initialized
INFO - 2023-06-11 00:22:16 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:16 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:16 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:16 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:16 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:16 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:16 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:16 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:16 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:16 --> Controller Class Initialized
INFO - 2023-06-11 00:22:16 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:22:16 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:22:16 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:16 --> Total execution time: 0.5599
INFO - 2023-06-11 00:22:31 --> Config Class Initialized
INFO - 2023-06-11 00:22:31 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:31 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:31 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:31 --> URI Class Initialized
DEBUG - 2023-06-11 00:22:31 --> No URI present. Default controller set.
INFO - 2023-06-11 00:22:31 --> Router Class Initialized
INFO - 2023-06-11 00:22:31 --> Output Class Initialized
INFO - 2023-06-11 00:22:31 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:31 --> Input Class Initialized
INFO - 2023-06-11 00:22:31 --> Language Class Initialized
INFO - 2023-06-11 00:22:31 --> Loader Class Initialized
INFO - 2023-06-11 00:22:31 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:31 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:31 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:31 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:31 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:31 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:32 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:32 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:32 --> Controller Class Initialized
INFO - 2023-06-11 00:22:32 --> Config Class Initialized
INFO - 2023-06-11 00:22:32 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:32 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:32 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:32 --> URI Class Initialized
INFO - 2023-06-11 00:22:32 --> Router Class Initialized
INFO - 2023-06-11 00:22:32 --> Output Class Initialized
INFO - 2023-06-11 00:22:32 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:32 --> Input Class Initialized
INFO - 2023-06-11 00:22:32 --> Language Class Initialized
INFO - 2023-06-11 00:22:32 --> Loader Class Initialized
INFO - 2023-06-11 00:22:32 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:32 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:32 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:32 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:32 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:32 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:32 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:32 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:32 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:32 --> Controller Class Initialized
INFO - 2023-06-11 00:22:32 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 00:22:32 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:22:32 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:32 --> Total execution time: 0.1631
INFO - 2023-06-11 00:22:32 --> Config Class Initialized
INFO - 2023-06-11 00:22:32 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:32 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:32 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:32 --> URI Class Initialized
INFO - 2023-06-11 00:22:32 --> Router Class Initialized
INFO - 2023-06-11 00:22:32 --> Output Class Initialized
INFO - 2023-06-11 00:22:32 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:32 --> Input Class Initialized
INFO - 2023-06-11 00:22:32 --> Language Class Initialized
ERROR - 2023-06-11 00:22:32 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:22:35 --> Config Class Initialized
INFO - 2023-06-11 00:22:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:35 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:35 --> URI Class Initialized
INFO - 2023-06-11 00:22:35 --> Router Class Initialized
INFO - 2023-06-11 00:22:35 --> Output Class Initialized
INFO - 2023-06-11 00:22:35 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:35 --> Input Class Initialized
INFO - 2023-06-11 00:22:35 --> Language Class Initialized
INFO - 2023-06-11 00:22:35 --> Loader Class Initialized
INFO - 2023-06-11 00:22:35 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:35 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:35 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:35 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:35 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:35 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:35 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:35 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:35 --> Controller Class Initialized
INFO - 2023-06-11 00:22:35 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 00:22:35 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:35 --> Model "M_login" initialized
INFO - 2023-06-11 00:22:35 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:35 --> Total execution time: 0.2499
INFO - 2023-06-11 00:22:35 --> Config Class Initialized
INFO - 2023-06-11 00:22:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:35 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:35 --> URI Class Initialized
INFO - 2023-06-11 00:22:35 --> Router Class Initialized
INFO - 2023-06-11 00:22:35 --> Output Class Initialized
INFO - 2023-06-11 00:22:35 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:35 --> Input Class Initialized
INFO - 2023-06-11 00:22:35 --> Language Class Initialized
INFO - 2023-06-11 00:22:35 --> Loader Class Initialized
INFO - 2023-06-11 00:22:35 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:35 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:35 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:35 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:35 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:35 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:36 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:36 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:36 --> Controller Class Initialized
INFO - 2023-06-11 00:22:36 --> Config Class Initialized
INFO - 2023-06-11 00:22:36 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:36 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:36 --> URI Class Initialized
INFO - 2023-06-11 00:22:36 --> Router Class Initialized
INFO - 2023-06-11 00:22:36 --> Output Class Initialized
INFO - 2023-06-11 00:22:36 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:36 --> Input Class Initialized
INFO - 2023-06-11 00:22:36 --> Language Class Initialized
INFO - 2023-06-11 00:22:36 --> Loader Class Initialized
INFO - 2023-06-11 00:22:36 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:36 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:36 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:36 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:36 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:36 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:36 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:36 --> Controller Class Initialized
INFO - 2023-06-11 00:22:36 --> Config Class Initialized
INFO - 2023-06-11 00:22:36 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:36 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:36 --> URI Class Initialized
INFO - 2023-06-11 00:22:36 --> Router Class Initialized
INFO - 2023-06-11 00:22:36 --> Output Class Initialized
INFO - 2023-06-11 00:22:36 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:36 --> Input Class Initialized
INFO - 2023-06-11 00:22:36 --> Language Class Initialized
INFO - 2023-06-11 00:22:36 --> Loader Class Initialized
INFO - 2023-06-11 00:22:36 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:36 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:36 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:36 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:36 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:36 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:36 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:36 --> Controller Class Initialized
INFO - 2023-06-11 00:22:36 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 00:22:36 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:22:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:22:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/mahasiswa.php
INFO - 2023-06-11 00:22:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:22:36 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:36 --> Total execution time: 0.1849
INFO - 2023-06-11 00:22:36 --> Config Class Initialized
INFO - 2023-06-11 00:22:36 --> Hooks Class Initialized
INFO - 2023-06-11 00:22:36 --> Config Class Initialized
DEBUG - 2023-06-11 00:22:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:36 --> Hooks Class Initialized
INFO - 2023-06-11 00:22:36 --> Utf8 Class Initialized
DEBUG - 2023-06-11 00:22:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:36 --> URI Class Initialized
INFO - 2023-06-11 00:22:36 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:36 --> URI Class Initialized
INFO - 2023-06-11 00:22:36 --> Router Class Initialized
INFO - 2023-06-11 00:22:36 --> Output Class Initialized
INFO - 2023-06-11 00:22:36 --> Router Class Initialized
INFO - 2023-06-11 00:22:36 --> Security Class Initialized
INFO - 2023-06-11 00:22:36 --> Output Class Initialized
DEBUG - 2023-06-11 00:22:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:36 --> Security Class Initialized
INFO - 2023-06-11 00:22:36 --> Input Class Initialized
DEBUG - 2023-06-11 00:22:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:36 --> Language Class Initialized
INFO - 2023-06-11 00:22:36 --> Input Class Initialized
INFO - 2023-06-11 00:22:36 --> Loader Class Initialized
INFO - 2023-06-11 00:22:36 --> Language Class Initialized
INFO - 2023-06-11 00:22:36 --> Loader Class Initialized
INFO - 2023-06-11 00:22:36 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:36 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:36 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:36 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:36 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:36 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:36 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:37 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:37 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:37 --> Controller Class Initialized
INFO - 2023-06-11 00:22:37 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 00:22:37 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:37 --> Total execution time: 0.4406
INFO - 2023-06-11 00:22:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:37 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:37 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:37 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:37 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:37 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:37 --> Controller Class Initialized
INFO - 2023-06-11 00:22:37 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 00:22:37 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:22:39 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:39 --> Total execution time: 2.3137
INFO - 2023-06-11 00:22:39 --> Config Class Initialized
INFO - 2023-06-11 00:22:39 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:39 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:39 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:39 --> URI Class Initialized
INFO - 2023-06-11 00:22:39 --> Router Class Initialized
INFO - 2023-06-11 00:22:39 --> Output Class Initialized
INFO - 2023-06-11 00:22:39 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:39 --> Input Class Initialized
INFO - 2023-06-11 00:22:39 --> Language Class Initialized
INFO - 2023-06-11 00:22:39 --> Loader Class Initialized
INFO - 2023-06-11 00:22:39 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:39 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:39 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:39 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:39 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:39 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:39 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:39 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:39 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:39 --> Controller Class Initialized
INFO - 2023-06-11 00:22:39 --> Config Class Initialized
INFO - 2023-06-11 00:22:39 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:39 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:39 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:39 --> URI Class Initialized
DEBUG - 2023-06-11 00:22:39 --> No URI present. Default controller set.
INFO - 2023-06-11 00:22:39 --> Router Class Initialized
INFO - 2023-06-11 00:22:39 --> Output Class Initialized
INFO - 2023-06-11 00:22:39 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:39 --> Input Class Initialized
INFO - 2023-06-11 00:22:39 --> Language Class Initialized
INFO - 2023-06-11 00:22:39 --> Loader Class Initialized
INFO - 2023-06-11 00:22:39 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:39 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:39 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:39 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:39 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:39 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:39 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:39 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:39 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:39 --> Controller Class Initialized
INFO - 2023-06-11 00:22:39 --> Config Class Initialized
INFO - 2023-06-11 00:22:39 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:39 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:39 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:39 --> URI Class Initialized
INFO - 2023-06-11 00:22:39 --> Router Class Initialized
INFO - 2023-06-11 00:22:39 --> Output Class Initialized
INFO - 2023-06-11 00:22:39 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:39 --> Input Class Initialized
INFO - 2023-06-11 00:22:39 --> Language Class Initialized
INFO - 2023-06-11 00:22:39 --> Loader Class Initialized
INFO - 2023-06-11 00:22:39 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:39 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:39 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:39 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:39 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:39 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:39 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:39 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:39 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:39 --> Controller Class Initialized
INFO - 2023-06-11 00:22:39 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 00:22:39 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:22:39 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:39 --> Total execution time: 0.1366
INFO - 2023-06-11 00:22:40 --> Config Class Initialized
INFO - 2023-06-11 00:22:40 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:40 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:40 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:40 --> URI Class Initialized
INFO - 2023-06-11 00:22:40 --> Router Class Initialized
INFO - 2023-06-11 00:22:40 --> Output Class Initialized
INFO - 2023-06-11 00:22:40 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:40 --> Input Class Initialized
INFO - 2023-06-11 00:22:40 --> Language Class Initialized
ERROR - 2023-06-11 00:22:40 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:22:44 --> Config Class Initialized
INFO - 2023-06-11 00:22:44 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:44 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:44 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:44 --> URI Class Initialized
INFO - 2023-06-11 00:22:44 --> Router Class Initialized
INFO - 2023-06-11 00:22:44 --> Output Class Initialized
INFO - 2023-06-11 00:22:44 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:44 --> Input Class Initialized
INFO - 2023-06-11 00:22:44 --> Language Class Initialized
INFO - 2023-06-11 00:22:44 --> Loader Class Initialized
INFO - 2023-06-11 00:22:44 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:44 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:44 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:44 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:44 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:44 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:44 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:45 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:45 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:45 --> Controller Class Initialized
INFO - 2023-06-11 00:22:45 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 00:22:45 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:45 --> Model "M_login" initialized
INFO - 2023-06-11 00:22:45 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:45 --> Total execution time: 0.3967
INFO - 2023-06-11 00:22:45 --> Config Class Initialized
INFO - 2023-06-11 00:22:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:45 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:45 --> URI Class Initialized
INFO - 2023-06-11 00:22:45 --> Router Class Initialized
INFO - 2023-06-11 00:22:45 --> Output Class Initialized
INFO - 2023-06-11 00:22:45 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:45 --> Input Class Initialized
INFO - 2023-06-11 00:22:45 --> Language Class Initialized
INFO - 2023-06-11 00:22:45 --> Loader Class Initialized
INFO - 2023-06-11 00:22:45 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:45 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:45 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:45 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:45 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:45 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:45 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:45 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:45 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:45 --> Controller Class Initialized
INFO - 2023-06-11 00:22:45 --> Config Class Initialized
INFO - 2023-06-11 00:22:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:45 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:45 --> URI Class Initialized
INFO - 2023-06-11 00:22:45 --> Router Class Initialized
INFO - 2023-06-11 00:22:45 --> Output Class Initialized
INFO - 2023-06-11 00:22:45 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:45 --> Input Class Initialized
INFO - 2023-06-11 00:22:45 --> Language Class Initialized
INFO - 2023-06-11 00:22:45 --> Loader Class Initialized
INFO - 2023-06-11 00:22:45 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:45 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:45 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:45 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:45 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:45 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:45 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:46 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:46 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:46 --> Controller Class Initialized
INFO - 2023-06-11 00:22:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:22:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/baak_dashboard.php
INFO - 2023-06-11 00:22:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:22:46 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:46 --> Total execution time: 0.3946
INFO - 2023-06-11 00:22:46 --> Config Class Initialized
INFO - 2023-06-11 00:22:46 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:46 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:46 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:46 --> URI Class Initialized
INFO - 2023-06-11 00:22:46 --> Router Class Initialized
INFO - 2023-06-11 00:22:46 --> Config Class Initialized
INFO - 2023-06-11 00:22:46 --> Output Class Initialized
INFO - 2023-06-11 00:22:46 --> Hooks Class Initialized
INFO - 2023-06-11 00:22:46 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:46 --> UTF-8 Support Enabled
DEBUG - 2023-06-11 00:22:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:46 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:46 --> Input Class Initialized
INFO - 2023-06-11 00:22:46 --> URI Class Initialized
INFO - 2023-06-11 00:22:46 --> Language Class Initialized
INFO - 2023-06-11 00:22:46 --> Router Class Initialized
INFO - 2023-06-11 00:22:46 --> Output Class Initialized
INFO - 2023-06-11 00:22:46 --> Loader Class Initialized
INFO - 2023-06-11 00:22:46 --> Security Class Initialized
INFO - 2023-06-11 00:22:46 --> Helper loaded: url_helper
DEBUG - 2023-06-11 00:22:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:46 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:46 --> Input Class Initialized
INFO - 2023-06-11 00:22:46 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:46 --> Language Class Initialized
INFO - 2023-06-11 00:22:46 --> Loader Class Initialized
INFO - 2023-06-11 00:22:46 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:46 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:46 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-06-11 00:22:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:46 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:46 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:46 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:46 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:46 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:46 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:46 --> Controller Class Initialized
INFO - 2023-06-11 00:22:47 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:22:50 --> Config Class Initialized
INFO - 2023-06-11 00:22:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:22:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:22:50 --> Utf8 Class Initialized
INFO - 2023-06-11 00:22:50 --> URI Class Initialized
INFO - 2023-06-11 00:22:50 --> Router Class Initialized
INFO - 2023-06-11 00:22:50 --> Output Class Initialized
INFO - 2023-06-11 00:22:50 --> Security Class Initialized
DEBUG - 2023-06-11 00:22:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:22:50 --> Input Class Initialized
INFO - 2023-06-11 00:22:50 --> Language Class Initialized
INFO - 2023-06-11 00:22:50 --> Loader Class Initialized
INFO - 2023-06-11 00:22:50 --> Helper loaded: url_helper
INFO - 2023-06-11 00:22:50 --> Helper loaded: security_helper
INFO - 2023-06-11 00:22:50 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:22:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:22:53 --> Final output sent to browser
DEBUG - 2023-06-11 00:22:53 --> Total execution time: 7.0054
INFO - 2023-06-11 00:22:53 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:22:53 --> Helper loaded: form_helper
INFO - 2023-06-11 00:22:53 --> Form Validation Class Initialized
INFO - 2023-06-11 00:22:53 --> Database Driver Class Initialized
INFO - 2023-06-11 00:22:54 --> Model "Master_model" initialized
INFO - 2023-06-11 00:22:54 --> Model "Alert" initialized
INFO - 2023-06-11 00:22:54 --> Controller Class Initialized
INFO - 2023-06-11 00:22:54 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:23:01 --> Final output sent to browser
DEBUG - 2023-06-11 00:23:01 --> Total execution time: 15.2351
INFO - 2023-06-11 00:23:01 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:23:01 --> Helper loaded: form_helper
INFO - 2023-06-11 00:23:01 --> Form Validation Class Initialized
INFO - 2023-06-11 00:23:01 --> Database Driver Class Initialized
INFO - 2023-06-11 00:23:01 --> Model "Master_model" initialized
INFO - 2023-06-11 00:23:01 --> Model "Alert" initialized
INFO - 2023-06-11 00:23:01 --> Controller Class Initialized
INFO - 2023-06-11 00:23:01 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:23:01 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:23:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:23:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:23:01 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:23:01 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 87
ERROR - 2023-06-11 00:23:01 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 87
INFO - 2023-06-11 00:23:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:23:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:23:01 --> Final output sent to browser
DEBUG - 2023-06-11 00:23:01 --> Total execution time: 11.2411
INFO - 2023-06-11 00:23:01 --> Config Class Initialized
INFO - 2023-06-11 00:23:01 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:23:01 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:23:01 --> Utf8 Class Initialized
INFO - 2023-06-11 00:23:01 --> URI Class Initialized
INFO - 2023-06-11 00:23:01 --> Router Class Initialized
INFO - 2023-06-11 00:23:01 --> Output Class Initialized
INFO - 2023-06-11 00:23:01 --> Security Class Initialized
DEBUG - 2023-06-11 00:23:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:23:01 --> Input Class Initialized
INFO - 2023-06-11 00:23:01 --> Language Class Initialized
INFO - 2023-06-11 00:23:01 --> Loader Class Initialized
INFO - 2023-06-11 00:23:01 --> Helper loaded: url_helper
INFO - 2023-06-11 00:23:01 --> Helper loaded: security_helper
INFO - 2023-06-11 00:23:01 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:23:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:23:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:23:02 --> Helper loaded: form_helper
INFO - 2023-06-11 00:23:02 --> Form Validation Class Initialized
INFO - 2023-06-11 00:23:02 --> Database Driver Class Initialized
INFO - 2023-06-11 00:23:02 --> Model "Master_model" initialized
INFO - 2023-06-11 00:23:02 --> Model "Alert" initialized
INFO - 2023-06-11 00:23:02 --> Controller Class Initialized
INFO - 2023-06-11 00:23:02 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:23:02 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:23:03 --> Final output sent to browser
DEBUG - 2023-06-11 00:23:03 --> Total execution time: 1.7899
INFO - 2023-06-11 00:23:24 --> Config Class Initialized
INFO - 2023-06-11 00:23:24 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:23:24 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:23:24 --> Utf8 Class Initialized
INFO - 2023-06-11 00:23:24 --> URI Class Initialized
INFO - 2023-06-11 00:23:24 --> Router Class Initialized
INFO - 2023-06-11 00:23:24 --> Output Class Initialized
INFO - 2023-06-11 00:23:24 --> Security Class Initialized
DEBUG - 2023-06-11 00:23:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:23:24 --> Input Class Initialized
INFO - 2023-06-11 00:23:24 --> Language Class Initialized
INFO - 2023-06-11 00:23:24 --> Loader Class Initialized
INFO - 2023-06-11 00:23:24 --> Helper loaded: url_helper
INFO - 2023-06-11 00:23:24 --> Helper loaded: security_helper
INFO - 2023-06-11 00:23:24 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:23:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:23:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:23:24 --> Helper loaded: form_helper
INFO - 2023-06-11 00:23:24 --> Form Validation Class Initialized
INFO - 2023-06-11 00:23:24 --> Database Driver Class Initialized
INFO - 2023-06-11 00:23:24 --> Model "Master_model" initialized
INFO - 2023-06-11 00:23:24 --> Model "Alert" initialized
INFO - 2023-06-11 00:23:24 --> Controller Class Initialized
INFO - 2023-06-11 00:23:24 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:23:24 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:23:24 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:23:24 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:23:24 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:23:24 --> Final output sent to browser
DEBUG - 2023-06-11 00:23:24 --> Total execution time: 0.2260
INFO - 2023-06-11 00:23:25 --> Config Class Initialized
INFO - 2023-06-11 00:23:25 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:23:25 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:23:25 --> Utf8 Class Initialized
INFO - 2023-06-11 00:23:25 --> URI Class Initialized
INFO - 2023-06-11 00:23:25 --> Router Class Initialized
INFO - 2023-06-11 00:23:25 --> Output Class Initialized
INFO - 2023-06-11 00:23:25 --> Security Class Initialized
DEBUG - 2023-06-11 00:23:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:23:25 --> Input Class Initialized
INFO - 2023-06-11 00:23:25 --> Language Class Initialized
ERROR - 2023-06-11 00:23:25 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:23:25 --> Config Class Initialized
INFO - 2023-06-11 00:23:25 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:23:25 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:23:25 --> Utf8 Class Initialized
INFO - 2023-06-11 00:23:25 --> URI Class Initialized
INFO - 2023-06-11 00:23:25 --> Router Class Initialized
INFO - 2023-06-11 00:23:25 --> Output Class Initialized
INFO - 2023-06-11 00:23:25 --> Security Class Initialized
DEBUG - 2023-06-11 00:23:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:23:25 --> Input Class Initialized
INFO - 2023-06-11 00:23:25 --> Language Class Initialized
ERROR - 2023-06-11 00:23:25 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:23:25 --> Config Class Initialized
INFO - 2023-06-11 00:23:25 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:23:25 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:23:25 --> Utf8 Class Initialized
INFO - 2023-06-11 00:23:25 --> URI Class Initialized
INFO - 2023-06-11 00:23:25 --> Router Class Initialized
INFO - 2023-06-11 00:23:25 --> Output Class Initialized
INFO - 2023-06-11 00:23:25 --> Security Class Initialized
DEBUG - 2023-06-11 00:23:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:23:25 --> Input Class Initialized
INFO - 2023-06-11 00:23:25 --> Language Class Initialized
INFO - 2023-06-11 00:23:25 --> Loader Class Initialized
INFO - 2023-06-11 00:23:25 --> Helper loaded: url_helper
INFO - 2023-06-11 00:23:25 --> Helper loaded: security_helper
INFO - 2023-06-11 00:23:25 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:23:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:23:25 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:23:25 --> Helper loaded: form_helper
INFO - 2023-06-11 00:23:25 --> Form Validation Class Initialized
INFO - 2023-06-11 00:23:25 --> Database Driver Class Initialized
INFO - 2023-06-11 00:23:25 --> Model "Master_model" initialized
INFO - 2023-06-11 00:23:25 --> Model "Alert" initialized
INFO - 2023-06-11 00:23:25 --> Controller Class Initialized
INFO - 2023-06-11 00:23:25 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:23:25 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:23:25 --> Final output sent to browser
DEBUG - 2023-06-11 00:23:25 --> Total execution time: 0.2441
INFO - 2023-06-11 00:25:14 --> Config Class Initialized
INFO - 2023-06-11 00:25:14 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:14 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:14 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:14 --> URI Class Initialized
DEBUG - 2023-06-11 00:25:14 --> No URI present. Default controller set.
INFO - 2023-06-11 00:25:14 --> Router Class Initialized
INFO - 2023-06-11 00:25:14 --> Output Class Initialized
INFO - 2023-06-11 00:25:14 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:14 --> Input Class Initialized
INFO - 2023-06-11 00:25:14 --> Language Class Initialized
INFO - 2023-06-11 00:25:14 --> Loader Class Initialized
INFO - 2023-06-11 00:25:14 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:14 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:14 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:25:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:25:14 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:14 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:14 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:14 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:14 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:14 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:14 --> Controller Class Initialized
INFO - 2023-06-11 00:25:14 --> Config Class Initialized
INFO - 2023-06-11 00:25:14 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:14 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:14 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:14 --> URI Class Initialized
INFO - 2023-06-11 00:25:14 --> Router Class Initialized
INFO - 2023-06-11 00:25:14 --> Output Class Initialized
INFO - 2023-06-11 00:25:14 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:14 --> Input Class Initialized
INFO - 2023-06-11 00:25:14 --> Language Class Initialized
INFO - 2023-06-11 00:25:14 --> Loader Class Initialized
INFO - 2023-06-11 00:25:14 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:14 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:14 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:25:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:25:14 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:14 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:14 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:14 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:14 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:14 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:14 --> Controller Class Initialized
INFO - 2023-06-11 00:25:14 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 00:25:14 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:25:14 --> Final output sent to browser
DEBUG - 2023-06-11 00:25:14 --> Total execution time: 0.1563
INFO - 2023-06-11 00:25:14 --> Config Class Initialized
INFO - 2023-06-11 00:25:14 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:14 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:14 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:14 --> URI Class Initialized
INFO - 2023-06-11 00:25:14 --> Router Class Initialized
INFO - 2023-06-11 00:25:14 --> Output Class Initialized
INFO - 2023-06-11 00:25:14 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:14 --> Input Class Initialized
INFO - 2023-06-11 00:25:14 --> Language Class Initialized
ERROR - 2023-06-11 00:25:14 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:25:21 --> Config Class Initialized
INFO - 2023-06-11 00:25:21 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:21 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:21 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:21 --> URI Class Initialized
INFO - 2023-06-11 00:25:21 --> Router Class Initialized
INFO - 2023-06-11 00:25:21 --> Output Class Initialized
INFO - 2023-06-11 00:25:21 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:21 --> Input Class Initialized
INFO - 2023-06-11 00:25:21 --> Language Class Initialized
INFO - 2023-06-11 00:25:21 --> Loader Class Initialized
INFO - 2023-06-11 00:25:21 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:21 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:21 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:25:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:25:21 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:21 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:21 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:21 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:21 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:21 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:21 --> Controller Class Initialized
INFO - 2023-06-11 00:25:21 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 00:25:21 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:21 --> Model "M_login" initialized
INFO - 2023-06-11 00:25:21 --> Final output sent to browser
DEBUG - 2023-06-11 00:25:21 --> Total execution time: 0.2230
INFO - 2023-06-11 00:25:21 --> Config Class Initialized
INFO - 2023-06-11 00:25:21 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:21 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:21 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:21 --> URI Class Initialized
INFO - 2023-06-11 00:25:21 --> Router Class Initialized
INFO - 2023-06-11 00:25:21 --> Output Class Initialized
INFO - 2023-06-11 00:25:21 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:21 --> Input Class Initialized
INFO - 2023-06-11 00:25:21 --> Language Class Initialized
INFO - 2023-06-11 00:25:21 --> Loader Class Initialized
INFO - 2023-06-11 00:25:21 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:21 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:21 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:25:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:25:21 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:21 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:21 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:21 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:21 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:21 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:21 --> Controller Class Initialized
INFO - 2023-06-11 00:25:21 --> Config Class Initialized
INFO - 2023-06-11 00:25:21 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:21 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:21 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:21 --> URI Class Initialized
INFO - 2023-06-11 00:25:21 --> Router Class Initialized
INFO - 2023-06-11 00:25:21 --> Output Class Initialized
INFO - 2023-06-11 00:25:21 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:21 --> Input Class Initialized
INFO - 2023-06-11 00:25:21 --> Language Class Initialized
INFO - 2023-06-11 00:25:21 --> Loader Class Initialized
INFO - 2023-06-11 00:25:21 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:21 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:21 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:25:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:25:21 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:21 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:21 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:21 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:22 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:22 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:22 --> Controller Class Initialized
INFO - 2023-06-11 00:25:22 --> Config Class Initialized
INFO - 2023-06-11 00:25:22 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:22 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:22 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:22 --> URI Class Initialized
INFO - 2023-06-11 00:25:22 --> Router Class Initialized
INFO - 2023-06-11 00:25:22 --> Output Class Initialized
INFO - 2023-06-11 00:25:22 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:22 --> Input Class Initialized
INFO - 2023-06-11 00:25:22 --> Language Class Initialized
INFO - 2023-06-11 00:25:22 --> Loader Class Initialized
INFO - 2023-06-11 00:25:22 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:22 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:22 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:25:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:25:22 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:22 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:22 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:22 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:22 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:22 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:22 --> Controller Class Initialized
INFO - 2023-06-11 00:25:22 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 00:25:22 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:25:22 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:25:22 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/mahasiswa.php
INFO - 2023-06-11 00:25:22 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:25:22 --> Final output sent to browser
DEBUG - 2023-06-11 00:25:22 --> Total execution time: 0.4564
INFO - 2023-06-11 00:25:23 --> Config Class Initialized
INFO - 2023-06-11 00:25:23 --> Config Class Initialized
INFO - 2023-06-11 00:25:23 --> Hooks Class Initialized
INFO - 2023-06-11 00:25:23 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:23 --> UTF-8 Support Enabled
DEBUG - 2023-06-11 00:25:23 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:23 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:23 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:23 --> URI Class Initialized
INFO - 2023-06-11 00:25:23 --> URI Class Initialized
INFO - 2023-06-11 00:25:23 --> Router Class Initialized
INFO - 2023-06-11 00:25:23 --> Router Class Initialized
INFO - 2023-06-11 00:25:23 --> Output Class Initialized
INFO - 2023-06-11 00:25:23 --> Output Class Initialized
INFO - 2023-06-11 00:25:23 --> Security Class Initialized
INFO - 2023-06-11 00:25:23 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:23 --> Input Class Initialized
DEBUG - 2023-06-11 00:25:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:23 --> Input Class Initialized
INFO - 2023-06-11 00:25:23 --> Language Class Initialized
INFO - 2023-06-11 00:25:23 --> Language Class Initialized
INFO - 2023-06-11 00:25:23 --> Loader Class Initialized
INFO - 2023-06-11 00:25:23 --> Loader Class Initialized
INFO - 2023-06-11 00:25:23 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:23 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:23 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:23 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:23 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:23 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:25:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-06-11 00:25:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:25:23 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:23 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:23 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:23 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:23 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:23 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:23 --> Controller Class Initialized
INFO - 2023-06-11 00:25:23 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 00:25:23 --> Model "Baak_model" initialized
ERROR - 2023-06-11 00:25:24 --> Severity: Warning --> Invalid argument supplied for foreach() E:\laragon\www\main_rosma\siakad\application\controllers\mahasiswa\Profile.php 262
INFO - 2023-06-11 00:25:24 --> Final output sent to browser
DEBUG - 2023-06-11 00:25:24 --> Total execution time: 0.9176
INFO - 2023-06-11 00:25:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:24 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:24 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:24 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:24 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:24 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:24 --> Controller Class Initialized
INFO - 2023-06-11 00:25:24 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 00:25:25 --> Final output sent to browser
DEBUG - 2023-06-11 00:25:25 --> Total execution time: 1.8870
INFO - 2023-06-11 00:25:30 --> Config Class Initialized
INFO - 2023-06-11 00:25:30 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:30 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:30 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:30 --> URI Class Initialized
INFO - 2023-06-11 00:25:30 --> Router Class Initialized
INFO - 2023-06-11 00:25:30 --> Output Class Initialized
INFO - 2023-06-11 00:25:30 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:30 --> Input Class Initialized
INFO - 2023-06-11 00:25:30 --> Language Class Initialized
INFO - 2023-06-11 00:25:30 --> Loader Class Initialized
INFO - 2023-06-11 00:25:30 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:30 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:30 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:25:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:25:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:30 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:30 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:30 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:30 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:30 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:30 --> Controller Class Initialized
INFO - 2023-06-11 00:25:30 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 00:25:30 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:25:30 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:25:30 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:25:30 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:25:30 --> Final output sent to browser
DEBUG - 2023-06-11 00:25:30 --> Total execution time: 0.1750
INFO - 2023-06-11 00:25:31 --> Config Class Initialized
INFO - 2023-06-11 00:25:31 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:25:31 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:25:31 --> Utf8 Class Initialized
INFO - 2023-06-11 00:25:31 --> URI Class Initialized
INFO - 2023-06-11 00:25:31 --> Router Class Initialized
INFO - 2023-06-11 00:25:31 --> Output Class Initialized
INFO - 2023-06-11 00:25:31 --> Security Class Initialized
DEBUG - 2023-06-11 00:25:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:25:31 --> Input Class Initialized
INFO - 2023-06-11 00:25:31 --> Language Class Initialized
INFO - 2023-06-11 00:25:31 --> Loader Class Initialized
INFO - 2023-06-11 00:25:31 --> Helper loaded: url_helper
INFO - 2023-06-11 00:25:31 --> Helper loaded: security_helper
INFO - 2023-06-11 00:25:31 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:25:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:25:31 --> Helper loaded: form_helper
INFO - 2023-06-11 00:25:31 --> Form Validation Class Initialized
INFO - 2023-06-11 00:25:31 --> Database Driver Class Initialized
INFO - 2023-06-11 00:25:31 --> Model "Master_model" initialized
INFO - 2023-06-11 00:25:31 --> Model "Alert" initialized
INFO - 2023-06-11 00:25:31 --> Controller Class Initialized
INFO - 2023-06-11 00:25:31 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:25:31 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:25:31 --> Final output sent to browser
DEBUG - 2023-06-11 00:25:31 --> Total execution time: 0.1503
INFO - 2023-06-11 00:27:33 --> Config Class Initialized
INFO - 2023-06-11 00:27:33 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:27:33 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:27:33 --> Utf8 Class Initialized
INFO - 2023-06-11 00:27:33 --> URI Class Initialized
INFO - 2023-06-11 00:27:33 --> Router Class Initialized
INFO - 2023-06-11 00:27:33 --> Output Class Initialized
INFO - 2023-06-11 00:27:33 --> Security Class Initialized
DEBUG - 2023-06-11 00:27:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:27:33 --> Input Class Initialized
INFO - 2023-06-11 00:27:33 --> Language Class Initialized
ERROR - 2023-06-11 00:27:33 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:27:33 --> Config Class Initialized
INFO - 2023-06-11 00:27:33 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:27:33 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:27:33 --> Utf8 Class Initialized
INFO - 2023-06-11 00:27:33 --> URI Class Initialized
INFO - 2023-06-11 00:27:33 --> Router Class Initialized
INFO - 2023-06-11 00:27:33 --> Output Class Initialized
INFO - 2023-06-11 00:27:33 --> Security Class Initialized
DEBUG - 2023-06-11 00:27:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:27:33 --> Input Class Initialized
INFO - 2023-06-11 00:27:33 --> Language Class Initialized
ERROR - 2023-06-11 00:27:33 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:27:36 --> Config Class Initialized
INFO - 2023-06-11 00:27:36 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:27:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:27:36 --> Utf8 Class Initialized
INFO - 2023-06-11 00:27:36 --> URI Class Initialized
INFO - 2023-06-11 00:27:36 --> Router Class Initialized
INFO - 2023-06-11 00:27:36 --> Output Class Initialized
INFO - 2023-06-11 00:27:36 --> Security Class Initialized
DEBUG - 2023-06-11 00:27:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:27:36 --> Input Class Initialized
INFO - 2023-06-11 00:27:36 --> Language Class Initialized
INFO - 2023-06-11 00:27:36 --> Loader Class Initialized
INFO - 2023-06-11 00:27:36 --> Helper loaded: url_helper
INFO - 2023-06-11 00:27:36 --> Helper loaded: security_helper
INFO - 2023-06-11 00:27:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:27:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:27:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:27:36 --> Helper loaded: form_helper
INFO - 2023-06-11 00:27:36 --> Form Validation Class Initialized
INFO - 2023-06-11 00:27:36 --> Database Driver Class Initialized
INFO - 2023-06-11 00:27:36 --> Model "Master_model" initialized
INFO - 2023-06-11 00:27:36 --> Model "Alert" initialized
INFO - 2023-06-11 00:27:36 --> Controller Class Initialized
INFO - 2023-06-11 00:27:36 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:27:36 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:27:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:27:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:27:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:27:36 --> Final output sent to browser
DEBUG - 2023-06-11 00:27:36 --> Total execution time: 0.2074
INFO - 2023-06-11 00:27:37 --> Config Class Initialized
INFO - 2023-06-11 00:27:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:27:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:27:37 --> Utf8 Class Initialized
INFO - 2023-06-11 00:27:37 --> URI Class Initialized
INFO - 2023-06-11 00:27:37 --> Router Class Initialized
INFO - 2023-06-11 00:27:37 --> Output Class Initialized
INFO - 2023-06-11 00:27:37 --> Security Class Initialized
DEBUG - 2023-06-11 00:27:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:27:37 --> Input Class Initialized
INFO - 2023-06-11 00:27:37 --> Language Class Initialized
ERROR - 2023-06-11 00:27:37 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:27:37 --> Config Class Initialized
INFO - 2023-06-11 00:27:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:27:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:27:37 --> Utf8 Class Initialized
INFO - 2023-06-11 00:27:37 --> URI Class Initialized
INFO - 2023-06-11 00:27:37 --> Router Class Initialized
INFO - 2023-06-11 00:27:37 --> Output Class Initialized
INFO - 2023-06-11 00:27:37 --> Security Class Initialized
DEBUG - 2023-06-11 00:27:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:27:37 --> Input Class Initialized
INFO - 2023-06-11 00:27:37 --> Language Class Initialized
ERROR - 2023-06-11 00:27:37 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:27:37 --> Config Class Initialized
INFO - 2023-06-11 00:27:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:27:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:27:37 --> Utf8 Class Initialized
INFO - 2023-06-11 00:27:37 --> URI Class Initialized
INFO - 2023-06-11 00:27:37 --> Router Class Initialized
INFO - 2023-06-11 00:27:37 --> Output Class Initialized
INFO - 2023-06-11 00:27:37 --> Security Class Initialized
DEBUG - 2023-06-11 00:27:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:27:37 --> Input Class Initialized
INFO - 2023-06-11 00:27:37 --> Language Class Initialized
INFO - 2023-06-11 00:27:37 --> Loader Class Initialized
INFO - 2023-06-11 00:27:37 --> Helper loaded: url_helper
INFO - 2023-06-11 00:27:37 --> Helper loaded: security_helper
INFO - 2023-06-11 00:27:37 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:27:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:27:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:27:37 --> Helper loaded: form_helper
INFO - 2023-06-11 00:27:37 --> Form Validation Class Initialized
INFO - 2023-06-11 00:27:37 --> Database Driver Class Initialized
INFO - 2023-06-11 00:27:37 --> Model "Master_model" initialized
INFO - 2023-06-11 00:27:37 --> Model "Alert" initialized
INFO - 2023-06-11 00:27:37 --> Controller Class Initialized
INFO - 2023-06-11 00:27:37 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:27:37 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:27:37 --> Final output sent to browser
DEBUG - 2023-06-11 00:27:37 --> Total execution time: 0.2446
INFO - 2023-06-11 00:27:42 --> Config Class Initialized
INFO - 2023-06-11 00:27:42 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:27:42 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:27:42 --> Utf8 Class Initialized
INFO - 2023-06-11 00:27:42 --> URI Class Initialized
INFO - 2023-06-11 00:27:42 --> Router Class Initialized
INFO - 2023-06-11 00:27:42 --> Output Class Initialized
INFO - 2023-06-11 00:27:42 --> Security Class Initialized
DEBUG - 2023-06-11 00:27:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:27:42 --> Input Class Initialized
INFO - 2023-06-11 00:27:42 --> Language Class Initialized
INFO - 2023-06-11 00:27:42 --> Loader Class Initialized
INFO - 2023-06-11 00:27:42 --> Helper loaded: url_helper
INFO - 2023-06-11 00:27:42 --> Helper loaded: security_helper
INFO - 2023-06-11 00:27:42 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:27:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:27:42 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:27:42 --> Helper loaded: form_helper
INFO - 2023-06-11 00:27:42 --> Form Validation Class Initialized
INFO - 2023-06-11 00:27:42 --> Database Driver Class Initialized
INFO - 2023-06-11 00:27:42 --> Model "Master_model" initialized
INFO - 2023-06-11 00:27:42 --> Model "Alert" initialized
INFO - 2023-06-11 00:27:42 --> Controller Class Initialized
INFO - 2023-06-11 00:27:42 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:27:42 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:27:42 --> Final output sent to browser
DEBUG - 2023-06-11 00:27:42 --> Total execution time: 0.2675
INFO - 2023-06-11 00:30:55 --> Config Class Initialized
INFO - 2023-06-11 00:30:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:30:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:30:55 --> Utf8 Class Initialized
INFO - 2023-06-11 00:30:55 --> URI Class Initialized
INFO - 2023-06-11 00:30:55 --> Router Class Initialized
INFO - 2023-06-11 00:30:55 --> Output Class Initialized
INFO - 2023-06-11 00:30:55 --> Security Class Initialized
DEBUG - 2023-06-11 00:30:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:30:55 --> Input Class Initialized
INFO - 2023-06-11 00:30:55 --> Language Class Initialized
INFO - 2023-06-11 00:30:55 --> Loader Class Initialized
INFO - 2023-06-11 00:30:55 --> Helper loaded: url_helper
INFO - 2023-06-11 00:30:55 --> Helper loaded: security_helper
INFO - 2023-06-11 00:30:55 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:30:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:30:56 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:30:56 --> Helper loaded: form_helper
INFO - 2023-06-11 00:30:56 --> Form Validation Class Initialized
INFO - 2023-06-11 00:30:56 --> Database Driver Class Initialized
INFO - 2023-06-11 00:30:56 --> Model "Master_model" initialized
INFO - 2023-06-11 00:30:56 --> Model "Alert" initialized
INFO - 2023-06-11 00:30:56 --> Controller Class Initialized
INFO - 2023-06-11 00:30:56 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:30:56 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:30:56 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:30:56 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:30:56 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:30:56 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:30:56 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:30:56 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:30:56 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:30:56 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:30:56 --> Final output sent to browser
DEBUG - 2023-06-11 00:30:56 --> Total execution time: 0.4562
INFO - 2023-06-11 00:30:56 --> Config Class Initialized
INFO - 2023-06-11 00:30:56 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:30:56 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:30:56 --> Utf8 Class Initialized
INFO - 2023-06-11 00:30:56 --> URI Class Initialized
INFO - 2023-06-11 00:30:56 --> Router Class Initialized
INFO - 2023-06-11 00:30:56 --> Output Class Initialized
INFO - 2023-06-11 00:30:56 --> Security Class Initialized
DEBUG - 2023-06-11 00:30:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:30:56 --> Input Class Initialized
INFO - 2023-06-11 00:30:56 --> Language Class Initialized
ERROR - 2023-06-11 00:30:56 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:30:56 --> Config Class Initialized
INFO - 2023-06-11 00:30:56 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:30:56 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:30:56 --> Utf8 Class Initialized
INFO - 2023-06-11 00:30:56 --> URI Class Initialized
INFO - 2023-06-11 00:30:56 --> Router Class Initialized
INFO - 2023-06-11 00:30:56 --> Output Class Initialized
INFO - 2023-06-11 00:30:56 --> Security Class Initialized
DEBUG - 2023-06-11 00:30:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:30:56 --> Input Class Initialized
INFO - 2023-06-11 00:30:56 --> Language Class Initialized
INFO - 2023-06-11 00:30:56 --> Loader Class Initialized
INFO - 2023-06-11 00:30:56 --> Helper loaded: url_helper
INFO - 2023-06-11 00:30:56 --> Helper loaded: security_helper
INFO - 2023-06-11 00:30:56 --> Database Driver Class Initialized
INFO - 2023-06-11 00:30:56 --> Config Class Initialized
INFO - 2023-06-11 00:30:56 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:30:56 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:30:56 --> Utf8 Class Initialized
INFO - 2023-06-11 00:30:56 --> URI Class Initialized
INFO - 2023-06-11 00:30:56 --> Router Class Initialized
INFO - 2023-06-11 00:30:56 --> Output Class Initialized
INFO - 2023-06-11 00:30:56 --> Security Class Initialized
DEBUG - 2023-06-11 00:30:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:30:56 --> Input Class Initialized
INFO - 2023-06-11 00:30:56 --> Language Class Initialized
ERROR - 2023-06-11 00:30:56 --> 404 Page Not Found: Assets/themplate
DEBUG - 2023-06-11 00:30:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:30:56 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:30:56 --> Helper loaded: form_helper
INFO - 2023-06-11 00:30:56 --> Form Validation Class Initialized
INFO - 2023-06-11 00:30:56 --> Database Driver Class Initialized
INFO - 2023-06-11 00:30:57 --> Model "Master_model" initialized
INFO - 2023-06-11 00:30:57 --> Model "Alert" initialized
INFO - 2023-06-11 00:30:57 --> Controller Class Initialized
INFO - 2023-06-11 00:30:57 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:30:57 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:30:57 --> Final output sent to browser
DEBUG - 2023-06-11 00:30:57 --> Total execution time: 0.8169
INFO - 2023-06-11 00:31:01 --> Config Class Initialized
INFO - 2023-06-11 00:31:01 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:31:01 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:31:01 --> Utf8 Class Initialized
INFO - 2023-06-11 00:31:01 --> URI Class Initialized
INFO - 2023-06-11 00:31:01 --> Router Class Initialized
INFO - 2023-06-11 00:31:01 --> Output Class Initialized
INFO - 2023-06-11 00:31:01 --> Security Class Initialized
DEBUG - 2023-06-11 00:31:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:31:01 --> Input Class Initialized
INFO - 2023-06-11 00:31:01 --> Language Class Initialized
INFO - 2023-06-11 00:31:01 --> Loader Class Initialized
INFO - 2023-06-11 00:31:01 --> Helper loaded: url_helper
INFO - 2023-06-11 00:31:01 --> Helper loaded: security_helper
INFO - 2023-06-11 00:31:01 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:31:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:31:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:31:02 --> Helper loaded: form_helper
INFO - 2023-06-11 00:31:02 --> Form Validation Class Initialized
INFO - 2023-06-11 00:31:02 --> Database Driver Class Initialized
INFO - 2023-06-11 00:31:02 --> Model "Master_model" initialized
INFO - 2023-06-11 00:31:02 --> Model "Alert" initialized
INFO - 2023-06-11 00:31:02 --> Controller Class Initialized
INFO - 2023-06-11 00:31:02 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:31:02 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:31:02 --> Model "Dosen_t" initialized
INFO - 2023-06-11 00:31:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:31:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:31:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:31:02 --> Final output sent to browser
DEBUG - 2023-06-11 00:31:02 --> Total execution time: 0.4298
INFO - 2023-06-11 00:31:02 --> Config Class Initialized
INFO - 2023-06-11 00:31:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:31:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:31:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:31:02 --> URI Class Initialized
INFO - 2023-06-11 00:31:02 --> Router Class Initialized
INFO - 2023-06-11 00:31:02 --> Output Class Initialized
INFO - 2023-06-11 00:31:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:31:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:31:02 --> Input Class Initialized
INFO - 2023-06-11 00:31:02 --> Language Class Initialized
ERROR - 2023-06-11 00:31:02 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:31:02 --> Config Class Initialized
INFO - 2023-06-11 00:31:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:31:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:31:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:31:02 --> URI Class Initialized
INFO - 2023-06-11 00:31:02 --> Router Class Initialized
INFO - 2023-06-11 00:31:02 --> Output Class Initialized
INFO - 2023-06-11 00:31:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:31:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:31:02 --> Input Class Initialized
INFO - 2023-06-11 00:31:02 --> Language Class Initialized
ERROR - 2023-06-11 00:31:02 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:31:02 --> Config Class Initialized
INFO - 2023-06-11 00:31:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:31:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:31:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:31:02 --> URI Class Initialized
INFO - 2023-06-11 00:31:02 --> Router Class Initialized
INFO - 2023-06-11 00:31:02 --> Output Class Initialized
INFO - 2023-06-11 00:31:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:31:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:31:02 --> Input Class Initialized
INFO - 2023-06-11 00:31:02 --> Language Class Initialized
INFO - 2023-06-11 00:31:02 --> Loader Class Initialized
INFO - 2023-06-11 00:31:02 --> Helper loaded: url_helper
INFO - 2023-06-11 00:31:02 --> Helper loaded: security_helper
INFO - 2023-06-11 00:31:02 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:31:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:31:03 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:31:03 --> Helper loaded: form_helper
INFO - 2023-06-11 00:31:03 --> Form Validation Class Initialized
INFO - 2023-06-11 00:31:03 --> Database Driver Class Initialized
INFO - 2023-06-11 00:31:03 --> Model "Master_model" initialized
INFO - 2023-06-11 00:31:03 --> Model "Alert" initialized
INFO - 2023-06-11 00:31:03 --> Controller Class Initialized
INFO - 2023-06-11 00:31:03 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:31:03 --> Model "Baak_dt" initialized
DEBUG - 2023-06-11 00:31:03 --> Datatables class already loaded. Second attempt ignored.
INFO - 2023-06-11 00:31:03 --> Model "Dosen_dt" initialized
INFO - 2023-06-11 00:31:03 --> Final output sent to browser
DEBUG - 2023-06-11 00:31:03 --> Total execution time: 0.5340
INFO - 2023-06-11 00:31:09 --> Config Class Initialized
INFO - 2023-06-11 00:31:09 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:31:09 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:31:09 --> Utf8 Class Initialized
INFO - 2023-06-11 00:31:09 --> URI Class Initialized
INFO - 2023-06-11 00:31:09 --> Router Class Initialized
INFO - 2023-06-11 00:31:09 --> Output Class Initialized
INFO - 2023-06-11 00:31:09 --> Security Class Initialized
DEBUG - 2023-06-11 00:31:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:31:09 --> Input Class Initialized
INFO - 2023-06-11 00:31:09 --> Language Class Initialized
INFO - 2023-06-11 00:31:09 --> Loader Class Initialized
INFO - 2023-06-11 00:31:09 --> Helper loaded: url_helper
INFO - 2023-06-11 00:31:09 --> Helper loaded: security_helper
INFO - 2023-06-11 00:31:09 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:31:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:31:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:31:09 --> Helper loaded: form_helper
INFO - 2023-06-11 00:31:09 --> Form Validation Class Initialized
INFO - 2023-06-11 00:31:09 --> Database Driver Class Initialized
INFO - 2023-06-11 00:31:09 --> Model "Master_model" initialized
INFO - 2023-06-11 00:31:09 --> Model "Alert" initialized
INFO - 2023-06-11 00:31:09 --> Controller Class Initialized
INFO - 2023-06-11 00:31:09 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:31:09 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:31:09 --> Model "Mhs_f" initialized
INFO - 2023-06-11 00:31:10 --> Config Class Initialized
INFO - 2023-06-11 00:31:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:31:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:31:10 --> Utf8 Class Initialized
INFO - 2023-06-11 00:31:10 --> URI Class Initialized
INFO - 2023-06-11 00:31:10 --> Router Class Initialized
INFO - 2023-06-11 00:31:10 --> Output Class Initialized
INFO - 2023-06-11 00:31:10 --> Security Class Initialized
DEBUG - 2023-06-11 00:31:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:31:10 --> Input Class Initialized
INFO - 2023-06-11 00:31:10 --> Language Class Initialized
INFO - 2023-06-11 00:31:10 --> Loader Class Initialized
INFO - 2023-06-11 00:31:10 --> Helper loaded: url_helper
INFO - 2023-06-11 00:31:10 --> Helper loaded: security_helper
INFO - 2023-06-11 00:31:10 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:31:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:31:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:31:10 --> Helper loaded: form_helper
INFO - 2023-06-11 00:31:10 --> Form Validation Class Initialized
INFO - 2023-06-11 00:31:10 --> Database Driver Class Initialized
INFO - 2023-06-11 00:31:10 --> Model "Master_model" initialized
INFO - 2023-06-11 00:31:10 --> Model "Alert" initialized
INFO - 2023-06-11 00:31:10 --> Controller Class Initialized
INFO - 2023-06-11 00:31:10 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:31:10 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:31:10 --> Model "Dosen_t" initialized
INFO - 2023-06-11 00:31:10 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:31:10 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:31:10 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:31:10 --> Final output sent to browser
DEBUG - 2023-06-11 00:31:10 --> Total execution time: 0.3029
INFO - 2023-06-11 00:31:10 --> Config Class Initialized
INFO - 2023-06-11 00:31:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:31:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:31:10 --> Utf8 Class Initialized
INFO - 2023-06-11 00:31:10 --> URI Class Initialized
INFO - 2023-06-11 00:31:10 --> Router Class Initialized
INFO - 2023-06-11 00:31:10 --> Output Class Initialized
INFO - 2023-06-11 00:31:10 --> Security Class Initialized
DEBUG - 2023-06-11 00:31:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:31:10 --> Input Class Initialized
INFO - 2023-06-11 00:31:10 --> Language Class Initialized
INFO - 2023-06-11 00:31:10 --> Loader Class Initialized
INFO - 2023-06-11 00:31:10 --> Helper loaded: url_helper
INFO - 2023-06-11 00:31:10 --> Helper loaded: security_helper
INFO - 2023-06-11 00:31:10 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:31:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:31:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:31:10 --> Helper loaded: form_helper
INFO - 2023-06-11 00:31:10 --> Form Validation Class Initialized
INFO - 2023-06-11 00:31:10 --> Database Driver Class Initialized
INFO - 2023-06-11 00:31:10 --> Model "Master_model" initialized
INFO - 2023-06-11 00:31:10 --> Model "Alert" initialized
INFO - 2023-06-11 00:31:10 --> Controller Class Initialized
INFO - 2023-06-11 00:31:10 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:31:10 --> Model "Baak_dt" initialized
DEBUG - 2023-06-11 00:31:10 --> Datatables class already loaded. Second attempt ignored.
INFO - 2023-06-11 00:31:10 --> Model "Dosen_dt" initialized
INFO - 2023-06-11 00:31:11 --> Final output sent to browser
DEBUG - 2023-06-11 00:31:11 --> Total execution time: 0.8547
INFO - 2023-06-11 00:31:26 --> Config Class Initialized
INFO - 2023-06-11 00:31:26 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:31:26 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:31:26 --> Utf8 Class Initialized
INFO - 2023-06-11 00:31:26 --> URI Class Initialized
INFO - 2023-06-11 00:31:26 --> Router Class Initialized
INFO - 2023-06-11 00:31:26 --> Output Class Initialized
INFO - 2023-06-11 00:31:26 --> Security Class Initialized
DEBUG - 2023-06-11 00:31:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:31:26 --> Input Class Initialized
INFO - 2023-06-11 00:31:26 --> Language Class Initialized
INFO - 2023-06-11 00:31:26 --> Loader Class Initialized
INFO - 2023-06-11 00:31:26 --> Helper loaded: url_helper
INFO - 2023-06-11 00:31:26 --> Helper loaded: security_helper
INFO - 2023-06-11 00:31:26 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:31:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:31:26 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:31:26 --> Helper loaded: form_helper
INFO - 2023-06-11 00:31:26 --> Form Validation Class Initialized
INFO - 2023-06-11 00:31:26 --> Database Driver Class Initialized
INFO - 2023-06-11 00:31:27 --> Model "Master_model" initialized
INFO - 2023-06-11 00:31:27 --> Model "Alert" initialized
INFO - 2023-06-11 00:31:27 --> Controller Class Initialized
INFO - 2023-06-11 00:31:27 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:31:27 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:31:27 --> Model "Mhs_f" initialized
INFO - 2023-06-11 00:31:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:31:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dosen/frs_mhs.php
INFO - 2023-06-11 00:31:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:31:27 --> Final output sent to browser
DEBUG - 2023-06-11 00:31:27 --> Total execution time: 0.4010
INFO - 2023-06-11 00:31:27 --> Config Class Initialized
INFO - 2023-06-11 00:31:27 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:31:27 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:31:27 --> Utf8 Class Initialized
INFO - 2023-06-11 00:31:27 --> URI Class Initialized
INFO - 2023-06-11 00:31:27 --> Router Class Initialized
INFO - 2023-06-11 00:31:27 --> Output Class Initialized
INFO - 2023-06-11 00:31:27 --> Security Class Initialized
DEBUG - 2023-06-11 00:31:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:31:27 --> Input Class Initialized
INFO - 2023-06-11 00:31:27 --> Language Class Initialized
ERROR - 2023-06-11 00:31:27 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:33:39 --> Config Class Initialized
INFO - 2023-06-11 00:33:39 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:33:39 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:33:39 --> Utf8 Class Initialized
INFO - 2023-06-11 00:33:39 --> URI Class Initialized
INFO - 2023-06-11 00:33:39 --> Router Class Initialized
INFO - 2023-06-11 00:33:39 --> Output Class Initialized
INFO - 2023-06-11 00:33:39 --> Security Class Initialized
DEBUG - 2023-06-11 00:33:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:33:39 --> Input Class Initialized
INFO - 2023-06-11 00:33:39 --> Language Class Initialized
INFO - 2023-06-11 00:33:39 --> Loader Class Initialized
INFO - 2023-06-11 00:33:39 --> Helper loaded: url_helper
INFO - 2023-06-11 00:33:39 --> Helper loaded: security_helper
INFO - 2023-06-11 00:33:39 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:33:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:33:39 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:33:39 --> Helper loaded: form_helper
INFO - 2023-06-11 00:33:39 --> Form Validation Class Initialized
INFO - 2023-06-11 00:33:39 --> Database Driver Class Initialized
INFO - 2023-06-11 00:33:40 --> Model "Master_model" initialized
INFO - 2023-06-11 00:33:40 --> Model "Alert" initialized
INFO - 2023-06-11 00:33:40 --> Controller Class Initialized
INFO - 2023-06-11 00:33:40 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:33:40 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:33:40 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 00:33:40 --> Config Class Initialized
INFO - 2023-06-11 00:33:40 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:33:40 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:33:40 --> Utf8 Class Initialized
INFO - 2023-06-11 00:33:40 --> URI Class Initialized
INFO - 2023-06-11 00:33:40 --> Router Class Initialized
INFO - 2023-06-11 00:33:40 --> Output Class Initialized
INFO - 2023-06-11 00:33:40 --> Security Class Initialized
DEBUG - 2023-06-11 00:33:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:33:40 --> Input Class Initialized
INFO - 2023-06-11 00:33:40 --> Language Class Initialized
INFO - 2023-06-11 00:33:40 --> Loader Class Initialized
INFO - 2023-06-11 00:33:40 --> Helper loaded: url_helper
INFO - 2023-06-11 00:33:40 --> Helper loaded: security_helper
INFO - 2023-06-11 00:33:40 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:33:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:33:40 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:33:40 --> Helper loaded: form_helper
INFO - 2023-06-11 00:33:40 --> Form Validation Class Initialized
INFO - 2023-06-11 00:33:40 --> Database Driver Class Initialized
INFO - 2023-06-11 00:33:40 --> Model "Master_model" initialized
INFO - 2023-06-11 00:33:40 --> Model "Alert" initialized
INFO - 2023-06-11 00:33:40 --> Controller Class Initialized
INFO - 2023-06-11 00:33:40 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:33:40 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:33:40 --> Model "Mhs_f" initialized
INFO - 2023-06-11 00:33:40 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:33:40 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dosen/frs_mhs.php
INFO - 2023-06-11 00:33:40 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:33:40 --> Final output sent to browser
DEBUG - 2023-06-11 00:33:40 --> Total execution time: 0.6018
INFO - 2023-06-11 00:33:40 --> Config Class Initialized
INFO - 2023-06-11 00:33:40 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:33:40 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:33:40 --> Utf8 Class Initialized
INFO - 2023-06-11 00:33:40 --> URI Class Initialized
INFO - 2023-06-11 00:33:40 --> Router Class Initialized
INFO - 2023-06-11 00:33:40 --> Output Class Initialized
INFO - 2023-06-11 00:33:40 --> Security Class Initialized
DEBUG - 2023-06-11 00:33:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:33:40 --> Input Class Initialized
INFO - 2023-06-11 00:33:40 --> Language Class Initialized
ERROR - 2023-06-11 00:33:40 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 00:35:53 --> Config Class Initialized
INFO - 2023-06-11 00:35:53 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:35:53 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:35:53 --> Utf8 Class Initialized
INFO - 2023-06-11 00:35:53 --> URI Class Initialized
INFO - 2023-06-11 00:35:53 --> Router Class Initialized
INFO - 2023-06-11 00:35:53 --> Output Class Initialized
INFO - 2023-06-11 00:35:53 --> Security Class Initialized
DEBUG - 2023-06-11 00:35:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:35:53 --> Input Class Initialized
INFO - 2023-06-11 00:35:53 --> Language Class Initialized
INFO - 2023-06-11 00:35:53 --> Loader Class Initialized
INFO - 2023-06-11 00:35:53 --> Helper loaded: url_helper
INFO - 2023-06-11 00:35:53 --> Helper loaded: security_helper
INFO - 2023-06-11 00:35:53 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:35:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:35:53 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:35:53 --> Helper loaded: form_helper
INFO - 2023-06-11 00:35:53 --> Form Validation Class Initialized
INFO - 2023-06-11 00:35:53 --> Database Driver Class Initialized
INFO - 2023-06-11 00:35:53 --> Model "Master_model" initialized
INFO - 2023-06-11 00:35:53 --> Model "Alert" initialized
INFO - 2023-06-11 00:35:53 --> Controller Class Initialized
INFO - 2023-06-11 00:35:53 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:35:53 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:35:53 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:35:53 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:35:53 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:35:53 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:35:53 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:35:53 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:35:53 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:35:53 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:35:53 --> Final output sent to browser
DEBUG - 2023-06-11 00:35:53 --> Total execution time: 0.4782
INFO - 2023-06-11 00:35:53 --> Config Class Initialized
INFO - 2023-06-11 00:35:53 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:35:53 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:35:53 --> Utf8 Class Initialized
INFO - 2023-06-11 00:35:53 --> URI Class Initialized
INFO - 2023-06-11 00:35:53 --> Router Class Initialized
INFO - 2023-06-11 00:35:53 --> Output Class Initialized
INFO - 2023-06-11 00:35:53 --> Security Class Initialized
DEBUG - 2023-06-11 00:35:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:35:53 --> Input Class Initialized
INFO - 2023-06-11 00:35:53 --> Language Class Initialized
INFO - 2023-06-11 00:35:53 --> Loader Class Initialized
INFO - 2023-06-11 00:35:53 --> Helper loaded: url_helper
INFO - 2023-06-11 00:35:53 --> Helper loaded: security_helper
INFO - 2023-06-11 00:35:53 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:35:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:35:53 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:35:53 --> Helper loaded: form_helper
INFO - 2023-06-11 00:35:53 --> Form Validation Class Initialized
INFO - 2023-06-11 00:35:53 --> Database Driver Class Initialized
INFO - 2023-06-11 00:35:54 --> Model "Master_model" initialized
INFO - 2023-06-11 00:35:54 --> Model "Alert" initialized
INFO - 2023-06-11 00:35:54 --> Controller Class Initialized
INFO - 2023-06-11 00:35:54 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:35:54 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:35:54 --> Final output sent to browser
DEBUG - 2023-06-11 00:35:54 --> Total execution time: 0.6274
INFO - 2023-06-11 00:35:59 --> Config Class Initialized
INFO - 2023-06-11 00:35:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:35:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:35:59 --> Utf8 Class Initialized
INFO - 2023-06-11 00:35:59 --> URI Class Initialized
INFO - 2023-06-11 00:35:59 --> Router Class Initialized
INFO - 2023-06-11 00:35:59 --> Output Class Initialized
INFO - 2023-06-11 00:35:59 --> Security Class Initialized
DEBUG - 2023-06-11 00:35:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:35:59 --> Input Class Initialized
INFO - 2023-06-11 00:35:59 --> Language Class Initialized
INFO - 2023-06-11 00:35:59 --> Loader Class Initialized
INFO - 2023-06-11 00:35:59 --> Helper loaded: url_helper
INFO - 2023-06-11 00:35:59 --> Helper loaded: security_helper
INFO - 2023-06-11 00:35:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:35:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:35:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:35:59 --> Helper loaded: form_helper
INFO - 2023-06-11 00:35:59 --> Form Validation Class Initialized
INFO - 2023-06-11 00:35:59 --> Database Driver Class Initialized
INFO - 2023-06-11 00:35:59 --> Model "Master_model" initialized
INFO - 2023-06-11 00:35:59 --> Model "Alert" initialized
INFO - 2023-06-11 00:35:59 --> Controller Class Initialized
INFO - 2023-06-11 00:35:59 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:35:59 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:35:59 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:35:59 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:35:59 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:35:59 --> Final output sent to browser
DEBUG - 2023-06-11 00:35:59 --> Total execution time: 0.2653
INFO - 2023-06-11 00:36:00 --> Config Class Initialized
INFO - 2023-06-11 00:36:00 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:36:00 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:36:00 --> Utf8 Class Initialized
INFO - 2023-06-11 00:36:00 --> URI Class Initialized
INFO - 2023-06-11 00:36:00 --> Router Class Initialized
INFO - 2023-06-11 00:36:00 --> Output Class Initialized
INFO - 2023-06-11 00:36:00 --> Security Class Initialized
DEBUG - 2023-06-11 00:36:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:36:00 --> Input Class Initialized
INFO - 2023-06-11 00:36:00 --> Language Class Initialized
INFO - 2023-06-11 00:36:00 --> Loader Class Initialized
INFO - 2023-06-11 00:36:00 --> Helper loaded: url_helper
INFO - 2023-06-11 00:36:00 --> Helper loaded: security_helper
INFO - 2023-06-11 00:36:00 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:36:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:36:00 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:36:00 --> Helper loaded: form_helper
INFO - 2023-06-11 00:36:00 --> Form Validation Class Initialized
INFO - 2023-06-11 00:36:00 --> Database Driver Class Initialized
INFO - 2023-06-11 00:36:00 --> Model "Master_model" initialized
INFO - 2023-06-11 00:36:00 --> Model "Alert" initialized
INFO - 2023-06-11 00:36:00 --> Controller Class Initialized
INFO - 2023-06-11 00:36:00 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:36:00 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:36:00 --> Final output sent to browser
DEBUG - 2023-06-11 00:36:00 --> Total execution time: 0.2367
INFO - 2023-06-11 00:36:01 --> Config Class Initialized
INFO - 2023-06-11 00:36:01 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:36:01 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:36:01 --> Utf8 Class Initialized
INFO - 2023-06-11 00:36:01 --> URI Class Initialized
INFO - 2023-06-11 00:36:01 --> Router Class Initialized
INFO - 2023-06-11 00:36:01 --> Output Class Initialized
INFO - 2023-06-11 00:36:01 --> Security Class Initialized
DEBUG - 2023-06-11 00:36:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:36:01 --> Input Class Initialized
INFO - 2023-06-11 00:36:01 --> Language Class Initialized
INFO - 2023-06-11 00:36:01 --> Loader Class Initialized
INFO - 2023-06-11 00:36:01 --> Helper loaded: url_helper
INFO - 2023-06-11 00:36:01 --> Helper loaded: security_helper
INFO - 2023-06-11 00:36:01 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:36:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:36:01 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:36:01 --> Helper loaded: form_helper
INFO - 2023-06-11 00:36:01 --> Form Validation Class Initialized
INFO - 2023-06-11 00:36:01 --> Database Driver Class Initialized
INFO - 2023-06-11 00:36:01 --> Model "Master_model" initialized
INFO - 2023-06-11 00:36:01 --> Model "Alert" initialized
INFO - 2023-06-11 00:36:01 --> Controller Class Initialized
INFO - 2023-06-11 00:36:01 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:36:01 --> Model "Dosen_model" initialized
INFO - 2023-06-11 00:36:01 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:36:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:36:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:36:01 --> Model "Baak_f" initialized
ERROR - 2023-06-11 00:36:01 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 00:36:01 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 00:36:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 00:36:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:36:01 --> Final output sent to browser
DEBUG - 2023-06-11 00:36:01 --> Total execution time: 0.4696
INFO - 2023-06-11 00:36:02 --> Config Class Initialized
INFO - 2023-06-11 00:36:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:36:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:36:02 --> Utf8 Class Initialized
INFO - 2023-06-11 00:36:02 --> URI Class Initialized
INFO - 2023-06-11 00:36:02 --> Router Class Initialized
INFO - 2023-06-11 00:36:02 --> Output Class Initialized
INFO - 2023-06-11 00:36:02 --> Security Class Initialized
DEBUG - 2023-06-11 00:36:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:36:02 --> Input Class Initialized
INFO - 2023-06-11 00:36:02 --> Language Class Initialized
INFO - 2023-06-11 00:36:02 --> Loader Class Initialized
INFO - 2023-06-11 00:36:02 --> Helper loaded: url_helper
INFO - 2023-06-11 00:36:02 --> Helper loaded: security_helper
INFO - 2023-06-11 00:36:02 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:36:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:36:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:36:02 --> Helper loaded: form_helper
INFO - 2023-06-11 00:36:02 --> Form Validation Class Initialized
INFO - 2023-06-11 00:36:02 --> Database Driver Class Initialized
INFO - 2023-06-11 00:36:02 --> Model "Master_model" initialized
INFO - 2023-06-11 00:36:02 --> Model "Alert" initialized
INFO - 2023-06-11 00:36:02 --> Controller Class Initialized
INFO - 2023-06-11 00:36:02 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:36:02 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:36:02 --> Final output sent to browser
DEBUG - 2023-06-11 00:36:02 --> Total execution time: 0.2750
INFO - 2023-06-11 00:36:06 --> Config Class Initialized
INFO - 2023-06-11 00:36:06 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:36:06 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:36:06 --> Utf8 Class Initialized
INFO - 2023-06-11 00:36:06 --> URI Class Initialized
INFO - 2023-06-11 00:36:06 --> Router Class Initialized
INFO - 2023-06-11 00:36:06 --> Output Class Initialized
INFO - 2023-06-11 00:36:06 --> Security Class Initialized
DEBUG - 2023-06-11 00:36:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:36:06 --> Input Class Initialized
INFO - 2023-06-11 00:36:06 --> Language Class Initialized
INFO - 2023-06-11 00:36:06 --> Loader Class Initialized
INFO - 2023-06-11 00:36:06 --> Helper loaded: url_helper
INFO - 2023-06-11 00:36:06 --> Helper loaded: security_helper
INFO - 2023-06-11 00:36:06 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:36:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:36:06 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:36:06 --> Helper loaded: form_helper
INFO - 2023-06-11 00:36:06 --> Form Validation Class Initialized
INFO - 2023-06-11 00:36:06 --> Database Driver Class Initialized
INFO - 2023-06-11 00:36:06 --> Model "Master_model" initialized
INFO - 2023-06-11 00:36:06 --> Model "Alert" initialized
INFO - 2023-06-11 00:36:06 --> Controller Class Initialized
INFO - 2023-06-11 00:36:06 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:36:06 --> Model "Baak_t" initialized
INFO - 2023-06-11 00:36:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:36:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 00:36:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:36:06 --> Final output sent to browser
DEBUG - 2023-06-11 00:36:06 --> Total execution time: 0.2118
INFO - 2023-06-11 00:36:06 --> Config Class Initialized
INFO - 2023-06-11 00:36:06 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:36:06 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:36:06 --> Utf8 Class Initialized
INFO - 2023-06-11 00:36:06 --> URI Class Initialized
INFO - 2023-06-11 00:36:06 --> Router Class Initialized
INFO - 2023-06-11 00:36:06 --> Output Class Initialized
INFO - 2023-06-11 00:36:06 --> Security Class Initialized
DEBUG - 2023-06-11 00:36:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:36:06 --> Input Class Initialized
INFO - 2023-06-11 00:36:06 --> Language Class Initialized
INFO - 2023-06-11 00:36:06 --> Loader Class Initialized
INFO - 2023-06-11 00:36:06 --> Helper loaded: url_helper
INFO - 2023-06-11 00:36:06 --> Helper loaded: security_helper
INFO - 2023-06-11 00:36:06 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:36:07 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:36:07 --> Helper loaded: form_helper
INFO - 2023-06-11 00:36:07 --> Form Validation Class Initialized
INFO - 2023-06-11 00:36:07 --> Database Driver Class Initialized
INFO - 2023-06-11 00:36:07 --> Model "Master_model" initialized
INFO - 2023-06-11 00:36:07 --> Model "Alert" initialized
INFO - 2023-06-11 00:36:07 --> Controller Class Initialized
INFO - 2023-06-11 00:36:07 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:36:07 --> Model "Baak_dt" initialized
INFO - 2023-06-11 00:36:07 --> Final output sent to browser
DEBUG - 2023-06-11 00:36:07 --> Total execution time: 0.6390
INFO - 2023-06-11 00:36:11 --> Config Class Initialized
INFO - 2023-06-11 00:36:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 00:36:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 00:36:11 --> Utf8 Class Initialized
INFO - 2023-06-11 00:36:11 --> URI Class Initialized
INFO - 2023-06-11 00:36:11 --> Router Class Initialized
INFO - 2023-06-11 00:36:11 --> Output Class Initialized
INFO - 2023-06-11 00:36:11 --> Security Class Initialized
DEBUG - 2023-06-11 00:36:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 00:36:11 --> Input Class Initialized
INFO - 2023-06-11 00:36:11 --> Language Class Initialized
INFO - 2023-06-11 00:36:11 --> Loader Class Initialized
INFO - 2023-06-11 00:36:11 --> Helper loaded: url_helper
INFO - 2023-06-11 00:36:11 --> Helper loaded: security_helper
INFO - 2023-06-11 00:36:11 --> Database Driver Class Initialized
DEBUG - 2023-06-11 00:36:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 00:36:11 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 00:36:11 --> Helper loaded: form_helper
INFO - 2023-06-11 00:36:11 --> Form Validation Class Initialized
INFO - 2023-06-11 00:36:11 --> Database Driver Class Initialized
INFO - 2023-06-11 00:36:11 --> Model "Master_model" initialized
INFO - 2023-06-11 00:36:11 --> Model "Alert" initialized
INFO - 2023-06-11 00:36:11 --> Controller Class Initialized
INFO - 2023-06-11 00:36:11 --> Model "Baak_model" initialized
INFO - 2023-06-11 00:36:11 --> Model "Baak_f" initialized
INFO - 2023-06-11 00:36:11 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 00:36:11 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 00:36:11 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 00:36:11 --> Final output sent to browser
DEBUG - 2023-06-11 00:36:11 --> Total execution time: 0.1992
INFO - 2023-06-11 22:03:59 --> Config Class Initialized
INFO - 2023-06-11 22:03:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:03:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:03:59 --> Utf8 Class Initialized
INFO - 2023-06-11 22:03:59 --> URI Class Initialized
INFO - 2023-06-11 22:03:59 --> Router Class Initialized
INFO - 2023-06-11 22:03:59 --> Output Class Initialized
INFO - 2023-06-11 22:03:59 --> Security Class Initialized
DEBUG - 2023-06-11 22:03:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:03:59 --> Input Class Initialized
INFO - 2023-06-11 22:03:59 --> Language Class Initialized
INFO - 2023-06-11 22:03:59 --> Loader Class Initialized
INFO - 2023-06-11 22:03:59 --> Helper loaded: url_helper
INFO - 2023-06-11 22:03:59 --> Helper loaded: security_helper
INFO - 2023-06-11 22:03:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:03:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:03:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:03:59 --> Helper loaded: form_helper
INFO - 2023-06-11 22:03:59 --> Form Validation Class Initialized
INFO - 2023-06-11 22:03:59 --> Database Driver Class Initialized
INFO - 2023-06-11 22:03:59 --> Model "Master_model" initialized
INFO - 2023-06-11 22:03:59 --> Model "Alert" initialized
INFO - 2023-06-11 22:03:59 --> Controller Class Initialized
INFO - 2023-06-11 22:03:59 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:03:59 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:03:59 --> Config Class Initialized
INFO - 2023-06-11 22:03:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:03:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:03:59 --> Utf8 Class Initialized
INFO - 2023-06-11 22:03:59 --> URI Class Initialized
INFO - 2023-06-11 22:03:59 --> Router Class Initialized
INFO - 2023-06-11 22:03:59 --> Output Class Initialized
INFO - 2023-06-11 22:03:59 --> Security Class Initialized
DEBUG - 2023-06-11 22:03:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:03:59 --> Input Class Initialized
INFO - 2023-06-11 22:03:59 --> Language Class Initialized
INFO - 2023-06-11 22:03:59 --> Loader Class Initialized
INFO - 2023-06-11 22:03:59 --> Helper loaded: url_helper
INFO - 2023-06-11 22:03:59 --> Helper loaded: security_helper
INFO - 2023-06-11 22:03:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:03:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:03:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:03:59 --> Helper loaded: form_helper
INFO - 2023-06-11 22:03:59 --> Form Validation Class Initialized
INFO - 2023-06-11 22:03:59 --> Database Driver Class Initialized
INFO - 2023-06-11 22:03:59 --> Model "Master_model" initialized
INFO - 2023-06-11 22:03:59 --> Model "Alert" initialized
INFO - 2023-06-11 22:03:59 --> Controller Class Initialized
INFO - 2023-06-11 22:03:59 --> Config Class Initialized
INFO - 2023-06-11 22:03:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:03:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:03:59 --> Utf8 Class Initialized
INFO - 2023-06-11 22:03:59 --> URI Class Initialized
INFO - 2023-06-11 22:03:59 --> Router Class Initialized
INFO - 2023-06-11 22:03:59 --> Output Class Initialized
INFO - 2023-06-11 22:03:59 --> Security Class Initialized
DEBUG - 2023-06-11 22:03:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:03:59 --> Input Class Initialized
INFO - 2023-06-11 22:03:59 --> Language Class Initialized
INFO - 2023-06-11 22:03:59 --> Loader Class Initialized
INFO - 2023-06-11 22:03:59 --> Helper loaded: url_helper
INFO - 2023-06-11 22:03:59 --> Helper loaded: security_helper
INFO - 2023-06-11 22:03:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:04:00 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:04:00 --> Helper loaded: form_helper
INFO - 2023-06-11 22:04:00 --> Form Validation Class Initialized
INFO - 2023-06-11 22:04:00 --> Database Driver Class Initialized
INFO - 2023-06-11 22:04:00 --> Model "Master_model" initialized
INFO - 2023-06-11 22:04:00 --> Model "Alert" initialized
INFO - 2023-06-11 22:04:00 --> Controller Class Initialized
INFO - 2023-06-11 22:04:00 --> Config Class Initialized
INFO - 2023-06-11 22:04:00 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:04:00 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:04:00 --> Utf8 Class Initialized
INFO - 2023-06-11 22:04:00 --> URI Class Initialized
DEBUG - 2023-06-11 22:04:00 --> No URI present. Default controller set.
INFO - 2023-06-11 22:04:00 --> Router Class Initialized
INFO - 2023-06-11 22:04:00 --> Output Class Initialized
INFO - 2023-06-11 22:04:00 --> Security Class Initialized
DEBUG - 2023-06-11 22:04:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:04:00 --> Input Class Initialized
INFO - 2023-06-11 22:04:00 --> Language Class Initialized
INFO - 2023-06-11 22:04:00 --> Loader Class Initialized
INFO - 2023-06-11 22:04:00 --> Helper loaded: url_helper
INFO - 2023-06-11 22:04:00 --> Helper loaded: security_helper
INFO - 2023-06-11 22:04:00 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:04:00 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:04:00 --> Helper loaded: form_helper
INFO - 2023-06-11 22:04:00 --> Form Validation Class Initialized
INFO - 2023-06-11 22:04:00 --> Database Driver Class Initialized
INFO - 2023-06-11 22:04:00 --> Model "Master_model" initialized
INFO - 2023-06-11 22:04:00 --> Model "Alert" initialized
INFO - 2023-06-11 22:04:00 --> Controller Class Initialized
INFO - 2023-06-11 22:04:00 --> Config Class Initialized
INFO - 2023-06-11 22:04:00 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:04:00 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:04:00 --> Utf8 Class Initialized
INFO - 2023-06-11 22:04:00 --> URI Class Initialized
INFO - 2023-06-11 22:04:00 --> Router Class Initialized
INFO - 2023-06-11 22:04:00 --> Output Class Initialized
INFO - 2023-06-11 22:04:00 --> Security Class Initialized
DEBUG - 2023-06-11 22:04:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:04:00 --> Input Class Initialized
INFO - 2023-06-11 22:04:00 --> Language Class Initialized
INFO - 2023-06-11 22:04:00 --> Loader Class Initialized
INFO - 2023-06-11 22:04:00 --> Helper loaded: url_helper
INFO - 2023-06-11 22:04:00 --> Helper loaded: security_helper
INFO - 2023-06-11 22:04:00 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:04:00 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:04:00 --> Helper loaded: form_helper
INFO - 2023-06-11 22:04:00 --> Form Validation Class Initialized
INFO - 2023-06-11 22:04:00 --> Database Driver Class Initialized
INFO - 2023-06-11 22:04:00 --> Model "Master_model" initialized
INFO - 2023-06-11 22:04:00 --> Model "Alert" initialized
INFO - 2023-06-11 22:04:00 --> Controller Class Initialized
INFO - 2023-06-11 22:04:00 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 22:04:00 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:04:00 --> Final output sent to browser
DEBUG - 2023-06-11 22:04:00 --> Total execution time: 0.1958
INFO - 2023-06-11 22:04:00 --> Config Class Initialized
INFO - 2023-06-11 22:04:00 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:04:00 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:04:00 --> Utf8 Class Initialized
INFO - 2023-06-11 22:04:00 --> URI Class Initialized
INFO - 2023-06-11 22:04:00 --> Router Class Initialized
INFO - 2023-06-11 22:04:00 --> Output Class Initialized
INFO - 2023-06-11 22:04:00 --> Security Class Initialized
DEBUG - 2023-06-11 22:04:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:04:00 --> Input Class Initialized
INFO - 2023-06-11 22:04:00 --> Language Class Initialized
ERROR - 2023-06-11 22:04:00 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:19:45 --> Config Class Initialized
INFO - 2023-06-11 22:19:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:19:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:45 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:45 --> URI Class Initialized
INFO - 2023-06-11 22:19:45 --> Router Class Initialized
INFO - 2023-06-11 22:19:45 --> Output Class Initialized
INFO - 2023-06-11 22:19:45 --> Security Class Initialized
DEBUG - 2023-06-11 22:19:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:45 --> Input Class Initialized
INFO - 2023-06-11 22:19:45 --> Language Class Initialized
INFO - 2023-06-11 22:19:45 --> Loader Class Initialized
INFO - 2023-06-11 22:19:45 --> Helper loaded: url_helper
INFO - 2023-06-11 22:19:45 --> Helper loaded: security_helper
INFO - 2023-06-11 22:19:45 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:19:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:19:45 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:19:45 --> Helper loaded: form_helper
INFO - 2023-06-11 22:19:45 --> Form Validation Class Initialized
INFO - 2023-06-11 22:19:45 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:45 --> Model "Master_model" initialized
INFO - 2023-06-11 22:19:45 --> Model "Alert" initialized
INFO - 2023-06-11 22:19:45 --> Controller Class Initialized
INFO - 2023-06-11 22:19:45 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:19:45 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:45 --> Model "M_login" initialized
INFO - 2023-06-11 22:19:45 --> Final output sent to browser
DEBUG - 2023-06-11 22:19:45 --> Total execution time: 0.4901
INFO - 2023-06-11 22:19:45 --> Config Class Initialized
INFO - 2023-06-11 22:19:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:19:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:45 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:45 --> URI Class Initialized
INFO - 2023-06-11 22:19:45 --> Router Class Initialized
INFO - 2023-06-11 22:19:45 --> Output Class Initialized
INFO - 2023-06-11 22:19:45 --> Security Class Initialized
DEBUG - 2023-06-11 22:19:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:45 --> Input Class Initialized
INFO - 2023-06-11 22:19:45 --> Language Class Initialized
INFO - 2023-06-11 22:19:45 --> Loader Class Initialized
INFO - 2023-06-11 22:19:45 --> Helper loaded: url_helper
INFO - 2023-06-11 22:19:45 --> Helper loaded: security_helper
INFO - 2023-06-11 22:19:45 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:19:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:19:45 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:19:45 --> Helper loaded: form_helper
INFO - 2023-06-11 22:19:45 --> Form Validation Class Initialized
INFO - 2023-06-11 22:19:45 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:45 --> Model "Master_model" initialized
INFO - 2023-06-11 22:19:45 --> Model "Alert" initialized
INFO - 2023-06-11 22:19:45 --> Controller Class Initialized
INFO - 2023-06-11 22:19:45 --> Config Class Initialized
INFO - 2023-06-11 22:19:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:19:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:45 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:45 --> URI Class Initialized
INFO - 2023-06-11 22:19:45 --> Router Class Initialized
INFO - 2023-06-11 22:19:45 --> Output Class Initialized
INFO - 2023-06-11 22:19:45 --> Security Class Initialized
DEBUG - 2023-06-11 22:19:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:45 --> Input Class Initialized
INFO - 2023-06-11 22:19:45 --> Language Class Initialized
INFO - 2023-06-11 22:19:45 --> Loader Class Initialized
INFO - 2023-06-11 22:19:45 --> Helper loaded: url_helper
INFO - 2023-06-11 22:19:45 --> Helper loaded: security_helper
INFO - 2023-06-11 22:19:45 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:19:46 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:19:46 --> Helper loaded: form_helper
INFO - 2023-06-11 22:19:46 --> Form Validation Class Initialized
INFO - 2023-06-11 22:19:46 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:46 --> Model "Master_model" initialized
INFO - 2023-06-11 22:19:46 --> Model "Alert" initialized
INFO - 2023-06-11 22:19:46 --> Controller Class Initialized
INFO - 2023-06-11 22:19:46 --> Config Class Initialized
INFO - 2023-06-11 22:19:46 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:19:46 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:46 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:46 --> URI Class Initialized
INFO - 2023-06-11 22:19:46 --> Router Class Initialized
INFO - 2023-06-11 22:19:46 --> Output Class Initialized
INFO - 2023-06-11 22:19:46 --> Security Class Initialized
DEBUG - 2023-06-11 22:19:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:46 --> Input Class Initialized
INFO - 2023-06-11 22:19:46 --> Language Class Initialized
INFO - 2023-06-11 22:19:46 --> Loader Class Initialized
INFO - 2023-06-11 22:19:46 --> Helper loaded: url_helper
INFO - 2023-06-11 22:19:46 --> Helper loaded: security_helper
INFO - 2023-06-11 22:19:46 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:19:46 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:19:46 --> Helper loaded: form_helper
INFO - 2023-06-11 22:19:46 --> Form Validation Class Initialized
INFO - 2023-06-11 22:19:46 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:46 --> Model "Master_model" initialized
INFO - 2023-06-11 22:19:46 --> Model "Alert" initialized
INFO - 2023-06-11 22:19:46 --> Controller Class Initialized
INFO - 2023-06-11 22:19:46 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:19:46 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:19:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:19:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/mahasiswa.php
INFO - 2023-06-11 22:19:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:19:46 --> Final output sent to browser
DEBUG - 2023-06-11 22:19:46 --> Total execution time: 0.2600
INFO - 2023-06-11 22:19:46 --> Config Class Initialized
INFO - 2023-06-11 22:19:46 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:19:46 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:46 --> Config Class Initialized
INFO - 2023-06-11 22:19:46 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:46 --> Hooks Class Initialized
INFO - 2023-06-11 22:19:46 --> URI Class Initialized
DEBUG - 2023-06-11 22:19:46 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:46 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:46 --> Router Class Initialized
INFO - 2023-06-11 22:19:46 --> URI Class Initialized
INFO - 2023-06-11 22:19:46 --> Output Class Initialized
INFO - 2023-06-11 22:19:46 --> Router Class Initialized
INFO - 2023-06-11 22:19:46 --> Security Class Initialized
DEBUG - 2023-06-11 22:19:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:46 --> Output Class Initialized
INFO - 2023-06-11 22:19:46 --> Input Class Initialized
INFO - 2023-06-11 22:19:46 --> Security Class Initialized
INFO - 2023-06-11 22:19:46 --> Language Class Initialized
DEBUG - 2023-06-11 22:19:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:46 --> Loader Class Initialized
INFO - 2023-06-11 22:19:46 --> Input Class Initialized
INFO - 2023-06-11 22:19:46 --> Helper loaded: url_helper
INFO - 2023-06-11 22:19:46 --> Language Class Initialized
INFO - 2023-06-11 22:19:46 --> Helper loaded: security_helper
INFO - 2023-06-11 22:19:46 --> Loader Class Initialized
INFO - 2023-06-11 22:19:46 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:46 --> Helper loaded: url_helper
INFO - 2023-06-11 22:19:46 --> Helper loaded: security_helper
INFO - 2023-06-11 22:19:46 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-06-11 22:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:19:46 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:19:46 --> Helper loaded: form_helper
INFO - 2023-06-11 22:19:46 --> Form Validation Class Initialized
INFO - 2023-06-11 22:19:46 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:46 --> Model "Master_model" initialized
INFO - 2023-06-11 22:19:46 --> Model "Alert" initialized
INFO - 2023-06-11 22:19:46 --> Controller Class Initialized
INFO - 2023-06-11 22:19:46 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:19:46 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:19:48 --> Final output sent to browser
DEBUG - 2023-06-11 22:19:48 --> Total execution time: 1.5049
INFO - 2023-06-11 22:19:48 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:19:48 --> Helper loaded: form_helper
INFO - 2023-06-11 22:19:48 --> Form Validation Class Initialized
INFO - 2023-06-11 22:19:48 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:49 --> Model "Master_model" initialized
INFO - 2023-06-11 22:19:49 --> Model "Alert" initialized
INFO - 2023-06-11 22:19:49 --> Controller Class Initialized
INFO - 2023-06-11 22:19:49 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:19:49 --> Final output sent to browser
DEBUG - 2023-06-11 22:19:49 --> Total execution time: 2.9630
INFO - 2023-06-11 22:19:59 --> Config Class Initialized
INFO - 2023-06-11 22:19:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:19:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:59 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:59 --> URI Class Initialized
INFO - 2023-06-11 22:19:59 --> Router Class Initialized
INFO - 2023-06-11 22:19:59 --> Output Class Initialized
INFO - 2023-06-11 22:19:59 --> Security Class Initialized
DEBUG - 2023-06-11 22:19:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:59 --> Input Class Initialized
INFO - 2023-06-11 22:19:59 --> Language Class Initialized
INFO - 2023-06-11 22:19:59 --> Loader Class Initialized
INFO - 2023-06-11 22:19:59 --> Helper loaded: url_helper
INFO - 2023-06-11 22:19:59 --> Helper loaded: security_helper
INFO - 2023-06-11 22:19:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:19:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:19:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:19:59 --> Helper loaded: form_helper
INFO - 2023-06-11 22:19:59 --> Form Validation Class Initialized
INFO - 2023-06-11 22:19:59 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:59 --> Model "Master_model" initialized
INFO - 2023-06-11 22:19:59 --> Model "Alert" initialized
INFO - 2023-06-11 22:19:59 --> Controller Class Initialized
INFO - 2023-06-11 22:19:59 --> Config Class Initialized
INFO - 2023-06-11 22:19:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:19:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:59 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:59 --> URI Class Initialized
DEBUG - 2023-06-11 22:19:59 --> No URI present. Default controller set.
INFO - 2023-06-11 22:19:59 --> Router Class Initialized
INFO - 2023-06-11 22:19:59 --> Output Class Initialized
INFO - 2023-06-11 22:19:59 --> Security Class Initialized
DEBUG - 2023-06-11 22:19:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:59 --> Input Class Initialized
INFO - 2023-06-11 22:19:59 --> Language Class Initialized
INFO - 2023-06-11 22:19:59 --> Loader Class Initialized
INFO - 2023-06-11 22:19:59 --> Helper loaded: url_helper
INFO - 2023-06-11 22:19:59 --> Helper loaded: security_helper
INFO - 2023-06-11 22:19:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:19:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:19:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:19:59 --> Helper loaded: form_helper
INFO - 2023-06-11 22:19:59 --> Form Validation Class Initialized
INFO - 2023-06-11 22:19:59 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:59 --> Model "Master_model" initialized
INFO - 2023-06-11 22:19:59 --> Model "Alert" initialized
INFO - 2023-06-11 22:19:59 --> Controller Class Initialized
INFO - 2023-06-11 22:19:59 --> Config Class Initialized
INFO - 2023-06-11 22:19:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:19:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:59 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:59 --> URI Class Initialized
INFO - 2023-06-11 22:19:59 --> Router Class Initialized
INFO - 2023-06-11 22:19:59 --> Output Class Initialized
INFO - 2023-06-11 22:19:59 --> Security Class Initialized
DEBUG - 2023-06-11 22:19:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:59 --> Input Class Initialized
INFO - 2023-06-11 22:19:59 --> Language Class Initialized
INFO - 2023-06-11 22:19:59 --> Loader Class Initialized
INFO - 2023-06-11 22:19:59 --> Helper loaded: url_helper
INFO - 2023-06-11 22:19:59 --> Helper loaded: security_helper
INFO - 2023-06-11 22:19:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:19:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:19:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:19:59 --> Helper loaded: form_helper
INFO - 2023-06-11 22:19:59 --> Form Validation Class Initialized
INFO - 2023-06-11 22:19:59 --> Database Driver Class Initialized
INFO - 2023-06-11 22:19:59 --> Model "Master_model" initialized
INFO - 2023-06-11 22:19:59 --> Model "Alert" initialized
INFO - 2023-06-11 22:19:59 --> Controller Class Initialized
INFO - 2023-06-11 22:19:59 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 22:19:59 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:19:59 --> Final output sent to browser
DEBUG - 2023-06-11 22:19:59 --> Total execution time: 0.2286
INFO - 2023-06-11 22:19:59 --> Config Class Initialized
INFO - 2023-06-11 22:19:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:19:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:19:59 --> Utf8 Class Initialized
INFO - 2023-06-11 22:19:59 --> URI Class Initialized
INFO - 2023-06-11 22:19:59 --> Router Class Initialized
INFO - 2023-06-11 22:19:59 --> Output Class Initialized
INFO - 2023-06-11 22:19:59 --> Security Class Initialized
DEBUG - 2023-06-11 22:19:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:19:59 --> Input Class Initialized
INFO - 2023-06-11 22:19:59 --> Language Class Initialized
ERROR - 2023-06-11 22:19:59 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:20:02 --> Config Class Initialized
INFO - 2023-06-11 22:20:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:02 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:02 --> URI Class Initialized
INFO - 2023-06-11 22:20:02 --> Router Class Initialized
INFO - 2023-06-11 22:20:02 --> Output Class Initialized
INFO - 2023-06-11 22:20:02 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:02 --> Input Class Initialized
INFO - 2023-06-11 22:20:02 --> Language Class Initialized
INFO - 2023-06-11 22:20:02 --> Loader Class Initialized
INFO - 2023-06-11 22:20:02 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:02 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:02 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:02 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:02 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:02 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:02 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:02 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:02 --> Controller Class Initialized
INFO - 2023-06-11 22:20:02 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:20:02 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:02 --> Model "M_login" initialized
INFO - 2023-06-11 22:20:02 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:02 --> Total execution time: 0.2824
INFO - 2023-06-11 22:20:02 --> Config Class Initialized
INFO - 2023-06-11 22:20:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:02 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:02 --> URI Class Initialized
INFO - 2023-06-11 22:20:02 --> Router Class Initialized
INFO - 2023-06-11 22:20:02 --> Output Class Initialized
INFO - 2023-06-11 22:20:02 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:03 --> Input Class Initialized
INFO - 2023-06-11 22:20:03 --> Language Class Initialized
INFO - 2023-06-11 22:20:03 --> Loader Class Initialized
INFO - 2023-06-11 22:20:03 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:03 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:03 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:03 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:03 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:03 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:03 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:03 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:03 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:03 --> Controller Class Initialized
INFO - 2023-06-11 22:20:03 --> Config Class Initialized
INFO - 2023-06-11 22:20:03 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:03 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:03 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:03 --> URI Class Initialized
INFO - 2023-06-11 22:20:03 --> Router Class Initialized
INFO - 2023-06-11 22:20:03 --> Output Class Initialized
INFO - 2023-06-11 22:20:03 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:03 --> Input Class Initialized
INFO - 2023-06-11 22:20:03 --> Language Class Initialized
INFO - 2023-06-11 22:20:03 --> Loader Class Initialized
INFO - 2023-06-11 22:20:03 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:03 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:03 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:03 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:03 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:03 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:03 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:03 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:03 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:03 --> Controller Class Initialized
INFO - 2023-06-11 22:20:03 --> Config Class Initialized
INFO - 2023-06-11 22:20:03 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:03 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:03 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:03 --> URI Class Initialized
INFO - 2023-06-11 22:20:03 --> Router Class Initialized
INFO - 2023-06-11 22:20:03 --> Output Class Initialized
INFO - 2023-06-11 22:20:03 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:03 --> Input Class Initialized
INFO - 2023-06-11 22:20:03 --> Language Class Initialized
INFO - 2023-06-11 22:20:03 --> Loader Class Initialized
INFO - 2023-06-11 22:20:03 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:03 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:03 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:03 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:03 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:03 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:03 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:04 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:04 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:04 --> Controller Class Initialized
INFO - 2023-06-11 22:20:04 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:04 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:20:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:20:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/mahasiswa.php
INFO - 2023-06-11 22:20:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:20:04 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:04 --> Total execution time: 0.5516
INFO - 2023-06-11 22:20:04 --> Config Class Initialized
INFO - 2023-06-11 22:20:04 --> Config Class Initialized
INFO - 2023-06-11 22:20:04 --> Hooks Class Initialized
INFO - 2023-06-11 22:20:04 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:04 --> UTF-8 Support Enabled
DEBUG - 2023-06-11 22:20:04 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:04 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:04 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:04 --> URI Class Initialized
INFO - 2023-06-11 22:20:04 --> URI Class Initialized
INFO - 2023-06-11 22:20:04 --> Router Class Initialized
INFO - 2023-06-11 22:20:04 --> Router Class Initialized
INFO - 2023-06-11 22:20:04 --> Output Class Initialized
INFO - 2023-06-11 22:20:04 --> Output Class Initialized
INFO - 2023-06-11 22:20:04 --> Security Class Initialized
INFO - 2023-06-11 22:20:04 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-11 22:20:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:04 --> Input Class Initialized
INFO - 2023-06-11 22:20:04 --> Input Class Initialized
INFO - 2023-06-11 22:20:04 --> Language Class Initialized
INFO - 2023-06-11 22:20:04 --> Language Class Initialized
INFO - 2023-06-11 22:20:04 --> Loader Class Initialized
INFO - 2023-06-11 22:20:04 --> Loader Class Initialized
INFO - 2023-06-11 22:20:04 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:04 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:04 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:04 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:04 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:04 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-06-11 22:20:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:04 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:04 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:04 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:04 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:04 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:04 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:04 --> Controller Class Initialized
INFO - 2023-06-11 22:20:04 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:04 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:20:05 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:05 --> Total execution time: 1.2715
INFO - 2023-06-11 22:20:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:05 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:05 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:05 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:05 --> Config Class Initialized
INFO - 2023-06-11 22:20:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:05 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:05 --> URI Class Initialized
INFO - 2023-06-11 22:20:05 --> Router Class Initialized
INFO - 2023-06-11 22:20:05 --> Output Class Initialized
INFO - 2023-06-11 22:20:05 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:05 --> Input Class Initialized
INFO - 2023-06-11 22:20:05 --> Language Class Initialized
ERROR - 2023-06-11 22:20:05 --> 404 Page Not Found: Assets/img_mahasiswa
INFO - 2023-06-11 22:20:05 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:05 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:05 --> Controller Class Initialized
INFO - 2023-06-11 22:20:05 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:06 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:06 --> Total execution time: 1.9227
INFO - 2023-06-11 22:20:10 --> Config Class Initialized
INFO - 2023-06-11 22:20:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:10 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:10 --> URI Class Initialized
INFO - 2023-06-11 22:20:10 --> Router Class Initialized
INFO - 2023-06-11 22:20:10 --> Output Class Initialized
INFO - 2023-06-11 22:20:10 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:10 --> Input Class Initialized
INFO - 2023-06-11 22:20:10 --> Language Class Initialized
INFO - 2023-06-11 22:20:10 --> Loader Class Initialized
INFO - 2023-06-11 22:20:10 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:10 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:10 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:11 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:11 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:11 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:11 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:11 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:11 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:11 --> Controller Class Initialized
INFO - 2023-06-11 22:20:11 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:11 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:20:11 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:20:11 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:20:11 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:20:11 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:20:11 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:11 --> Total execution time: 0.8606
INFO - 2023-06-11 22:20:13 --> Config Class Initialized
INFO - 2023-06-11 22:20:13 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:13 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:13 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:13 --> URI Class Initialized
INFO - 2023-06-11 22:20:13 --> Router Class Initialized
INFO - 2023-06-11 22:20:13 --> Output Class Initialized
INFO - 2023-06-11 22:20:13 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:13 --> Input Class Initialized
INFO - 2023-06-11 22:20:13 --> Language Class Initialized
INFO - 2023-06-11 22:20:13 --> Loader Class Initialized
INFO - 2023-06-11 22:20:13 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:13 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:13 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:13 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:13 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:13 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:13 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:13 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:13 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:13 --> Controller Class Initialized
INFO - 2023-06-11 22:20:13 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:13 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:20:14 --> Config Class Initialized
INFO - 2023-06-11 22:20:14 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:14 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:14 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:14 --> URI Class Initialized
INFO - 2023-06-11 22:20:14 --> Router Class Initialized
INFO - 2023-06-11 22:20:14 --> Output Class Initialized
INFO - 2023-06-11 22:20:14 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:14 --> Input Class Initialized
INFO - 2023-06-11 22:20:14 --> Language Class Initialized
INFO - 2023-06-11 22:20:14 --> Loader Class Initialized
INFO - 2023-06-11 22:20:14 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:14 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:14 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:14 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:14 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:14 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:14 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:14 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:14 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:14 --> Controller Class Initialized
INFO - 2023-06-11 22:20:14 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:14 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:20:14 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:20:14 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:20:14 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:20:14 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:20:14 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:14 --> Total execution time: 0.5226
INFO - 2023-06-11 22:20:17 --> Config Class Initialized
INFO - 2023-06-11 22:20:17 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:17 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:17 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:17 --> URI Class Initialized
INFO - 2023-06-11 22:20:17 --> Router Class Initialized
INFO - 2023-06-11 22:20:17 --> Output Class Initialized
INFO - 2023-06-11 22:20:17 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:17 --> Input Class Initialized
INFO - 2023-06-11 22:20:17 --> Language Class Initialized
INFO - 2023-06-11 22:20:17 --> Loader Class Initialized
INFO - 2023-06-11 22:20:17 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:17 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:17 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:18 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:18 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:18 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:18 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:18 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:18 --> Controller Class Initialized
INFO - 2023-06-11 22:20:18 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:18 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:20:18 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:20:18 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:20:18 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:20:18 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:18 --> Total execution time: 1.4337
INFO - 2023-06-11 22:20:20 --> Config Class Initialized
INFO - 2023-06-11 22:20:20 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:20 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:20 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:20 --> URI Class Initialized
INFO - 2023-06-11 22:20:20 --> Router Class Initialized
INFO - 2023-06-11 22:20:20 --> Output Class Initialized
INFO - 2023-06-11 22:20:20 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:20 --> Input Class Initialized
INFO - 2023-06-11 22:20:20 --> Language Class Initialized
INFO - 2023-06-11 22:20:20 --> Loader Class Initialized
INFO - 2023-06-11 22:20:20 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:20 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:20 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:20 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:20 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:20 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:20 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:20 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:20 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:20 --> Controller Class Initialized
INFO - 2023-06-11 22:20:20 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:20:20 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:20:20 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:20 --> Total execution time: 0.5531
INFO - 2023-06-11 22:20:23 --> Config Class Initialized
INFO - 2023-06-11 22:20:23 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:23 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:23 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:23 --> URI Class Initialized
INFO - 2023-06-11 22:20:23 --> Router Class Initialized
INFO - 2023-06-11 22:20:23 --> Output Class Initialized
INFO - 2023-06-11 22:20:23 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:23 --> Input Class Initialized
INFO - 2023-06-11 22:20:23 --> Language Class Initialized
INFO - 2023-06-11 22:20:23 --> Loader Class Initialized
INFO - 2023-06-11 22:20:23 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:23 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:23 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:23 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:23 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:23 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:23 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:23 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:23 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:23 --> Controller Class Initialized
INFO - 2023-06-11 22:20:23 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:23 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:20:23 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:20:23 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:20:23 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:20:23 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:20:23 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:23 --> Total execution time: 0.3954
INFO - 2023-06-11 22:20:24 --> Config Class Initialized
INFO - 2023-06-11 22:20:24 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:24 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:24 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:24 --> URI Class Initialized
INFO - 2023-06-11 22:20:24 --> Router Class Initialized
INFO - 2023-06-11 22:20:24 --> Output Class Initialized
INFO - 2023-06-11 22:20:24 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:24 --> Input Class Initialized
INFO - 2023-06-11 22:20:24 --> Language Class Initialized
INFO - 2023-06-11 22:20:24 --> Loader Class Initialized
INFO - 2023-06-11 22:20:24 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:24 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:24 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:24 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:24 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:24 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:24 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:24 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:24 --> Controller Class Initialized
INFO - 2023-06-11 22:20:24 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:24 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:20:24 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:20:24 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:20:24 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:24 --> Total execution time: 0.5468
INFO - 2023-06-11 22:20:29 --> Config Class Initialized
INFO - 2023-06-11 22:20:29 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:29 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:29 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:29 --> URI Class Initialized
INFO - 2023-06-11 22:20:29 --> Router Class Initialized
INFO - 2023-06-11 22:20:29 --> Output Class Initialized
INFO - 2023-06-11 22:20:29 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:29 --> Input Class Initialized
INFO - 2023-06-11 22:20:29 --> Language Class Initialized
INFO - 2023-06-11 22:20:29 --> Loader Class Initialized
INFO - 2023-06-11 22:20:29 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:29 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:29 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:29 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:29 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:29 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:29 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:29 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:29 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:29 --> Controller Class Initialized
INFO - 2023-06-11 22:20:29 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:20:29 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:20:29 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:20:29 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:20:29 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:20:29 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:29 --> Total execution time: 0.2801
INFO - 2023-06-11 22:20:30 --> Config Class Initialized
INFO - 2023-06-11 22:20:30 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:20:30 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:20:30 --> Utf8 Class Initialized
INFO - 2023-06-11 22:20:30 --> URI Class Initialized
INFO - 2023-06-11 22:20:30 --> Router Class Initialized
INFO - 2023-06-11 22:20:30 --> Output Class Initialized
INFO - 2023-06-11 22:20:30 --> Security Class Initialized
DEBUG - 2023-06-11 22:20:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:20:30 --> Input Class Initialized
INFO - 2023-06-11 22:20:30 --> Language Class Initialized
INFO - 2023-06-11 22:20:30 --> Loader Class Initialized
INFO - 2023-06-11 22:20:30 --> Helper loaded: url_helper
INFO - 2023-06-11 22:20:30 --> Helper loaded: security_helper
INFO - 2023-06-11 22:20:30 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:20:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:20:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:20:30 --> Helper loaded: form_helper
INFO - 2023-06-11 22:20:30 --> Form Validation Class Initialized
INFO - 2023-06-11 22:20:30 --> Database Driver Class Initialized
INFO - 2023-06-11 22:20:30 --> Model "Master_model" initialized
INFO - 2023-06-11 22:20:30 --> Model "Alert" initialized
INFO - 2023-06-11 22:20:30 --> Controller Class Initialized
INFO - 2023-06-11 22:20:30 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:20:30 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:20:30 --> Final output sent to browser
DEBUG - 2023-06-11 22:20:30 --> Total execution time: 0.2262
INFO - 2023-06-11 22:21:28 --> Config Class Initialized
INFO - 2023-06-11 22:21:28 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:21:28 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:21:28 --> Utf8 Class Initialized
INFO - 2023-06-11 22:21:28 --> URI Class Initialized
INFO - 2023-06-11 22:21:28 --> Router Class Initialized
INFO - 2023-06-11 22:21:28 --> Output Class Initialized
INFO - 2023-06-11 22:21:28 --> Security Class Initialized
DEBUG - 2023-06-11 22:21:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:21:28 --> Input Class Initialized
INFO - 2023-06-11 22:21:28 --> Language Class Initialized
INFO - 2023-06-11 22:21:28 --> Loader Class Initialized
INFO - 2023-06-11 22:21:28 --> Helper loaded: url_helper
INFO - 2023-06-11 22:21:28 --> Helper loaded: security_helper
INFO - 2023-06-11 22:21:28 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:21:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:21:28 --> Helper loaded: form_helper
INFO - 2023-06-11 22:21:28 --> Form Validation Class Initialized
INFO - 2023-06-11 22:21:28 --> Database Driver Class Initialized
INFO - 2023-06-11 22:21:28 --> Model "Master_model" initialized
INFO - 2023-06-11 22:21:28 --> Model "Alert" initialized
INFO - 2023-06-11 22:21:28 --> Controller Class Initialized
INFO - 2023-06-11 22:21:28 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:21:28 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:21:28 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:21:28 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:21:28 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:21:28 --> Final output sent to browser
DEBUG - 2023-06-11 22:21:28 --> Total execution time: 0.2024
INFO - 2023-06-11 22:21:28 --> Config Class Initialized
INFO - 2023-06-11 22:21:28 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:21:28 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:21:28 --> Utf8 Class Initialized
INFO - 2023-06-11 22:21:28 --> URI Class Initialized
INFO - 2023-06-11 22:21:28 --> Router Class Initialized
INFO - 2023-06-11 22:21:28 --> Output Class Initialized
INFO - 2023-06-11 22:21:28 --> Security Class Initialized
DEBUG - 2023-06-11 22:21:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:21:28 --> Input Class Initialized
INFO - 2023-06-11 22:21:28 --> Language Class Initialized
INFO - 2023-06-11 22:21:28 --> Loader Class Initialized
INFO - 2023-06-11 22:21:28 --> Helper loaded: url_helper
INFO - 2023-06-11 22:21:28 --> Helper loaded: security_helper
INFO - 2023-06-11 22:21:28 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:21:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:21:28 --> Helper loaded: form_helper
INFO - 2023-06-11 22:21:28 --> Form Validation Class Initialized
INFO - 2023-06-11 22:21:28 --> Database Driver Class Initialized
INFO - 2023-06-11 22:21:29 --> Model "Master_model" initialized
INFO - 2023-06-11 22:21:29 --> Model "Alert" initialized
INFO - 2023-06-11 22:21:29 --> Controller Class Initialized
INFO - 2023-06-11 22:21:29 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:21:29 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:21:29 --> Query error: Unknown column 'id' in 'field list' - Invalid query: SELECT `id`, `nim`, `tahun_ajar`, `tanggal_perwalian`, `topik_perwalian`, `konten_perwalian`, `dosen_wali`
FROM `mahasiswa_perwalian`
WHERE `nim` = '201801431003'
INFO - 2023-06-11 22:21:29 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:22:24 --> Config Class Initialized
INFO - 2023-06-11 22:22:24 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:22:24 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:22:24 --> Utf8 Class Initialized
INFO - 2023-06-11 22:22:24 --> URI Class Initialized
INFO - 2023-06-11 22:22:24 --> Router Class Initialized
INFO - 2023-06-11 22:22:24 --> Output Class Initialized
INFO - 2023-06-11 22:22:24 --> Security Class Initialized
DEBUG - 2023-06-11 22:22:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:22:24 --> Input Class Initialized
INFO - 2023-06-11 22:22:24 --> Language Class Initialized
INFO - 2023-06-11 22:22:24 --> Loader Class Initialized
INFO - 2023-06-11 22:22:24 --> Helper loaded: url_helper
INFO - 2023-06-11 22:22:24 --> Helper loaded: security_helper
INFO - 2023-06-11 22:22:24 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:22:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:22:24 --> Helper loaded: form_helper
INFO - 2023-06-11 22:22:24 --> Form Validation Class Initialized
INFO - 2023-06-11 22:22:24 --> Database Driver Class Initialized
INFO - 2023-06-11 22:22:24 --> Model "Master_model" initialized
INFO - 2023-06-11 22:22:24 --> Model "Alert" initialized
INFO - 2023-06-11 22:22:24 --> Controller Class Initialized
INFO - 2023-06-11 22:22:24 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:22:24 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:22:24 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:22:24 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:22:24 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:22:24 --> Final output sent to browser
DEBUG - 2023-06-11 22:22:24 --> Total execution time: 0.4694
INFO - 2023-06-11 22:22:24 --> Config Class Initialized
INFO - 2023-06-11 22:22:24 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:22:24 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:22:24 --> Utf8 Class Initialized
INFO - 2023-06-11 22:22:24 --> URI Class Initialized
INFO - 2023-06-11 22:22:24 --> Router Class Initialized
INFO - 2023-06-11 22:22:24 --> Output Class Initialized
INFO - 2023-06-11 22:22:24 --> Security Class Initialized
DEBUG - 2023-06-11 22:22:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:22:24 --> Input Class Initialized
INFO - 2023-06-11 22:22:24 --> Language Class Initialized
INFO - 2023-06-11 22:22:24 --> Loader Class Initialized
INFO - 2023-06-11 22:22:24 --> Helper loaded: url_helper
INFO - 2023-06-11 22:22:24 --> Helper loaded: security_helper
INFO - 2023-06-11 22:22:24 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:22:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:22:24 --> Helper loaded: form_helper
INFO - 2023-06-11 22:22:24 --> Form Validation Class Initialized
INFO - 2023-06-11 22:22:24 --> Database Driver Class Initialized
INFO - 2023-06-11 22:22:25 --> Model "Master_model" initialized
INFO - 2023-06-11 22:22:25 --> Model "Alert" initialized
INFO - 2023-06-11 22:22:25 --> Controller Class Initialized
INFO - 2023-06-11 22:22:25 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:22:25 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:22:25 --> Query error: Unknown column 'inputdate' in 'field list' - Invalid query: SELECT `id_trx`, `nim`, `email_dosen`, `periode`, `inputdate`, `keterangan`
FROM `mahasiswa_perwalian`
WHERE `nim` = '201801431003'
INFO - 2023-06-11 22:22:25 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:24:53 --> Config Class Initialized
INFO - 2023-06-11 22:24:53 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:24:53 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:24:53 --> Utf8 Class Initialized
INFO - 2023-06-11 22:24:53 --> URI Class Initialized
INFO - 2023-06-11 22:24:53 --> Router Class Initialized
INFO - 2023-06-11 22:24:53 --> Output Class Initialized
INFO - 2023-06-11 22:24:53 --> Security Class Initialized
DEBUG - 2023-06-11 22:24:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:24:53 --> Input Class Initialized
INFO - 2023-06-11 22:24:53 --> Language Class Initialized
INFO - 2023-06-11 22:24:53 --> Loader Class Initialized
INFO - 2023-06-11 22:24:53 --> Helper loaded: url_helper
INFO - 2023-06-11 22:24:53 --> Helper loaded: security_helper
INFO - 2023-06-11 22:24:53 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:24:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:24:53 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:24:53 --> Helper loaded: form_helper
INFO - 2023-06-11 22:24:53 --> Form Validation Class Initialized
INFO - 2023-06-11 22:24:53 --> Database Driver Class Initialized
INFO - 2023-06-11 22:24:53 --> Model "Master_model" initialized
INFO - 2023-06-11 22:24:53 --> Model "Alert" initialized
INFO - 2023-06-11 22:24:53 --> Controller Class Initialized
INFO - 2023-06-11 22:24:53 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:24:53 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:24:53 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:24:53 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:24:53 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:24:53 --> Final output sent to browser
DEBUG - 2023-06-11 22:24:53 --> Total execution time: 0.2823
INFO - 2023-06-11 22:24:54 --> Config Class Initialized
INFO - 2023-06-11 22:24:54 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:24:54 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:24:54 --> Utf8 Class Initialized
INFO - 2023-06-11 22:24:54 --> URI Class Initialized
INFO - 2023-06-11 22:24:54 --> Router Class Initialized
INFO - 2023-06-11 22:24:54 --> Output Class Initialized
INFO - 2023-06-11 22:24:54 --> Security Class Initialized
DEBUG - 2023-06-11 22:24:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:24:54 --> Input Class Initialized
INFO - 2023-06-11 22:24:54 --> Language Class Initialized
INFO - 2023-06-11 22:24:54 --> Loader Class Initialized
INFO - 2023-06-11 22:24:54 --> Helper loaded: url_helper
INFO - 2023-06-11 22:24:54 --> Helper loaded: security_helper
INFO - 2023-06-11 22:24:54 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:24:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:24:54 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:24:54 --> Helper loaded: form_helper
INFO - 2023-06-11 22:24:54 --> Form Validation Class Initialized
INFO - 2023-06-11 22:24:54 --> Database Driver Class Initialized
INFO - 2023-06-11 22:24:54 --> Model "Master_model" initialized
INFO - 2023-06-11 22:24:54 --> Model "Alert" initialized
INFO - 2023-06-11 22:24:54 --> Controller Class Initialized
INFO - 2023-06-11 22:24:54 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:24:54 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:24:54 --> Final output sent to browser
DEBUG - 2023-06-11 22:24:54 --> Total execution time: 0.3054
INFO - 2023-06-11 22:29:37 --> Config Class Initialized
INFO - 2023-06-11 22:29:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:29:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:29:37 --> Utf8 Class Initialized
INFO - 2023-06-11 22:29:37 --> URI Class Initialized
INFO - 2023-06-11 22:29:37 --> Router Class Initialized
INFO - 2023-06-11 22:29:37 --> Output Class Initialized
INFO - 2023-06-11 22:29:37 --> Security Class Initialized
DEBUG - 2023-06-11 22:29:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:29:37 --> Input Class Initialized
INFO - 2023-06-11 22:29:37 --> Language Class Initialized
INFO - 2023-06-11 22:29:37 --> Loader Class Initialized
INFO - 2023-06-11 22:29:37 --> Helper loaded: url_helper
INFO - 2023-06-11 22:29:37 --> Helper loaded: security_helper
INFO - 2023-06-11 22:29:37 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:29:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:29:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:29:37 --> Helper loaded: form_helper
INFO - 2023-06-11 22:29:37 --> Form Validation Class Initialized
INFO - 2023-06-11 22:29:37 --> Database Driver Class Initialized
INFO - 2023-06-11 22:29:37 --> Model "Master_model" initialized
INFO - 2023-06-11 22:29:37 --> Model "Alert" initialized
INFO - 2023-06-11 22:29:37 --> Controller Class Initialized
INFO - 2023-06-11 22:29:37 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:29:37 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:29:37 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:29:37 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:29:37 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:29:37 --> Final output sent to browser
DEBUG - 2023-06-11 22:29:37 --> Total execution time: 0.2641
INFO - 2023-06-11 22:29:37 --> Config Class Initialized
INFO - 2023-06-11 22:29:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:29:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:29:37 --> Utf8 Class Initialized
INFO - 2023-06-11 22:29:37 --> URI Class Initialized
INFO - 2023-06-11 22:29:37 --> Router Class Initialized
INFO - 2023-06-11 22:29:37 --> Output Class Initialized
INFO - 2023-06-11 22:29:37 --> Security Class Initialized
DEBUG - 2023-06-11 22:29:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:29:37 --> Input Class Initialized
INFO - 2023-06-11 22:29:37 --> Language Class Initialized
INFO - 2023-06-11 22:29:37 --> Loader Class Initialized
INFO - 2023-06-11 22:29:37 --> Helper loaded: url_helper
INFO - 2023-06-11 22:29:37 --> Helper loaded: security_helper
INFO - 2023-06-11 22:29:37 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:29:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:29:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:29:37 --> Helper loaded: form_helper
INFO - 2023-06-11 22:29:37 --> Form Validation Class Initialized
INFO - 2023-06-11 22:29:37 --> Database Driver Class Initialized
INFO - 2023-06-11 22:29:37 --> Model "Master_model" initialized
INFO - 2023-06-11 22:29:37 --> Model "Alert" initialized
INFO - 2023-06-11 22:29:37 --> Controller Class Initialized
INFO - 2023-06-11 22:29:37 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:29:37 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:29:37 --> Query error: Unknown column 'inputdate' in 'field list' - Invalid query: SELECT `id_trx`, `nim`, `email_dosen`, `periode`, `inputdate`, `keterangan`
FROM `mahasiswa_perwalian`
WHERE `nim` = '201801431003'
INFO - 2023-06-11 22:29:37 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:29:41 --> Config Class Initialized
INFO - 2023-06-11 22:29:41 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:29:41 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:29:41 --> Utf8 Class Initialized
INFO - 2023-06-11 22:29:41 --> URI Class Initialized
INFO - 2023-06-11 22:29:41 --> Router Class Initialized
INFO - 2023-06-11 22:29:41 --> Output Class Initialized
INFO - 2023-06-11 22:29:41 --> Security Class Initialized
DEBUG - 2023-06-11 22:29:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:29:41 --> Input Class Initialized
INFO - 2023-06-11 22:29:41 --> Language Class Initialized
ERROR - 2023-06-11 22:29:41 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:29:41 --> Config Class Initialized
INFO - 2023-06-11 22:29:41 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:29:41 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:29:41 --> Utf8 Class Initialized
INFO - 2023-06-11 22:29:41 --> URI Class Initialized
INFO - 2023-06-11 22:29:41 --> Router Class Initialized
INFO - 2023-06-11 22:29:41 --> Output Class Initialized
INFO - 2023-06-11 22:29:41 --> Security Class Initialized
DEBUG - 2023-06-11 22:29:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:29:41 --> Input Class Initialized
INFO - 2023-06-11 22:29:41 --> Language Class Initialized
ERROR - 2023-06-11 22:29:41 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:29:44 --> Config Class Initialized
INFO - 2023-06-11 22:29:44 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:29:44 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:29:44 --> Utf8 Class Initialized
INFO - 2023-06-11 22:29:44 --> URI Class Initialized
INFO - 2023-06-11 22:29:44 --> Router Class Initialized
INFO - 2023-06-11 22:29:44 --> Output Class Initialized
INFO - 2023-06-11 22:29:44 --> Security Class Initialized
DEBUG - 2023-06-11 22:29:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:29:44 --> Input Class Initialized
INFO - 2023-06-11 22:29:44 --> Language Class Initialized
INFO - 2023-06-11 22:29:44 --> Loader Class Initialized
INFO - 2023-06-11 22:29:44 --> Helper loaded: url_helper
INFO - 2023-06-11 22:29:44 --> Helper loaded: security_helper
INFO - 2023-06-11 22:29:44 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:29:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:29:44 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:29:44 --> Helper loaded: form_helper
INFO - 2023-06-11 22:29:44 --> Form Validation Class Initialized
INFO - 2023-06-11 22:29:44 --> Database Driver Class Initialized
INFO - 2023-06-11 22:29:44 --> Model "Master_model" initialized
INFO - 2023-06-11 22:29:44 --> Model "Alert" initialized
INFO - 2023-06-11 22:29:44 --> Controller Class Initialized
INFO - 2023-06-11 22:29:44 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:29:45 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:29:45 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:29:45 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:29:45 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:29:45 --> Final output sent to browser
DEBUG - 2023-06-11 22:29:45 --> Total execution time: 0.4343
INFO - 2023-06-11 22:29:45 --> Config Class Initialized
INFO - 2023-06-11 22:29:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:29:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:29:45 --> Utf8 Class Initialized
INFO - 2023-06-11 22:29:45 --> URI Class Initialized
INFO - 2023-06-11 22:29:45 --> Router Class Initialized
INFO - 2023-06-11 22:29:45 --> Output Class Initialized
INFO - 2023-06-11 22:29:45 --> Security Class Initialized
DEBUG - 2023-06-11 22:29:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:29:45 --> Input Class Initialized
INFO - 2023-06-11 22:29:45 --> Language Class Initialized
ERROR - 2023-06-11 22:29:45 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:29:45 --> Config Class Initialized
INFO - 2023-06-11 22:29:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:29:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:29:45 --> Utf8 Class Initialized
INFO - 2023-06-11 22:29:45 --> URI Class Initialized
INFO - 2023-06-11 22:29:45 --> Router Class Initialized
INFO - 2023-06-11 22:29:45 --> Output Class Initialized
INFO - 2023-06-11 22:29:45 --> Security Class Initialized
DEBUG - 2023-06-11 22:29:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:29:45 --> Input Class Initialized
INFO - 2023-06-11 22:29:45 --> Language Class Initialized
ERROR - 2023-06-11 22:29:45 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:29:45 --> Config Class Initialized
INFO - 2023-06-11 22:29:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:29:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:29:45 --> Utf8 Class Initialized
INFO - 2023-06-11 22:29:45 --> URI Class Initialized
INFO - 2023-06-11 22:29:45 --> Router Class Initialized
INFO - 2023-06-11 22:29:45 --> Output Class Initialized
INFO - 2023-06-11 22:29:45 --> Security Class Initialized
DEBUG - 2023-06-11 22:29:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:29:45 --> Input Class Initialized
INFO - 2023-06-11 22:29:45 --> Language Class Initialized
INFO - 2023-06-11 22:29:45 --> Loader Class Initialized
INFO - 2023-06-11 22:29:45 --> Helper loaded: url_helper
INFO - 2023-06-11 22:29:45 --> Helper loaded: security_helper
INFO - 2023-06-11 22:29:45 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:29:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:29:45 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:29:45 --> Helper loaded: form_helper
INFO - 2023-06-11 22:29:45 --> Form Validation Class Initialized
INFO - 2023-06-11 22:29:45 --> Database Driver Class Initialized
INFO - 2023-06-11 22:29:45 --> Model "Master_model" initialized
INFO - 2023-06-11 22:29:45 --> Model "Alert" initialized
INFO - 2023-06-11 22:29:45 --> Controller Class Initialized
INFO - 2023-06-11 22:29:45 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:29:45 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:29:45 --> Query error: Unknown column 'inputdate' in 'field list' - Invalid query: SELECT `id_trx`, `nim`, `email_dosen`, `periode`, `inputdate`, `keterangan`
FROM `mahasiswa_perwalian`
WHERE `nim` = '201801431003'
INFO - 2023-06-11 22:29:45 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:29:51 --> Config Class Initialized
INFO - 2023-06-11 22:29:51 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:29:51 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:29:51 --> Utf8 Class Initialized
INFO - 2023-06-11 22:29:51 --> URI Class Initialized
INFO - 2023-06-11 22:29:51 --> Router Class Initialized
INFO - 2023-06-11 22:29:51 --> Output Class Initialized
INFO - 2023-06-11 22:29:51 --> Security Class Initialized
DEBUG - 2023-06-11 22:29:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:29:51 --> Input Class Initialized
INFO - 2023-06-11 22:29:51 --> Language Class Initialized
INFO - 2023-06-11 22:29:51 --> Loader Class Initialized
INFO - 2023-06-11 22:29:51 --> Helper loaded: url_helper
INFO - 2023-06-11 22:29:51 --> Helper loaded: security_helper
INFO - 2023-06-11 22:29:51 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:29:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:29:51 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:29:51 --> Helper loaded: form_helper
INFO - 2023-06-11 22:29:51 --> Form Validation Class Initialized
INFO - 2023-06-11 22:29:51 --> Database Driver Class Initialized
INFO - 2023-06-11 22:29:51 --> Model "Master_model" initialized
INFO - 2023-06-11 22:29:51 --> Model "Alert" initialized
INFO - 2023-06-11 22:29:51 --> Controller Class Initialized
INFO - 2023-06-11 22:29:51 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:29:51 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:29:51 --> Query error: Unknown column 'inputdate' in 'field list' - Invalid query: SELECT `id_trx`, `nim`, `email_dosen`, `periode`, `inputdate`, `keterangan`
FROM `mahasiswa_perwalian`
WHERE `nim` = '201801431003'
INFO - 2023-06-11 22:29:51 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:30:09 --> Config Class Initialized
INFO - 2023-06-11 22:30:09 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:09 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:09 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:09 --> URI Class Initialized
INFO - 2023-06-11 22:30:09 --> Router Class Initialized
INFO - 2023-06-11 22:30:09 --> Output Class Initialized
INFO - 2023-06-11 22:30:09 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:09 --> Input Class Initialized
INFO - 2023-06-11 22:30:09 --> Language Class Initialized
INFO - 2023-06-11 22:30:09 --> Loader Class Initialized
INFO - 2023-06-11 22:30:09 --> Helper loaded: url_helper
INFO - 2023-06-11 22:30:09 --> Helper loaded: security_helper
INFO - 2023-06-11 22:30:09 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:30:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:30:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:30:10 --> Helper loaded: form_helper
INFO - 2023-06-11 22:30:10 --> Form Validation Class Initialized
INFO - 2023-06-11 22:30:10 --> Database Driver Class Initialized
INFO - 2023-06-11 22:30:10 --> Model "Master_model" initialized
INFO - 2023-06-11 22:30:10 --> Model "Alert" initialized
INFO - 2023-06-11 22:30:10 --> Controller Class Initialized
INFO - 2023-06-11 22:30:10 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:30:10 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:30:10 --> Final output sent to browser
DEBUG - 2023-06-11 22:30:10 --> Total execution time: 0.2540
INFO - 2023-06-11 22:30:11 --> Config Class Initialized
INFO - 2023-06-11 22:30:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:11 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:11 --> URI Class Initialized
INFO - 2023-06-11 22:30:11 --> Router Class Initialized
INFO - 2023-06-11 22:30:11 --> Output Class Initialized
INFO - 2023-06-11 22:30:11 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:11 --> Input Class Initialized
INFO - 2023-06-11 22:30:11 --> Language Class Initialized
INFO - 2023-06-11 22:30:11 --> Loader Class Initialized
INFO - 2023-06-11 22:30:11 --> Helper loaded: url_helper
INFO - 2023-06-11 22:30:11 --> Helper loaded: security_helper
INFO - 2023-06-11 22:30:11 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:30:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:30:12 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:30:12 --> Helper loaded: form_helper
INFO - 2023-06-11 22:30:12 --> Form Validation Class Initialized
INFO - 2023-06-11 22:30:12 --> Database Driver Class Initialized
INFO - 2023-06-11 22:30:12 --> Model "Master_model" initialized
INFO - 2023-06-11 22:30:12 --> Model "Alert" initialized
INFO - 2023-06-11 22:30:12 --> Controller Class Initialized
INFO - 2023-06-11 22:30:12 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:30:12 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:30:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:30:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:30:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:30:12 --> Final output sent to browser
DEBUG - 2023-06-11 22:30:12 --> Total execution time: 0.3440
INFO - 2023-06-11 22:30:12 --> Config Class Initialized
INFO - 2023-06-11 22:30:12 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:12 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:12 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:12 --> URI Class Initialized
INFO - 2023-06-11 22:30:12 --> Router Class Initialized
INFO - 2023-06-11 22:30:12 --> Output Class Initialized
INFO - 2023-06-11 22:30:12 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:12 --> Input Class Initialized
INFO - 2023-06-11 22:30:12 --> Language Class Initialized
INFO - 2023-06-11 22:30:12 --> Loader Class Initialized
INFO - 2023-06-11 22:30:12 --> Helper loaded: url_helper
INFO - 2023-06-11 22:30:12 --> Helper loaded: security_helper
INFO - 2023-06-11 22:30:12 --> Database Driver Class Initialized
INFO - 2023-06-11 22:30:12 --> Config Class Initialized
INFO - 2023-06-11 22:30:12 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:12 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:12 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:12 --> URI Class Initialized
INFO - 2023-06-11 22:30:12 --> Router Class Initialized
INFO - 2023-06-11 22:30:12 --> Output Class Initialized
INFO - 2023-06-11 22:30:12 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:12 --> Input Class Initialized
INFO - 2023-06-11 22:30:12 --> Language Class Initialized
ERROR - 2023-06-11 22:30:12 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:30:12 --> Config Class Initialized
INFO - 2023-06-11 22:30:12 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:12 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:12 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:12 --> URI Class Initialized
INFO - 2023-06-11 22:30:12 --> Router Class Initialized
INFO - 2023-06-11 22:30:12 --> Output Class Initialized
INFO - 2023-06-11 22:30:12 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:12 --> Input Class Initialized
INFO - 2023-06-11 22:30:12 --> Language Class Initialized
ERROR - 2023-06-11 22:30:12 --> 404 Page Not Found: Assets/themplate
DEBUG - 2023-06-11 22:30:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:30:12 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:30:12 --> Helper loaded: form_helper
INFO - 2023-06-11 22:30:12 --> Form Validation Class Initialized
INFO - 2023-06-11 22:30:12 --> Database Driver Class Initialized
INFO - 2023-06-11 22:30:12 --> Model "Master_model" initialized
INFO - 2023-06-11 22:30:12 --> Model "Alert" initialized
INFO - 2023-06-11 22:30:12 --> Controller Class Initialized
INFO - 2023-06-11 22:30:12 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:30:12 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:30:13 --> Final output sent to browser
DEBUG - 2023-06-11 22:30:13 --> Total execution time: 0.4216
INFO - 2023-06-11 22:30:47 --> Config Class Initialized
INFO - 2023-06-11 22:30:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:47 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:47 --> URI Class Initialized
INFO - 2023-06-11 22:30:47 --> Router Class Initialized
INFO - 2023-06-11 22:30:47 --> Output Class Initialized
INFO - 2023-06-11 22:30:47 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:47 --> Input Class Initialized
INFO - 2023-06-11 22:30:47 --> Language Class Initialized
INFO - 2023-06-11 22:30:47 --> Loader Class Initialized
INFO - 2023-06-11 22:30:47 --> Helper loaded: url_helper
INFO - 2023-06-11 22:30:47 --> Helper loaded: security_helper
INFO - 2023-06-11 22:30:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:30:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:30:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:30:47 --> Helper loaded: form_helper
INFO - 2023-06-11 22:30:47 --> Form Validation Class Initialized
INFO - 2023-06-11 22:30:47 --> Database Driver Class Initialized
INFO - 2023-06-11 22:30:48 --> Model "Master_model" initialized
INFO - 2023-06-11 22:30:48 --> Model "Alert" initialized
INFO - 2023-06-11 22:30:48 --> Controller Class Initialized
INFO - 2023-06-11 22:30:48 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:30:48 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:30:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:30:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:30:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:30:48 --> Final output sent to browser
DEBUG - 2023-06-11 22:30:48 --> Total execution time: 0.4380
INFO - 2023-06-11 22:30:48 --> Config Class Initialized
INFO - 2023-06-11 22:30:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:48 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:48 --> URI Class Initialized
INFO - 2023-06-11 22:30:48 --> Router Class Initialized
INFO - 2023-06-11 22:30:48 --> Output Class Initialized
INFO - 2023-06-11 22:30:48 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:48 --> Input Class Initialized
INFO - 2023-06-11 22:30:48 --> Language Class Initialized
ERROR - 2023-06-11 22:30:48 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:30:48 --> Config Class Initialized
INFO - 2023-06-11 22:30:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:48 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:48 --> URI Class Initialized
INFO - 2023-06-11 22:30:48 --> Router Class Initialized
INFO - 2023-06-11 22:30:48 --> Output Class Initialized
INFO - 2023-06-11 22:30:48 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:48 --> Input Class Initialized
INFO - 2023-06-11 22:30:48 --> Language Class Initialized
ERROR - 2023-06-11 22:30:48 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:30:48 --> Config Class Initialized
INFO - 2023-06-11 22:30:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:48 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:48 --> URI Class Initialized
INFO - 2023-06-11 22:30:48 --> Router Class Initialized
INFO - 2023-06-11 22:30:48 --> Output Class Initialized
INFO - 2023-06-11 22:30:48 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:48 --> Input Class Initialized
INFO - 2023-06-11 22:30:48 --> Language Class Initialized
INFO - 2023-06-11 22:30:48 --> Loader Class Initialized
INFO - 2023-06-11 22:30:48 --> Helper loaded: url_helper
INFO - 2023-06-11 22:30:48 --> Helper loaded: security_helper
INFO - 2023-06-11 22:30:48 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:30:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:30:49 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:30:49 --> Helper loaded: form_helper
INFO - 2023-06-11 22:30:49 --> Form Validation Class Initialized
INFO - 2023-06-11 22:30:49 --> Database Driver Class Initialized
INFO - 2023-06-11 22:30:49 --> Model "Master_model" initialized
INFO - 2023-06-11 22:30:49 --> Model "Alert" initialized
INFO - 2023-06-11 22:30:49 --> Controller Class Initialized
INFO - 2023-06-11 22:30:49 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:30:49 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:30:49 --> Query error: Unknown column 'topik_perwalian' in 'field list' - Invalid query: SELECT `id_trx`, `nim`, `email_dosen`, `periode`, `input_date`, `keterangan`, `topik_perwalian`
FROM `mahasiswa_perwalian`
WHERE `nim` = '201801431003'
INFO - 2023-06-11 22:30:49 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:30:54 --> Config Class Initialized
INFO - 2023-06-11 22:30:54 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:30:54 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:30:54 --> Utf8 Class Initialized
INFO - 2023-06-11 22:30:54 --> URI Class Initialized
INFO - 2023-06-11 22:30:54 --> Router Class Initialized
INFO - 2023-06-11 22:30:54 --> Output Class Initialized
INFO - 2023-06-11 22:30:54 --> Security Class Initialized
DEBUG - 2023-06-11 22:30:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:30:54 --> Input Class Initialized
INFO - 2023-06-11 22:30:54 --> Language Class Initialized
INFO - 2023-06-11 22:30:54 --> Loader Class Initialized
INFO - 2023-06-11 22:30:54 --> Helper loaded: url_helper
INFO - 2023-06-11 22:30:54 --> Helper loaded: security_helper
INFO - 2023-06-11 22:30:54 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:30:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:30:54 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:30:54 --> Helper loaded: form_helper
INFO - 2023-06-11 22:30:54 --> Form Validation Class Initialized
INFO - 2023-06-11 22:30:54 --> Database Driver Class Initialized
INFO - 2023-06-11 22:30:54 --> Model "Master_model" initialized
INFO - 2023-06-11 22:30:54 --> Model "Alert" initialized
INFO - 2023-06-11 22:30:54 --> Controller Class Initialized
INFO - 2023-06-11 22:30:54 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:30:54 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:30:54 --> Query error: Unknown column 'topik_perwalian' in 'field list' - Invalid query: SELECT `id_trx`, `nim`, `email_dosen`, `periode`, `input_date`, `keterangan`, `topik_perwalian`
FROM `mahasiswa_perwalian`
WHERE `nim` = '201801431003'
INFO - 2023-06-11 22:30:54 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:31:25 --> Config Class Initialized
INFO - 2023-06-11 22:31:25 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:31:25 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:31:25 --> Utf8 Class Initialized
INFO - 2023-06-11 22:31:25 --> URI Class Initialized
INFO - 2023-06-11 22:31:25 --> Router Class Initialized
INFO - 2023-06-11 22:31:25 --> Output Class Initialized
INFO - 2023-06-11 22:31:25 --> Security Class Initialized
DEBUG - 2023-06-11 22:31:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:31:25 --> Input Class Initialized
INFO - 2023-06-11 22:31:25 --> Language Class Initialized
INFO - 2023-06-11 22:31:25 --> Loader Class Initialized
INFO - 2023-06-11 22:31:25 --> Helper loaded: url_helper
INFO - 2023-06-11 22:31:25 --> Helper loaded: security_helper
INFO - 2023-06-11 22:31:25 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:31:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:31:25 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:31:25 --> Helper loaded: form_helper
INFO - 2023-06-11 22:31:25 --> Form Validation Class Initialized
INFO - 2023-06-11 22:31:25 --> Database Driver Class Initialized
INFO - 2023-06-11 22:31:25 --> Model "Master_model" initialized
INFO - 2023-06-11 22:31:25 --> Model "Alert" initialized
INFO - 2023-06-11 22:31:25 --> Controller Class Initialized
INFO - 2023-06-11 22:31:25 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:31:25 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:31:25 --> Final output sent to browser
DEBUG - 2023-06-11 22:31:25 --> Total execution time: 0.3151
INFO - 2023-06-11 22:31:26 --> Config Class Initialized
INFO - 2023-06-11 22:31:26 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:31:26 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:31:26 --> Utf8 Class Initialized
INFO - 2023-06-11 22:31:26 --> URI Class Initialized
INFO - 2023-06-11 22:31:26 --> Router Class Initialized
INFO - 2023-06-11 22:31:26 --> Output Class Initialized
INFO - 2023-06-11 22:31:26 --> Security Class Initialized
DEBUG - 2023-06-11 22:31:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:31:26 --> Input Class Initialized
INFO - 2023-06-11 22:31:26 --> Language Class Initialized
INFO - 2023-06-11 22:31:26 --> Loader Class Initialized
INFO - 2023-06-11 22:31:26 --> Helper loaded: url_helper
INFO - 2023-06-11 22:31:26 --> Helper loaded: security_helper
INFO - 2023-06-11 22:31:26 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:31:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:31:26 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:31:26 --> Helper loaded: form_helper
INFO - 2023-06-11 22:31:26 --> Form Validation Class Initialized
INFO - 2023-06-11 22:31:26 --> Database Driver Class Initialized
INFO - 2023-06-11 22:31:27 --> Model "Master_model" initialized
INFO - 2023-06-11 22:31:27 --> Model "Alert" initialized
INFO - 2023-06-11 22:31:27 --> Controller Class Initialized
INFO - 2023-06-11 22:31:27 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:31:27 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:31:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:31:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:31:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:31:27 --> Final output sent to browser
DEBUG - 2023-06-11 22:31:27 --> Total execution time: 0.2190
INFO - 2023-06-11 22:31:27 --> Config Class Initialized
INFO - 2023-06-11 22:31:27 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:31:27 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:31:27 --> Utf8 Class Initialized
INFO - 2023-06-11 22:31:27 --> URI Class Initialized
INFO - 2023-06-11 22:31:27 --> Router Class Initialized
INFO - 2023-06-11 22:31:27 --> Output Class Initialized
INFO - 2023-06-11 22:31:27 --> Security Class Initialized
DEBUG - 2023-06-11 22:31:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:31:27 --> Input Class Initialized
INFO - 2023-06-11 22:31:27 --> Language Class Initialized
ERROR - 2023-06-11 22:31:27 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:31:27 --> Config Class Initialized
INFO - 2023-06-11 22:31:27 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:31:27 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:31:27 --> Utf8 Class Initialized
INFO - 2023-06-11 22:31:27 --> URI Class Initialized
INFO - 2023-06-11 22:31:27 --> Router Class Initialized
INFO - 2023-06-11 22:31:27 --> Output Class Initialized
INFO - 2023-06-11 22:31:27 --> Security Class Initialized
DEBUG - 2023-06-11 22:31:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:31:27 --> Config Class Initialized
INFO - 2023-06-11 22:31:27 --> Input Class Initialized
INFO - 2023-06-11 22:31:27 --> Hooks Class Initialized
INFO - 2023-06-11 22:31:27 --> Language Class Initialized
INFO - 2023-06-11 22:31:27 --> Loader Class Initialized
DEBUG - 2023-06-11 22:31:27 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:31:27 --> Utf8 Class Initialized
INFO - 2023-06-11 22:31:27 --> Helper loaded: url_helper
INFO - 2023-06-11 22:31:27 --> URI Class Initialized
INFO - 2023-06-11 22:31:27 --> Helper loaded: security_helper
INFO - 2023-06-11 22:31:27 --> Router Class Initialized
INFO - 2023-06-11 22:31:27 --> Database Driver Class Initialized
INFO - 2023-06-11 22:31:27 --> Output Class Initialized
INFO - 2023-06-11 22:31:27 --> Security Class Initialized
DEBUG - 2023-06-11 22:31:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:31:27 --> Input Class Initialized
INFO - 2023-06-11 22:31:27 --> Language Class Initialized
ERROR - 2023-06-11 22:31:27 --> 404 Page Not Found: Assets/themplate
DEBUG - 2023-06-11 22:31:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:31:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:31:27 --> Helper loaded: form_helper
INFO - 2023-06-11 22:31:27 --> Form Validation Class Initialized
INFO - 2023-06-11 22:31:27 --> Database Driver Class Initialized
INFO - 2023-06-11 22:31:27 --> Model "Master_model" initialized
INFO - 2023-06-11 22:31:27 --> Model "Alert" initialized
INFO - 2023-06-11 22:31:27 --> Controller Class Initialized
INFO - 2023-06-11 22:31:27 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:31:27 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:31:27 --> Final output sent to browser
DEBUG - 2023-06-11 22:31:27 --> Total execution time: 0.2436
INFO - 2023-06-11 22:39:01 --> Config Class Initialized
INFO - 2023-06-11 22:39:01 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:39:01 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:39:01 --> Utf8 Class Initialized
INFO - 2023-06-11 22:39:01 --> URI Class Initialized
INFO - 2023-06-11 22:39:01 --> Router Class Initialized
INFO - 2023-06-11 22:39:01 --> Output Class Initialized
INFO - 2023-06-11 22:39:01 --> Security Class Initialized
DEBUG - 2023-06-11 22:39:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:39:01 --> Input Class Initialized
INFO - 2023-06-11 22:39:01 --> Language Class Initialized
INFO - 2023-06-11 22:39:01 --> Loader Class Initialized
INFO - 2023-06-11 22:39:01 --> Helper loaded: url_helper
INFO - 2023-06-11 22:39:01 --> Helper loaded: security_helper
INFO - 2023-06-11 22:39:01 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:39:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:39:01 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:39:01 --> Helper loaded: form_helper
INFO - 2023-06-11 22:39:01 --> Form Validation Class Initialized
INFO - 2023-06-11 22:39:01 --> Database Driver Class Initialized
INFO - 2023-06-11 22:39:01 --> Model "Master_model" initialized
INFO - 2023-06-11 22:39:01 --> Model "Alert" initialized
INFO - 2023-06-11 22:39:01 --> Controller Class Initialized
INFO - 2023-06-11 22:39:01 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:39:01 --> Model "Baak_f" initialized
INFO - 2023-06-11 22:39:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:39:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:39:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:39:01 --> Final output sent to browser
DEBUG - 2023-06-11 22:39:01 --> Total execution time: 0.3966
INFO - 2023-06-11 22:39:02 --> Config Class Initialized
INFO - 2023-06-11 22:39:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:39:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:39:02 --> Utf8 Class Initialized
INFO - 2023-06-11 22:39:02 --> URI Class Initialized
INFO - 2023-06-11 22:39:02 --> Router Class Initialized
INFO - 2023-06-11 22:39:02 --> Output Class Initialized
INFO - 2023-06-11 22:39:02 --> Security Class Initialized
DEBUG - 2023-06-11 22:39:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:39:02 --> Input Class Initialized
INFO - 2023-06-11 22:39:02 --> Language Class Initialized
ERROR - 2023-06-11 22:39:02 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:40:50 --> Config Class Initialized
INFO - 2023-06-11 22:40:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:40:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:40:50 --> Utf8 Class Initialized
INFO - 2023-06-11 22:40:50 --> URI Class Initialized
INFO - 2023-06-11 22:40:50 --> Router Class Initialized
INFO - 2023-06-11 22:40:50 --> Output Class Initialized
INFO - 2023-06-11 22:40:50 --> Security Class Initialized
DEBUG - 2023-06-11 22:40:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:40:50 --> Input Class Initialized
INFO - 2023-06-11 22:40:50 --> Language Class Initialized
INFO - 2023-06-11 22:40:50 --> Loader Class Initialized
INFO - 2023-06-11 22:40:50 --> Helper loaded: url_helper
INFO - 2023-06-11 22:40:50 --> Helper loaded: security_helper
INFO - 2023-06-11 22:40:50 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:40:50 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:40:50 --> Helper loaded: form_helper
INFO - 2023-06-11 22:40:50 --> Form Validation Class Initialized
INFO - 2023-06-11 22:40:50 --> Database Driver Class Initialized
INFO - 2023-06-11 22:40:51 --> Model "Master_model" initialized
INFO - 2023-06-11 22:40:51 --> Model "Alert" initialized
INFO - 2023-06-11 22:40:51 --> Controller Class Initialized
INFO - 2023-06-11 22:40:51 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:40:51 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:40:51 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2023-06-11 22:40:51 --> Query error: Unknown column 'topik_perwalian' in 'field list' - Invalid query: INSERT INTO `mahasiswa_perwalian` (`nim`, `periode`, `topik_perwalian`, `keterangan`, `input_date`, `email_dosen`) VALUES ('201801431003', '20222', 'tes', 'tes', '2023-06-15', '201801431003')
INFO - 2023-06-11 22:40:51 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:41:09 --> Config Class Initialized
INFO - 2023-06-11 22:41:09 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:09 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:09 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:09 --> URI Class Initialized
INFO - 2023-06-11 22:41:09 --> Router Class Initialized
INFO - 2023-06-11 22:41:09 --> Output Class Initialized
INFO - 2023-06-11 22:41:09 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:09 --> Input Class Initialized
INFO - 2023-06-11 22:41:09 --> Language Class Initialized
INFO - 2023-06-11 22:41:09 --> Loader Class Initialized
INFO - 2023-06-11 22:41:09 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:09 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:09 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:09 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:09 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:09 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:09 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:09 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:09 --> Controller Class Initialized
INFO - 2023-06-11 22:41:09 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:41:09 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:41:09 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:41:09 --> Input - perwalian, data :{"nim":"201801431003","periode":"20222","topik_pewralian":"tes","keterangan":"tes","input_date":"2023-06-15","email_dosen":"201801431003"}
INFO - 2023-06-11 22:41:09 --> Config Class Initialized
INFO - 2023-06-11 22:41:09 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:09 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:09 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:09 --> URI Class Initialized
INFO - 2023-06-11 22:41:09 --> Router Class Initialized
INFO - 2023-06-11 22:41:09 --> Output Class Initialized
INFO - 2023-06-11 22:41:09 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:09 --> Input Class Initialized
INFO - 2023-06-11 22:41:09 --> Language Class Initialized
INFO - 2023-06-11 22:41:09 --> Loader Class Initialized
INFO - 2023-06-11 22:41:09 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:09 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:09 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:09 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:09 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:09 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:09 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:09 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:09 --> Controller Class Initialized
INFO - 2023-06-11 22:41:09 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:41:09 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:41:09 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:41:09 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:41:09 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:41:09 --> Final output sent to browser
DEBUG - 2023-06-11 22:41:09 --> Total execution time: 0.1970
INFO - 2023-06-11 22:41:10 --> Config Class Initialized
INFO - 2023-06-11 22:41:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:10 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:10 --> URI Class Initialized
INFO - 2023-06-11 22:41:10 --> Router Class Initialized
INFO - 2023-06-11 22:41:10 --> Output Class Initialized
INFO - 2023-06-11 22:41:10 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:10 --> Input Class Initialized
INFO - 2023-06-11 22:41:10 --> Language Class Initialized
ERROR - 2023-06-11 22:41:10 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:41:10 --> Config Class Initialized
INFO - 2023-06-11 22:41:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:10 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:10 --> URI Class Initialized
INFO - 2023-06-11 22:41:10 --> Router Class Initialized
INFO - 2023-06-11 22:41:10 --> Output Class Initialized
INFO - 2023-06-11 22:41:10 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:10 --> Input Class Initialized
INFO - 2023-06-11 22:41:10 --> Language Class Initialized
ERROR - 2023-06-11 22:41:10 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:41:10 --> Config Class Initialized
INFO - 2023-06-11 22:41:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:10 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:10 --> URI Class Initialized
INFO - 2023-06-11 22:41:10 --> Router Class Initialized
INFO - 2023-06-11 22:41:10 --> Output Class Initialized
INFO - 2023-06-11 22:41:10 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:10 --> Input Class Initialized
INFO - 2023-06-11 22:41:10 --> Language Class Initialized
INFO - 2023-06-11 22:41:10 --> Loader Class Initialized
INFO - 2023-06-11 22:41:10 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:10 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:10 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:11 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:11 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:11 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:11 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:11 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:11 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:11 --> Controller Class Initialized
INFO - 2023-06-11 22:41:11 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:41:11 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:41:11 --> Final output sent to browser
DEBUG - 2023-06-11 22:41:11 --> Total execution time: 0.2935
INFO - 2023-06-11 22:41:37 --> Config Class Initialized
INFO - 2023-06-11 22:41:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:37 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:37 --> URI Class Initialized
INFO - 2023-06-11 22:41:37 --> Router Class Initialized
INFO - 2023-06-11 22:41:37 --> Output Class Initialized
INFO - 2023-06-11 22:41:37 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:37 --> Input Class Initialized
INFO - 2023-06-11 22:41:37 --> Language Class Initialized
INFO - 2023-06-11 22:41:37 --> Loader Class Initialized
INFO - 2023-06-11 22:41:37 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:37 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:37 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:37 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:37 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:37 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:37 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:37 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:37 --> Controller Class Initialized
INFO - 2023-06-11 22:41:37 --> Config Class Initialized
INFO - 2023-06-11 22:41:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:37 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:37 --> URI Class Initialized
DEBUG - 2023-06-11 22:41:37 --> No URI present. Default controller set.
INFO - 2023-06-11 22:41:37 --> Router Class Initialized
INFO - 2023-06-11 22:41:37 --> Output Class Initialized
INFO - 2023-06-11 22:41:37 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:37 --> Input Class Initialized
INFO - 2023-06-11 22:41:37 --> Language Class Initialized
INFO - 2023-06-11 22:41:37 --> Loader Class Initialized
INFO - 2023-06-11 22:41:37 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:37 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:37 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:37 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:37 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:37 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:37 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:37 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:37 --> Controller Class Initialized
INFO - 2023-06-11 22:41:38 --> Config Class Initialized
INFO - 2023-06-11 22:41:38 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:38 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:38 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:38 --> URI Class Initialized
INFO - 2023-06-11 22:41:38 --> Router Class Initialized
INFO - 2023-06-11 22:41:38 --> Output Class Initialized
INFO - 2023-06-11 22:41:38 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:38 --> Input Class Initialized
INFO - 2023-06-11 22:41:38 --> Language Class Initialized
INFO - 2023-06-11 22:41:38 --> Loader Class Initialized
INFO - 2023-06-11 22:41:38 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:38 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:38 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:38 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:38 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:38 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:38 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:38 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:38 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:38 --> Controller Class Initialized
INFO - 2023-06-11 22:41:38 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 22:41:38 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:41:38 --> Final output sent to browser
DEBUG - 2023-06-11 22:41:38 --> Total execution time: 0.1800
INFO - 2023-06-11 22:41:38 --> Config Class Initialized
INFO - 2023-06-11 22:41:38 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:38 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:38 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:38 --> URI Class Initialized
INFO - 2023-06-11 22:41:38 --> Router Class Initialized
INFO - 2023-06-11 22:41:38 --> Output Class Initialized
INFO - 2023-06-11 22:41:38 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:38 --> Input Class Initialized
INFO - 2023-06-11 22:41:38 --> Language Class Initialized
ERROR - 2023-06-11 22:41:38 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:41:38 --> Config Class Initialized
INFO - 2023-06-11 22:41:38 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:38 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:38 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:38 --> URI Class Initialized
INFO - 2023-06-11 22:41:38 --> Router Class Initialized
INFO - 2023-06-11 22:41:38 --> Output Class Initialized
INFO - 2023-06-11 22:41:38 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:38 --> Input Class Initialized
INFO - 2023-06-11 22:41:38 --> Language Class Initialized
ERROR - 2023-06-11 22:41:38 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:41:42 --> Config Class Initialized
INFO - 2023-06-11 22:41:42 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:42 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:42 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:42 --> URI Class Initialized
INFO - 2023-06-11 22:41:42 --> Router Class Initialized
INFO - 2023-06-11 22:41:42 --> Output Class Initialized
INFO - 2023-06-11 22:41:42 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:42 --> Input Class Initialized
INFO - 2023-06-11 22:41:42 --> Language Class Initialized
INFO - 2023-06-11 22:41:42 --> Loader Class Initialized
INFO - 2023-06-11 22:41:42 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:42 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:42 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:42 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:42 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:42 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:42 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:42 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:42 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:42 --> Controller Class Initialized
INFO - 2023-06-11 22:41:42 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:41:42 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:42 --> Model "M_login" initialized
INFO - 2023-06-11 22:41:42 --> Final output sent to browser
DEBUG - 2023-06-11 22:41:42 --> Total execution time: 0.2445
INFO - 2023-06-11 22:41:42 --> Config Class Initialized
INFO - 2023-06-11 22:41:42 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:42 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:42 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:42 --> URI Class Initialized
INFO - 2023-06-11 22:41:42 --> Router Class Initialized
INFO - 2023-06-11 22:41:42 --> Output Class Initialized
INFO - 2023-06-11 22:41:42 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:42 --> Input Class Initialized
INFO - 2023-06-11 22:41:42 --> Language Class Initialized
INFO - 2023-06-11 22:41:42 --> Loader Class Initialized
INFO - 2023-06-11 22:41:42 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:42 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:42 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:42 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:42 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:42 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:42 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:42 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:42 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:42 --> Controller Class Initialized
INFO - 2023-06-11 22:41:43 --> Config Class Initialized
INFO - 2023-06-11 22:41:43 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:43 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:43 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:43 --> URI Class Initialized
INFO - 2023-06-11 22:41:43 --> Router Class Initialized
INFO - 2023-06-11 22:41:43 --> Output Class Initialized
INFO - 2023-06-11 22:41:43 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:43 --> Input Class Initialized
INFO - 2023-06-11 22:41:43 --> Language Class Initialized
INFO - 2023-06-11 22:41:43 --> Loader Class Initialized
INFO - 2023-06-11 22:41:43 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:43 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:43 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:43 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:43 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:43 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:43 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:43 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:43 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:43 --> Controller Class Initialized
INFO - 2023-06-11 22:41:43 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:41:43 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:41:43 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/dashboard.php
INFO - 2023-06-11 22:41:43 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:41:43 --> Final output sent to browser
DEBUG - 2023-06-11 22:41:43 --> Total execution time: 0.3964
INFO - 2023-06-11 22:41:43 --> Config Class Initialized
INFO - 2023-06-11 22:41:43 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:43 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:43 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:43 --> URI Class Initialized
INFO - 2023-06-11 22:41:43 --> Router Class Initialized
INFO - 2023-06-11 22:41:43 --> Output Class Initialized
INFO - 2023-06-11 22:41:43 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:43 --> Input Class Initialized
INFO - 2023-06-11 22:41:43 --> Language Class Initialized
ERROR - 2023-06-11 22:41:43 --> 404 Page Not Found: Assets/img_mahasiswa
INFO - 2023-06-11 22:41:43 --> Config Class Initialized
INFO - 2023-06-11 22:41:43 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:43 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:43 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:43 --> URI Class Initialized
INFO - 2023-06-11 22:41:43 --> Router Class Initialized
INFO - 2023-06-11 22:41:43 --> Output Class Initialized
INFO - 2023-06-11 22:41:43 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:43 --> Input Class Initialized
INFO - 2023-06-11 22:41:43 --> Language Class Initialized
ERROR - 2023-06-11 22:41:43 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:41:47 --> Config Class Initialized
INFO - 2023-06-11 22:41:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:47 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:47 --> URI Class Initialized
INFO - 2023-06-11 22:41:47 --> Router Class Initialized
INFO - 2023-06-11 22:41:47 --> Output Class Initialized
INFO - 2023-06-11 22:41:47 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:47 --> Input Class Initialized
INFO - 2023-06-11 22:41:47 --> Language Class Initialized
INFO - 2023-06-11 22:41:47 --> Loader Class Initialized
INFO - 2023-06-11 22:41:47 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:47 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:47 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:47 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:47 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:47 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:47 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:47 --> Controller Class Initialized
INFO - 2023-06-11 22:41:47 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:41:47 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:41:47 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:41:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:41:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:41:47 --> Model "Baak_f" initialized
ERROR - 2023-06-11 22:41:47 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 22:41:47 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 22:41:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 22:41:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:41:47 --> Final output sent to browser
DEBUG - 2023-06-11 22:41:47 --> Total execution time: 0.4508
INFO - 2023-06-11 22:41:48 --> Config Class Initialized
INFO - 2023-06-11 22:41:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:48 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:48 --> URI Class Initialized
INFO - 2023-06-11 22:41:48 --> Router Class Initialized
INFO - 2023-06-11 22:41:48 --> Output Class Initialized
INFO - 2023-06-11 22:41:48 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:48 --> Input Class Initialized
INFO - 2023-06-11 22:41:48 --> Language Class Initialized
ERROR - 2023-06-11 22:41:48 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:41:48 --> Config Class Initialized
INFO - 2023-06-11 22:41:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:48 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:48 --> URI Class Initialized
INFO - 2023-06-11 22:41:48 --> Router Class Initialized
INFO - 2023-06-11 22:41:48 --> Output Class Initialized
INFO - 2023-06-11 22:41:48 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:48 --> Input Class Initialized
INFO - 2023-06-11 22:41:48 --> Language Class Initialized
ERROR - 2023-06-11 22:41:48 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:41:48 --> Config Class Initialized
INFO - 2023-06-11 22:41:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:41:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:41:48 --> Utf8 Class Initialized
INFO - 2023-06-11 22:41:48 --> URI Class Initialized
INFO - 2023-06-11 22:41:48 --> Router Class Initialized
INFO - 2023-06-11 22:41:48 --> Output Class Initialized
INFO - 2023-06-11 22:41:48 --> Security Class Initialized
DEBUG - 2023-06-11 22:41:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:41:48 --> Input Class Initialized
INFO - 2023-06-11 22:41:48 --> Language Class Initialized
INFO - 2023-06-11 22:41:48 --> Loader Class Initialized
INFO - 2023-06-11 22:41:48 --> Helper loaded: url_helper
INFO - 2023-06-11 22:41:48 --> Helper loaded: security_helper
INFO - 2023-06-11 22:41:48 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:41:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:41:48 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:41:48 --> Helper loaded: form_helper
INFO - 2023-06-11 22:41:48 --> Form Validation Class Initialized
INFO - 2023-06-11 22:41:48 --> Database Driver Class Initialized
INFO - 2023-06-11 22:41:48 --> Model "Master_model" initialized
INFO - 2023-06-11 22:41:48 --> Model "Alert" initialized
INFO - 2023-06-11 22:41:48 --> Controller Class Initialized
INFO - 2023-06-11 22:41:48 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:41:48 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:41:49 --> Final output sent to browser
DEBUG - 2023-06-11 22:41:49 --> Total execution time: 0.5921
INFO - 2023-06-11 22:42:13 --> Config Class Initialized
INFO - 2023-06-11 22:42:13 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:13 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:13 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:13 --> URI Class Initialized
INFO - 2023-06-11 22:42:13 --> Router Class Initialized
INFO - 2023-06-11 22:42:13 --> Output Class Initialized
INFO - 2023-06-11 22:42:13 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:13 --> Input Class Initialized
INFO - 2023-06-11 22:42:13 --> Language Class Initialized
INFO - 2023-06-11 22:42:13 --> Loader Class Initialized
INFO - 2023-06-11 22:42:13 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:13 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:13 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:13 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:13 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:13 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:13 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:13 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:13 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:13 --> Controller Class Initialized
INFO - 2023-06-11 22:42:13 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:13 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:42:13 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:42:13 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:42:13 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:42:13 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:13 --> Total execution time: 0.1772
INFO - 2023-06-11 22:42:14 --> Config Class Initialized
INFO - 2023-06-11 22:42:14 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:14 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:14 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:14 --> URI Class Initialized
INFO - 2023-06-11 22:42:14 --> Router Class Initialized
INFO - 2023-06-11 22:42:14 --> Output Class Initialized
INFO - 2023-06-11 22:42:14 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:14 --> Input Class Initialized
INFO - 2023-06-11 22:42:14 --> Language Class Initialized
INFO - 2023-06-11 22:42:14 --> Loader Class Initialized
INFO - 2023-06-11 22:42:14 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:14 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:14 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:14 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:14 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:14 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:14 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:14 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:14 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:14 --> Controller Class Initialized
INFO - 2023-06-11 22:42:14 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:14 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:42:14 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:14 --> Total execution time: 0.2424
INFO - 2023-06-11 22:42:16 --> Config Class Initialized
INFO - 2023-06-11 22:42:16 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:16 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:16 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:16 --> URI Class Initialized
INFO - 2023-06-11 22:42:16 --> Router Class Initialized
INFO - 2023-06-11 22:42:16 --> Output Class Initialized
INFO - 2023-06-11 22:42:16 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:16 --> Input Class Initialized
INFO - 2023-06-11 22:42:16 --> Language Class Initialized
INFO - 2023-06-11 22:42:16 --> Loader Class Initialized
INFO - 2023-06-11 22:42:16 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:16 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:16 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:16 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:16 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:16 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:16 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:16 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:16 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:16 --> Controller Class Initialized
INFO - 2023-06-11 22:42:16 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:16 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:42:16 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:42:16 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:42:16 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:42:16 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:16 --> Total execution time: 0.2029
INFO - 2023-06-11 22:42:16 --> Config Class Initialized
INFO - 2023-06-11 22:42:16 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:16 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:16 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:16 --> URI Class Initialized
INFO - 2023-06-11 22:42:16 --> Router Class Initialized
INFO - 2023-06-11 22:42:16 --> Output Class Initialized
INFO - 2023-06-11 22:42:16 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:16 --> Input Class Initialized
INFO - 2023-06-11 22:42:16 --> Language Class Initialized
INFO - 2023-06-11 22:42:16 --> Loader Class Initialized
INFO - 2023-06-11 22:42:16 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:16 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:16 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:16 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:16 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:16 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:16 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:16 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:16 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:16 --> Controller Class Initialized
INFO - 2023-06-11 22:42:16 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:16 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:42:16 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:16 --> Total execution time: 0.2361
INFO - 2023-06-11 22:42:18 --> Config Class Initialized
INFO - 2023-06-11 22:42:18 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:18 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:18 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:18 --> URI Class Initialized
INFO - 2023-06-11 22:42:18 --> Router Class Initialized
INFO - 2023-06-11 22:42:18 --> Output Class Initialized
INFO - 2023-06-11 22:42:18 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:18 --> Input Class Initialized
INFO - 2023-06-11 22:42:18 --> Language Class Initialized
INFO - 2023-06-11 22:42:18 --> Loader Class Initialized
INFO - 2023-06-11 22:42:18 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:18 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:18 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:18 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:18 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:18 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:18 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:18 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:18 --> Controller Class Initialized
INFO - 2023-06-11 22:42:18 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:18 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:42:18 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:42:18 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\mahasiswa/hasil_studi.php
INFO - 2023-06-11 22:42:18 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:42:18 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:18 --> Total execution time: 0.5467
INFO - 2023-06-11 22:42:23 --> Config Class Initialized
INFO - 2023-06-11 22:42:23 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:23 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:23 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:23 --> URI Class Initialized
INFO - 2023-06-11 22:42:23 --> Router Class Initialized
INFO - 2023-06-11 22:42:23 --> Output Class Initialized
INFO - 2023-06-11 22:42:23 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:23 --> Input Class Initialized
INFO - 2023-06-11 22:42:23 --> Language Class Initialized
INFO - 2023-06-11 22:42:23 --> Loader Class Initialized
INFO - 2023-06-11 22:42:23 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:23 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:23 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:23 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:23 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:23 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:23 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:23 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:23 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:23 --> Controller Class Initialized
INFO - 2023-06-11 22:42:23 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:23 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:42:23 --> Model "Dosen_t" initialized
INFO - 2023-06-11 22:42:23 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:42:23 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:42:23 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:42:23 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:23 --> Total execution time: 0.1895
INFO - 2023-06-11 22:42:23 --> Config Class Initialized
INFO - 2023-06-11 22:42:23 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:23 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:23 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:23 --> URI Class Initialized
INFO - 2023-06-11 22:42:23 --> Router Class Initialized
INFO - 2023-06-11 22:42:23 --> Output Class Initialized
INFO - 2023-06-11 22:42:23 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:23 --> Input Class Initialized
INFO - 2023-06-11 22:42:23 --> Language Class Initialized
ERROR - 2023-06-11 22:42:23 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:42:23 --> Config Class Initialized
INFO - 2023-06-11 22:42:23 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:23 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:23 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:23 --> URI Class Initialized
INFO - 2023-06-11 22:42:23 --> Router Class Initialized
INFO - 2023-06-11 22:42:23 --> Output Class Initialized
INFO - 2023-06-11 22:42:23 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:23 --> Input Class Initialized
INFO - 2023-06-11 22:42:23 --> Language Class Initialized
ERROR - 2023-06-11 22:42:23 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:42:24 --> Config Class Initialized
INFO - 2023-06-11 22:42:24 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:24 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:24 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:24 --> URI Class Initialized
INFO - 2023-06-11 22:42:24 --> Router Class Initialized
INFO - 2023-06-11 22:42:24 --> Output Class Initialized
INFO - 2023-06-11 22:42:24 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:24 --> Input Class Initialized
INFO - 2023-06-11 22:42:24 --> Language Class Initialized
INFO - 2023-06-11 22:42:24 --> Loader Class Initialized
INFO - 2023-06-11 22:42:24 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:24 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:24 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:24 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:24 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:24 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:24 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:24 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:24 --> Controller Class Initialized
INFO - 2023-06-11 22:42:24 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:24 --> Model "Baak_dt" initialized
DEBUG - 2023-06-11 22:42:24 --> Datatables class already loaded. Second attempt ignored.
INFO - 2023-06-11 22:42:24 --> Model "Dosen_dt" initialized
INFO - 2023-06-11 22:42:24 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:24 --> Total execution time: 0.4650
INFO - 2023-06-11 22:42:31 --> Config Class Initialized
INFO - 2023-06-11 22:42:31 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:31 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:31 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:31 --> URI Class Initialized
INFO - 2023-06-11 22:42:31 --> Router Class Initialized
INFO - 2023-06-11 22:42:31 --> Output Class Initialized
INFO - 2023-06-11 22:42:31 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:31 --> Input Class Initialized
INFO - 2023-06-11 22:42:31 --> Language Class Initialized
INFO - 2023-06-11 22:42:31 --> Loader Class Initialized
INFO - 2023-06-11 22:42:31 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:31 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:31 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:31 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:31 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:31 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:31 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:31 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:31 --> Controller Class Initialized
INFO - 2023-06-11 22:42:31 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:31 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:42:31 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:42:32 --> Config Class Initialized
INFO - 2023-06-11 22:42:32 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:32 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:32 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:32 --> URI Class Initialized
INFO - 2023-06-11 22:42:32 --> Router Class Initialized
INFO - 2023-06-11 22:42:32 --> Output Class Initialized
INFO - 2023-06-11 22:42:32 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:32 --> Input Class Initialized
INFO - 2023-06-11 22:42:32 --> Language Class Initialized
INFO - 2023-06-11 22:42:32 --> Loader Class Initialized
INFO - 2023-06-11 22:42:32 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:32 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:32 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:32 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:32 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:32 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:32 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:32 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:32 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:32 --> Controller Class Initialized
INFO - 2023-06-11 22:42:32 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:32 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:42:32 --> Model "Dosen_t" initialized
INFO - 2023-06-11 22:42:32 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:42:32 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:42:32 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:42:32 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:32 --> Total execution time: 0.1859
INFO - 2023-06-11 22:42:32 --> Config Class Initialized
INFO - 2023-06-11 22:42:32 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:32 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:32 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:32 --> URI Class Initialized
INFO - 2023-06-11 22:42:32 --> Router Class Initialized
INFO - 2023-06-11 22:42:32 --> Output Class Initialized
INFO - 2023-06-11 22:42:32 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:32 --> Input Class Initialized
INFO - 2023-06-11 22:42:32 --> Language Class Initialized
INFO - 2023-06-11 22:42:32 --> Loader Class Initialized
INFO - 2023-06-11 22:42:32 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:32 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:32 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:32 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:32 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:32 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:32 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:32 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:32 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:32 --> Controller Class Initialized
INFO - 2023-06-11 22:42:32 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:32 --> Model "Baak_dt" initialized
DEBUG - 2023-06-11 22:42:32 --> Datatables class already loaded. Second attempt ignored.
INFO - 2023-06-11 22:42:32 --> Model "Dosen_dt" initialized
INFO - 2023-06-11 22:42:32 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:32 --> Total execution time: 0.3754
INFO - 2023-06-11 22:42:37 --> Config Class Initialized
INFO - 2023-06-11 22:42:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:37 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:37 --> URI Class Initialized
INFO - 2023-06-11 22:42:37 --> Router Class Initialized
INFO - 2023-06-11 22:42:37 --> Output Class Initialized
INFO - 2023-06-11 22:42:37 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:37 --> Input Class Initialized
INFO - 2023-06-11 22:42:37 --> Language Class Initialized
INFO - 2023-06-11 22:42:37 --> Loader Class Initialized
INFO - 2023-06-11 22:42:37 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:37 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:37 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:37 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:37 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:37 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:37 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:37 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:37 --> Controller Class Initialized
INFO - 2023-06-11 22:42:37 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:42:37 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:42:37 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:42:37 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:42:37 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dosen/frs_mhs.php
INFO - 2023-06-11 22:42:37 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:42:37 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:37 --> Total execution time: 0.2734
INFO - 2023-06-11 22:42:38 --> Config Class Initialized
INFO - 2023-06-11 22:42:38 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:38 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:38 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:38 --> URI Class Initialized
INFO - 2023-06-11 22:42:38 --> Router Class Initialized
INFO - 2023-06-11 22:42:38 --> Output Class Initialized
INFO - 2023-06-11 22:42:38 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:38 --> Input Class Initialized
INFO - 2023-06-11 22:42:38 --> Language Class Initialized
ERROR - 2023-06-11 22:42:38 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:42:55 --> Config Class Initialized
INFO - 2023-06-11 22:42:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:55 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:55 --> URI Class Initialized
DEBUG - 2023-06-11 22:42:55 --> No URI present. Default controller set.
INFO - 2023-06-11 22:42:55 --> Router Class Initialized
INFO - 2023-06-11 22:42:55 --> Output Class Initialized
INFO - 2023-06-11 22:42:55 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:55 --> Input Class Initialized
INFO - 2023-06-11 22:42:55 --> Language Class Initialized
INFO - 2023-06-11 22:42:55 --> Loader Class Initialized
INFO - 2023-06-11 22:42:55 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:55 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:55 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:55 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:55 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:55 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:55 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:55 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:55 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:55 --> Controller Class Initialized
INFO - 2023-06-11 22:42:55 --> Config Class Initialized
INFO - 2023-06-11 22:42:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:55 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:55 --> URI Class Initialized
INFO - 2023-06-11 22:42:55 --> Router Class Initialized
INFO - 2023-06-11 22:42:55 --> Output Class Initialized
INFO - 2023-06-11 22:42:55 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:55 --> Input Class Initialized
INFO - 2023-06-11 22:42:55 --> Language Class Initialized
INFO - 2023-06-11 22:42:55 --> Loader Class Initialized
INFO - 2023-06-11 22:42:55 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:55 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:55 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:55 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:55 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:55 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:55 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:55 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:55 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:55 --> Controller Class Initialized
INFO - 2023-06-11 22:42:55 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 22:42:55 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:42:55 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:55 --> Total execution time: 0.1659
INFO - 2023-06-11 22:42:55 --> Config Class Initialized
INFO - 2023-06-11 22:42:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:55 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:55 --> URI Class Initialized
INFO - 2023-06-11 22:42:55 --> Router Class Initialized
INFO - 2023-06-11 22:42:55 --> Output Class Initialized
INFO - 2023-06-11 22:42:55 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:55 --> Input Class Initialized
INFO - 2023-06-11 22:42:55 --> Language Class Initialized
ERROR - 2023-06-11 22:42:55 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:42:57 --> Config Class Initialized
INFO - 2023-06-11 22:42:57 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:42:57 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:42:57 --> Utf8 Class Initialized
INFO - 2023-06-11 22:42:57 --> URI Class Initialized
INFO - 2023-06-11 22:42:57 --> Router Class Initialized
INFO - 2023-06-11 22:42:57 --> Output Class Initialized
INFO - 2023-06-11 22:42:57 --> Security Class Initialized
DEBUG - 2023-06-11 22:42:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:42:57 --> Input Class Initialized
INFO - 2023-06-11 22:42:57 --> Language Class Initialized
INFO - 2023-06-11 22:42:57 --> Loader Class Initialized
INFO - 2023-06-11 22:42:57 --> Helper loaded: url_helper
INFO - 2023-06-11 22:42:57 --> Helper loaded: security_helper
INFO - 2023-06-11 22:42:57 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:42:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:42:58 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:42:58 --> Helper loaded: form_helper
INFO - 2023-06-11 22:42:58 --> Form Validation Class Initialized
INFO - 2023-06-11 22:42:58 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:58 --> Model "Master_model" initialized
INFO - 2023-06-11 22:42:58 --> Model "Alert" initialized
INFO - 2023-06-11 22:42:58 --> Controller Class Initialized
INFO - 2023-06-11 22:42:58 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:42:58 --> Database Driver Class Initialized
INFO - 2023-06-11 22:42:58 --> Model "M_login" initialized
INFO - 2023-06-11 22:42:58 --> Final output sent to browser
DEBUG - 2023-06-11 22:42:58 --> Total execution time: 0.2153
INFO - 2023-06-11 22:43:11 --> Config Class Initialized
INFO - 2023-06-11 22:43:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:43:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:43:11 --> Utf8 Class Initialized
INFO - 2023-06-11 22:43:11 --> URI Class Initialized
INFO - 2023-06-11 22:43:11 --> Router Class Initialized
INFO - 2023-06-11 22:43:11 --> Output Class Initialized
INFO - 2023-06-11 22:43:11 --> Security Class Initialized
DEBUG - 2023-06-11 22:43:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:43:11 --> Input Class Initialized
INFO - 2023-06-11 22:43:11 --> Language Class Initialized
INFO - 2023-06-11 22:43:11 --> Loader Class Initialized
INFO - 2023-06-11 22:43:11 --> Helper loaded: url_helper
INFO - 2023-06-11 22:43:11 --> Helper loaded: security_helper
INFO - 2023-06-11 22:43:11 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:43:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:43:11 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:43:11 --> Helper loaded: form_helper
INFO - 2023-06-11 22:43:11 --> Form Validation Class Initialized
INFO - 2023-06-11 22:43:11 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:11 --> Model "Master_model" initialized
INFO - 2023-06-11 22:43:11 --> Model "Alert" initialized
INFO - 2023-06-11 22:43:11 --> Controller Class Initialized
INFO - 2023-06-11 22:43:11 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:43:11 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:11 --> Model "M_login" initialized
INFO - 2023-06-11 22:43:11 --> Final output sent to browser
DEBUG - 2023-06-11 22:43:11 --> Total execution time: 0.4074
INFO - 2023-06-11 22:43:20 --> Config Class Initialized
INFO - 2023-06-11 22:43:20 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:43:20 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:43:20 --> Utf8 Class Initialized
INFO - 2023-06-11 22:43:20 --> URI Class Initialized
INFO - 2023-06-11 22:43:20 --> Router Class Initialized
INFO - 2023-06-11 22:43:20 --> Output Class Initialized
INFO - 2023-06-11 22:43:20 --> Security Class Initialized
DEBUG - 2023-06-11 22:43:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:43:20 --> Input Class Initialized
INFO - 2023-06-11 22:43:20 --> Language Class Initialized
INFO - 2023-06-11 22:43:20 --> Loader Class Initialized
INFO - 2023-06-11 22:43:20 --> Helper loaded: url_helper
INFO - 2023-06-11 22:43:20 --> Helper loaded: security_helper
INFO - 2023-06-11 22:43:20 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:43:20 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:43:20 --> Helper loaded: form_helper
INFO - 2023-06-11 22:43:20 --> Form Validation Class Initialized
INFO - 2023-06-11 22:43:20 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:20 --> Model "Master_model" initialized
INFO - 2023-06-11 22:43:20 --> Model "Alert" initialized
INFO - 2023-06-11 22:43:20 --> Controller Class Initialized
INFO - 2023-06-11 22:43:20 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:43:20 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:21 --> Model "M_login" initialized
INFO - 2023-06-11 22:43:21 --> Final output sent to browser
DEBUG - 2023-06-11 22:43:21 --> Total execution time: 0.2953
INFO - 2023-06-11 22:43:25 --> Config Class Initialized
INFO - 2023-06-11 22:43:25 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:43:25 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:43:25 --> Utf8 Class Initialized
INFO - 2023-06-11 22:43:25 --> URI Class Initialized
INFO - 2023-06-11 22:43:25 --> Router Class Initialized
INFO - 2023-06-11 22:43:25 --> Output Class Initialized
INFO - 2023-06-11 22:43:25 --> Security Class Initialized
DEBUG - 2023-06-11 22:43:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:43:25 --> Input Class Initialized
INFO - 2023-06-11 22:43:25 --> Language Class Initialized
INFO - 2023-06-11 22:43:25 --> Loader Class Initialized
INFO - 2023-06-11 22:43:25 --> Helper loaded: url_helper
INFO - 2023-06-11 22:43:25 --> Helper loaded: security_helper
INFO - 2023-06-11 22:43:25 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:43:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:43:25 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:43:25 --> Helper loaded: form_helper
INFO - 2023-06-11 22:43:25 --> Form Validation Class Initialized
INFO - 2023-06-11 22:43:25 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:25 --> Model "Master_model" initialized
INFO - 2023-06-11 22:43:25 --> Model "Alert" initialized
INFO - 2023-06-11 22:43:25 --> Controller Class Initialized
INFO - 2023-06-11 22:43:25 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:43:25 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:25 --> Model "M_login" initialized
INFO - 2023-06-11 22:43:25 --> Final output sent to browser
DEBUG - 2023-06-11 22:43:25 --> Total execution time: 0.2629
INFO - 2023-06-11 22:43:33 --> Config Class Initialized
INFO - 2023-06-11 22:43:33 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:43:33 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:43:33 --> Utf8 Class Initialized
INFO - 2023-06-11 22:43:33 --> URI Class Initialized
INFO - 2023-06-11 22:43:33 --> Router Class Initialized
INFO - 2023-06-11 22:43:33 --> Output Class Initialized
INFO - 2023-06-11 22:43:33 --> Security Class Initialized
DEBUG - 2023-06-11 22:43:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:43:33 --> Input Class Initialized
INFO - 2023-06-11 22:43:33 --> Language Class Initialized
INFO - 2023-06-11 22:43:33 --> Loader Class Initialized
INFO - 2023-06-11 22:43:33 --> Helper loaded: url_helper
INFO - 2023-06-11 22:43:33 --> Helper loaded: security_helper
INFO - 2023-06-11 22:43:33 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:43:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:43:33 --> Helper loaded: form_helper
INFO - 2023-06-11 22:43:33 --> Form Validation Class Initialized
INFO - 2023-06-11 22:43:33 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:33 --> Model "Master_model" initialized
INFO - 2023-06-11 22:43:33 --> Model "Alert" initialized
INFO - 2023-06-11 22:43:33 --> Controller Class Initialized
INFO - 2023-06-11 22:43:33 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:43:33 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:34 --> Model "M_login" initialized
INFO - 2023-06-11 22:43:34 --> Final output sent to browser
DEBUG - 2023-06-11 22:43:34 --> Total execution time: 1.2898
INFO - 2023-06-11 22:43:40 --> Config Class Initialized
INFO - 2023-06-11 22:43:40 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:43:40 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:43:40 --> Utf8 Class Initialized
INFO - 2023-06-11 22:43:40 --> URI Class Initialized
INFO - 2023-06-11 22:43:40 --> Router Class Initialized
INFO - 2023-06-11 22:43:40 --> Output Class Initialized
INFO - 2023-06-11 22:43:40 --> Security Class Initialized
DEBUG - 2023-06-11 22:43:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:43:40 --> Input Class Initialized
INFO - 2023-06-11 22:43:40 --> Language Class Initialized
INFO - 2023-06-11 22:43:40 --> Loader Class Initialized
INFO - 2023-06-11 22:43:40 --> Helper loaded: url_helper
INFO - 2023-06-11 22:43:40 --> Helper loaded: security_helper
INFO - 2023-06-11 22:43:40 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:43:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:43:40 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:43:40 --> Helper loaded: form_helper
INFO - 2023-06-11 22:43:40 --> Form Validation Class Initialized
INFO - 2023-06-11 22:43:40 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:40 --> Model "Master_model" initialized
INFO - 2023-06-11 22:43:40 --> Model "Alert" initialized
INFO - 2023-06-11 22:43:40 --> Controller Class Initialized
INFO - 2023-06-11 22:43:40 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:43:40 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:40 --> Model "M_login" initialized
INFO - 2023-06-11 22:43:40 --> Final output sent to browser
DEBUG - 2023-06-11 22:43:40 --> Total execution time: 0.2771
INFO - 2023-06-11 22:43:47 --> Config Class Initialized
INFO - 2023-06-11 22:43:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:43:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:43:47 --> Utf8 Class Initialized
INFO - 2023-06-11 22:43:47 --> URI Class Initialized
INFO - 2023-06-11 22:43:47 --> Router Class Initialized
INFO - 2023-06-11 22:43:47 --> Output Class Initialized
INFO - 2023-06-11 22:43:47 --> Security Class Initialized
DEBUG - 2023-06-11 22:43:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:43:47 --> Input Class Initialized
INFO - 2023-06-11 22:43:47 --> Language Class Initialized
INFO - 2023-06-11 22:43:47 --> Loader Class Initialized
INFO - 2023-06-11 22:43:47 --> Helper loaded: url_helper
INFO - 2023-06-11 22:43:47 --> Helper loaded: security_helper
INFO - 2023-06-11 22:43:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:43:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:43:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:43:47 --> Helper loaded: form_helper
INFO - 2023-06-11 22:43:47 --> Form Validation Class Initialized
INFO - 2023-06-11 22:43:47 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:47 --> Model "Master_model" initialized
INFO - 2023-06-11 22:43:47 --> Model "Alert" initialized
INFO - 2023-06-11 22:43:47 --> Controller Class Initialized
INFO - 2023-06-11 22:43:47 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:43:47 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:43:47 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:43:47 --> Config Class Initialized
INFO - 2023-06-11 22:43:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:43:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:43:47 --> Utf8 Class Initialized
INFO - 2023-06-11 22:43:47 --> URI Class Initialized
INFO - 2023-06-11 22:43:47 --> Router Class Initialized
INFO - 2023-06-11 22:43:47 --> Output Class Initialized
INFO - 2023-06-11 22:43:47 --> Security Class Initialized
DEBUG - 2023-06-11 22:43:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:43:47 --> Input Class Initialized
INFO - 2023-06-11 22:43:47 --> Language Class Initialized
INFO - 2023-06-11 22:43:47 --> Loader Class Initialized
INFO - 2023-06-11 22:43:47 --> Helper loaded: url_helper
INFO - 2023-06-11 22:43:47 --> Helper loaded: security_helper
INFO - 2023-06-11 22:43:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:43:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:43:48 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:43:48 --> Helper loaded: form_helper
INFO - 2023-06-11 22:43:48 --> Form Validation Class Initialized
INFO - 2023-06-11 22:43:48 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:48 --> Model "Master_model" initialized
INFO - 2023-06-11 22:43:48 --> Model "Alert" initialized
INFO - 2023-06-11 22:43:48 --> Controller Class Initialized
INFO - 2023-06-11 22:43:48 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:43:48 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:43:48 --> Model "Dosen_t" initialized
INFO - 2023-06-11 22:43:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:43:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:43:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:43:48 --> Final output sent to browser
DEBUG - 2023-06-11 22:43:48 --> Total execution time: 0.3998
INFO - 2023-06-11 22:43:48 --> Config Class Initialized
INFO - 2023-06-11 22:43:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:43:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:43:48 --> Utf8 Class Initialized
INFO - 2023-06-11 22:43:48 --> URI Class Initialized
INFO - 2023-06-11 22:43:48 --> Router Class Initialized
INFO - 2023-06-11 22:43:48 --> Output Class Initialized
INFO - 2023-06-11 22:43:48 --> Security Class Initialized
DEBUG - 2023-06-11 22:43:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:43:48 --> Input Class Initialized
INFO - 2023-06-11 22:43:48 --> Language Class Initialized
INFO - 2023-06-11 22:43:48 --> Loader Class Initialized
INFO - 2023-06-11 22:43:48 --> Helper loaded: url_helper
INFO - 2023-06-11 22:43:48 --> Helper loaded: security_helper
INFO - 2023-06-11 22:43:48 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:43:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:43:48 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:43:48 --> Helper loaded: form_helper
INFO - 2023-06-11 22:43:48 --> Form Validation Class Initialized
INFO - 2023-06-11 22:43:48 --> Database Driver Class Initialized
INFO - 2023-06-11 22:43:49 --> Model "Master_model" initialized
INFO - 2023-06-11 22:43:49 --> Model "Alert" initialized
INFO - 2023-06-11 22:43:49 --> Controller Class Initialized
INFO - 2023-06-11 22:43:49 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:43:49 --> Model "Baak_dt" initialized
DEBUG - 2023-06-11 22:43:49 --> Datatables class already loaded. Second attempt ignored.
INFO - 2023-06-11 22:43:49 --> Model "Dosen_dt" initialized
INFO - 2023-06-11 22:43:49 --> Final output sent to browser
DEBUG - 2023-06-11 22:43:49 --> Total execution time: 0.4788
INFO - 2023-06-11 22:44:11 --> Config Class Initialized
INFO - 2023-06-11 22:44:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:44:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:44:11 --> Utf8 Class Initialized
INFO - 2023-06-11 22:44:11 --> URI Class Initialized
INFO - 2023-06-11 22:44:11 --> Router Class Initialized
INFO - 2023-06-11 22:44:11 --> Output Class Initialized
INFO - 2023-06-11 22:44:11 --> Security Class Initialized
DEBUG - 2023-06-11 22:44:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:44:11 --> Input Class Initialized
INFO - 2023-06-11 22:44:11 --> Language Class Initialized
INFO - 2023-06-11 22:44:11 --> Loader Class Initialized
INFO - 2023-06-11 22:44:11 --> Helper loaded: url_helper
INFO - 2023-06-11 22:44:11 --> Helper loaded: security_helper
INFO - 2023-06-11 22:44:11 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:44:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:44:11 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:44:11 --> Helper loaded: form_helper
INFO - 2023-06-11 22:44:11 --> Form Validation Class Initialized
INFO - 2023-06-11 22:44:11 --> Database Driver Class Initialized
INFO - 2023-06-11 22:44:11 --> Model "Master_model" initialized
INFO - 2023-06-11 22:44:11 --> Model "Alert" initialized
INFO - 2023-06-11 22:44:11 --> Controller Class Initialized
INFO - 2023-06-11 22:44:11 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:44:11 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:44:11 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:44:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:44:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\mahasiswa/hasil_studi.php
INFO - 2023-06-11 22:44:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:44:12 --> Final output sent to browser
DEBUG - 2023-06-11 22:44:12 --> Total execution time: 0.3456
INFO - 2023-06-11 22:44:12 --> Config Class Initialized
INFO - 2023-06-11 22:44:12 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:44:12 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:44:12 --> Utf8 Class Initialized
INFO - 2023-06-11 22:44:12 --> URI Class Initialized
INFO - 2023-06-11 22:44:12 --> Router Class Initialized
INFO - 2023-06-11 22:44:12 --> Output Class Initialized
INFO - 2023-06-11 22:44:12 --> Security Class Initialized
DEBUG - 2023-06-11 22:44:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:44:12 --> Input Class Initialized
INFO - 2023-06-11 22:44:12 --> Language Class Initialized
INFO - 2023-06-11 22:44:12 --> Loader Class Initialized
INFO - 2023-06-11 22:44:12 --> Helper loaded: url_helper
INFO - 2023-06-11 22:44:12 --> Helper loaded: security_helper
INFO - 2023-06-11 22:44:12 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:44:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:44:12 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:44:12 --> Helper loaded: form_helper
INFO - 2023-06-11 22:44:12 --> Form Validation Class Initialized
INFO - 2023-06-11 22:44:12 --> Database Driver Class Initialized
INFO - 2023-06-11 22:44:12 --> Model "Master_model" initialized
INFO - 2023-06-11 22:44:12 --> Model "Alert" initialized
INFO - 2023-06-11 22:44:12 --> Controller Class Initialized
INFO - 2023-06-11 22:44:12 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:44:13 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:44:13 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\mahasiswa/profile.php
INFO - 2023-06-11 22:44:13 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:44:13 --> Final output sent to browser
DEBUG - 2023-06-11 22:44:13 --> Total execution time: 0.3815
INFO - 2023-06-11 22:44:29 --> Config Class Initialized
INFO - 2023-06-11 22:44:29 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:44:29 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:44:29 --> Utf8 Class Initialized
INFO - 2023-06-11 22:44:29 --> URI Class Initialized
INFO - 2023-06-11 22:44:29 --> Router Class Initialized
INFO - 2023-06-11 22:44:29 --> Output Class Initialized
INFO - 2023-06-11 22:44:29 --> Security Class Initialized
DEBUG - 2023-06-11 22:44:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:44:29 --> Input Class Initialized
INFO - 2023-06-11 22:44:29 --> Language Class Initialized
INFO - 2023-06-11 22:44:29 --> Loader Class Initialized
INFO - 2023-06-11 22:44:29 --> Helper loaded: url_helper
INFO - 2023-06-11 22:44:29 --> Helper loaded: security_helper
INFO - 2023-06-11 22:44:29 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:44:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:44:29 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:44:29 --> Helper loaded: form_helper
INFO - 2023-06-11 22:44:29 --> Form Validation Class Initialized
INFO - 2023-06-11 22:44:29 --> Database Driver Class Initialized
INFO - 2023-06-11 22:44:29 --> Model "Master_model" initialized
INFO - 2023-06-11 22:44:29 --> Model "Alert" initialized
INFO - 2023-06-11 22:44:29 --> Controller Class Initialized
INFO - 2023-06-11 22:44:29 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:44:29 --> Database Driver Class Initialized
INFO - 2023-06-11 22:44:29 --> Model "M_login" initialized
INFO - 2023-06-11 22:44:29 --> Final output sent to browser
DEBUG - 2023-06-11 22:44:29 --> Total execution time: 0.2602
INFO - 2023-06-11 22:44:36 --> Config Class Initialized
INFO - 2023-06-11 22:44:36 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:44:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:44:36 --> Utf8 Class Initialized
INFO - 2023-06-11 22:44:36 --> URI Class Initialized
INFO - 2023-06-11 22:44:36 --> Router Class Initialized
INFO - 2023-06-11 22:44:36 --> Output Class Initialized
INFO - 2023-06-11 22:44:36 --> Security Class Initialized
DEBUG - 2023-06-11 22:44:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:44:36 --> Input Class Initialized
INFO - 2023-06-11 22:44:36 --> Language Class Initialized
INFO - 2023-06-11 22:44:36 --> Loader Class Initialized
INFO - 2023-06-11 22:44:36 --> Helper loaded: url_helper
INFO - 2023-06-11 22:44:36 --> Helper loaded: security_helper
INFO - 2023-06-11 22:44:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:44:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:44:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:44:36 --> Helper loaded: form_helper
INFO - 2023-06-11 22:44:36 --> Form Validation Class Initialized
INFO - 2023-06-11 22:44:36 --> Database Driver Class Initialized
INFO - 2023-06-11 22:44:36 --> Model "Master_model" initialized
INFO - 2023-06-11 22:44:36 --> Model "Alert" initialized
INFO - 2023-06-11 22:44:36 --> Controller Class Initialized
INFO - 2023-06-11 22:44:36 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:44:36 --> Database Driver Class Initialized
INFO - 2023-06-11 22:44:36 --> Model "M_login" initialized
INFO - 2023-06-11 22:44:36 --> Final output sent to browser
DEBUG - 2023-06-11 22:44:36 --> Total execution time: 0.3141
INFO - 2023-06-11 22:44:40 --> Config Class Initialized
INFO - 2023-06-11 22:44:40 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:44:40 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:44:40 --> Utf8 Class Initialized
INFO - 2023-06-11 22:44:40 --> URI Class Initialized
INFO - 2023-06-11 22:44:40 --> Router Class Initialized
INFO - 2023-06-11 22:44:40 --> Output Class Initialized
INFO - 2023-06-11 22:44:40 --> Security Class Initialized
DEBUG - 2023-06-11 22:44:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:44:40 --> Input Class Initialized
INFO - 2023-06-11 22:44:40 --> Language Class Initialized
INFO - 2023-06-11 22:44:40 --> Loader Class Initialized
INFO - 2023-06-11 22:44:40 --> Helper loaded: url_helper
INFO - 2023-06-11 22:44:40 --> Helper loaded: security_helper
INFO - 2023-06-11 22:44:40 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:44:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:44:40 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:44:40 --> Helper loaded: form_helper
INFO - 2023-06-11 22:44:40 --> Form Validation Class Initialized
INFO - 2023-06-11 22:44:40 --> Database Driver Class Initialized
INFO - 2023-06-11 22:44:41 --> Model "Master_model" initialized
INFO - 2023-06-11 22:44:41 --> Model "Alert" initialized
INFO - 2023-06-11 22:44:41 --> Controller Class Initialized
INFO - 2023-06-11 22:44:41 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 22:44:41 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:44:41 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\mahasiswa/profile.php
INFO - 2023-06-11 22:44:41 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:44:41 --> Final output sent to browser
DEBUG - 2023-06-11 22:44:41 --> Total execution time: 0.4486
INFO - 2023-06-11 22:44:49 --> Config Class Initialized
INFO - 2023-06-11 22:44:49 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:44:49 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:44:49 --> Utf8 Class Initialized
INFO - 2023-06-11 22:44:49 --> URI Class Initialized
INFO - 2023-06-11 22:44:49 --> Router Class Initialized
INFO - 2023-06-11 22:44:49 --> Output Class Initialized
INFO - 2023-06-11 22:44:49 --> Security Class Initialized
DEBUG - 2023-06-11 22:44:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:44:49 --> Input Class Initialized
INFO - 2023-06-11 22:44:49 --> Language Class Initialized
INFO - 2023-06-11 22:44:49 --> Loader Class Initialized
INFO - 2023-06-11 22:44:49 --> Helper loaded: url_helper
INFO - 2023-06-11 22:44:49 --> Helper loaded: security_helper
INFO - 2023-06-11 22:44:49 --> Database Driver Class Initialized
INFO - 2023-06-11 22:44:55 --> Config Class Initialized
INFO - 2023-06-11 22:44:55 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:44:55 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:44:55 --> Utf8 Class Initialized
INFO - 2023-06-11 22:44:55 --> URI Class Initialized
INFO - 2023-06-11 22:44:55 --> Router Class Initialized
INFO - 2023-06-11 22:44:55 --> Output Class Initialized
INFO - 2023-06-11 22:44:55 --> Security Class Initialized
DEBUG - 2023-06-11 22:44:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:44:55 --> Input Class Initialized
INFO - 2023-06-11 22:44:55 --> Language Class Initialized
INFO - 2023-06-11 22:44:55 --> Loader Class Initialized
INFO - 2023-06-11 22:44:55 --> Helper loaded: url_helper
INFO - 2023-06-11 22:44:55 --> Helper loaded: security_helper
INFO - 2023-06-11 22:44:55 --> Database Driver Class Initialized
ERROR - 2023-06-11 22:44:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 E:\laragon\www\main_rosma\siakad\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-06-11 22:44:59 --> Unable to connect to the database
INFO - 2023-06-11 22:44:59 --> Language file loaded: language/english/db_lang.php
ERROR - 2023-06-11 22:45:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 E:\laragon\www\main_rosma\siakad\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-06-11 22:45:05 --> Unable to connect to the database
INFO - 2023-06-11 22:45:05 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:45:09 --> Config Class Initialized
INFO - 2023-06-11 22:45:09 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:45:09 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:45:09 --> Utf8 Class Initialized
INFO - 2023-06-11 22:45:09 --> URI Class Initialized
INFO - 2023-06-11 22:45:09 --> Router Class Initialized
INFO - 2023-06-11 22:45:09 --> Output Class Initialized
INFO - 2023-06-11 22:45:09 --> Security Class Initialized
DEBUG - 2023-06-11 22:45:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:45:09 --> Input Class Initialized
INFO - 2023-06-11 22:45:09 --> Language Class Initialized
INFO - 2023-06-11 22:45:09 --> Loader Class Initialized
INFO - 2023-06-11 22:45:09 --> Helper loaded: url_helper
INFO - 2023-06-11 22:45:09 --> Helper loaded: security_helper
INFO - 2023-06-11 22:45:09 --> Database Driver Class Initialized
ERROR - 2023-06-11 22:45:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 E:\laragon\www\main_rosma\siakad\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-06-11 22:45:19 --> Unable to connect to the database
INFO - 2023-06-11 22:45:19 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:45:21 --> Config Class Initialized
INFO - 2023-06-11 22:45:21 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:45:21 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:45:21 --> Utf8 Class Initialized
INFO - 2023-06-11 22:45:21 --> URI Class Initialized
INFO - 2023-06-11 22:45:21 --> Router Class Initialized
INFO - 2023-06-11 22:45:21 --> Output Class Initialized
INFO - 2023-06-11 22:45:21 --> Security Class Initialized
DEBUG - 2023-06-11 22:45:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:45:21 --> Input Class Initialized
INFO - 2023-06-11 22:45:21 --> Language Class Initialized
INFO - 2023-06-11 22:45:21 --> Loader Class Initialized
INFO - 2023-06-11 22:45:21 --> Helper loaded: url_helper
INFO - 2023-06-11 22:45:21 --> Helper loaded: security_helper
INFO - 2023-06-11 22:45:21 --> Database Driver Class Initialized
ERROR - 2023-06-11 22:45:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 E:\laragon\www\main_rosma\siakad\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-06-11 22:45:31 --> Unable to connect to the database
INFO - 2023-06-11 22:45:31 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:45:47 --> Config Class Initialized
INFO - 2023-06-11 22:45:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:45:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:45:47 --> Utf8 Class Initialized
INFO - 2023-06-11 22:45:47 --> URI Class Initialized
INFO - 2023-06-11 22:45:47 --> Router Class Initialized
INFO - 2023-06-11 22:45:47 --> Output Class Initialized
INFO - 2023-06-11 22:45:47 --> Security Class Initialized
DEBUG - 2023-06-11 22:45:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:45:47 --> Input Class Initialized
INFO - 2023-06-11 22:45:47 --> Language Class Initialized
INFO - 2023-06-11 22:45:47 --> Loader Class Initialized
INFO - 2023-06-11 22:45:47 --> Helper loaded: url_helper
INFO - 2023-06-11 22:45:47 --> Helper loaded: security_helper
INFO - 2023-06-11 22:45:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:45:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:45:48 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:45:48 --> Helper loaded: form_helper
INFO - 2023-06-11 22:45:48 --> Form Validation Class Initialized
INFO - 2023-06-11 22:45:48 --> Database Driver Class Initialized
INFO - 2023-06-11 22:45:48 --> Model "Master_model" initialized
INFO - 2023-06-11 22:45:48 --> Model "Alert" initialized
INFO - 2023-06-11 22:45:48 --> Controller Class Initialized
INFO - 2023-06-11 22:45:48 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:45:48 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:45:48 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:45:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:45:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dosen/frs_mhs.php
INFO - 2023-06-11 22:45:48 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:45:48 --> Final output sent to browser
DEBUG - 2023-06-11 22:45:48 --> Total execution time: 0.5142
INFO - 2023-06-11 22:45:48 --> Config Class Initialized
INFO - 2023-06-11 22:45:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:45:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:45:48 --> Utf8 Class Initialized
INFO - 2023-06-11 22:45:48 --> URI Class Initialized
INFO - 2023-06-11 22:45:48 --> Router Class Initialized
INFO - 2023-06-11 22:45:48 --> Output Class Initialized
INFO - 2023-06-11 22:45:48 --> Security Class Initialized
DEBUG - 2023-06-11 22:45:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:45:48 --> Input Class Initialized
INFO - 2023-06-11 22:45:48 --> Language Class Initialized
ERROR - 2023-06-11 22:45:48 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:46:22 --> Config Class Initialized
INFO - 2023-06-11 22:46:22 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:46:22 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:46:22 --> Utf8 Class Initialized
INFO - 2023-06-11 22:46:22 --> URI Class Initialized
INFO - 2023-06-11 22:46:22 --> Router Class Initialized
INFO - 2023-06-11 22:46:22 --> Output Class Initialized
INFO - 2023-06-11 22:46:22 --> Security Class Initialized
DEBUG - 2023-06-11 22:46:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:46:22 --> Input Class Initialized
INFO - 2023-06-11 22:46:22 --> Language Class Initialized
ERROR - 2023-06-11 22:46:22 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:46:43 --> Config Class Initialized
INFO - 2023-06-11 22:46:43 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:46:43 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:46:43 --> Utf8 Class Initialized
INFO - 2023-06-11 22:46:43 --> URI Class Initialized
INFO - 2023-06-11 22:46:43 --> Router Class Initialized
INFO - 2023-06-11 22:46:43 --> Output Class Initialized
INFO - 2023-06-11 22:46:43 --> Security Class Initialized
DEBUG - 2023-06-11 22:46:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:46:43 --> Input Class Initialized
INFO - 2023-06-11 22:46:43 --> Language Class Initialized
ERROR - 2023-06-11 22:46:43 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:47:59 --> Config Class Initialized
INFO - 2023-06-11 22:47:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:47:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:47:59 --> Utf8 Class Initialized
INFO - 2023-06-11 22:47:59 --> URI Class Initialized
INFO - 2023-06-11 22:47:59 --> Router Class Initialized
INFO - 2023-06-11 22:47:59 --> Output Class Initialized
INFO - 2023-06-11 22:47:59 --> Security Class Initialized
DEBUG - 2023-06-11 22:47:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:47:59 --> Input Class Initialized
INFO - 2023-06-11 22:47:59 --> Language Class Initialized
INFO - 2023-06-11 22:47:59 --> Loader Class Initialized
INFO - 2023-06-11 22:47:59 --> Helper loaded: url_helper
INFO - 2023-06-11 22:47:59 --> Helper loaded: security_helper
INFO - 2023-06-11 22:47:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:48:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:48:00 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:48:00 --> Helper loaded: form_helper
INFO - 2023-06-11 22:48:00 --> Form Validation Class Initialized
INFO - 2023-06-11 22:48:00 --> Database Driver Class Initialized
INFO - 2023-06-11 22:48:01 --> Model "Master_model" initialized
INFO - 2023-06-11 22:48:01 --> Model "Alert" initialized
INFO - 2023-06-11 22:48:01 --> Controller Class Initialized
INFO - 2023-06-11 22:48:01 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:48:01 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:48:01 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:48:01 --> Config Class Initialized
INFO - 2023-06-11 22:48:01 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:48:01 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:48:01 --> Utf8 Class Initialized
INFO - 2023-06-11 22:48:01 --> URI Class Initialized
INFO - 2023-06-11 22:48:01 --> Router Class Initialized
INFO - 2023-06-11 22:48:01 --> Output Class Initialized
INFO - 2023-06-11 22:48:01 --> Security Class Initialized
DEBUG - 2023-06-11 22:48:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:48:01 --> Input Class Initialized
INFO - 2023-06-11 22:48:01 --> Language Class Initialized
INFO - 2023-06-11 22:48:01 --> Loader Class Initialized
INFO - 2023-06-11 22:48:01 --> Helper loaded: url_helper
INFO - 2023-06-11 22:48:01 --> Helper loaded: security_helper
INFO - 2023-06-11 22:48:01 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:48:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:48:01 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:48:01 --> Helper loaded: form_helper
INFO - 2023-06-11 22:48:01 --> Form Validation Class Initialized
INFO - 2023-06-11 22:48:01 --> Database Driver Class Initialized
INFO - 2023-06-11 22:48:01 --> Model "Master_model" initialized
INFO - 2023-06-11 22:48:01 --> Model "Alert" initialized
INFO - 2023-06-11 22:48:01 --> Controller Class Initialized
INFO - 2023-06-11 22:48:01 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:48:01 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:48:01 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:48:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:48:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dosen/frs_mhs.php
INFO - 2023-06-11 22:48:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:48:02 --> Final output sent to browser
DEBUG - 2023-06-11 22:48:02 --> Total execution time: 0.5609
INFO - 2023-06-11 22:48:02 --> Config Class Initialized
INFO - 2023-06-11 22:48:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:48:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:48:02 --> Utf8 Class Initialized
INFO - 2023-06-11 22:48:02 --> URI Class Initialized
INFO - 2023-06-11 22:48:02 --> Router Class Initialized
INFO - 2023-06-11 22:48:02 --> Output Class Initialized
INFO - 2023-06-11 22:48:02 --> Security Class Initialized
DEBUG - 2023-06-11 22:48:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:48:02 --> Input Class Initialized
INFO - 2023-06-11 22:48:02 --> Language Class Initialized
ERROR - 2023-06-11 22:48:02 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:48:02 --> Config Class Initialized
INFO - 2023-06-11 22:48:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:48:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:48:02 --> Utf8 Class Initialized
INFO - 2023-06-11 22:48:02 --> URI Class Initialized
INFO - 2023-06-11 22:48:02 --> Router Class Initialized
INFO - 2023-06-11 22:48:02 --> Output Class Initialized
INFO - 2023-06-11 22:48:02 --> Security Class Initialized
DEBUG - 2023-06-11 22:48:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:48:02 --> Input Class Initialized
INFO - 2023-06-11 22:48:02 --> Language Class Initialized
ERROR - 2023-06-11 22:48:02 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:49:36 --> Config Class Initialized
INFO - 2023-06-11 22:49:36 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:49:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:49:36 --> Utf8 Class Initialized
INFO - 2023-06-11 22:49:36 --> URI Class Initialized
INFO - 2023-06-11 22:49:36 --> Router Class Initialized
INFO - 2023-06-11 22:49:36 --> Output Class Initialized
INFO - 2023-06-11 22:49:36 --> Security Class Initialized
DEBUG - 2023-06-11 22:49:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:49:36 --> Input Class Initialized
INFO - 2023-06-11 22:49:36 --> Language Class Initialized
INFO - 2023-06-11 22:49:36 --> Loader Class Initialized
INFO - 2023-06-11 22:49:36 --> Helper loaded: url_helper
INFO - 2023-06-11 22:49:36 --> Helper loaded: security_helper
INFO - 2023-06-11 22:49:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:49:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:49:36 --> Helper loaded: form_helper
INFO - 2023-06-11 22:49:36 --> Form Validation Class Initialized
INFO - 2023-06-11 22:49:36 --> Database Driver Class Initialized
INFO - 2023-06-11 22:49:36 --> Model "Master_model" initialized
INFO - 2023-06-11 22:49:36 --> Model "Alert" initialized
INFO - 2023-06-11 22:49:36 --> Controller Class Initialized
INFO - 2023-06-11 22:49:36 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:49:36 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:49:36 --> Model "Mhs_f" initialized
INFO - 2023-06-11 22:49:36 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:49:37 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dosen/frs_mhs.php
INFO - 2023-06-11 22:49:37 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:49:37 --> Final output sent to browser
DEBUG - 2023-06-11 22:49:37 --> Total execution time: 0.3560
INFO - 2023-06-11 22:49:37 --> Config Class Initialized
INFO - 2023-06-11 22:49:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:49:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:49:37 --> Utf8 Class Initialized
INFO - 2023-06-11 22:49:37 --> URI Class Initialized
INFO - 2023-06-11 22:49:37 --> Router Class Initialized
INFO - 2023-06-11 22:49:37 --> Output Class Initialized
INFO - 2023-06-11 22:49:37 --> Security Class Initialized
DEBUG - 2023-06-11 22:49:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:49:37 --> Input Class Initialized
INFO - 2023-06-11 22:49:37 --> Language Class Initialized
ERROR - 2023-06-11 22:49:37 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:49:37 --> Config Class Initialized
INFO - 2023-06-11 22:49:37 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:49:37 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:49:37 --> Utf8 Class Initialized
INFO - 2023-06-11 22:49:37 --> URI Class Initialized
INFO - 2023-06-11 22:49:37 --> Router Class Initialized
INFO - 2023-06-11 22:49:37 --> Output Class Initialized
INFO - 2023-06-11 22:49:37 --> Security Class Initialized
DEBUG - 2023-06-11 22:49:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:49:37 --> Input Class Initialized
INFO - 2023-06-11 22:49:37 --> Language Class Initialized
ERROR - 2023-06-11 22:49:37 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:49:46 --> Config Class Initialized
INFO - 2023-06-11 22:49:46 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:49:46 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:49:46 --> Utf8 Class Initialized
INFO - 2023-06-11 22:49:46 --> URI Class Initialized
INFO - 2023-06-11 22:49:46 --> Router Class Initialized
INFO - 2023-06-11 22:49:46 --> Output Class Initialized
INFO - 2023-06-11 22:49:46 --> Security Class Initialized
DEBUG - 2023-06-11 22:49:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:49:46 --> Input Class Initialized
INFO - 2023-06-11 22:49:46 --> Language Class Initialized
INFO - 2023-06-11 22:49:46 --> Loader Class Initialized
INFO - 2023-06-11 22:49:46 --> Helper loaded: url_helper
INFO - 2023-06-11 22:49:46 --> Helper loaded: security_helper
INFO - 2023-06-11 22:49:46 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:49:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:49:46 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:49:46 --> Helper loaded: form_helper
INFO - 2023-06-11 22:49:46 --> Form Validation Class Initialized
INFO - 2023-06-11 22:49:46 --> Database Driver Class Initialized
INFO - 2023-06-11 22:49:46 --> Model "Master_model" initialized
INFO - 2023-06-11 22:49:46 --> Model "Alert" initialized
INFO - 2023-06-11 22:49:46 --> Controller Class Initialized
INFO - 2023-06-11 22:49:46 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:49:46 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:49:46 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:49:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:49:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:49:46 --> Model "Baak_f" initialized
ERROR - 2023-06-11 22:49:46 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 22:49:46 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 22:49:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 22:49:46 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:49:46 --> Final output sent to browser
DEBUG - 2023-06-11 22:49:46 --> Total execution time: 0.2290
INFO - 2023-06-11 22:49:46 --> Config Class Initialized
INFO - 2023-06-11 22:49:46 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:49:46 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:49:46 --> Utf8 Class Initialized
INFO - 2023-06-11 22:49:46 --> URI Class Initialized
INFO - 2023-06-11 22:49:46 --> Router Class Initialized
INFO - 2023-06-11 22:49:46 --> Output Class Initialized
INFO - 2023-06-11 22:49:46 --> Security Class Initialized
DEBUG - 2023-06-11 22:49:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:49:46 --> Input Class Initialized
INFO - 2023-06-11 22:49:46 --> Language Class Initialized
INFO - 2023-06-11 22:49:46 --> Loader Class Initialized
INFO - 2023-06-11 22:49:46 --> Helper loaded: url_helper
INFO - 2023-06-11 22:49:46 --> Helper loaded: security_helper
INFO - 2023-06-11 22:49:46 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:49:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:49:50 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:49:50 --> Helper loaded: form_helper
INFO - 2023-06-11 22:49:50 --> Form Validation Class Initialized
INFO - 2023-06-11 22:49:50 --> Database Driver Class Initialized
INFO - 2023-06-11 22:49:50 --> Model "Master_model" initialized
INFO - 2023-06-11 22:49:50 --> Model "Alert" initialized
INFO - 2023-06-11 22:49:50 --> Controller Class Initialized
INFO - 2023-06-11 22:49:50 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:49:50 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:49:50 --> Final output sent to browser
DEBUG - 2023-06-11 22:49:50 --> Total execution time: 3.7186
INFO - 2023-06-11 22:50:08 --> Config Class Initialized
INFO - 2023-06-11 22:50:08 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:50:08 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:50:08 --> Utf8 Class Initialized
INFO - 2023-06-11 22:50:08 --> URI Class Initialized
INFO - 2023-06-11 22:50:08 --> Router Class Initialized
INFO - 2023-06-11 22:50:08 --> Output Class Initialized
INFO - 2023-06-11 22:50:08 --> Security Class Initialized
DEBUG - 2023-06-11 22:50:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:50:08 --> Input Class Initialized
INFO - 2023-06-11 22:50:08 --> Language Class Initialized
INFO - 2023-06-11 22:50:08 --> Loader Class Initialized
INFO - 2023-06-11 22:50:08 --> Helper loaded: url_helper
INFO - 2023-06-11 22:50:08 --> Helper loaded: security_helper
INFO - 2023-06-11 22:50:08 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:50:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:50:08 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:50:08 --> Helper loaded: form_helper
INFO - 2023-06-11 22:50:08 --> Form Validation Class Initialized
INFO - 2023-06-11 22:50:08 --> Database Driver Class Initialized
INFO - 2023-06-11 22:50:08 --> Model "Master_model" initialized
INFO - 2023-06-11 22:50:08 --> Model "Alert" initialized
INFO - 2023-06-11 22:50:08 --> Controller Class Initialized
INFO - 2023-06-11 22:50:08 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:50:08 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:50:08 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:50:08 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:50:08 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:50:08 --> Final output sent to browser
DEBUG - 2023-06-11 22:50:08 --> Total execution time: 0.2014
INFO - 2023-06-11 22:50:08 --> Config Class Initialized
INFO - 2023-06-11 22:50:08 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:50:08 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:50:08 --> Utf8 Class Initialized
INFO - 2023-06-11 22:50:08 --> URI Class Initialized
INFO - 2023-06-11 22:50:08 --> Router Class Initialized
INFO - 2023-06-11 22:50:08 --> Output Class Initialized
INFO - 2023-06-11 22:50:08 --> Security Class Initialized
DEBUG - 2023-06-11 22:50:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:50:08 --> Input Class Initialized
INFO - 2023-06-11 22:50:08 --> Language Class Initialized
INFO - 2023-06-11 22:50:08 --> Loader Class Initialized
INFO - 2023-06-11 22:50:08 --> Helper loaded: url_helper
INFO - 2023-06-11 22:50:08 --> Helper loaded: security_helper
INFO - 2023-06-11 22:50:08 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:50:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:50:09 --> Helper loaded: form_helper
INFO - 2023-06-11 22:50:09 --> Form Validation Class Initialized
INFO - 2023-06-11 22:50:09 --> Database Driver Class Initialized
INFO - 2023-06-11 22:50:09 --> Model "Master_model" initialized
INFO - 2023-06-11 22:50:09 --> Model "Alert" initialized
INFO - 2023-06-11 22:50:09 --> Controller Class Initialized
INFO - 2023-06-11 22:50:09 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:50:09 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:50:09 --> Final output sent to browser
DEBUG - 2023-06-11 22:50:09 --> Total execution time: 0.5448
INFO - 2023-06-11 22:50:12 --> Config Class Initialized
INFO - 2023-06-11 22:50:12 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:50:12 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:50:12 --> Utf8 Class Initialized
INFO - 2023-06-11 22:50:12 --> URI Class Initialized
INFO - 2023-06-11 22:50:12 --> Router Class Initialized
INFO - 2023-06-11 22:50:12 --> Output Class Initialized
INFO - 2023-06-11 22:50:12 --> Security Class Initialized
DEBUG - 2023-06-11 22:50:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:50:12 --> Input Class Initialized
INFO - 2023-06-11 22:50:12 --> Language Class Initialized
INFO - 2023-06-11 22:50:12 --> Loader Class Initialized
INFO - 2023-06-11 22:50:12 --> Helper loaded: url_helper
INFO - 2023-06-11 22:50:12 --> Helper loaded: security_helper
INFO - 2023-06-11 22:50:12 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:50:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:50:12 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:50:12 --> Helper loaded: form_helper
INFO - 2023-06-11 22:50:12 --> Form Validation Class Initialized
INFO - 2023-06-11 22:50:12 --> Database Driver Class Initialized
INFO - 2023-06-11 22:50:12 --> Model "Master_model" initialized
INFO - 2023-06-11 22:50:12 --> Model "Alert" initialized
INFO - 2023-06-11 22:50:12 --> Controller Class Initialized
INFO - 2023-06-11 22:50:12 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:50:12 --> Model "Dosen_model" initialized
INFO - 2023-06-11 22:50:12 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:50:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:50:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:50:12 --> Model "Baak_f" initialized
ERROR - 2023-06-11 22:50:12 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
ERROR - 2023-06-11 22:50:12 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\dosen\Mahasiswa.php 63
INFO - 2023-06-11 22:50:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 22:50:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:50:12 --> Final output sent to browser
DEBUG - 2023-06-11 22:50:12 --> Total execution time: 0.2497
INFO - 2023-06-11 22:50:13 --> Config Class Initialized
INFO - 2023-06-11 22:50:13 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:50:13 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:50:13 --> Utf8 Class Initialized
INFO - 2023-06-11 22:50:13 --> URI Class Initialized
INFO - 2023-06-11 22:50:13 --> Router Class Initialized
INFO - 2023-06-11 22:50:13 --> Output Class Initialized
INFO - 2023-06-11 22:50:13 --> Security Class Initialized
DEBUG - 2023-06-11 22:50:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:50:13 --> Input Class Initialized
INFO - 2023-06-11 22:50:13 --> Language Class Initialized
INFO - 2023-06-11 22:50:13 --> Loader Class Initialized
INFO - 2023-06-11 22:50:13 --> Helper loaded: url_helper
INFO - 2023-06-11 22:50:13 --> Helper loaded: security_helper
INFO - 2023-06-11 22:50:13 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:50:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:50:13 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:50:13 --> Helper loaded: form_helper
INFO - 2023-06-11 22:50:13 --> Form Validation Class Initialized
INFO - 2023-06-11 22:50:13 --> Database Driver Class Initialized
INFO - 2023-06-11 22:50:13 --> Model "Master_model" initialized
INFO - 2023-06-11 22:50:13 --> Model "Alert" initialized
INFO - 2023-06-11 22:50:13 --> Controller Class Initialized
INFO - 2023-06-11 22:50:13 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:50:13 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:50:13 --> Final output sent to browser
DEBUG - 2023-06-11 22:50:13 --> Total execution time: 0.3151
INFO - 2023-06-11 22:50:18 --> Config Class Initialized
INFO - 2023-06-11 22:50:18 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:50:18 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:50:18 --> Utf8 Class Initialized
INFO - 2023-06-11 22:50:18 --> URI Class Initialized
INFO - 2023-06-11 22:50:18 --> Router Class Initialized
INFO - 2023-06-11 22:50:18 --> Output Class Initialized
INFO - 2023-06-11 22:50:18 --> Security Class Initialized
DEBUG - 2023-06-11 22:50:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:50:18 --> Input Class Initialized
INFO - 2023-06-11 22:50:18 --> Language Class Initialized
INFO - 2023-06-11 22:50:18 --> Loader Class Initialized
INFO - 2023-06-11 22:50:18 --> Helper loaded: url_helper
INFO - 2023-06-11 22:50:18 --> Helper loaded: security_helper
INFO - 2023-06-11 22:50:18 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:50:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:50:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:50:18 --> Helper loaded: form_helper
INFO - 2023-06-11 22:50:18 --> Form Validation Class Initialized
INFO - 2023-06-11 22:50:18 --> Database Driver Class Initialized
INFO - 2023-06-11 22:50:18 --> Model "Master_model" initialized
INFO - 2023-06-11 22:50:18 --> Model "Alert" initialized
INFO - 2023-06-11 22:50:18 --> Controller Class Initialized
INFO - 2023-06-11 22:50:18 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:50:18 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:50:18 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:50:18 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:50:18 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:50:18 --> Final output sent to browser
DEBUG - 2023-06-11 22:50:18 --> Total execution time: 0.1855
INFO - 2023-06-11 22:50:18 --> Config Class Initialized
INFO - 2023-06-11 22:50:18 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:50:18 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:50:18 --> Utf8 Class Initialized
INFO - 2023-06-11 22:50:18 --> URI Class Initialized
INFO - 2023-06-11 22:50:18 --> Router Class Initialized
INFO - 2023-06-11 22:50:18 --> Output Class Initialized
INFO - 2023-06-11 22:50:18 --> Security Class Initialized
DEBUG - 2023-06-11 22:50:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:50:18 --> Input Class Initialized
INFO - 2023-06-11 22:50:18 --> Language Class Initialized
INFO - 2023-06-11 22:50:18 --> Loader Class Initialized
INFO - 2023-06-11 22:50:18 --> Helper loaded: url_helper
INFO - 2023-06-11 22:50:18 --> Helper loaded: security_helper
INFO - 2023-06-11 22:50:18 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:50:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:50:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:50:18 --> Helper loaded: form_helper
INFO - 2023-06-11 22:50:18 --> Form Validation Class Initialized
INFO - 2023-06-11 22:50:18 --> Database Driver Class Initialized
INFO - 2023-06-11 22:50:28 --> Config Class Initialized
INFO - 2023-06-11 22:50:28 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:50:28 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:50:28 --> Utf8 Class Initialized
INFO - 2023-06-11 22:50:28 --> URI Class Initialized
INFO - 2023-06-11 22:50:28 --> Router Class Initialized
INFO - 2023-06-11 22:50:28 --> Output Class Initialized
INFO - 2023-06-11 22:50:28 --> Security Class Initialized
DEBUG - 2023-06-11 22:50:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:50:28 --> Input Class Initialized
INFO - 2023-06-11 22:50:28 --> Language Class Initialized
INFO - 2023-06-11 22:50:28 --> Loader Class Initialized
INFO - 2023-06-11 22:50:28 --> Helper loaded: url_helper
INFO - 2023-06-11 22:50:28 --> Helper loaded: security_helper
INFO - 2023-06-11 22:50:28 --> Database Driver Class Initialized
ERROR - 2023-06-11 22:50:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 E:\laragon\www\main_rosma\siakad\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-06-11 22:50:28 --> Unable to connect to the database
INFO - 2023-06-11 22:50:28 --> Language file loaded: language/english/db_lang.php
DEBUG - 2023-06-11 22:50:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:50:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:50:28 --> Helper loaded: form_helper
INFO - 2023-06-11 22:50:28 --> Form Validation Class Initialized
INFO - 2023-06-11 22:50:28 --> Database Driver Class Initialized
INFO - 2023-06-11 22:50:29 --> Model "Master_model" initialized
INFO - 2023-06-11 22:50:29 --> Model "Alert" initialized
INFO - 2023-06-11 22:50:29 --> Controller Class Initialized
INFO - 2023-06-11 22:50:29 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:50:29 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:50:29 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:50:29 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:50:29 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:50:29 --> Final output sent to browser
DEBUG - 2023-06-11 22:50:29 --> Total execution time: 0.1731
INFO - 2023-06-11 22:50:30 --> Config Class Initialized
INFO - 2023-06-11 22:50:30 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:50:30 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:50:30 --> Utf8 Class Initialized
INFO - 2023-06-11 22:50:30 --> URI Class Initialized
INFO - 2023-06-11 22:50:30 --> Router Class Initialized
INFO - 2023-06-11 22:50:30 --> Output Class Initialized
INFO - 2023-06-11 22:50:30 --> Security Class Initialized
DEBUG - 2023-06-11 22:50:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:50:30 --> Input Class Initialized
INFO - 2023-06-11 22:50:30 --> Language Class Initialized
INFO - 2023-06-11 22:50:30 --> Loader Class Initialized
INFO - 2023-06-11 22:50:30 --> Helper loaded: url_helper
INFO - 2023-06-11 22:50:30 --> Helper loaded: security_helper
INFO - 2023-06-11 22:50:30 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:50:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:50:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:50:30 --> Helper loaded: form_helper
INFO - 2023-06-11 22:50:30 --> Form Validation Class Initialized
INFO - 2023-06-11 22:50:30 --> Database Driver Class Initialized
INFO - 2023-06-11 22:50:30 --> Model "Master_model" initialized
INFO - 2023-06-11 22:50:30 --> Model "Alert" initialized
INFO - 2023-06-11 22:50:30 --> Controller Class Initialized
INFO - 2023-06-11 22:50:30 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:50:30 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:50:30 --> Final output sent to browser
DEBUG - 2023-06-11 22:50:30 --> Total execution time: 0.2298
INFO - 2023-06-11 22:52:26 --> Config Class Initialized
INFO - 2023-06-11 22:52:26 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:52:26 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:52:26 --> Utf8 Class Initialized
INFO - 2023-06-11 22:52:26 --> URI Class Initialized
INFO - 2023-06-11 22:52:26 --> Router Class Initialized
INFO - 2023-06-11 22:52:26 --> Output Class Initialized
INFO - 2023-06-11 22:52:26 --> Security Class Initialized
DEBUG - 2023-06-11 22:52:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:52:26 --> Input Class Initialized
INFO - 2023-06-11 22:52:26 --> Language Class Initialized
INFO - 2023-06-11 22:52:26 --> Loader Class Initialized
INFO - 2023-06-11 22:52:26 --> Helper loaded: url_helper
INFO - 2023-06-11 22:52:26 --> Helper loaded: security_helper
INFO - 2023-06-11 22:52:26 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:52:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:52:27 --> Helper loaded: form_helper
INFO - 2023-06-11 22:52:27 --> Form Validation Class Initialized
INFO - 2023-06-11 22:52:27 --> Database Driver Class Initialized
INFO - 2023-06-11 22:52:27 --> Model "Master_model" initialized
INFO - 2023-06-11 22:52:27 --> Model "Alert" initialized
INFO - 2023-06-11 22:52:27 --> Controller Class Initialized
INFO - 2023-06-11 22:52:27 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:52:27 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:52:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:52:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:52:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:52:27 --> Final output sent to browser
DEBUG - 2023-06-11 22:52:27 --> Total execution time: 0.5634
INFO - 2023-06-11 22:52:27 --> Config Class Initialized
INFO - 2023-06-11 22:52:27 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:52:27 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:52:27 --> Utf8 Class Initialized
INFO - 2023-06-11 22:52:27 --> URI Class Initialized
INFO - 2023-06-11 22:52:27 --> Router Class Initialized
INFO - 2023-06-11 22:52:27 --> Output Class Initialized
INFO - 2023-06-11 22:52:27 --> Security Class Initialized
DEBUG - 2023-06-11 22:52:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:52:27 --> Input Class Initialized
INFO - 2023-06-11 22:52:27 --> Language Class Initialized
INFO - 2023-06-11 22:52:27 --> Loader Class Initialized
INFO - 2023-06-11 22:52:27 --> Helper loaded: url_helper
INFO - 2023-06-11 22:52:27 --> Helper loaded: security_helper
INFO - 2023-06-11 22:52:27 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:52:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:52:27 --> Helper loaded: form_helper
INFO - 2023-06-11 22:52:27 --> Form Validation Class Initialized
INFO - 2023-06-11 22:52:27 --> Database Driver Class Initialized
INFO - 2023-06-11 22:52:28 --> Model "Master_model" initialized
INFO - 2023-06-11 22:52:28 --> Model "Alert" initialized
INFO - 2023-06-11 22:52:28 --> Controller Class Initialized
INFO - 2023-06-11 22:52:28 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:52:28 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:52:28 --> Query error: Table 'project_rosma_siakad.topik_pewralian' doesn't exist - Invalid query: SELECT `topik_pewralian`, `keterangan`, `input_date`, `periode`, `email_dosen`, `nim`
FROM `topik_pewralian`
WHERE `nim` = '201901251003'
INFO - 2023-06-11 22:52:28 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:52:32 --> Config Class Initialized
INFO - 2023-06-11 22:52:32 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:52:32 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:52:32 --> Utf8 Class Initialized
INFO - 2023-06-11 22:52:32 --> URI Class Initialized
INFO - 2023-06-11 22:52:32 --> Router Class Initialized
INFO - 2023-06-11 22:52:32 --> Output Class Initialized
INFO - 2023-06-11 22:52:32 --> Security Class Initialized
DEBUG - 2023-06-11 22:52:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:52:32 --> Input Class Initialized
INFO - 2023-06-11 22:52:32 --> Language Class Initialized
ERROR - 2023-06-11 22:52:32 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:52:32 --> Config Class Initialized
INFO - 2023-06-11 22:52:32 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:52:32 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:52:32 --> Utf8 Class Initialized
INFO - 2023-06-11 22:52:32 --> URI Class Initialized
INFO - 2023-06-11 22:52:32 --> Router Class Initialized
INFO - 2023-06-11 22:52:32 --> Output Class Initialized
INFO - 2023-06-11 22:52:32 --> Security Class Initialized
DEBUG - 2023-06-11 22:52:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:52:32 --> Input Class Initialized
INFO - 2023-06-11 22:52:32 --> Language Class Initialized
ERROR - 2023-06-11 22:52:32 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:52:35 --> Config Class Initialized
INFO - 2023-06-11 22:52:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:52:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:52:35 --> Utf8 Class Initialized
INFO - 2023-06-11 22:52:35 --> URI Class Initialized
INFO - 2023-06-11 22:52:35 --> Router Class Initialized
INFO - 2023-06-11 22:52:35 --> Output Class Initialized
INFO - 2023-06-11 22:52:35 --> Security Class Initialized
DEBUG - 2023-06-11 22:52:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:52:35 --> Input Class Initialized
INFO - 2023-06-11 22:52:35 --> Language Class Initialized
INFO - 2023-06-11 22:52:35 --> Loader Class Initialized
INFO - 2023-06-11 22:52:35 --> Helper loaded: url_helper
INFO - 2023-06-11 22:52:35 --> Helper loaded: security_helper
INFO - 2023-06-11 22:52:35 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:52:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:52:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:52:35 --> Helper loaded: form_helper
INFO - 2023-06-11 22:52:35 --> Form Validation Class Initialized
INFO - 2023-06-11 22:52:35 --> Database Driver Class Initialized
INFO - 2023-06-11 22:52:35 --> Model "Master_model" initialized
INFO - 2023-06-11 22:52:35 --> Model "Alert" initialized
INFO - 2023-06-11 22:52:35 --> Controller Class Initialized
INFO - 2023-06-11 22:52:35 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:52:35 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:52:35 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:52:35 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:52:35 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:52:35 --> Final output sent to browser
DEBUG - 2023-06-11 22:52:35 --> Total execution time: 0.3369
INFO - 2023-06-11 22:52:35 --> Config Class Initialized
INFO - 2023-06-11 22:52:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:52:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:52:35 --> Utf8 Class Initialized
INFO - 2023-06-11 22:52:35 --> URI Class Initialized
INFO - 2023-06-11 22:52:35 --> Router Class Initialized
INFO - 2023-06-11 22:52:35 --> Output Class Initialized
INFO - 2023-06-11 22:52:35 --> Security Class Initialized
DEBUG - 2023-06-11 22:52:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:52:35 --> Input Class Initialized
INFO - 2023-06-11 22:52:35 --> Language Class Initialized
ERROR - 2023-06-11 22:52:35 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:52:35 --> Config Class Initialized
INFO - 2023-06-11 22:52:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:52:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:52:35 --> Utf8 Class Initialized
INFO - 2023-06-11 22:52:35 --> URI Class Initialized
INFO - 2023-06-11 22:52:35 --> Router Class Initialized
INFO - 2023-06-11 22:52:35 --> Output Class Initialized
INFO - 2023-06-11 22:52:35 --> Security Class Initialized
DEBUG - 2023-06-11 22:52:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:52:35 --> Input Class Initialized
INFO - 2023-06-11 22:52:35 --> Language Class Initialized
ERROR - 2023-06-11 22:52:35 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:52:36 --> Config Class Initialized
INFO - 2023-06-11 22:52:36 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:52:36 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:52:36 --> Utf8 Class Initialized
INFO - 2023-06-11 22:52:36 --> URI Class Initialized
INFO - 2023-06-11 22:52:36 --> Router Class Initialized
INFO - 2023-06-11 22:52:36 --> Output Class Initialized
INFO - 2023-06-11 22:52:36 --> Security Class Initialized
DEBUG - 2023-06-11 22:52:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:52:36 --> Input Class Initialized
INFO - 2023-06-11 22:52:36 --> Language Class Initialized
INFO - 2023-06-11 22:52:36 --> Loader Class Initialized
INFO - 2023-06-11 22:52:36 --> Helper loaded: url_helper
INFO - 2023-06-11 22:52:36 --> Helper loaded: security_helper
INFO - 2023-06-11 22:52:36 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:52:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:52:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:52:36 --> Helper loaded: form_helper
INFO - 2023-06-11 22:52:36 --> Form Validation Class Initialized
INFO - 2023-06-11 22:52:36 --> Database Driver Class Initialized
INFO - 2023-06-11 22:52:36 --> Model "Master_model" initialized
INFO - 2023-06-11 22:52:36 --> Model "Alert" initialized
INFO - 2023-06-11 22:52:36 --> Controller Class Initialized
INFO - 2023-06-11 22:52:36 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:52:36 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:52:36 --> Query error: Table 'project_rosma_siakad.topik_pewralian' doesn't exist - Invalid query: SELECT `topik_pewralian`, `keterangan`, `input_date`, `periode`, `email_dosen`, `nim`
FROM `topik_pewralian`
WHERE `nim` = '201901251003'
INFO - 2023-06-11 22:52:36 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:52:40 --> Config Class Initialized
INFO - 2023-06-11 22:52:40 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:52:40 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:52:40 --> Utf8 Class Initialized
INFO - 2023-06-11 22:52:40 --> URI Class Initialized
INFO - 2023-06-11 22:52:40 --> Router Class Initialized
INFO - 2023-06-11 22:52:40 --> Output Class Initialized
INFO - 2023-06-11 22:52:40 --> Security Class Initialized
DEBUG - 2023-06-11 22:52:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:52:40 --> Input Class Initialized
INFO - 2023-06-11 22:52:40 --> Language Class Initialized
INFO - 2023-06-11 22:52:40 --> Loader Class Initialized
INFO - 2023-06-11 22:52:40 --> Helper loaded: url_helper
INFO - 2023-06-11 22:52:40 --> Helper loaded: security_helper
INFO - 2023-06-11 22:52:40 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:52:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:52:41 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:52:41 --> Helper loaded: form_helper
INFO - 2023-06-11 22:52:41 --> Form Validation Class Initialized
INFO - 2023-06-11 22:52:41 --> Database Driver Class Initialized
INFO - 2023-06-11 22:52:41 --> Model "Master_model" initialized
INFO - 2023-06-11 22:52:41 --> Model "Alert" initialized
INFO - 2023-06-11 22:52:41 --> Controller Class Initialized
INFO - 2023-06-11 22:52:41 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:52:41 --> Model "Baak_dt" initialized
ERROR - 2023-06-11 22:52:41 --> Query error: Table 'project_rosma_siakad.topik_pewralian' doesn't exist - Invalid query: SELECT `topik_pewralian`, `keterangan`, `input_date`, `periode`, `email_dosen`, `nim`
FROM `topik_pewralian`
WHERE `nim` = '201901251003'
INFO - 2023-06-11 22:52:41 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:53:02 --> Config Class Initialized
INFO - 2023-06-11 22:53:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:53:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:53:02 --> Utf8 Class Initialized
INFO - 2023-06-11 22:53:02 --> URI Class Initialized
INFO - 2023-06-11 22:53:02 --> Router Class Initialized
INFO - 2023-06-11 22:53:02 --> Output Class Initialized
INFO - 2023-06-11 22:53:02 --> Security Class Initialized
DEBUG - 2023-06-11 22:53:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:53:02 --> Input Class Initialized
INFO - 2023-06-11 22:53:02 --> Language Class Initialized
INFO - 2023-06-11 22:53:02 --> Loader Class Initialized
INFO - 2023-06-11 22:53:02 --> Helper loaded: url_helper
INFO - 2023-06-11 22:53:02 --> Helper loaded: security_helper
INFO - 2023-06-11 22:53:02 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:53:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:53:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:53:02 --> Helper loaded: form_helper
INFO - 2023-06-11 22:53:02 --> Form Validation Class Initialized
INFO - 2023-06-11 22:53:02 --> Database Driver Class Initialized
INFO - 2023-06-11 22:53:02 --> Model "Master_model" initialized
INFO - 2023-06-11 22:53:02 --> Model "Alert" initialized
INFO - 2023-06-11 22:53:02 --> Controller Class Initialized
INFO - 2023-06-11 22:53:02 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:53:02 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:53:02 --> Final output sent to browser
DEBUG - 2023-06-11 22:53:02 --> Total execution time: 0.3696
INFO - 2023-06-11 22:53:06 --> Config Class Initialized
INFO - 2023-06-11 22:53:06 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:53:06 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:53:06 --> Utf8 Class Initialized
INFO - 2023-06-11 22:53:06 --> URI Class Initialized
INFO - 2023-06-11 22:53:06 --> Router Class Initialized
INFO - 2023-06-11 22:53:06 --> Output Class Initialized
INFO - 2023-06-11 22:53:06 --> Security Class Initialized
DEBUG - 2023-06-11 22:53:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:53:06 --> Input Class Initialized
INFO - 2023-06-11 22:53:06 --> Language Class Initialized
INFO - 2023-06-11 22:53:06 --> Loader Class Initialized
INFO - 2023-06-11 22:53:06 --> Helper loaded: url_helper
INFO - 2023-06-11 22:53:06 --> Helper loaded: security_helper
INFO - 2023-06-11 22:53:06 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:53:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:53:06 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:53:06 --> Helper loaded: form_helper
INFO - 2023-06-11 22:53:06 --> Form Validation Class Initialized
INFO - 2023-06-11 22:53:06 --> Database Driver Class Initialized
INFO - 2023-06-11 22:53:06 --> Model "Master_model" initialized
INFO - 2023-06-11 22:53:06 --> Model "Alert" initialized
INFO - 2023-06-11 22:53:06 --> Controller Class Initialized
INFO - 2023-06-11 22:53:06 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:53:06 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:53:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:53:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:53:06 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:53:06 --> Final output sent to browser
DEBUG - 2023-06-11 22:53:06 --> Total execution time: 0.2198
INFO - 2023-06-11 22:53:07 --> Config Class Initialized
INFO - 2023-06-11 22:53:07 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:53:07 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:53:07 --> Utf8 Class Initialized
INFO - 2023-06-11 22:53:07 --> URI Class Initialized
INFO - 2023-06-11 22:53:07 --> Router Class Initialized
INFO - 2023-06-11 22:53:07 --> Output Class Initialized
INFO - 2023-06-11 22:53:07 --> Security Class Initialized
DEBUG - 2023-06-11 22:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:53:07 --> Input Class Initialized
INFO - 2023-06-11 22:53:07 --> Language Class Initialized
ERROR - 2023-06-11 22:53:07 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:53:07 --> Config Class Initialized
INFO - 2023-06-11 22:53:07 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:53:07 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:53:07 --> Utf8 Class Initialized
INFO - 2023-06-11 22:53:07 --> URI Class Initialized
INFO - 2023-06-11 22:53:07 --> Router Class Initialized
INFO - 2023-06-11 22:53:07 --> Output Class Initialized
INFO - 2023-06-11 22:53:07 --> Security Class Initialized
DEBUG - 2023-06-11 22:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:53:07 --> Input Class Initialized
INFO - 2023-06-11 22:53:07 --> Language Class Initialized
INFO - 2023-06-11 22:53:07 --> Loader Class Initialized
INFO - 2023-06-11 22:53:07 --> Helper loaded: url_helper
INFO - 2023-06-11 22:53:07 --> Helper loaded: security_helper
INFO - 2023-06-11 22:53:07 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:53:07 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:53:07 --> Helper loaded: form_helper
INFO - 2023-06-11 22:53:07 --> Form Validation Class Initialized
INFO - 2023-06-11 22:53:07 --> Database Driver Class Initialized
INFO - 2023-06-11 22:53:08 --> Config Class Initialized
INFO - 2023-06-11 22:53:08 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:53:08 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:53:08 --> Utf8 Class Initialized
INFO - 2023-06-11 22:53:08 --> URI Class Initialized
INFO - 2023-06-11 22:53:08 --> Router Class Initialized
INFO - 2023-06-11 22:53:08 --> Output Class Initialized
INFO - 2023-06-11 22:53:08 --> Security Class Initialized
DEBUG - 2023-06-11 22:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:53:08 --> Input Class Initialized
INFO - 2023-06-11 22:53:08 --> Language Class Initialized
ERROR - 2023-06-11 22:53:08 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:53:08 --> Model "Master_model" initialized
INFO - 2023-06-11 22:53:08 --> Model "Alert" initialized
INFO - 2023-06-11 22:53:08 --> Controller Class Initialized
INFO - 2023-06-11 22:53:08 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:53:08 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:53:09 --> Final output sent to browser
DEBUG - 2023-06-11 22:53:09 --> Total execution time: 1.4162
INFO - 2023-06-11 22:54:03 --> Config Class Initialized
INFO - 2023-06-11 22:54:03 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:54:03 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:54:03 --> Utf8 Class Initialized
INFO - 2023-06-11 22:54:03 --> URI Class Initialized
INFO - 2023-06-11 22:54:03 --> Router Class Initialized
INFO - 2023-06-11 22:54:03 --> Output Class Initialized
INFO - 2023-06-11 22:54:03 --> Security Class Initialized
DEBUG - 2023-06-11 22:54:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:54:03 --> Input Class Initialized
INFO - 2023-06-11 22:54:03 --> Language Class Initialized
INFO - 2023-06-11 22:54:03 --> Loader Class Initialized
INFO - 2023-06-11 22:54:03 --> Helper loaded: url_helper
INFO - 2023-06-11 22:54:03 --> Helper loaded: security_helper
INFO - 2023-06-11 22:54:03 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:54:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:54:04 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:54:04 --> Helper loaded: form_helper
INFO - 2023-06-11 22:54:04 --> Form Validation Class Initialized
INFO - 2023-06-11 22:54:04 --> Database Driver Class Initialized
INFO - 2023-06-11 22:54:04 --> Model "Master_model" initialized
INFO - 2023-06-11 22:54:04 --> Model "Alert" initialized
INFO - 2023-06-11 22:54:04 --> Controller Class Initialized
INFO - 2023-06-11 22:54:04 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:54:04 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:54:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:54:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:54:04 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:54:04 --> Final output sent to browser
DEBUG - 2023-06-11 22:54:04 --> Total execution time: 0.6140
INFO - 2023-06-11 22:54:05 --> Config Class Initialized
INFO - 2023-06-11 22:54:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:54:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:54:05 --> Utf8 Class Initialized
INFO - 2023-06-11 22:54:05 --> URI Class Initialized
INFO - 2023-06-11 22:54:05 --> Router Class Initialized
INFO - 2023-06-11 22:54:05 --> Output Class Initialized
INFO - 2023-06-11 22:54:05 --> Security Class Initialized
DEBUG - 2023-06-11 22:54:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:54:05 --> Input Class Initialized
INFO - 2023-06-11 22:54:05 --> Language Class Initialized
ERROR - 2023-06-11 22:54:05 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:54:05 --> Config Class Initialized
INFO - 2023-06-11 22:54:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:54:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:54:05 --> Utf8 Class Initialized
INFO - 2023-06-11 22:54:05 --> URI Class Initialized
INFO - 2023-06-11 22:54:05 --> Router Class Initialized
INFO - 2023-06-11 22:54:05 --> Output Class Initialized
INFO - 2023-06-11 22:54:05 --> Security Class Initialized
DEBUG - 2023-06-11 22:54:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:54:05 --> Input Class Initialized
INFO - 2023-06-11 22:54:05 --> Language Class Initialized
ERROR - 2023-06-11 22:54:05 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:54:05 --> Config Class Initialized
INFO - 2023-06-11 22:54:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:54:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:54:05 --> Utf8 Class Initialized
INFO - 2023-06-11 22:54:05 --> URI Class Initialized
INFO - 2023-06-11 22:54:05 --> Router Class Initialized
INFO - 2023-06-11 22:54:05 --> Output Class Initialized
INFO - 2023-06-11 22:54:05 --> Security Class Initialized
DEBUG - 2023-06-11 22:54:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:54:05 --> Input Class Initialized
INFO - 2023-06-11 22:54:05 --> Language Class Initialized
INFO - 2023-06-11 22:54:05 --> Loader Class Initialized
INFO - 2023-06-11 22:54:05 --> Helper loaded: url_helper
INFO - 2023-06-11 22:54:05 --> Helper loaded: security_helper
INFO - 2023-06-11 22:54:05 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:54:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:54:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:54:05 --> Helper loaded: form_helper
INFO - 2023-06-11 22:54:05 --> Form Validation Class Initialized
INFO - 2023-06-11 22:54:05 --> Database Driver Class Initialized
INFO - 2023-06-11 22:54:05 --> Model "Master_model" initialized
INFO - 2023-06-11 22:54:05 --> Model "Alert" initialized
INFO - 2023-06-11 22:54:05 --> Controller Class Initialized
INFO - 2023-06-11 22:54:05 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:54:05 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:54:05 --> Final output sent to browser
DEBUG - 2023-06-11 22:54:05 --> Total execution time: 0.4931
INFO - 2023-06-11 22:54:24 --> Config Class Initialized
INFO - 2023-06-11 22:54:24 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:54:24 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:54:24 --> Utf8 Class Initialized
INFO - 2023-06-11 22:54:24 --> URI Class Initialized
INFO - 2023-06-11 22:54:24 --> Router Class Initialized
INFO - 2023-06-11 22:54:24 --> Output Class Initialized
INFO - 2023-06-11 22:54:24 --> Security Class Initialized
DEBUG - 2023-06-11 22:54:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:54:24 --> Input Class Initialized
INFO - 2023-06-11 22:54:24 --> Language Class Initialized
INFO - 2023-06-11 22:54:24 --> Loader Class Initialized
INFO - 2023-06-11 22:54:24 --> Helper loaded: url_helper
INFO - 2023-06-11 22:54:24 --> Helper loaded: security_helper
INFO - 2023-06-11 22:54:24 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:54:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:54:25 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:54:25 --> Helper loaded: form_helper
INFO - 2023-06-11 22:54:25 --> Form Validation Class Initialized
INFO - 2023-06-11 22:54:25 --> Database Driver Class Initialized
INFO - 2023-06-11 22:54:25 --> Model "Master_model" initialized
INFO - 2023-06-11 22:54:25 --> Model "Alert" initialized
INFO - 2023-06-11 22:54:25 --> Controller Class Initialized
INFO - 2023-06-11 22:54:25 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:54:25 --> Model "Baak_f" initialized
INFO - 2023-06-11 22:54:25 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:54:25 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:54:25 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:54:25 --> Final output sent to browser
DEBUG - 2023-06-11 22:54:25 --> Total execution time: 1.2333
INFO - 2023-06-11 22:54:25 --> Config Class Initialized
INFO - 2023-06-11 22:54:25 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:54:25 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:54:25 --> Utf8 Class Initialized
INFO - 2023-06-11 22:54:25 --> URI Class Initialized
INFO - 2023-06-11 22:54:25 --> Router Class Initialized
INFO - 2023-06-11 22:54:25 --> Output Class Initialized
INFO - 2023-06-11 22:54:25 --> Security Class Initialized
DEBUG - 2023-06-11 22:54:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:54:25 --> Input Class Initialized
INFO - 2023-06-11 22:54:25 --> Language Class Initialized
ERROR - 2023-06-11 22:54:25 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:55:32 --> Config Class Initialized
INFO - 2023-06-11 22:55:32 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:55:32 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:55:32 --> Utf8 Class Initialized
INFO - 2023-06-11 22:55:32 --> URI Class Initialized
INFO - 2023-06-11 22:55:32 --> Router Class Initialized
INFO - 2023-06-11 22:55:32 --> Output Class Initialized
INFO - 2023-06-11 22:55:32 --> Security Class Initialized
DEBUG - 2023-06-11 22:55:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:55:32 --> Input Class Initialized
INFO - 2023-06-11 22:55:32 --> Language Class Initialized
INFO - 2023-06-11 22:55:32 --> Loader Class Initialized
INFO - 2023-06-11 22:55:32 --> Helper loaded: url_helper
INFO - 2023-06-11 22:55:32 --> Helper loaded: security_helper
INFO - 2023-06-11 22:55:32 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:55:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:55:32 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:55:32 --> Helper loaded: form_helper
INFO - 2023-06-11 22:55:32 --> Form Validation Class Initialized
INFO - 2023-06-11 22:55:32 --> Database Driver Class Initialized
INFO - 2023-06-11 22:55:33 --> Model "Master_model" initialized
INFO - 2023-06-11 22:55:33 --> Model "Alert" initialized
INFO - 2023-06-11 22:55:33 --> Controller Class Initialized
INFO - 2023-06-11 22:55:33 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:55:33 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2023-06-11 22:55:33 --> Query error: Unknown column 'tahun_ajar' in 'field list' - Invalid query: INSERT INTO `mahasiswa_perwalian` (`nim`, `tahun_ajar`, `topik_pewralian`, `keterangan`, `input_date`, `dosen_wali`) VALUES ('201901251003', '20222', '1', '1', '2023-06-03', 'rahmat@rosma.ac.id')
INFO - 2023-06-11 22:55:33 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:55:40 --> Config Class Initialized
INFO - 2023-06-11 22:55:40 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:55:40 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:55:40 --> Utf8 Class Initialized
INFO - 2023-06-11 22:55:40 --> URI Class Initialized
INFO - 2023-06-11 22:55:40 --> Router Class Initialized
INFO - 2023-06-11 22:55:40 --> Output Class Initialized
INFO - 2023-06-11 22:55:40 --> Security Class Initialized
DEBUG - 2023-06-11 22:55:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:55:40 --> Input Class Initialized
INFO - 2023-06-11 22:55:40 --> Language Class Initialized
INFO - 2023-06-11 22:55:40 --> Loader Class Initialized
INFO - 2023-06-11 22:55:40 --> Helper loaded: url_helper
INFO - 2023-06-11 22:55:40 --> Helper loaded: security_helper
INFO - 2023-06-11 22:55:40 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:55:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:55:40 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:55:40 --> Helper loaded: form_helper
INFO - 2023-06-11 22:55:40 --> Form Validation Class Initialized
INFO - 2023-06-11 22:55:40 --> Database Driver Class Initialized
INFO - 2023-06-11 22:55:42 --> Model "Master_model" initialized
INFO - 2023-06-11 22:55:42 --> Model "Alert" initialized
INFO - 2023-06-11 22:55:42 --> Controller Class Initialized
INFO - 2023-06-11 22:55:42 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:55:42 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2023-06-11 22:55:42 --> Query error: Unknown column 'dosen_wali' in 'field list' - Invalid query: INSERT INTO `mahasiswa_perwalian` (`nim`, `periode`, `topik_pewralian`, `keterangan`, `input_date`, `dosen_wali`) VALUES ('201901251003', '20222', '1', '1', '2023-06-03', 'rahmat@rosma.ac.id')
INFO - 2023-06-11 22:55:42 --> Language file loaded: language/english/db_lang.php
INFO - 2023-06-11 22:55:56 --> Config Class Initialized
INFO - 2023-06-11 22:55:56 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:55:56 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:55:56 --> Utf8 Class Initialized
INFO - 2023-06-11 22:55:56 --> URI Class Initialized
INFO - 2023-06-11 22:55:56 --> Router Class Initialized
INFO - 2023-06-11 22:55:56 --> Output Class Initialized
INFO - 2023-06-11 22:55:56 --> Security Class Initialized
DEBUG - 2023-06-11 22:55:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:55:56 --> Input Class Initialized
INFO - 2023-06-11 22:55:56 --> Language Class Initialized
INFO - 2023-06-11 22:55:56 --> Loader Class Initialized
INFO - 2023-06-11 22:55:56 --> Helper loaded: url_helper
INFO - 2023-06-11 22:55:56 --> Helper loaded: security_helper
INFO - 2023-06-11 22:55:56 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:55:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:55:56 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:55:56 --> Helper loaded: form_helper
INFO - 2023-06-11 22:55:56 --> Form Validation Class Initialized
INFO - 2023-06-11 22:55:56 --> Database Driver Class Initialized
INFO - 2023-06-11 22:55:56 --> Model "Master_model" initialized
INFO - 2023-06-11 22:55:56 --> Model "Alert" initialized
INFO - 2023-06-11 22:55:56 --> Controller Class Initialized
INFO - 2023-06-11 22:55:57 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:55:57 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:55:57 --> Input - perwalian, data :{"nim":"201901251003","periode":"20222","topik_pewralian":"1","keterangan":"1","input_date":"2023-06-03","email_dosen":"rahmat@rosma.ac.id"}
INFO - 2023-06-11 22:55:57 --> Config Class Initialized
INFO - 2023-06-11 22:55:57 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:55:57 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:55:57 --> Utf8 Class Initialized
INFO - 2023-06-11 22:55:57 --> URI Class Initialized
INFO - 2023-06-11 22:55:57 --> Router Class Initialized
INFO - 2023-06-11 22:55:57 --> Output Class Initialized
INFO - 2023-06-11 22:55:57 --> Security Class Initialized
DEBUG - 2023-06-11 22:55:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:55:57 --> Input Class Initialized
INFO - 2023-06-11 22:55:57 --> Language Class Initialized
INFO - 2023-06-11 22:55:57 --> Loader Class Initialized
INFO - 2023-06-11 22:55:57 --> Helper loaded: url_helper
INFO - 2023-06-11 22:55:57 --> Helper loaded: security_helper
INFO - 2023-06-11 22:55:57 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:55:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:55:57 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:55:57 --> Helper loaded: form_helper
INFO - 2023-06-11 22:55:57 --> Form Validation Class Initialized
INFO - 2023-06-11 22:55:57 --> Database Driver Class Initialized
INFO - 2023-06-11 22:55:57 --> Model "Master_model" initialized
INFO - 2023-06-11 22:55:57 --> Model "Alert" initialized
INFO - 2023-06-11 22:55:57 --> Controller Class Initialized
INFO - 2023-06-11 22:55:57 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:55:57 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:55:57 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:55:57 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:55:57 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:55:57 --> Final output sent to browser
DEBUG - 2023-06-11 22:55:57 --> Total execution time: 0.1901
INFO - 2023-06-11 22:55:57 --> Config Class Initialized
INFO - 2023-06-11 22:55:57 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:55:57 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:55:57 --> Utf8 Class Initialized
INFO - 2023-06-11 22:55:57 --> URI Class Initialized
INFO - 2023-06-11 22:55:58 --> Router Class Initialized
INFO - 2023-06-11 22:55:58 --> Output Class Initialized
INFO - 2023-06-11 22:55:58 --> Security Class Initialized
DEBUG - 2023-06-11 22:55:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:55:58 --> Input Class Initialized
INFO - 2023-06-11 22:55:58 --> Language Class Initialized
ERROR - 2023-06-11 22:55:58 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:55:58 --> Config Class Initialized
INFO - 2023-06-11 22:55:58 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:55:58 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:55:58 --> Utf8 Class Initialized
INFO - 2023-06-11 22:55:58 --> URI Class Initialized
INFO - 2023-06-11 22:55:58 --> Router Class Initialized
INFO - 2023-06-11 22:55:58 --> Output Class Initialized
INFO - 2023-06-11 22:55:58 --> Security Class Initialized
DEBUG - 2023-06-11 22:55:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:55:58 --> Input Class Initialized
INFO - 2023-06-11 22:55:58 --> Language Class Initialized
ERROR - 2023-06-11 22:55:58 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:55:58 --> Config Class Initialized
INFO - 2023-06-11 22:55:58 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:55:58 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:55:58 --> Utf8 Class Initialized
INFO - 2023-06-11 22:55:58 --> URI Class Initialized
INFO - 2023-06-11 22:55:58 --> Router Class Initialized
INFO - 2023-06-11 22:55:58 --> Output Class Initialized
INFO - 2023-06-11 22:55:58 --> Security Class Initialized
DEBUG - 2023-06-11 22:55:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:55:58 --> Input Class Initialized
INFO - 2023-06-11 22:55:58 --> Language Class Initialized
INFO - 2023-06-11 22:55:58 --> Loader Class Initialized
INFO - 2023-06-11 22:55:58 --> Helper loaded: url_helper
INFO - 2023-06-11 22:55:58 --> Helper loaded: security_helper
INFO - 2023-06-11 22:55:58 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:55:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:55:58 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:55:58 --> Helper loaded: form_helper
INFO - 2023-06-11 22:55:58 --> Form Validation Class Initialized
INFO - 2023-06-11 22:55:58 --> Database Driver Class Initialized
INFO - 2023-06-11 22:55:58 --> Model "Master_model" initialized
INFO - 2023-06-11 22:55:58 --> Model "Alert" initialized
INFO - 2023-06-11 22:55:58 --> Controller Class Initialized
INFO - 2023-06-11 22:55:58 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:55:58 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:55:58 --> Final output sent to browser
DEBUG - 2023-06-11 22:55:58 --> Total execution time: 0.2415
INFO - 2023-06-11 22:56:01 --> Config Class Initialized
INFO - 2023-06-11 22:56:01 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:01 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:01 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:01 --> URI Class Initialized
INFO - 2023-06-11 22:56:01 --> Router Class Initialized
INFO - 2023-06-11 22:56:01 --> Output Class Initialized
INFO - 2023-06-11 22:56:01 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:01 --> Input Class Initialized
INFO - 2023-06-11 22:56:01 --> Language Class Initialized
INFO - 2023-06-11 22:56:01 --> Loader Class Initialized
INFO - 2023-06-11 22:56:01 --> Helper loaded: url_helper
INFO - 2023-06-11 22:56:01 --> Helper loaded: security_helper
INFO - 2023-06-11 22:56:01 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:56:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:56:01 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:56:01 --> Helper loaded: form_helper
INFO - 2023-06-11 22:56:01 --> Form Validation Class Initialized
INFO - 2023-06-11 22:56:01 --> Database Driver Class Initialized
INFO - 2023-06-11 22:56:02 --> Model "Master_model" initialized
INFO - 2023-06-11 22:56:02 --> Model "Alert" initialized
INFO - 2023-06-11 22:56:02 --> Controller Class Initialized
INFO - 2023-06-11 22:56:02 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:56:02 --> Model "Baak_f" initialized
ERROR - 2023-06-11 22:56:02 --> Severity: Warning --> get_object_vars() expects parameter 1 to be object, null given E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 946
ERROR - 2023-06-11 22:56:02 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 947
INFO - 2023-06-11 22:56:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:56:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:56:02 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:56:02 --> Final output sent to browser
DEBUG - 2023-06-11 22:56:02 --> Total execution time: 1.2787
INFO - 2023-06-11 22:56:03 --> Config Class Initialized
INFO - 2023-06-11 22:56:03 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:03 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:03 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:03 --> URI Class Initialized
INFO - 2023-06-11 22:56:03 --> Router Class Initialized
INFO - 2023-06-11 22:56:03 --> Output Class Initialized
INFO - 2023-06-11 22:56:03 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:03 --> Input Class Initialized
INFO - 2023-06-11 22:56:03 --> Language Class Initialized
ERROR - 2023-06-11 22:56:03 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:56:07 --> Config Class Initialized
INFO - 2023-06-11 22:56:07 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:07 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:07 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:07 --> URI Class Initialized
INFO - 2023-06-11 22:56:07 --> Router Class Initialized
INFO - 2023-06-11 22:56:07 --> Output Class Initialized
INFO - 2023-06-11 22:56:07 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:07 --> Input Class Initialized
INFO - 2023-06-11 22:56:07 --> Language Class Initialized
INFO - 2023-06-11 22:56:07 --> Loader Class Initialized
INFO - 2023-06-11 22:56:07 --> Helper loaded: url_helper
INFO - 2023-06-11 22:56:07 --> Helper loaded: security_helper
INFO - 2023-06-11 22:56:07 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:56:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:56:08 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:56:08 --> Helper loaded: form_helper
INFO - 2023-06-11 22:56:08 --> Form Validation Class Initialized
INFO - 2023-06-11 22:56:08 --> Database Driver Class Initialized
INFO - 2023-06-11 22:56:08 --> Model "Master_model" initialized
INFO - 2023-06-11 22:56:08 --> Model "Alert" initialized
INFO - 2023-06-11 22:56:08 --> Controller Class Initialized
INFO - 2023-06-11 22:56:08 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:56:08 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:56:08 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:56:08 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:56:08 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:56:08 --> Final output sent to browser
DEBUG - 2023-06-11 22:56:08 --> Total execution time: 1.1878
INFO - 2023-06-11 22:56:08 --> Config Class Initialized
INFO - 2023-06-11 22:56:08 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:08 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:08 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:08 --> URI Class Initialized
INFO - 2023-06-11 22:56:08 --> Router Class Initialized
INFO - 2023-06-11 22:56:08 --> Output Class Initialized
INFO - 2023-06-11 22:56:08 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:08 --> Input Class Initialized
INFO - 2023-06-11 22:56:08 --> Language Class Initialized
ERROR - 2023-06-11 22:56:08 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:56:08 --> Config Class Initialized
INFO - 2023-06-11 22:56:08 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:08 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:08 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:08 --> URI Class Initialized
INFO - 2023-06-11 22:56:08 --> Router Class Initialized
INFO - 2023-06-11 22:56:08 --> Output Class Initialized
INFO - 2023-06-11 22:56:08 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:08 --> Input Class Initialized
INFO - 2023-06-11 22:56:08 --> Language Class Initialized
INFO - 2023-06-11 22:56:08 --> Loader Class Initialized
INFO - 2023-06-11 22:56:08 --> Helper loaded: url_helper
INFO - 2023-06-11 22:56:08 --> Helper loaded: security_helper
INFO - 2023-06-11 22:56:08 --> Database Driver Class Initialized
INFO - 2023-06-11 22:56:08 --> Config Class Initialized
INFO - 2023-06-11 22:56:08 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:08 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:08 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:08 --> URI Class Initialized
INFO - 2023-06-11 22:56:08 --> Router Class Initialized
INFO - 2023-06-11 22:56:08 --> Output Class Initialized
INFO - 2023-06-11 22:56:08 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:08 --> Input Class Initialized
INFO - 2023-06-11 22:56:08 --> Language Class Initialized
ERROR - 2023-06-11 22:56:08 --> 404 Page Not Found: Assets/themplate
DEBUG - 2023-06-11 22:56:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:56:08 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:56:08 --> Helper loaded: form_helper
INFO - 2023-06-11 22:56:08 --> Form Validation Class Initialized
INFO - 2023-06-11 22:56:08 --> Database Driver Class Initialized
INFO - 2023-06-11 22:56:08 --> Model "Master_model" initialized
INFO - 2023-06-11 22:56:08 --> Model "Alert" initialized
INFO - 2023-06-11 22:56:08 --> Controller Class Initialized
INFO - 2023-06-11 22:56:08 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:56:08 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:56:09 --> Final output sent to browser
DEBUG - 2023-06-11 22:56:09 --> Total execution time: 0.3515
INFO - 2023-06-11 22:56:27 --> Config Class Initialized
INFO - 2023-06-11 22:56:27 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:27 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:27 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:27 --> URI Class Initialized
INFO - 2023-06-11 22:56:27 --> Router Class Initialized
INFO - 2023-06-11 22:56:27 --> Output Class Initialized
INFO - 2023-06-11 22:56:27 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:27 --> Input Class Initialized
INFO - 2023-06-11 22:56:27 --> Language Class Initialized
INFO - 2023-06-11 22:56:27 --> Loader Class Initialized
INFO - 2023-06-11 22:56:27 --> Helper loaded: url_helper
INFO - 2023-06-11 22:56:27 --> Helper loaded: security_helper
INFO - 2023-06-11 22:56:27 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:56:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:56:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:56:27 --> Helper loaded: form_helper
INFO - 2023-06-11 22:56:27 --> Form Validation Class Initialized
INFO - 2023-06-11 22:56:27 --> Database Driver Class Initialized
INFO - 2023-06-11 22:56:27 --> Model "Master_model" initialized
INFO - 2023-06-11 22:56:27 --> Model "Alert" initialized
INFO - 2023-06-11 22:56:27 --> Controller Class Initialized
INFO - 2023-06-11 22:56:27 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:56:27 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:56:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:56:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:56:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:56:27 --> Final output sent to browser
DEBUG - 2023-06-11 22:56:27 --> Total execution time: 0.2340
INFO - 2023-06-11 22:56:28 --> Config Class Initialized
INFO - 2023-06-11 22:56:28 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:28 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:28 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:28 --> URI Class Initialized
INFO - 2023-06-11 22:56:28 --> Router Class Initialized
INFO - 2023-06-11 22:56:28 --> Output Class Initialized
INFO - 2023-06-11 22:56:28 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:28 --> Input Class Initialized
INFO - 2023-06-11 22:56:28 --> Language Class Initialized
ERROR - 2023-06-11 22:56:28 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:56:28 --> Config Class Initialized
INFO - 2023-06-11 22:56:28 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:28 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:28 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:28 --> URI Class Initialized
INFO - 2023-06-11 22:56:28 --> Router Class Initialized
INFO - 2023-06-11 22:56:28 --> Output Class Initialized
INFO - 2023-06-11 22:56:28 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:28 --> Input Class Initialized
INFO - 2023-06-11 22:56:28 --> Language Class Initialized
ERROR - 2023-06-11 22:56:28 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:56:28 --> Config Class Initialized
INFO - 2023-06-11 22:56:28 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:28 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:28 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:28 --> URI Class Initialized
INFO - 2023-06-11 22:56:28 --> Router Class Initialized
INFO - 2023-06-11 22:56:28 --> Output Class Initialized
INFO - 2023-06-11 22:56:28 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:28 --> Input Class Initialized
INFO - 2023-06-11 22:56:28 --> Language Class Initialized
INFO - 2023-06-11 22:56:28 --> Loader Class Initialized
INFO - 2023-06-11 22:56:28 --> Helper loaded: url_helper
INFO - 2023-06-11 22:56:28 --> Helper loaded: security_helper
INFO - 2023-06-11 22:56:28 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:56:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:56:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:56:28 --> Helper loaded: form_helper
INFO - 2023-06-11 22:56:28 --> Form Validation Class Initialized
INFO - 2023-06-11 22:56:28 --> Database Driver Class Initialized
INFO - 2023-06-11 22:56:28 --> Model "Master_model" initialized
INFO - 2023-06-11 22:56:28 --> Model "Alert" initialized
INFO - 2023-06-11 22:56:28 --> Controller Class Initialized
INFO - 2023-06-11 22:56:28 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:56:28 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:56:28 --> Final output sent to browser
DEBUG - 2023-06-11 22:56:28 --> Total execution time: 0.3288
INFO - 2023-06-11 22:56:30 --> Config Class Initialized
INFO - 2023-06-11 22:56:30 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:30 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:30 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:30 --> URI Class Initialized
INFO - 2023-06-11 22:56:30 --> Router Class Initialized
INFO - 2023-06-11 22:56:30 --> Output Class Initialized
INFO - 2023-06-11 22:56:30 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:30 --> Input Class Initialized
INFO - 2023-06-11 22:56:30 --> Language Class Initialized
INFO - 2023-06-11 22:56:30 --> Loader Class Initialized
INFO - 2023-06-11 22:56:30 --> Helper loaded: url_helper
INFO - 2023-06-11 22:56:30 --> Helper loaded: security_helper
INFO - 2023-06-11 22:56:30 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:56:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:56:30 --> Helper loaded: form_helper
INFO - 2023-06-11 22:56:30 --> Form Validation Class Initialized
INFO - 2023-06-11 22:56:30 --> Database Driver Class Initialized
INFO - 2023-06-11 22:56:30 --> Model "Master_model" initialized
INFO - 2023-06-11 22:56:30 --> Model "Alert" initialized
INFO - 2023-06-11 22:56:30 --> Controller Class Initialized
INFO - 2023-06-11 22:56:30 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:56:31 --> Model "Baak_f" initialized
ERROR - 2023-06-11 22:56:31 --> Severity: Warning --> get_object_vars() expects parameter 1 to be object, null given E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 946
ERROR - 2023-06-11 22:56:31 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 947
INFO - 2023-06-11 22:56:31 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:56:31 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:56:31 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:56:31 --> Final output sent to browser
DEBUG - 2023-06-11 22:56:31 --> Total execution time: 0.3682
INFO - 2023-06-11 22:56:31 --> Config Class Initialized
INFO - 2023-06-11 22:56:31 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:56:31 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:56:31 --> Utf8 Class Initialized
INFO - 2023-06-11 22:56:31 --> URI Class Initialized
INFO - 2023-06-11 22:56:31 --> Router Class Initialized
INFO - 2023-06-11 22:56:31 --> Output Class Initialized
INFO - 2023-06-11 22:56:31 --> Security Class Initialized
DEBUG - 2023-06-11 22:56:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:56:31 --> Input Class Initialized
INFO - 2023-06-11 22:56:31 --> Language Class Initialized
ERROR - 2023-06-11 22:56:31 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:57:01 --> Config Class Initialized
INFO - 2023-06-11 22:57:01 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:57:01 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:57:01 --> Utf8 Class Initialized
INFO - 2023-06-11 22:57:01 --> URI Class Initialized
INFO - 2023-06-11 22:57:01 --> Router Class Initialized
INFO - 2023-06-11 22:57:01 --> Output Class Initialized
INFO - 2023-06-11 22:57:01 --> Security Class Initialized
DEBUG - 2023-06-11 22:57:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:57:01 --> Input Class Initialized
INFO - 2023-06-11 22:57:01 --> Language Class Initialized
INFO - 2023-06-11 22:57:01 --> Loader Class Initialized
INFO - 2023-06-11 22:57:01 --> Helper loaded: url_helper
INFO - 2023-06-11 22:57:01 --> Helper loaded: security_helper
INFO - 2023-06-11 22:57:01 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:57:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:57:01 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:57:01 --> Helper loaded: form_helper
INFO - 2023-06-11 22:57:01 --> Form Validation Class Initialized
INFO - 2023-06-11 22:57:01 --> Database Driver Class Initialized
INFO - 2023-06-11 22:57:01 --> Model "Master_model" initialized
INFO - 2023-06-11 22:57:01 --> Model "Alert" initialized
INFO - 2023-06-11 22:57:01 --> Controller Class Initialized
INFO - 2023-06-11 22:57:01 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:57:01 --> Model "Baak_f" initialized
INFO - 2023-06-11 22:57:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
ERROR - 2023-06-11 22:57:01 --> Severity: Notice --> Undefined index: tanggal_perwalian E:\laragon\www\main_rosma\siakad\application\views\master\master_form.php 116
ERROR - 2023-06-11 22:57:01 --> Severity: Notice --> Undefined index: topik_perwalian E:\laragon\www\main_rosma\siakad\application\views\master\master_form.php 47
ERROR - 2023-06-11 22:57:01 --> Severity: Notice --> Undefined index: konten_perwalian E:\laragon\www\main_rosma\siakad\application\views\master\master_form.php 47
INFO - 2023-06-11 22:57:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:57:01 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:57:01 --> Final output sent to browser
DEBUG - 2023-06-11 22:57:01 --> Total execution time: 0.3077
INFO - 2023-06-11 22:57:02 --> Config Class Initialized
INFO - 2023-06-11 22:57:02 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:57:02 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:57:02 --> Utf8 Class Initialized
INFO - 2023-06-11 22:57:02 --> URI Class Initialized
INFO - 2023-06-11 22:57:02 --> Router Class Initialized
INFO - 2023-06-11 22:57:02 --> Output Class Initialized
INFO - 2023-06-11 22:57:02 --> Security Class Initialized
DEBUG - 2023-06-11 22:57:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:57:02 --> Input Class Initialized
INFO - 2023-06-11 22:57:02 --> Language Class Initialized
ERROR - 2023-06-11 22:57:02 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:57:47 --> Config Class Initialized
INFO - 2023-06-11 22:57:47 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:57:47 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:57:47 --> Utf8 Class Initialized
INFO - 2023-06-11 22:57:47 --> URI Class Initialized
INFO - 2023-06-11 22:57:47 --> Router Class Initialized
INFO - 2023-06-11 22:57:47 --> Output Class Initialized
INFO - 2023-06-11 22:57:47 --> Security Class Initialized
DEBUG - 2023-06-11 22:57:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:57:47 --> Input Class Initialized
INFO - 2023-06-11 22:57:47 --> Language Class Initialized
INFO - 2023-06-11 22:57:47 --> Loader Class Initialized
INFO - 2023-06-11 22:57:47 --> Helper loaded: url_helper
INFO - 2023-06-11 22:57:47 --> Helper loaded: security_helper
INFO - 2023-06-11 22:57:47 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:57:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:57:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:57:47 --> Helper loaded: form_helper
INFO - 2023-06-11 22:57:47 --> Form Validation Class Initialized
INFO - 2023-06-11 22:57:47 --> Database Driver Class Initialized
INFO - 2023-06-11 22:57:47 --> Model "Master_model" initialized
INFO - 2023-06-11 22:57:47 --> Model "Alert" initialized
INFO - 2023-06-11 22:57:47 --> Controller Class Initialized
INFO - 2023-06-11 22:57:47 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:57:47 --> Model "Baak_f" initialized
INFO - 2023-06-11 22:57:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:57:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:57:47 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:57:47 --> Final output sent to browser
DEBUG - 2023-06-11 22:57:47 --> Total execution time: 0.3439
INFO - 2023-06-11 22:57:48 --> Config Class Initialized
INFO - 2023-06-11 22:57:48 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:57:48 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:57:48 --> Utf8 Class Initialized
INFO - 2023-06-11 22:57:48 --> URI Class Initialized
INFO - 2023-06-11 22:57:48 --> Router Class Initialized
INFO - 2023-06-11 22:57:48 --> Output Class Initialized
INFO - 2023-06-11 22:57:48 --> Security Class Initialized
DEBUG - 2023-06-11 22:57:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:57:48 --> Input Class Initialized
INFO - 2023-06-11 22:57:48 --> Language Class Initialized
ERROR - 2023-06-11 22:57:48 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:58:56 --> Config Class Initialized
INFO - 2023-06-11 22:58:56 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:58:56 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:58:56 --> Utf8 Class Initialized
INFO - 2023-06-11 22:58:56 --> URI Class Initialized
INFO - 2023-06-11 22:58:56 --> Router Class Initialized
INFO - 2023-06-11 22:58:56 --> Output Class Initialized
INFO - 2023-06-11 22:58:56 --> Security Class Initialized
DEBUG - 2023-06-11 22:58:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:58:56 --> Input Class Initialized
INFO - 2023-06-11 22:58:56 --> Language Class Initialized
INFO - 2023-06-11 22:58:56 --> Loader Class Initialized
INFO - 2023-06-11 22:58:56 --> Helper loaded: url_helper
INFO - 2023-06-11 22:58:56 --> Helper loaded: security_helper
INFO - 2023-06-11 22:58:56 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:58:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:58:56 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:58:56 --> Helper loaded: form_helper
INFO - 2023-06-11 22:58:56 --> Form Validation Class Initialized
INFO - 2023-06-11 22:58:56 --> Database Driver Class Initialized
INFO - 2023-06-11 22:58:56 --> Model "Master_model" initialized
INFO - 2023-06-11 22:58:56 --> Model "Alert" initialized
INFO - 2023-06-11 22:58:56 --> Controller Class Initialized
INFO - 2023-06-11 22:58:56 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:58:56 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:58:56 --> Config Class Initialized
INFO - 2023-06-11 22:58:56 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:58:56 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:58:56 --> Utf8 Class Initialized
INFO - 2023-06-11 22:58:56 --> URI Class Initialized
INFO - 2023-06-11 22:58:56 --> Router Class Initialized
INFO - 2023-06-11 22:58:56 --> Output Class Initialized
INFO - 2023-06-11 22:58:56 --> Security Class Initialized
DEBUG - 2023-06-11 22:58:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:58:56 --> Input Class Initialized
INFO - 2023-06-11 22:58:56 --> Language Class Initialized
INFO - 2023-06-11 22:58:56 --> Loader Class Initialized
INFO - 2023-06-11 22:58:56 --> Helper loaded: url_helper
INFO - 2023-06-11 22:58:56 --> Helper loaded: security_helper
INFO - 2023-06-11 22:58:56 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:58:57 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:58:57 --> Helper loaded: form_helper
INFO - 2023-06-11 22:58:57 --> Form Validation Class Initialized
INFO - 2023-06-11 22:58:57 --> Database Driver Class Initialized
INFO - 2023-06-11 22:58:57 --> Model "Master_model" initialized
INFO - 2023-06-11 22:58:57 --> Model "Alert" initialized
INFO - 2023-06-11 22:58:57 --> Controller Class Initialized
INFO - 2023-06-11 22:58:57 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:58:57 --> Model "Baak_f" initialized
INFO - 2023-06-11 22:58:57 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:58:57 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 22:58:57 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:58:57 --> Final output sent to browser
DEBUG - 2023-06-11 22:58:57 --> Total execution time: 0.8546
INFO - 2023-06-11 22:58:58 --> Config Class Initialized
INFO - 2023-06-11 22:58:58 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:58:58 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:58:58 --> Utf8 Class Initialized
INFO - 2023-06-11 22:58:58 --> URI Class Initialized
INFO - 2023-06-11 22:58:58 --> Router Class Initialized
INFO - 2023-06-11 22:58:58 --> Output Class Initialized
INFO - 2023-06-11 22:58:58 --> Security Class Initialized
DEBUG - 2023-06-11 22:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:58:58 --> Input Class Initialized
INFO - 2023-06-11 22:58:58 --> Language Class Initialized
ERROR - 2023-06-11 22:58:58 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:59:49 --> Config Class Initialized
INFO - 2023-06-11 22:59:49 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:59:49 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:59:49 --> Utf8 Class Initialized
INFO - 2023-06-11 22:59:49 --> URI Class Initialized
INFO - 2023-06-11 22:59:49 --> Router Class Initialized
INFO - 2023-06-11 22:59:49 --> Output Class Initialized
INFO - 2023-06-11 22:59:49 --> Security Class Initialized
DEBUG - 2023-06-11 22:59:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:59:49 --> Input Class Initialized
INFO - 2023-06-11 22:59:49 --> Language Class Initialized
INFO - 2023-06-11 22:59:49 --> Loader Class Initialized
INFO - 2023-06-11 22:59:49 --> Helper loaded: url_helper
INFO - 2023-06-11 22:59:49 --> Helper loaded: security_helper
INFO - 2023-06-11 22:59:49 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:59:49 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:59:49 --> Helper loaded: form_helper
INFO - 2023-06-11 22:59:49 --> Form Validation Class Initialized
INFO - 2023-06-11 22:59:49 --> Database Driver Class Initialized
INFO - 2023-06-11 22:59:49 --> Model "Master_model" initialized
INFO - 2023-06-11 22:59:49 --> Model "Alert" initialized
INFO - 2023-06-11 22:59:49 --> Controller Class Initialized
INFO - 2023-06-11 22:59:49 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:59:49 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 22:59:49 --> Update - perwalian, data :{"topik_pewralian":null,"keterangan":"12","input_date":"2023-06-03 00:00:00"}
INFO - 2023-06-11 22:59:49 --> Config Class Initialized
INFO - 2023-06-11 22:59:49 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:59:49 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:59:49 --> Utf8 Class Initialized
INFO - 2023-06-11 22:59:49 --> URI Class Initialized
INFO - 2023-06-11 22:59:49 --> Router Class Initialized
INFO - 2023-06-11 22:59:49 --> Output Class Initialized
INFO - 2023-06-11 22:59:49 --> Security Class Initialized
DEBUG - 2023-06-11 22:59:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:59:49 --> Input Class Initialized
INFO - 2023-06-11 22:59:49 --> Language Class Initialized
INFO - 2023-06-11 22:59:49 --> Loader Class Initialized
INFO - 2023-06-11 22:59:49 --> Helper loaded: url_helper
INFO - 2023-06-11 22:59:49 --> Helper loaded: security_helper
INFO - 2023-06-11 22:59:49 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:59:49 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:59:49 --> Helper loaded: form_helper
INFO - 2023-06-11 22:59:49 --> Form Validation Class Initialized
INFO - 2023-06-11 22:59:49 --> Database Driver Class Initialized
INFO - 2023-06-11 22:59:49 --> Model "Master_model" initialized
INFO - 2023-06-11 22:59:49 --> Model "Alert" initialized
INFO - 2023-06-11 22:59:49 --> Controller Class Initialized
INFO - 2023-06-11 22:59:49 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:59:49 --> Model "Baak_t" initialized
INFO - 2023-06-11 22:59:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 22:59:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 22:59:49 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 22:59:49 --> Final output sent to browser
DEBUG - 2023-06-11 22:59:49 --> Total execution time: 0.3591
INFO - 2023-06-11 22:59:50 --> Config Class Initialized
INFO - 2023-06-11 22:59:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:59:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:59:50 --> Utf8 Class Initialized
INFO - 2023-06-11 22:59:50 --> URI Class Initialized
INFO - 2023-06-11 22:59:50 --> Router Class Initialized
INFO - 2023-06-11 22:59:50 --> Output Class Initialized
INFO - 2023-06-11 22:59:50 --> Security Class Initialized
DEBUG - 2023-06-11 22:59:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:59:50 --> Input Class Initialized
INFO - 2023-06-11 22:59:50 --> Language Class Initialized
ERROR - 2023-06-11 22:59:50 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:59:50 --> Config Class Initialized
INFO - 2023-06-11 22:59:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:59:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:59:50 --> Utf8 Class Initialized
INFO - 2023-06-11 22:59:50 --> URI Class Initialized
INFO - 2023-06-11 22:59:50 --> Router Class Initialized
INFO - 2023-06-11 22:59:50 --> Output Class Initialized
INFO - 2023-06-11 22:59:50 --> Security Class Initialized
DEBUG - 2023-06-11 22:59:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:59:50 --> Input Class Initialized
INFO - 2023-06-11 22:59:50 --> Language Class Initialized
ERROR - 2023-06-11 22:59:50 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 22:59:50 --> Config Class Initialized
INFO - 2023-06-11 22:59:50 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:59:50 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:59:50 --> Utf8 Class Initialized
INFO - 2023-06-11 22:59:50 --> URI Class Initialized
INFO - 2023-06-11 22:59:50 --> Router Class Initialized
INFO - 2023-06-11 22:59:50 --> Output Class Initialized
INFO - 2023-06-11 22:59:50 --> Security Class Initialized
DEBUG - 2023-06-11 22:59:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:59:50 --> Input Class Initialized
INFO - 2023-06-11 22:59:50 --> Language Class Initialized
INFO - 2023-06-11 22:59:50 --> Loader Class Initialized
INFO - 2023-06-11 22:59:50 --> Helper loaded: url_helper
INFO - 2023-06-11 22:59:50 --> Helper loaded: security_helper
INFO - 2023-06-11 22:59:50 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:59:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:59:50 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:59:50 --> Helper loaded: form_helper
INFO - 2023-06-11 22:59:50 --> Form Validation Class Initialized
INFO - 2023-06-11 22:59:50 --> Database Driver Class Initialized
INFO - 2023-06-11 22:59:50 --> Model "Master_model" initialized
INFO - 2023-06-11 22:59:50 --> Model "Alert" initialized
INFO - 2023-06-11 22:59:50 --> Controller Class Initialized
INFO - 2023-06-11 22:59:50 --> Model "Baak_model" initialized
INFO - 2023-06-11 22:59:50 --> Model "Baak_dt" initialized
INFO - 2023-06-11 22:59:50 --> Final output sent to browser
DEBUG - 2023-06-11 22:59:50 --> Total execution time: 0.4478
INFO - 2023-06-11 22:59:59 --> Config Class Initialized
INFO - 2023-06-11 22:59:59 --> Hooks Class Initialized
DEBUG - 2023-06-11 22:59:59 --> UTF-8 Support Enabled
INFO - 2023-06-11 22:59:59 --> Utf8 Class Initialized
INFO - 2023-06-11 22:59:59 --> URI Class Initialized
INFO - 2023-06-11 22:59:59 --> Router Class Initialized
INFO - 2023-06-11 22:59:59 --> Output Class Initialized
INFO - 2023-06-11 22:59:59 --> Security Class Initialized
DEBUG - 2023-06-11 22:59:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 22:59:59 --> Input Class Initialized
INFO - 2023-06-11 22:59:59 --> Language Class Initialized
INFO - 2023-06-11 22:59:59 --> Loader Class Initialized
INFO - 2023-06-11 22:59:59 --> Helper loaded: url_helper
INFO - 2023-06-11 22:59:59 --> Helper loaded: security_helper
INFO - 2023-06-11 22:59:59 --> Database Driver Class Initialized
DEBUG - 2023-06-11 22:59:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 22:59:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 22:59:59 --> Helper loaded: form_helper
INFO - 2023-06-11 22:59:59 --> Form Validation Class Initialized
INFO - 2023-06-11 22:59:59 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:00 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:00 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:00 --> Controller Class Initialized
INFO - 2023-06-11 23:00:00 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:00:00 --> Model "Baak_f" initialized
INFO - 2023-06-11 23:00:00 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 23:00:00 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 23:00:00 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:00:00 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:00 --> Total execution time: 0.3511
INFO - 2023-06-11 23:00:00 --> Config Class Initialized
INFO - 2023-06-11 23:00:00 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:00 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:00 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:00 --> URI Class Initialized
INFO - 2023-06-11 23:00:00 --> Router Class Initialized
INFO - 2023-06-11 23:00:00 --> Output Class Initialized
INFO - 2023-06-11 23:00:00 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:00 --> Input Class Initialized
INFO - 2023-06-11 23:00:00 --> Language Class Initialized
ERROR - 2023-06-11 23:00:00 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 23:00:04 --> Config Class Initialized
INFO - 2023-06-11 23:00:04 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:04 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:04 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:04 --> URI Class Initialized
INFO - 2023-06-11 23:00:04 --> Router Class Initialized
INFO - 2023-06-11 23:00:04 --> Output Class Initialized
INFO - 2023-06-11 23:00:04 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:04 --> Input Class Initialized
INFO - 2023-06-11 23:00:04 --> Language Class Initialized
INFO - 2023-06-11 23:00:04 --> Loader Class Initialized
INFO - 2023-06-11 23:00:04 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:04 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:04 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:04 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:04 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:04 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:04 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:04 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:04 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:04 --> Controller Class Initialized
INFO - 2023-06-11 23:00:04 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:00:04 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 23:00:05 --> Update - perwalian, data :{"topik_pewralian":"12","keterangan":"12","input_date":"2023-06-03 00:00:00"}
INFO - 2023-06-11 23:00:05 --> Config Class Initialized
INFO - 2023-06-11 23:00:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:05 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:05 --> URI Class Initialized
INFO - 2023-06-11 23:00:05 --> Router Class Initialized
INFO - 2023-06-11 23:00:05 --> Output Class Initialized
INFO - 2023-06-11 23:00:05 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:05 --> Input Class Initialized
INFO - 2023-06-11 23:00:05 --> Language Class Initialized
INFO - 2023-06-11 23:00:05 --> Loader Class Initialized
INFO - 2023-06-11 23:00:05 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:05 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:05 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:05 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:05 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:05 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:05 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:05 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:05 --> Controller Class Initialized
INFO - 2023-06-11 23:00:05 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:00:05 --> Model "Baak_t" initialized
INFO - 2023-06-11 23:00:05 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 23:00:05 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 23:00:05 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:00:05 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:05 --> Total execution time: 0.3312
INFO - 2023-06-11 23:00:05 --> Config Class Initialized
INFO - 2023-06-11 23:00:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:05 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:05 --> URI Class Initialized
INFO - 2023-06-11 23:00:05 --> Router Class Initialized
INFO - 2023-06-11 23:00:05 --> Output Class Initialized
INFO - 2023-06-11 23:00:05 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:05 --> Input Class Initialized
INFO - 2023-06-11 23:00:05 --> Language Class Initialized
ERROR - 2023-06-11 23:00:05 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 23:00:05 --> Config Class Initialized
INFO - 2023-06-11 23:00:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:05 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:05 --> URI Class Initialized
INFO - 2023-06-11 23:00:05 --> Router Class Initialized
INFO - 2023-06-11 23:00:05 --> Output Class Initialized
INFO - 2023-06-11 23:00:05 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:05 --> Input Class Initialized
INFO - 2023-06-11 23:00:05 --> Language Class Initialized
ERROR - 2023-06-11 23:00:05 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 23:00:05 --> Config Class Initialized
INFO - 2023-06-11 23:00:05 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:05 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:05 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:05 --> URI Class Initialized
INFO - 2023-06-11 23:00:05 --> Router Class Initialized
INFO - 2023-06-11 23:00:05 --> Output Class Initialized
INFO - 2023-06-11 23:00:05 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:05 --> Input Class Initialized
INFO - 2023-06-11 23:00:05 --> Language Class Initialized
INFO - 2023-06-11 23:00:05 --> Loader Class Initialized
INFO - 2023-06-11 23:00:05 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:05 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:05 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:05 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:05 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:05 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:06 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:06 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:06 --> Controller Class Initialized
INFO - 2023-06-11 23:00:06 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:00:06 --> Model "Baak_dt" initialized
INFO - 2023-06-11 23:00:06 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:06 --> Total execution time: 0.5476
INFO - 2023-06-11 23:00:26 --> Config Class Initialized
INFO - 2023-06-11 23:00:26 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:26 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:26 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:26 --> URI Class Initialized
INFO - 2023-06-11 23:00:26 --> Router Class Initialized
INFO - 2023-06-11 23:00:26 --> Output Class Initialized
INFO - 2023-06-11 23:00:26 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:26 --> Input Class Initialized
INFO - 2023-06-11 23:00:26 --> Language Class Initialized
INFO - 2023-06-11 23:00:26 --> Loader Class Initialized
INFO - 2023-06-11 23:00:26 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:26 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:26 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:27 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:27 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:27 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:27 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:27 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:27 --> Controller Class Initialized
INFO - 2023-06-11 23:00:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 23:00:27 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:00:27 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:27 --> Total execution time: 0.1911
INFO - 2023-06-11 23:00:27 --> Config Class Initialized
INFO - 2023-06-11 23:00:27 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:27 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:27 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:27 --> URI Class Initialized
INFO - 2023-06-11 23:00:27 --> Router Class Initialized
INFO - 2023-06-11 23:00:27 --> Output Class Initialized
INFO - 2023-06-11 23:00:27 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:27 --> Input Class Initialized
INFO - 2023-06-11 23:00:27 --> Language Class Initialized
ERROR - 2023-06-11 23:00:27 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 23:00:30 --> Config Class Initialized
INFO - 2023-06-11 23:00:30 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:30 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:30 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:30 --> URI Class Initialized
INFO - 2023-06-11 23:00:30 --> Router Class Initialized
INFO - 2023-06-11 23:00:30 --> Output Class Initialized
INFO - 2023-06-11 23:00:30 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:30 --> Input Class Initialized
INFO - 2023-06-11 23:00:30 --> Language Class Initialized
INFO - 2023-06-11 23:00:30 --> Loader Class Initialized
INFO - 2023-06-11 23:00:30 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:30 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:30 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:30 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:30 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:30 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:30 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:30 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:30 --> Controller Class Initialized
INFO - 2023-06-11 23:00:30 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 23:00:30 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:30 --> Model "M_login" initialized
INFO - 2023-06-11 23:00:30 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:30 --> Total execution time: 0.2840
INFO - 2023-06-11 23:00:30 --> Config Class Initialized
INFO - 2023-06-11 23:00:30 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:30 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:30 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:30 --> URI Class Initialized
INFO - 2023-06-11 23:00:30 --> Router Class Initialized
INFO - 2023-06-11 23:00:30 --> Output Class Initialized
INFO - 2023-06-11 23:00:30 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:30 --> Input Class Initialized
INFO - 2023-06-11 23:00:30 --> Language Class Initialized
INFO - 2023-06-11 23:00:30 --> Loader Class Initialized
INFO - 2023-06-11 23:00:30 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:30 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:30 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:30 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:30 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:30 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:30 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:30 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:30 --> Controller Class Initialized
INFO - 2023-06-11 23:00:30 --> Config Class Initialized
INFO - 2023-06-11 23:00:30 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:30 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:30 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:30 --> URI Class Initialized
INFO - 2023-06-11 23:00:30 --> Router Class Initialized
INFO - 2023-06-11 23:00:30 --> Output Class Initialized
INFO - 2023-06-11 23:00:30 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:30 --> Input Class Initialized
INFO - 2023-06-11 23:00:30 --> Language Class Initialized
INFO - 2023-06-11 23:00:30 --> Loader Class Initialized
INFO - 2023-06-11 23:00:30 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:30 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:30 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:31 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:31 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:31 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:31 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:31 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:31 --> Controller Class Initialized
INFO - 2023-06-11 23:00:31 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 23:00:31 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/baak_dashboard.php
INFO - 2023-06-11 23:00:31 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:00:31 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:31 --> Total execution time: 0.2329
INFO - 2023-06-11 23:00:31 --> Config Class Initialized
INFO - 2023-06-11 23:00:31 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:31 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:31 --> Config Class Initialized
INFO - 2023-06-11 23:00:31 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:31 --> Hooks Class Initialized
INFO - 2023-06-11 23:00:31 --> URI Class Initialized
DEBUG - 2023-06-11 23:00:31 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:31 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:31 --> Router Class Initialized
INFO - 2023-06-11 23:00:31 --> URI Class Initialized
INFO - 2023-06-11 23:00:31 --> Output Class Initialized
INFO - 2023-06-11 23:00:31 --> Router Class Initialized
INFO - 2023-06-11 23:00:31 --> Security Class Initialized
INFO - 2023-06-11 23:00:31 --> Output Class Initialized
DEBUG - 2023-06-11 23:00:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:31 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:31 --> Input Class Initialized
INFO - 2023-06-11 23:00:31 --> Input Class Initialized
INFO - 2023-06-11 23:00:31 --> Language Class Initialized
INFO - 2023-06-11 23:00:31 --> Language Class Initialized
INFO - 2023-06-11 23:00:31 --> Loader Class Initialized
INFO - 2023-06-11 23:00:31 --> Loader Class Initialized
INFO - 2023-06-11 23:00:31 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:31 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:31 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:31 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:31 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:31 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-06-11 23:00:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:31 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:31 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:31 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:31 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:31 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:31 --> Controller Class Initialized
INFO - 2023-06-11 23:00:31 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:00:35 --> Config Class Initialized
INFO - 2023-06-11 23:00:35 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:35 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:35 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:35 --> URI Class Initialized
INFO - 2023-06-11 23:00:35 --> Router Class Initialized
INFO - 2023-06-11 23:00:35 --> Output Class Initialized
INFO - 2023-06-11 23:00:35 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:35 --> Input Class Initialized
INFO - 2023-06-11 23:00:35 --> Language Class Initialized
INFO - 2023-06-11 23:00:35 --> Loader Class Initialized
INFO - 2023-06-11 23:00:35 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:35 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:35 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:38 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:38 --> Total execution time: 7.2319
INFO - 2023-06-11 23:00:38 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:38 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:38 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:38 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:38 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:38 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:38 --> Controller Class Initialized
INFO - 2023-06-11 23:00:39 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:00:45 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:45 --> Total execution time: 13.6964
INFO - 2023-06-11 23:00:45 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:45 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:45 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:45 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:45 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:45 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:45 --> Controller Class Initialized
INFO - 2023-06-11 23:00:45 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:00:45 --> Model "Baak_t" initialized
INFO - 2023-06-11 23:00:45 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 23:00:45 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 23:00:45 --> Model "Baak_f" initialized
ERROR - 2023-06-11 23:00:45 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 87
ERROR - 2023-06-11 23:00:45 --> Severity: Notice --> Trying to access array offset on value of type null E:\laragon\www\main_rosma\siakad\application\controllers\baak\Mahasiswa.php 87
INFO - 2023-06-11 23:00:45 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_filter.php
INFO - 2023-06-11 23:00:45 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:00:45 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:45 --> Total execution time: 10.1519
INFO - 2023-06-11 23:00:45 --> Config Class Initialized
INFO - 2023-06-11 23:00:45 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:00:45 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:00:45 --> Utf8 Class Initialized
INFO - 2023-06-11 23:00:45 --> URI Class Initialized
INFO - 2023-06-11 23:00:45 --> Router Class Initialized
INFO - 2023-06-11 23:00:45 --> Output Class Initialized
INFO - 2023-06-11 23:00:45 --> Security Class Initialized
DEBUG - 2023-06-11 23:00:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:00:45 --> Input Class Initialized
INFO - 2023-06-11 23:00:45 --> Language Class Initialized
INFO - 2023-06-11 23:00:45 --> Loader Class Initialized
INFO - 2023-06-11 23:00:45 --> Helper loaded: url_helper
INFO - 2023-06-11 23:00:45 --> Helper loaded: security_helper
INFO - 2023-06-11 23:00:45 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:00:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:00:45 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:00:45 --> Helper loaded: form_helper
INFO - 2023-06-11 23:00:45 --> Form Validation Class Initialized
INFO - 2023-06-11 23:00:45 --> Database Driver Class Initialized
INFO - 2023-06-11 23:00:45 --> Model "Master_model" initialized
INFO - 2023-06-11 23:00:45 --> Model "Alert" initialized
INFO - 2023-06-11 23:00:45 --> Controller Class Initialized
INFO - 2023-06-11 23:00:45 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:00:45 --> Model "Baak_dt" initialized
INFO - 2023-06-11 23:00:47 --> Final output sent to browser
DEBUG - 2023-06-11 23:00:47 --> Total execution time: 1.7981
INFO - 2023-06-11 23:01:07 --> Config Class Initialized
INFO - 2023-06-11 23:01:07 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:07 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:07 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:07 --> URI Class Initialized
INFO - 2023-06-11 23:01:07 --> Router Class Initialized
INFO - 2023-06-11 23:01:07 --> Output Class Initialized
INFO - 2023-06-11 23:01:07 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:07 --> Input Class Initialized
INFO - 2023-06-11 23:01:07 --> Language Class Initialized
INFO - 2023-06-11 23:01:07 --> Loader Class Initialized
INFO - 2023-06-11 23:01:07 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:07 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:07 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:08 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:08 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:08 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:08 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:08 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:08 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:08 --> Controller Class Initialized
INFO - 2023-06-11 23:01:08 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:01:08 --> Config Class Initialized
INFO - 2023-06-11 23:01:08 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:08 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:08 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:08 --> URI Class Initialized
INFO - 2023-06-11 23:01:08 --> Router Class Initialized
INFO - 2023-06-11 23:01:08 --> Output Class Initialized
INFO - 2023-06-11 23:01:08 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:08 --> Input Class Initialized
INFO - 2023-06-11 23:01:08 --> Language Class Initialized
INFO - 2023-06-11 23:01:08 --> Loader Class Initialized
INFO - 2023-06-11 23:01:08 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:08 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:08 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:08 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:08 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:08 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:08 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:09 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:09 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:09 --> Controller Class Initialized
INFO - 2023-06-11 23:01:09 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 23:01:09 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:01:09 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 23:01:09 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dashboard/mahasiswa.php
INFO - 2023-06-11 23:01:09 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:01:09 --> Final output sent to browser
DEBUG - 2023-06-11 23:01:09 --> Total execution time: 0.6604
INFO - 2023-06-11 23:01:09 --> Config Class Initialized
INFO - 2023-06-11 23:01:09 --> Config Class Initialized
INFO - 2023-06-11 23:01:09 --> Hooks Class Initialized
INFO - 2023-06-11 23:01:09 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:09 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:09 --> Utf8 Class Initialized
DEBUG - 2023-06-11 23:01:09 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:09 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:09 --> URI Class Initialized
INFO - 2023-06-11 23:01:09 --> URI Class Initialized
INFO - 2023-06-11 23:01:09 --> Router Class Initialized
INFO - 2023-06-11 23:01:09 --> Router Class Initialized
INFO - 2023-06-11 23:01:09 --> Output Class Initialized
INFO - 2023-06-11 23:01:09 --> Output Class Initialized
INFO - 2023-06-11 23:01:09 --> Security Class Initialized
INFO - 2023-06-11 23:01:09 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-11 23:01:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:09 --> Input Class Initialized
INFO - 2023-06-11 23:01:09 --> Input Class Initialized
INFO - 2023-06-11 23:01:09 --> Language Class Initialized
INFO - 2023-06-11 23:01:09 --> Language Class Initialized
INFO - 2023-06-11 23:01:09 --> Loader Class Initialized
INFO - 2023-06-11 23:01:09 --> Loader Class Initialized
INFO - 2023-06-11 23:01:09 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:09 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:09 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:09 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:09 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:09 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-06-11 23:01:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:09 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:09 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:09 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:09 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:09 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:09 --> Controller Class Initialized
INFO - 2023-06-11 23:01:09 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 23:01:10 --> Final output sent to browser
DEBUG - 2023-06-11 23:01:10 --> Total execution time: 0.7186
INFO - 2023-06-11 23:01:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:10 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:10 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:10 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:10 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:10 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:10 --> Controller Class Initialized
INFO - 2023-06-11 23:01:10 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 23:01:10 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:01:11 --> Final output sent to browser
DEBUG - 2023-06-11 23:01:11 --> Total execution time: 1.9739
INFO - 2023-06-11 23:01:11 --> Config Class Initialized
INFO - 2023-06-11 23:01:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:11 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:11 --> URI Class Initialized
INFO - 2023-06-11 23:01:11 --> Router Class Initialized
INFO - 2023-06-11 23:01:11 --> Output Class Initialized
INFO - 2023-06-11 23:01:11 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:11 --> Input Class Initialized
INFO - 2023-06-11 23:01:11 --> Language Class Initialized
ERROR - 2023-06-11 23:01:11 --> 404 Page Not Found: Assets/img_mahasiswa
INFO - 2023-06-11 23:01:12 --> Config Class Initialized
INFO - 2023-06-11 23:01:12 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:12 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:12 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:12 --> URI Class Initialized
INFO - 2023-06-11 23:01:12 --> Router Class Initialized
INFO - 2023-06-11 23:01:12 --> Output Class Initialized
INFO - 2023-06-11 23:01:12 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:12 --> Input Class Initialized
INFO - 2023-06-11 23:01:12 --> Language Class Initialized
INFO - 2023-06-11 23:01:12 --> Loader Class Initialized
INFO - 2023-06-11 23:01:12 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:12 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:12 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:12 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:12 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:12 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:12 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:12 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:12 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:12 --> Controller Class Initialized
INFO - 2023-06-11 23:01:12 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 23:01:12 --> Model "Baak_t" initialized
INFO - 2023-06-11 23:01:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 23:01:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 23:01:12 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:01:12 --> Final output sent to browser
DEBUG - 2023-06-11 23:01:12 --> Total execution time: 0.3618
INFO - 2023-06-11 23:01:12 --> Config Class Initialized
INFO - 2023-06-11 23:01:12 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:12 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:12 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:12 --> URI Class Initialized
INFO - 2023-06-11 23:01:12 --> Router Class Initialized
INFO - 2023-06-11 23:01:12 --> Output Class Initialized
INFO - 2023-06-11 23:01:12 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:12 --> Input Class Initialized
INFO - 2023-06-11 23:01:12 --> Language Class Initialized
INFO - 2023-06-11 23:01:12 --> Loader Class Initialized
INFO - 2023-06-11 23:01:12 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:12 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:12 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:12 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:12 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:12 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:12 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:13 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:13 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:13 --> Controller Class Initialized
INFO - 2023-06-11 23:01:13 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:01:13 --> Model "Baak_dt" initialized
INFO - 2023-06-11 23:01:13 --> Final output sent to browser
DEBUG - 2023-06-11 23:01:13 --> Total execution time: 0.3580
INFO - 2023-06-11 23:01:15 --> Config Class Initialized
INFO - 2023-06-11 23:01:15 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:15 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:15 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:15 --> URI Class Initialized
INFO - 2023-06-11 23:01:15 --> Router Class Initialized
INFO - 2023-06-11 23:01:15 --> Output Class Initialized
INFO - 2023-06-11 23:01:15 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:15 --> Input Class Initialized
INFO - 2023-06-11 23:01:15 --> Language Class Initialized
INFO - 2023-06-11 23:01:15 --> Loader Class Initialized
INFO - 2023-06-11 23:01:15 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:15 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:15 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:16 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:16 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:16 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:16 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:16 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:16 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:16 --> Controller Class Initialized
INFO - 2023-06-11 23:01:16 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 23:01:16 --> Model "Baak_f" initialized
INFO - 2023-06-11 23:01:16 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 23:01:16 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_form.php
INFO - 2023-06-11 23:01:16 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:01:16 --> Final output sent to browser
DEBUG - 2023-06-11 23:01:16 --> Total execution time: 0.2980
INFO - 2023-06-11 23:01:20 --> Config Class Initialized
INFO - 2023-06-11 23:01:20 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:20 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:20 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:20 --> URI Class Initialized
INFO - 2023-06-11 23:01:20 --> Router Class Initialized
INFO - 2023-06-11 23:01:20 --> Output Class Initialized
INFO - 2023-06-11 23:01:20 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:20 --> Input Class Initialized
INFO - 2023-06-11 23:01:20 --> Language Class Initialized
INFO - 2023-06-11 23:01:20 --> Loader Class Initialized
INFO - 2023-06-11 23:01:20 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:20 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:20 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:21 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:21 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:21 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:21 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:21 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:21 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:21 --> Controller Class Initialized
INFO - 2023-06-11 23:01:21 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 23:01:21 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:01:21 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2023-06-11 23:01:21 --> Input - perwalian, data :{"nim":"201901251003","periode":"20222","topik_pewralian":"123","keterangan":"123","input_date":"2023-06-20","email_dosen":"201901251003"}
INFO - 2023-06-11 23:01:21 --> Config Class Initialized
INFO - 2023-06-11 23:01:21 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:21 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:21 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:21 --> URI Class Initialized
INFO - 2023-06-11 23:01:21 --> Router Class Initialized
INFO - 2023-06-11 23:01:21 --> Output Class Initialized
INFO - 2023-06-11 23:01:21 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:21 --> Input Class Initialized
INFO - 2023-06-11 23:01:21 --> Language Class Initialized
INFO - 2023-06-11 23:01:21 --> Loader Class Initialized
INFO - 2023-06-11 23:01:21 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:21 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:21 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:21 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:21 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:21 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:21 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:21 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:21 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:21 --> Controller Class Initialized
INFO - 2023-06-11 23:01:21 --> Model "Mahasiswa_model" initialized
INFO - 2023-06-11 23:01:21 --> Model "Baak_t" initialized
INFO - 2023-06-11 23:01:21 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 23:01:21 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/master_list.php
INFO - 2023-06-11 23:01:21 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:01:21 --> Final output sent to browser
DEBUG - 2023-06-11 23:01:21 --> Total execution time: 0.4985
INFO - 2023-06-11 23:01:21 --> Config Class Initialized
INFO - 2023-06-11 23:01:21 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:21 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:21 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:21 --> URI Class Initialized
INFO - 2023-06-11 23:01:21 --> Router Class Initialized
INFO - 2023-06-11 23:01:21 --> Output Class Initialized
INFO - 2023-06-11 23:01:21 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:21 --> Input Class Initialized
INFO - 2023-06-11 23:01:21 --> Language Class Initialized
INFO - 2023-06-11 23:01:21 --> Loader Class Initialized
INFO - 2023-06-11 23:01:21 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:21 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:21 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:22 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:22 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:22 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:22 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:22 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:22 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:22 --> Controller Class Initialized
INFO - 2023-06-11 23:01:22 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:01:22 --> Model "Baak_dt" initialized
INFO - 2023-06-11 23:01:22 --> Final output sent to browser
DEBUG - 2023-06-11 23:01:22 --> Total execution time: 0.4345
INFO - 2023-06-11 23:01:39 --> Config Class Initialized
INFO - 2023-06-11 23:01:39 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:39 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:39 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:39 --> URI Class Initialized
INFO - 2023-06-11 23:01:39 --> Router Class Initialized
INFO - 2023-06-11 23:01:39 --> Output Class Initialized
INFO - 2023-06-11 23:01:39 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:39 --> Input Class Initialized
INFO - 2023-06-11 23:01:39 --> Language Class Initialized
INFO - 2023-06-11 23:01:39 --> Loader Class Initialized
INFO - 2023-06-11 23:01:39 --> Helper loaded: url_helper
INFO - 2023-06-11 23:01:39 --> Helper loaded: security_helper
INFO - 2023-06-11 23:01:39 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:01:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:01:39 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:01:39 --> Helper loaded: form_helper
INFO - 2023-06-11 23:01:39 --> Form Validation Class Initialized
INFO - 2023-06-11 23:01:39 --> Database Driver Class Initialized
INFO - 2023-06-11 23:01:39 --> Model "Master_model" initialized
INFO - 2023-06-11 23:01:39 --> Model "Alert" initialized
INFO - 2023-06-11 23:01:39 --> Controller Class Initialized
INFO - 2023-06-11 23:01:39 --> Model "Baak_model" initialized
INFO - 2023-06-11 23:01:39 --> Model "Dosen_model" initialized
INFO - 2023-06-11 23:01:39 --> Model "Mhs_f" initialized
INFO - 2023-06-11 23:01:40 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/header.php
INFO - 2023-06-11 23:01:40 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\dosen/frs_mhs.php
INFO - 2023-06-11 23:01:40 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:01:40 --> Final output sent to browser
DEBUG - 2023-06-11 23:01:40 --> Total execution time: 0.4237
INFO - 2023-06-11 23:01:40 --> Config Class Initialized
INFO - 2023-06-11 23:01:40 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:40 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:40 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:40 --> URI Class Initialized
INFO - 2023-06-11 23:01:40 --> Router Class Initialized
INFO - 2023-06-11 23:01:40 --> Output Class Initialized
INFO - 2023-06-11 23:01:40 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:40 --> Input Class Initialized
INFO - 2023-06-11 23:01:40 --> Language Class Initialized
ERROR - 2023-06-11 23:01:40 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 23:01:40 --> Config Class Initialized
INFO - 2023-06-11 23:01:40 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:01:40 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:01:40 --> Utf8 Class Initialized
INFO - 2023-06-11 23:01:40 --> URI Class Initialized
INFO - 2023-06-11 23:01:40 --> Router Class Initialized
INFO - 2023-06-11 23:01:40 --> Output Class Initialized
INFO - 2023-06-11 23:01:40 --> Security Class Initialized
DEBUG - 2023-06-11 23:01:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:01:40 --> Input Class Initialized
INFO - 2023-06-11 23:01:40 --> Language Class Initialized
ERROR - 2023-06-11 23:01:40 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 23:02:10 --> Config Class Initialized
INFO - 2023-06-11 23:02:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:02:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:02:10 --> Utf8 Class Initialized
INFO - 2023-06-11 23:02:10 --> URI Class Initialized
INFO - 2023-06-11 23:02:10 --> Router Class Initialized
INFO - 2023-06-11 23:02:10 --> Output Class Initialized
INFO - 2023-06-11 23:02:10 --> Security Class Initialized
DEBUG - 2023-06-11 23:02:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:02:10 --> Input Class Initialized
INFO - 2023-06-11 23:02:10 --> Language Class Initialized
INFO - 2023-06-11 23:02:10 --> Loader Class Initialized
INFO - 2023-06-11 23:02:10 --> Helper loaded: url_helper
INFO - 2023-06-11 23:02:10 --> Helper loaded: security_helper
INFO - 2023-06-11 23:02:10 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:02:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:02:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:02:10 --> Helper loaded: form_helper
INFO - 2023-06-11 23:02:10 --> Form Validation Class Initialized
INFO - 2023-06-11 23:02:10 --> Database Driver Class Initialized
INFO - 2023-06-11 23:02:10 --> Model "Master_model" initialized
INFO - 2023-06-11 23:02:10 --> Model "Alert" initialized
INFO - 2023-06-11 23:02:10 --> Controller Class Initialized
INFO - 2023-06-11 23:02:10 --> Config Class Initialized
INFO - 2023-06-11 23:02:10 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:02:10 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:02:10 --> Utf8 Class Initialized
INFO - 2023-06-11 23:02:10 --> URI Class Initialized
DEBUG - 2023-06-11 23:02:10 --> No URI present. Default controller set.
INFO - 2023-06-11 23:02:10 --> Router Class Initialized
INFO - 2023-06-11 23:02:10 --> Output Class Initialized
INFO - 2023-06-11 23:02:10 --> Security Class Initialized
DEBUG - 2023-06-11 23:02:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:02:10 --> Input Class Initialized
INFO - 2023-06-11 23:02:10 --> Language Class Initialized
INFO - 2023-06-11 23:02:10 --> Loader Class Initialized
INFO - 2023-06-11 23:02:10 --> Helper loaded: url_helper
INFO - 2023-06-11 23:02:10 --> Helper loaded: security_helper
INFO - 2023-06-11 23:02:10 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:02:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:02:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:02:10 --> Helper loaded: form_helper
INFO - 2023-06-11 23:02:10 --> Form Validation Class Initialized
INFO - 2023-06-11 23:02:10 --> Database Driver Class Initialized
INFO - 2023-06-11 23:02:11 --> Model "Master_model" initialized
INFO - 2023-06-11 23:02:11 --> Model "Alert" initialized
INFO - 2023-06-11 23:02:11 --> Controller Class Initialized
INFO - 2023-06-11 23:02:11 --> Config Class Initialized
INFO - 2023-06-11 23:02:11 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:02:11 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:02:11 --> Utf8 Class Initialized
INFO - 2023-06-11 23:02:11 --> URI Class Initialized
INFO - 2023-06-11 23:02:11 --> Router Class Initialized
INFO - 2023-06-11 23:02:11 --> Output Class Initialized
INFO - 2023-06-11 23:02:11 --> Security Class Initialized
DEBUG - 2023-06-11 23:02:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:02:11 --> Input Class Initialized
INFO - 2023-06-11 23:02:11 --> Language Class Initialized
INFO - 2023-06-11 23:02:11 --> Loader Class Initialized
INFO - 2023-06-11 23:02:11 --> Helper loaded: url_helper
INFO - 2023-06-11 23:02:11 --> Helper loaded: security_helper
INFO - 2023-06-11 23:02:11 --> Database Driver Class Initialized
DEBUG - 2023-06-11 23:02:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-06-11 23:02:11 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-11 23:02:11 --> Helper loaded: form_helper
INFO - 2023-06-11 23:02:11 --> Form Validation Class Initialized
INFO - 2023-06-11 23:02:11 --> Database Driver Class Initialized
INFO - 2023-06-11 23:02:11 --> Model "Master_model" initialized
INFO - 2023-06-11 23:02:11 --> Model "Alert" initialized
INFO - 2023-06-11 23:02:11 --> Controller Class Initialized
INFO - 2023-06-11 23:02:11 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\login.php
INFO - 2023-06-11 23:02:11 --> File loaded: E:\laragon\www\main_rosma\siakad\application\views\master/footer.php
INFO - 2023-06-11 23:02:11 --> Final output sent to browser
DEBUG - 2023-06-11 23:02:11 --> Total execution time: 0.2144
INFO - 2023-06-11 23:02:12 --> Config Class Initialized
INFO - 2023-06-11 23:02:12 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:02:12 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:02:12 --> Utf8 Class Initialized
INFO - 2023-06-11 23:02:12 --> URI Class Initialized
INFO - 2023-06-11 23:02:12 --> Router Class Initialized
INFO - 2023-06-11 23:02:12 --> Output Class Initialized
INFO - 2023-06-11 23:02:12 --> Security Class Initialized
DEBUG - 2023-06-11 23:02:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:02:12 --> Input Class Initialized
INFO - 2023-06-11 23:02:12 --> Language Class Initialized
ERROR - 2023-06-11 23:02:12 --> 404 Page Not Found: Assets/themplate
INFO - 2023-06-11 23:02:12 --> Config Class Initialized
INFO - 2023-06-11 23:02:12 --> Hooks Class Initialized
DEBUG - 2023-06-11 23:02:12 --> UTF-8 Support Enabled
INFO - 2023-06-11 23:02:12 --> Utf8 Class Initialized
INFO - 2023-06-11 23:02:12 --> URI Class Initialized
INFO - 2023-06-11 23:02:12 --> Router Class Initialized
INFO - 2023-06-11 23:02:12 --> Output Class Initialized
INFO - 2023-06-11 23:02:12 --> Security Class Initialized
DEBUG - 2023-06-11 23:02:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-11 23:02:12 --> Input Class Initialized
INFO - 2023-06-11 23:02:12 --> Language Class Initialized
ERROR - 2023-06-11 23:02:12 --> 404 Page Not Found: Assets/themplate
