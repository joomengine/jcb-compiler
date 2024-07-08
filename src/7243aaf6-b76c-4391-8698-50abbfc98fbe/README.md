```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Service**
> extends: ****
```uml
@startuml
class Data  #Gold {
  + register(Container $container) : void
  + getModelLoad(Container $container) : ModelLoad
  + getModelUpsert(Container $container) : ModelUpsert
  + getLoadData(Container $container) : LoadData
  + getInsertData(Container $container) : InsertData
  + getUpdateData(Container $container) : UpdateData
  + getDeleteData(Container $container) : DeleteData
  + getItem(Container $container) : Item
}

note right of Data::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Data::getModelLoad
  Get The Load Class.

  since: 3.2.0
  return: ModelLoad
end note

note right of Data::getModelUpsert
  Get The Upsert Class.

  since: 3.2.0
  return: ModelUpsert
end note

note left of Data::getLoadData
  Get The Load Class.

  since: 3.2.0
  return: LoadData
end note

note right of Data::getInsertData
  Get The Insert Class.

  since: 3.2.0
  return: InsertData
end note

note left of Data::getUpdateData
  Get The Update Class.

  since: 3.2.0
  return: UpdateData
end note

note right of Data::getDeleteData
  Get The Delete Class.

  since: 3.2.2
  return: DeleteData
end note

note left of Data::getItem
  Get The Item Class.

  since: 3.2.2
  return: Item
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

