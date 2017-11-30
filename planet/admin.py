from django.contrib import admin
from modeltranslation.admin import TranslationAdmin

from planet.models import MoneyCurrency, Price, ProductGroup, Product


class ProductPriceInline(admin.TabularInline):
    """Price Inline."""
    model = Price
    max_num = 7


@admin.register(MoneyCurrency)
class MoneyCurrencyAdmin(admin.ModelAdmin):
    list_display = ('code', 'rate', )
    search_fields = ('code', )


@admin.register(Price)
class PriceAdmin(admin.ModelAdmin):
    list_display = ('pricing_type', 'price', )
    list_filter = ('pricing_type', )


@admin.register(ProductGroup)
class ProductGroupAdmin(TranslationAdmin):
    list_display = ('name', 'slug', )
    search_fields = ('name', 'description', )
    prepopulated_fields = {'slug': ('name', )}


@admin.register(Product)
class ProductAdmin(TranslationAdmin):
    list_display = ('name', 'slug', 'featured', 'in_stock', )
    list_filter = ('featured', 'in_stock', )
    search_fields = ('name', 'description', )
    prepopulated_fields = {'slug': ('name', )}
    inlines = [ProductPriceInline, ]


class SectionItemInline(SortableInlineAdminMixin, TranslationStackedInline):
    model = SectionItem


@admin.register(Section)
class SectionAdmin(TabbedTranslationAdmin):
    list_display: Tuple[str] = ('name', )
    search_fields: Tuple[str] = ('name', 'description', )
    inlines = [
        SectionItemInline,
    ]


@admin.register(SectionItem)
class SectionItemAdmin(SortableAdminMixin, TabbedDjangoJqueryTranslationAdmin):
    list_display: Tuple[str] = ('section', 'title', 'icon', )
    search_fields: Tuple[str] = ('title', 'description', )
