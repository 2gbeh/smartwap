<?PHP
#
$conn = connect_db(USERNAME, PASSWORD, DATABASE);

$USERNAME = $_USER['username'];
$EMAIL = $_USER['email'];
$ID = $_USER['ID'];
$_USER = sql_select_id($conn, 'admin', $ID);

#
$sizeof_admin = sql_count($conn, 'admin');
$sizeof_contact = sql_count($conn, 'contact');
$sizeof_ledger_cr = sql_select_count($conn, 'ledger', 'type', 'cr');
$sizeof_ledger_dr = sql_select_count($conn, 'ledger', 'type', 'dr');
$sizeof_ticket = sql_count($conn, 'ticket');
$sizeof_user = sql_count($conn, 'user');

#
Anum::main(HOSTED);

#
$list_nav = array(
    'Edit User' => array(
        array('view_users.php', 'fas fa-tasks', 'View Records'),
    ),
    'Manage Users' => array(
        array('add_user.php', 'fas fa-plus', 'Add New'),
        array('view_users.php', 'fas fa-tasks', 'View Records'),
    ),
    /////////////////////////////////////////////////////////////////
    'Manage Enquires' => array(
        array('view_contacts.php', 'fas fa-tasks', 'View Records'),
    ),
    /////////////////////////////////////////////////////////////////
    'Manage Ledgers' => array(
        array('view_ledgers_cr.php', 'fas fa-tasks', 'View Records (CR)'),
        array('view_ledgers_dr.php', 'fas fa-tasks', 'View Records (DR)'),
    ),
    /////////////////////////////////////////////////////////////////
    'My Account' => array(
        array('profile.php', 'fas fa-user', 'Profile Info'),
        array('password.php', 'fas fa-user-edit', 'Update Password'),
    ),
    'Admin Account' => array(
        array('add_admin.php', 'fas fa-plus', 'Add New'),
        array('view_admins.php', 'fas fa-tasks', 'View Records'),
    ),
    'Help Desk' => array(
        array('add_ticket.php', 'fas fa-plus', 'Add New'),
        array('view_tickets.php', 'fas fa-tasks', 'View Records'),
    ),
);

$list_aside_top = array(
    // array('_dash.php', 'fas fa-chart-area', 'Dashboard'),
    // array('_home.php', 'fas fa-home', 'Account Statement'),
    // array('_report.php', 'fas fa-paperclip', 'Report Summary'),
    // array('_invoice.php', 'fas fa-file-invoice', 'Sales Invoice'),
    // array('_mail.php', 'fas fa-paper-plane', 'Mailing List'),

    array('view_users.php', 'fas fa-user-friends', 'Manage Users', $sizeof_user),
    array('view_ledgers_cr.php', 'fas fa-donate', 'Manage Deposits', $sizeof_ledger_cr),
    array('view_ledgers_dr.php', 'fas fa-credit-card', 'Manage Withdrawals', $sizeof_ledger_dr),
    array('view_contacts.php', 'fas fa-at', 'Manage Enquiries', $sizeof_contact),
);

$list_aside_bell = '<img src="img/bell.png" alt="" />';
$list_aside_end = array(
    array('profile.php', 'fas fa-user-cog', 'My Account'),
    array('view_admins.php', 'fas fa-users-cog', 'Admin Account', $sizeof_admin),
    array('view_tickets.php', 'fas fa-exclamation-triangle', 'Help Desk', $list_aside_bell),
    array(WEBMAIL, 'fas fa-inbox', 'Access Webmail'),
    array(CPANEL, 'fas fa-server', 'Access cPanel'),
    array(SITE, 'fas fa-globe', 'Visit Website'),
);
if (isset($_USER) && $_USER['STATUS'] <= 3) {
    array_splice($list_aside_end, 1, 1);
}
