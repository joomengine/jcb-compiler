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
  # $currentVersion
  + register(Container $container) : void
  + getCompilerField(Container $container) : CompilerField
  + getData(Container $container) : Data
  + getGroups(Container $container) : Groups
  + getAttributes(Container $container) : Attributes
  + getName(Container $container) : Name
  + getTypeName(Container $container) : TypeName
  + getUniqueName(Container $container) : UniqueName
  + getRule(Container $container) : Rule
  + getCustomcode(Container $container) : Customcode
  + getDatabaseName(Container $container) : DatabaseName
  + getJ3CoreField(Container $container) : J3CoreField
  + getJ4CoreField(Container $container) : J4CoreField
  + getJ5CoreField(Container $container) : J5CoreField
  + getJ3InputButton(Container $container) : J3InputButton
  + getJ4InputButton(Container $container) : J4InputButton
  + getJ5InputButton(Container $container) : J5InputButton
  + getCoreField(Container $container) : CoreField
  + getInputButton(Container $container) : InputButton
}

note right of Field::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Field::getCompilerField
  Get The Field Class.

  since: 3.2.0
  return: CompilerField
end note

note right of Field::getData
  Get The Data Class.

  since: 3.2.0
  return: Data
end note

note left of Field::getGroups
  Get The Groups Class.

  since: 3.2.0
  return: Groups
end note

note right of Field::getAttributes
  Get The Attributes Class.

  since: 3.2.0
  return: Attributes
end note

note left of Field::getName
  Get The Name Class.

  since: 3.2.0
  return: Name
end note

note right of Field::getTypeName
  Get The TypeName Class.

  since: 3.2.0
  return: TypeName
end note

note left of Field::getUniqueName
  Get The UniqueName Class.

  since: 3.2.0
  return: UniqueName
end note

note right of Field::getRule
  Get The Rule Class.

  since: 3.2.0
  return: Rule
end note

note left of Field::getCustomcode
  Get The Customcode Class.

  since: 3.2.0
  return: Customcode
end note

note right of Field::getDatabaseName
  Get The DatabaseName Class.

  since: 3.2.0
  return: DatabaseName
end note

note left of Field::getJ3CoreField
  Get The CoreField Class.

  since: 3.2.0
  return: J3CoreField
end note

note right of Field::getJ4CoreField
  Get The CoreField Class.

  since: 3.2.0
  return: J4CoreField
end note

note left of Field::getJ5CoreField
  Get The CoreField Class.

  since: 3.2.0
  return: J5CoreField
end note

note right of Field::getJ3InputButton
  Get The J3InputButton Class.

  since: 3.2.0
  return: J3InputButton
end note

note left of Field::getJ4InputButton
  Get The J4InputButton Class.

  since: 3.2.0
  return: J4InputButton
end note

note right of Field::getJ5InputButton
  Get The J5InputButton Class.

  since: 3.2.0
  return: J5InputButton
end note

note left of Field::getCoreField
  Get The CoreFieldInterface Class.

  since: 3.2.0
  return: CoreField
end note

note right of Field::getInputButton
  Get The InputButton Class.

  since: 3.2.0
  return: InputButton
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

