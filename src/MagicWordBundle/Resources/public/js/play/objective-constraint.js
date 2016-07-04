var objectiveConstraint = {
    constraintRealized: [],
    add: function(inflection){
        var infos = gridJSON.inflections[inflection.toLowerCase()].infos;
        for (var i = 0; i < infos.length; i++) {
            currentInflectionInfos = infos[i];
            for (var j = 0; j < roundJSON.constraints.length; j++) {
                var objective = roundJSON.constraints[j];
                if(this.isPertinent(objective, currentInflectionInfos)){
                    this.constraintRealized.push(objective.id);
                    if(this.checkCompletion(objective)){
                        objectives.considerAsDone(objective.id);
                        activity.sendObjectiveDone(objective.id);
                    }
                }
            }
        }
    },

    countByObjective: function(objectiveId){
		var count = 0;
		for(var i = 0; i < this.constraintRealized.length; ++i){
		    if(this.constraintRealized[i] == objectiveId){
		    	count++;
			}
		}

		return count;
	},

    isPertinent: function(objective, infos){
        if(objective.category == infos.category){
            return true;
        }

        return false;
    },

    checkCompletion: function(objective){
        if(this.countByObjective(objective.id) == objective.number){
            return true;
        }

        return false;
    }
}
