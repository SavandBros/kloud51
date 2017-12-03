from typing import Tuple

from cms.forms.fields import PageSelectFormField
from django import forms

from menu_builder.models import NavigationLink


class NavigationLinkModelForm(forms.ModelForm):
    """Navigation Link Model Form."""
    class Meta:
        model = NavigationLink
        exclude: Tuple[str] = ()

    internal_link = PageSelectFormField(required=False)
