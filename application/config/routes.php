<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['admin'] = 'login/index';
$route['Dashboard'] = 'home/login';
$route['type'] = 'User/type';
$route['userdel'] = 'User/userdel';

// login

$route['login_action'] = 'Login/login_action';
$route['logout'] = 'Login/logout';

// user actions
$route['useradd'] = 'User/useradd';
$route['userlist'] = 'User/userlist';
$route['user_action'] = 'User/user_action';
$route['typedelete'] = 'User/typedelete';
$route['typedit'] = 'User/typedit';
$route['user_update'] = 'User/user_update';
$route['user_check'] ='User/user_check';
$route['useredit'] ='User/useredit';
$route['user_update'] ='User/user_update';

// card   
$route['cardtype'] = 'Card/cardtype';
$route['cardadd'] = 'Card/usercard';
$route['card_action'] = 'card/card_action';
$route['cardelete'] = 'card/cardelete';
$route['cardedit'] = 'card/cardedit';
$route['card_update'] = 'card/card_update';

$route['card_check'] = 'Card/card_check';
$route['card_list'] = 'Card/card_list';
$route['cardsdelete'] = 'card/cardsdelete';
$route['cardsedit'] = 'card/usercard';

//suppliers
$route['view_our_cards'] = 'Suppliers/view_our_cards';
$route['sub_agent_sales'] = 'Suppliers/sub_agent_sales';

//main Agent
$route['main_cards_view'] = 'Main_agent/main_cards_view';
$route['purchase_card'] = 'Main_agent/purchase_card';

// pass change

$route['change_password'] = 'Changepass/change_password';
$route['pass_action'] = 'Changepass/pass_action';

// main agent

$route['mainagent_add'] = 'Main_agent/mainagent_add';
$route['mainagent_action'] = 'Main_agent/mainagent_action';
$route['mainagent_list'] = 'Main_agent/mainagent_list';
$route['mainagentdel'] = 'Main_agent/mainagent_del';
$route['mainagentedit'] ='Main_agent/mainagent_edit';
$route['mainagent_update'] = 'Main_agent/mainagent_update';