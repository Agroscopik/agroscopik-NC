Feature: Admin authentication
  In order to gain access to the admin area
  As a admin
  I need to be able to login and logout

  @clear_data @load_admin_fixtures
  Scenario: Logging in
    Given I am on "/login"
    When I fill in "E-mail" with "admin@repair.nc"
    And I fill in "Mot de passe" with "admin"
    And I press "Se connecter"
    Then I should see "Connecté"

  @clear_data @load_admin_fixtures
  Scenario: Logging in with bad credentials
    Given I am on "/login"
    When I fill in "E-mail" with "admin@repair.nc"
    And I fill in "Mot de passe" with "wrong_password"
    And I press "Se connecter"
    Then I should see "Identifiants invalides"

