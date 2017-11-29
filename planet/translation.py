from modeltranslation.translator import translator, TranslationOptions

from planet.models import Product, ProductGroup


class ProductTranslationOptions(TranslationOptions):
    fields = ('slug', 'name', 'description', 'info', 'label', 'order_link', )


class ProductGroupTranslationOptions(TranslationOptions):
    fields = ('slug', 'name', 'description', )


translator.register(Product, ProductTranslationOptions)
translator.register(ProductGroup, ProductGroupTranslationOptions)
