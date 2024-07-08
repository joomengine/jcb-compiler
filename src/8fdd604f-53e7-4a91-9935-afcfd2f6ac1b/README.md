```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Creator (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
> extends: ****
```uml
@startuml
class Creator  #Gold {
  + register(Container $container) : void
  + getAccessSections(Container $container) : AccessSections
  + getAccessSectionsCategory(Container $container) : AccessSectionsCategory
  + getAccessSectionsJoomlaFields(Container $container) : AccessSectionsJoomlaFields
  + getBuilders(Container $container) : Builders
  + getCustomFieldTypeFile(Container $container) : CustomFieldTypeFile
  + getCustomButtonPermissions(Container $container) : CustomButtonPermissions
  + getConfigFieldsets(Container $container) : ConfigFieldsets
  + getConfigFieldsetsCustomfield(Container $container) : ConfigFieldsetsCustomfield
  + getConfigFieldsetsEmailHelper(Container $container) : ConfigFieldsetsEmailHelper
  + getConfigFieldsetsEncryption(Container $container) : ConfigFieldsetsEncryption
  + getConfigFieldsetsGlobal(Container $container) : ConfigFieldsetsGlobal
  + getConfigFieldsetsGooglechart(Container $container) : ConfigFieldsetsGooglechart
  + getConfigFieldsetsGroupControl(Container $container) : ConfigFieldsetsGroupControl
  + getConfigFieldsetsSiteControl(Container $container) : ConfigFieldsetsSiteControl
  + getConfigFieldsetsUikit(Container $container) : ConfigFieldsetsUikit
  + getLayout(Container $container) : Layout
  + getPermission(Container $container) : Permission
  + getSiteFieldData(Container $container) : SiteFieldData
  + getRequest(Container $container) : Request
  + getRouter(Container $container) : Router
  + getRouterConstructorDefault(Container $container) : RouterConstructorDefault
  + getRouterConstructorManual(Container $container) : RouterConstructorManual
  + getRouterMethodsDefault(Container $container) : RouterMethodsDefault
  + getRouterMethodsManual(Container $container) : RouterMethodsManual
  + getFieldsetString(Container $container) : FieldsetString
  + getFieldsetXML(Container $container) : FieldsetXML
  + getFieldsetDynamic(Container $container) : FieldsetDynamic
  + getFieldXML(Container $container) : FieldXML
  + getFieldString(Container $container) : FieldString
  + getFieldDynamic(Container $container) : FieldDynamic
  + getFieldAsString(Container $container) : FieldAsString
  + getFieldType(Container $container) : FieldType
  + getFieldset(Container $container) : Fieldset
}

note right of Creator::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Creator::getAccessSections
  Get The AccessSections Class.

  since: 3.2.0
  return: AccessSections
end note

note right of Creator::getAccessSectionsCategory
  Get The AccessSectionsCategory Class.

  since: 3.2.0
  return: AccessSectionsCategory
end note

note left of Creator::getAccessSectionsJoomlaFields
  Get The AccessSectionsJoomlaFields Class.

  since: 3.2.0
  return: AccessSectionsJoomlaFields
end note

note right of Creator::getBuilders
  Get The Builders Class.

  since: 3.2.0
  return: Builders
end note

note left of Creator::getCustomFieldTypeFile
  Get The CustomFieldTypeFile Class.

  since: 3.2.0
  return: CustomFieldTypeFile
end note

note right of Creator::getCustomButtonPermissions
  Get The CustomButtonPermissions Class.

  since: 3.2.0
  return: CustomButtonPermissions
end note

note left of Creator::getConfigFieldsets
  Get The ConfigFieldsets Class.

  since: 3.2.0
  return: ConfigFieldsets
end note

note right of Creator::getConfigFieldsetsCustomfield
  Get The ConfigFieldsetsCustomfield Class.

  since: 3.2.0
  return: ConfigFieldsetsCustomfield
end note

note left of Creator::getConfigFieldsetsEmailHelper
  Get The ConfigFieldsetsEmailHelper Class.

  since: 3.2.0
  return: ConfigFieldsetsEmailHelper
end note

note right of Creator::getConfigFieldsetsEncryption
  Get The ConfigFieldsetsEncryption Class.

  since: 3.2.0
  return: ConfigFieldsetsEncryption
end note

note left of Creator::getConfigFieldsetsGlobal
  Get The ConfigFieldsetsGlobal Class.

  since: 3.2.0
  return: ConfigFieldsetsGlobal
end note

note right of Creator::getConfigFieldsetsGooglechart
  Get The ConfigFieldsetsGooglechart Class.

  since: 3.2.0
  return: ConfigFieldsetsGooglechart
end note

note left of Creator::getConfigFieldsetsGroupControl
  Get The ConfigFieldsetsGroupControl Class.

  since: 3.2.0
  return: ConfigFieldsetsGroupControl
end note

note right of Creator::getConfigFieldsetsSiteControl
  Get The ConfigFieldsetsSiteControl Class.

  since: 3.2.0
  return: ConfigFieldsetsSiteControl
end note

note left of Creator::getConfigFieldsetsUikit
  Get The ConfigFieldsetsUikit Class.

  since: 3.2.0
  return: ConfigFieldsetsUikit
end note

note right of Creator::getLayout
  Get The Layout Class.

  since: 3.2.0
  return: Layout
end note

note left of Creator::getPermission
  Get The Permission Class.

  since: 3.2.0
  return: Permission
end note

note right of Creator::getSiteFieldData
  Get The SiteFieldData Class.

  since: 3.2.0
  return: SiteFieldData
end note

note left of Creator::getRequest
  Get The Request Class.

  since: 3.2.0
  return: Request
end note

note right of Creator::getRouter
  Get The Router Class.

  since: 3.2.0
  return: Router
end note

note left of Creator::getRouterConstructorDefault
  Get The RouterConstructorDefault Class.

  since: 3.2.0
  return: RouterConstructorDefault
end note

note right of Creator::getRouterConstructorManual
  Get The RouterConstructorManual Class.

  since: 3.2.0
  return: RouterConstructorManual
end note

note left of Creator::getRouterMethodsDefault
  Get The RouterMethodsDefault Class.

  since: 3.2.0
  return: RouterMethodsDefault
end note

note right of Creator::getRouterMethodsManual
  Get The RouterMethodsManual Class.

  since: 3.2.0
  return: RouterMethodsManual
end note

note left of Creator::getFieldsetString
  Get The FieldsetString Class.

  since: 3.2.0
  return: FieldsetString
end note

note right of Creator::getFieldsetXML
  Get The FieldsetXML Class.

  since: 3.2.0
  return: FieldsetXML
end note

note left of Creator::getFieldsetDynamic
  Get The FieldsetDynamic Class.

  since: 3.2.0
  return: FieldsetDynamic
end note

note right of Creator::getFieldXML
  Get The FieldXML Class.

  since: 3.2.0
  return: FieldXML
end note

note left of Creator::getFieldString
  Get The FieldString Class.

  since: 3.2.0
  return: FieldString
end note

note right of Creator::getFieldDynamic
  Get The FieldDynamic Class.

  since: 3.2.0
  return: FieldDynamic
end note

note left of Creator::getFieldAsString
  Get The FieldAsString Class.

  since: 3.2.0
  return: FieldAsString
end note

note right of Creator::getFieldType
  Get The Fieldtypeinterface Class.

  since: 3.2.0
  return: FieldType
end note

note left of Creator::getFieldset
  Get The Fieldsetinterface Class.

  since: 3.2.0
  return: Fieldset
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

