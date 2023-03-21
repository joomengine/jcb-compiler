```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Field (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Field  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getField(Container $container) : CompilerField
  + getData(Container $container) : Data
  + getValidation(Container $container) : Validation
  + getJ3CoreValidation(Container $container) : J3CoreValidation
  + getCoreValidation(Container $container) : CoreValidationInterface
  + getCustomcode(Container $container) : Customcode
  + getFieldName(Container $container) : Name
  + getFieldTypeName(Container $container) : TypeName
  + getFieldUniqueName(Container $container) : UniqueName
  + getFieldDatabaseName(Container $container) : DatabaseName
}

note right of Field::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Field::getField
  Get the Compiler Field

  since: 3.2.0
  return: CompilerField
end note

note right of Field::getData
  Get the Compiler Field Data

  since: 3.2.0
  return: Data
end note

note left of Field::getValidation
  Get the Compiler Field Validation

  since: 3.2.0
  return: Validation
end note

note right of Field::getJ3CoreValidation
  Get the Compiler Field Joomla 3 Validation

  since: 3.2.0
  return: J3CoreValidation
end note

note left of Field::getCoreValidation
  Get the Compiler Field Core Validation

  since: 3.2.0
  return: CoreValidationInterface
end note

note right of Field::getCustomcode
  Get the Compiler Field Customcode

  since: 3.2.0
  return: Customcode
end note

note left of Field::getFieldName
  Get the Compiler Field Name

  since: 3.2.0
  return: Name
end note

note right of Field::getFieldTypeName
  Get the Compiler Field Type Name

  since: 3.2.0
  return: TypeName
end note

note left of Field::getFieldUniqueName
  Get the Compiler Field Unique Name

  since: 3.2.0
  return: UniqueName
end note

note right of Field::getFieldDatabaseName
  Get the Compiler Field Database Name

  since: 3.2.0
  return: DatabaseName
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

