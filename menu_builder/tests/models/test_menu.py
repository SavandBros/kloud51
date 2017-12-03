from django.test import TestCase

from menu_builder.models import Menu


class TestMenu(TestCase):
    """Unit testing Menu model."""
    def test_magic_str(self):
        menu: Menu = Menu.objects.create(name='Footer')

        self.assertEqual(str(menu), 'Footer')
