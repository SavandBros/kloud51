from typing import Tuple, List

from adminsortable2.admin import SortableInlineAdminMixin
from django.contrib import admin
from modeltranslation.admin import TranslationTabularInline

from menu_builder.forms import NavigationLinkModelForm
from menu_builder.models import Menu, NavigationLink


class NavigationLinkInline(SortableInlineAdminMixin, TranslationTabularInline):
    """Navigation Link model Inline."""
    model = NavigationLink
    form = NavigationLinkModelForm


@admin.register(Menu)
class MenuAdmin(admin.ModelAdmin):
    """Menu model admin."""
    list_display: Tuple[str] = ('name', )
    inlines: List[admin.TabularInline] = [
        NavigationLinkInline,
    ]
