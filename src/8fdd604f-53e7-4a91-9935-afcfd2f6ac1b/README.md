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
```uml
@startuml
class Creator  #Gold {
  + register(Container $container) : void
  + getBuilders(Container $container) : Builders
  + getCustomFieldTypeFile(Container $container) : CustomFieldTypeFile
  + getLayout(Container $container) : Layout
  + getPermission(Container $container) : Permission
  + getSiteFieldData(Container $container) : SiteFieldData
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

note left of Creator::getBuilders
  Get The Builders Class.

  since: 3.2.0
  return: Builders
end note

note right of Creator::getCustomFieldTypeFile
  Get The CustomFieldTypeFile Class.

  since: 3.2.0
  return: CustomFieldTypeFile
end note

note left of Creator::getLayout
  Get The Layout Class.

  since: 3.2.0
  return: Layout
end note

note right of Creator::getPermission
  Get The Permission Class.

  since: 3.2.0
  return: Permission
end note

note left of Creator::getSiteFieldData
  Get The SiteFieldData Class.

  since: 3.2.0
  return: SiteFieldData
end note

note right of Creator::getFieldsetString
  Get The FieldsetString Class.

  since: 3.2.0
  return: FieldsetString
end note

note left of Creator::getFieldsetXML
  Get The FieldsetXML Class.

  since: 3.2.0
  return: FieldsetXML
end note

note right of Creator::getFieldsetDynamic
  Get The FieldsetDynamic Class.

  since: 3.2.0
  return: FieldsetDynamic
end note

note left of Creator::getFieldXML
  Get The FieldXML Class.

  since: 3.2.0
  return: FieldXML
end note

note right of Creator::getFieldString
  Get The FieldString Class.

  since: 3.2.0
  return: FieldString
end note

note left of Creator::getFieldDynamic
  Get The FieldDynamic Class.

  since: 3.2.0
  return: FieldDynamic
end note

note right of Creator::getFieldAsString
  Get The FieldAsString Class.

  since: 3.2.0
  return: FieldAsString
end note

note left of Creator::getFieldType
  Get The Fieldtypeinterface Class.

  since: 3.2.0
  return: FieldType
end note

note right of Creator::getFieldset
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

